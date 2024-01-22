import {fetchIdent, getIdent} from './helpers.js';
import {getPayload} from './data.js';
import {search} from './search.js';

fetchIdent(localStorage, document);

document.addEventListener('DOMContentLoaded', loaded);

async function loaded() {
  if ('umami' in window) {
    const data = await getPayload(getIdent(document.cookie), window.navigator);
    umami.track(props => ({...props, data}));
  }

  search();

  document.querySelectorAll('.profile-link').
      forEach(el => el.addEventListener('click', () => {
        try {
          umami.track('profile-link', {
            type: el.dataset.type, data,
          });
        } catch (e) {
          if ('umami' in window) {
            console.error(e);
          } else {
            // Report
            console.error('umami not defined');
          }
        }
      }));
}

