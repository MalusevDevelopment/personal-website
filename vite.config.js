import {defineConfig, loadEnv} from 'vite';
import manifestSRI from 'vite-plugin-manifest-sri';
import laravel, {refreshPaths} from 'laravel-vite-plugin';

import fs from 'node:fs';
import path from 'path';
import GithubActionsReporter from 'vitest-github-actions-reporter';

export default ({mode}) => {
  process.env = {...process.env, ...loadEnv(mode, process.cwd())};

  return defineConfig({
    test: {
      globals: true,
      environment: 'jsdom',
      reporters: process.env.GITHUB_ACTIONS
          ? ['default', new GithubActionsReporter()]
          : 'default',
    },
    server: {
      cors: true,
      https: false,
      host: process.env.VITE_SERVE_DOMAIN ?? 'dusanmalusev.local',
      hmr: {
        host: process.env.VITE_SERVE_DOMAIN ?? 'dusanmalusev.local',
      },
    },
    resolve: {
      alias: {
        '@': path.resolve(__dirname, 'resources/js'),
      },
    },
    plugins: [
      laravel({
        input: [
          'resources/css/app.css',
          'resources/css/website.css',
          'resources/css/pages/blog.css',
          'resources/css/pages/home.css',
          'resources/js/app.js',
          'resources/js/with-livewire.js',
          'resources/js/pusher.js',
        ],
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
