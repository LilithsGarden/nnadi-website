/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'navy': '#1a2a3a',
                'gold': '#c9a94e',
                'charcoal': '#2d2d2d',
                'warm-grey': '#8a8a8a',
            },
            fontFamily: {
                'caption': ['Newsreader Caption', 'serif'],
                'display': ['Newsreader Display', 'serif'],
                'text': ['Newsreader Text', 'serif'],
                'playfair': ['Playfair Display', 'serif'],
            },
        },
    },
    plugins: [],
}