import axios from 'axios';
import Precognition from 'laravel-precognition-alpine';

import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';

window.axios = axios;
window.Alpine = Alpine;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

Alpine.plugin(Precognition);
Livewire.start();
