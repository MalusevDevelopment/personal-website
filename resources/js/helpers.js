const ANALYTICS_KEY = 'analytics';
const UNKNOWN = 'unknown';

/**
 * @param {string|undefined|null} cookies
 * @returns {string}
 */
export function getIdent(cookies) {
  if (cookies === '' || cookies === undefined || cookies === null) {
    return UNKNOWN;
  }

  const start = cookies.search(ANALYTICS_KEY);

  if (start === -1) {
    return UNKNOWN;
  }

  const part = cookies.substring(start + ANALYTICS_KEY.length + 1);
  const end = part.search(';');
  return part.substring(0, end === -1 ? undefined : end);
}

/**
 *
 * @param {string} key
 * @param {string} value
 * @param {Document} document
 */
function setCookie(key, value, document) {
  const cookies = document.cookie.split(';').
      filter(item => item.search(key) === -1);
  cookies.push(`${key}=${value}`);
  document.cookie = cookies.join(';');

  return value;
}

/**
 * @param {Storage} storage
 * @param {Document} document
 */
export function fetchIdent(storage, document) {
  let ident = storage.getItem(ANALYTICS_KEY);

  if (ident === null || ident === UNKNOWN) {
    ident = getIdent(document.cookie);
    storage.setItem(ANALYTICS_KEY, ident);
    return ident;
  }

  const cookieIdent = getIdent(document.cookie);

  if (ident !== cookieIdent) {
    return setCookie(ANALYTICS_KEY, ident, document);
  }

  return cookieIdent;
}

/**
 * @param {string | URL} input
 * @param {RequestInit | undefined } init
 * @returns {Promise<Response>}
 */
export function sendRequest(input, init) {
  const headers = (init && 'headers' in init) ? init.headers : {};

  delete init?.headers;

  const reqInit = {
    cache: 'no-cache',
    credentials: 'include',
    keepalive: true,
    redirect: 'error',
    mode: 'same-origin',
    referrerPolicy: 'no-referrer',
    headers: {
      'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').
          getAttribute('content'), ...headers,
    }, ...init,
  };

  return fetch(input, reqInit);
}