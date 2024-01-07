import {defineConfig} from 'vitest/config';
import path from 'path';

export default defineConfig({
  plugins: [],
  test: {
    globals: true,
    environment: 'jsdom',
  },

  root: path.resolve(__dirname, './resources/js/tests'),

  resolve: {
    alias: {
      '@': path.resolve(__dirname, './resources/js'),
    },
  },
});