module.exports = {
  mode: "jit",
  purge: [
    './src/**/*.html',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      height: {
        header: '67px',
      },
      colors: {
        'blue-kleber': 'rgba(15, 49, 175, 1)',
        'darkblue-kleber': '#0C288D',
        'yellow-kleber': 'rgba(255, 214, 0, 1)',
        'darkgray-kleber': '#383C43',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
