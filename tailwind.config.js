/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            margin: {
                '128': '34.50rem',
                '130': '46rem',
                '150': '55rem',
                '41': '10.25rem',
              },
            fontSize: {
                '4.5xl': '2.5rem',
            },
        },
    },
    plugins: [],
};

