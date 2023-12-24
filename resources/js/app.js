import {Livewire} from '../../vendor/livewire/livewire/dist/livewire.esm';

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

window.addEventListener('DOMContentLoaded', () => {
    const switcher = document.getElementById('appearance-switcher');
    const profileLinks = document.querySelectorAll('.profile-link');
    switcher.addEventListener('click', () => {
        const dark = document.documentElement.classList.toggle('dark');
        localStorage.setItem('appearance', dark ? 'dark' : 'light');
    });

    profileLinks.forEach(el => el.addEventListener('click', (e) => {
        const type = e.target.dataset.type;
        if (type) {
            umami.track('profile-link', {
                type,
            });
        }
    }));
});

Livewire.start();
