import {defineConfig, loadEnv} from 'vite';
import manifestSRI from 'vite-plugin-manifest-sri';
import laravel, {refreshPaths} from 'laravel-vite-plugin';

export default ({mode}) => {
    process.env = {...process.env, ...loadEnv(mode, process.cwd())};

    return defineConfig({
        server: {
            cors: true,
            host: process.env.VITE_SERVE_DOMAIN ?? 'dusanmalusev.local',
            hmr: {
                host: process.env.VITE_SERVE_DOMAIN ?? 'dusanmalusev.local',
            },
        },
        plugins: [
            laravel({
                input: [
                    'resources/css/app.css',
                    'resources/js/app.js',
                    'resources/js/pusher.js',
                ],
                // transformOnServe: (code, devServerUrl) => code.replaceAll('/@imagetools', devServerUrl+'/@imagetools'),
                refresh: [
                    ...refreshPaths,
                    'app/Filament/**',
                    'app/Forms/Components/**',
                    'app/Livewire/**',
                    'app/Infolists/Components/**',
                    'app/Providers/Filament/**',
                    'app/Tables/Columns/**',
                ],
            }),
            manifestSRI(),
        ],
    });
}
