/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/views/user/index.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      colors: {
        'primary' : '#3669C9',
        'white' : '#FFFF',
        'light-gray' : '#D1D5DB',
        'gray' : '#808080',
        'deep-gray' : '#0A0A0F',
        'light-dark' : '#313131',
        'dark' : '#101017',
        'deep-dark' : '#050507',
      }
    },
  },
  plugins: [],
};

