/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js", "./node_modules/flowbite/**/*.js"],
    theme: {
        extend: {
            colors: {
                primary: 'rgb(99 102 241)',
                dark: '#0f172a'
            }
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
};
