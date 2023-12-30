
const userPreference = localStorage.getItem('appearance') ?? 'dark';
let ident = localStorage.getItem('analytics');

if (ident === null) {
  ident = getIdent(document.cookie);
  localStorage.setItem('analytics', ident);
} else {
  const cookieIdent = getIdent(document.cookie);

  if (ident !== cookieIdent) {
    const cookies = document.cookie.split(';').
        filter(item => item.search('analytics') !== -1);
    cookies.push(`analytics=${ident}`);
    document.cookie = cookies.join(';');
  }
}

if (window.matchMedia('(prefers-color-scheme: light)').matches ||
    userPreference === 'light') {
  document.documentElement.classList.add('light');
}

/**
 * @param {string} cookies
 * @returns {string}
 */
function getIdent(cookies) {
  if (cookies === '') {
    return 'unknown';
  }

  const start = cookies.search('analytics=');
  const end = cookies.search(';');

  if (start === -1) {
    return 'unknown';
  }

  return cookies.substring(start + 'analytics='.length,
      end === -1 ? undefined : end);
}

window.matchMedia('(prefers-color-scheme: dark)').
    addEventListener('change', (event) => {
      if (event.matches) {
        document.documentElement.classList.add('dark');
      } else {
        document.documentElement.classList.remove('dark');
      }

      localStorage.setItem('appearance', event.matches ? 'dark' : 'light');
    });

async function getPayload() {
  const payload = {
    ident,
    isBrave: 'brave' in navigator,
    isWebdriver: 'webdriver' in navigator,
    hardwareConcurrency: 'hardwareConcurrency' in navigator ?
        navigator.hardwareConcurrency :
        undefined,
    doNotTrack: 'doNotTrack' in navigator ? navigator.doNotTrack : undefined,
  };

  if ('userAgentData' in navigator) {
    try {
      const ua = await navigator.userAgentData.getHighEntropyValues([
        'architecture', 'model', 'platform']);
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
  }

  return payload;
}

async function loaded() {
  const data = await getPayload();

  umami.track(props => ({...props, data}));

  const switcher = document.getElementById('appearance-switcher');
  const profileLinks = document.querySelectorAll('.profile-link');
  switcher.addEventListener('click', () => {
    const dark = document.documentElement.classList.toggle('dark');
    localStorage.setItem('appearance', dark ? 'dark' : 'light');
  });

  profileLinks.forEach(el => el.addEventListener('click', () => {
    umami.track('profile-link', {
      type: el.dataset.type, data,
    });
  }));
}

window.addEventListener('DOMContentLoaded', loaded);
