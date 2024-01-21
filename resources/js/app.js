import {fetchIdent, getIdent} from './helpers.js';
import {getPayload} from './data.js';

fetchIdent(localStorage, document);

const userPreference = localStorage.getItem('appearance') ?? 'dark';

if (window.matchMedia('(prefers-color-scheme: light)').matches ||
    userPreference === 'light') {
  document.documentElement.classList.add('light');
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

async function loaded() {

  if ('umami' in window) {
    const data = await getPayload(getIdent(document.cookie), window.navigator);
    umami.track(props => ({...props, data}));
  }

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
