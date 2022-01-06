module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['"Helvetica"', 'sans-serif'],
        'title': ['"Baloo 2"', 'sans-serif']
      },
      colors: {
        'primary': '#38B6FF',
        'gray': '#707070',
        'white-cream': '#fef8f2',
        'black-mat': '#202020',
      },
      translate: {
        'xl': '200rem',
      }
    },
  },
  plugins: [],
}
