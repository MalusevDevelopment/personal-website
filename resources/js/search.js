import {debounce} from 'lodash';
import {performSearch} from '@/data.js';

export function search() {
  const wrapper = document.getElementById('search-wrapper');

  if (wrapper === null) {
    console.warn('Search modal not found');
    return;
  }

  /** @var {HTMLInputElement} input */
  const input = document.getElementById('search-query');
  /** @var {HTMLElement} searchResults */
  const searchResults = document.getElementById('search-results');

  if (input) {
    let prevController = null;

    input.addEventListener('input', debounce(/** @param {Event} e */
    async (e) => {
      e.preventDefault();
      e.stopPropagation();
      if (prevController) {
        prevController.abort();
      }

      const controller = new AbortController();
      prevController = controller;

      const term = e.target.value;
      if (term.length < 3) {
        return;
      }

      searchResults.innerHTML = await performSearch(term, controller.signal);
    }, 350, {
      trailing: true,
    }));
  }

  document.querySelectorAll('.search-button').forEach((button) => {
    button.addEventListener('click', displaySearch(wrapper, input, true));
  });

  document.getElementById('close-search-button').
      addEventListener('click', displaySearch(wrapper, input, false));
  wrapper.addEventListener('click', displaySearch(wrapper, input, false));

  document.getElementById('search-modal').
      addEventListener('click', function(event) {
        event.stopPropagation();
        event.stopImmediatePropagation();
        return false;
      });

  document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
      displaySearch(wrapper, input, false)();
    }

    if (searchOpenKey(event) && !isSearchVisible(wrapper)) {
      event.preventDefault();
      displaySearch(wrapper, input, true)();
    }
  });
}

/**
 *
 * @param {HTMLElement} wrapper
 * @param {HTMLInputElement} input
 * @param {boolean} searchVisible
 * @returns {(function(): void)|*}
 */
function displaySearch(wrapper, input, searchVisible) {
  return () => {
    if (searchVisible) {
      document.body.style.overflow = 'hidden';
      wrapper.style.visibility = 'visible';
      input.focus();

      return;
    }

    document.body.style.overflow = 'visible';
    wrapper.style.visibility = 'hidden';
    input.value = '';
    document.activeElement.blur();
  };
}

/**
 * @param {HTMLElement} wrapper
 * @returns {boolean}
 */
function isSearchVisible(wrapper) {
  return wrapper.style.visibility === 'visible';
}

/**
 * @param {KeyboardEvent} event
 * @returns {boolean}
 */
function searchOpenKey(event) {
  if (!event.ctrlKey) {
    return false;
  }

  return event.key === 'k' || event.key === 'l';
}