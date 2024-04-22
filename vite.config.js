import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/bootstrap.min.css',
                'resources/css/jquery-jvectormap-2.0.3.css',
                'resources/css/bootstrap-imageupload.css',
                'resources/css/sweetalert2.min.css',
                'resources/css/main.css',
                'resources/js/jquery.min.js.download',
                'resources/js/popper.min.js.download',
                'resources/js/bootstrap.min.js.download',
                'resources/js/metisMenu.min.js.download',
                'resources/js/jquery.slimscroll.min.js.download',
                'resources/js/Chart.min.js.download',
                'resources/js/jquery-jvectormap-2.0.3.min.js.download',
                'resources/js/jquery-jvectormap-world-mill-en.js.download',
                'resources/js/jquery-jvectormap-us-aea-en.js.download',
                'resources/js/app.min.js.download',
                'resources/js/dashboard_1_demo.js.download',
                'resources/js/sweetalert2.min.js.download',
                'resources/js/trade.js.download',
                'resources/js/bootstrap-imageupload.js.download',
                'resources/js/rzdazx5cccm7pndg8r3q89jdrybfqjy9.js.download',
                
            ],
            refresh: true,
        }),
    ],
});
