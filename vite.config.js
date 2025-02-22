// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],  // Pastikan CSS dan JS yang sesuai tercakup
      refresh: true,
    }),
  ],
});
