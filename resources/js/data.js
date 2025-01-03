import {sendRequest} from '@/helpers.js';

/**
 * @param {Navigator} navigator
 * @returns {Promise<{}>}
 */
export async function getUserAgentData(navigator) {
  if (!('userAgentData' in navigator)) {
    return {};
  }

  const payload = {};

  try {
    const ua = await navigator.userAgentData.getHighEntropyValues([
      'architecture',
      'bitness',
      'model',
      'platform',
      'formFactor',
      'fullVersionList',
      'wow64']);

    payload.platform = ua.platform;
    payload.platformVersion = ua.platformVersion;
    payload.architecture = ua.architecture;
    payload.model = ua.model;
    payload.brands = ua.brands;
  } catch (err) {
    console.error(err);
    payload.platform = navigator.userAgentData.platform;
    payload.brands = navigator.userAgentData.brands;
  } finally {
    payload.mobile = navigator.userAgentData.mobile;
  }

  return payload;
}

/**
 * @param {string} ident
 * @param {Navigator} navigator
 * @returns {Promise<{isWebdriver: boolean, hardwareConcurrency: (number|undefined), doNotTrack: (boolean|undefined), isBrave: boolean, ident: string}>}
 */
export async function getPayload(ident, navigator) {
  return {
    ident,
    isBrave: 'brave' in navigator,
    isWebdriver: 'webdriver' in navigator,
    hardwareConcurrency: 'hardwareConcurrency' in navigator ?
        navigator.hardwareConcurrency :
        undefined,
    doNotTrack: 'doNotTrack' in navigator ? navigator.doNotTrack : undefined,
    maxTouchPoints: navigator.maxTouchPoints, ...await getUserAgentData(
        navigator),
  };
}

/**
 * @param {string} term
 * @param {AbortSignal} signal
 * @returns {Promise<string>}
 */
export async function performSearch(term, signal) {
  const response = await sendRequest('/search', {
    method: 'POST',
    body: JSON.stringify({term}),
    headers: {
      'Content-Type': 'application/json', 'Accept': 'text/html',
    },
    signal: signal,
  });

  return await response.text();
}