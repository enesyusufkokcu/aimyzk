/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#BB935F',
        'secondary': '#09262C',
        'gold': '#9C8B06',
        'dark-blue-10': '#170F49',
        'dark-blue-20': '#0E174A',
        'back-color': '#6F6C90',
        'my-black': '#030927',
        'my-gray-10': '#DEDEE9',
        'my-gray-20': '#B7BAC7',
        'my-gray-30': '#838E9E',
        'my-gray-40': '#757575',
        'danger': '#FD3D39',
        'warning': '#EEB215',
        'success': '#3FD23C',
        'myPurple': '#7367f0',
        'myPurple-2': '#7755e7',
        'myGray': '#43506C',
        'myRed': '#EF4B4C',
        'myBlue': '#3D619B',
        'myWhite': '#E9E9EB',
        'purple-1': '#681d56',
        'red-1': '#b1164a',
        'purple-dark': '#25293c',
        'purple-light': '#434968',
        'dark': '#2f3349',
      },
      screens: {
        '3xl': '1920px',
      },
    },
  },
  plugins: [],
}