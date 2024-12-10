import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
});

// export default defineConfig({
//     plugins: [
//         laravel({
//             input: ["resources/css/app.css", "resources/js/app.js"],
//             refresh: true,
//         }),
//     ],
//     server: {
//         host: "0.0.0.0", // Membuka akses di semua alamat IP
//         port: 5173, // Port default Vite
//         hmr: {
//             host: "192.168.103.92", // IP komputer Anda (lihat di langkah 2)
//         },
//     },
// });
