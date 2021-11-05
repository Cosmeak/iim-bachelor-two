module.exports = {
  mode: "jit",
  purge: [
    './src/**/*.html',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      height: {
        headerTop: '96px',
        headerBottom: '67px',
        footerTop: '349px',
      },
      colors: {
        'blue-kleber': 'rgba(15, 49, 175, 1)',
        'darkblue-kleber': '#0C288D',
        'yellow-kleber': 'rgba(255, 214, 0, 1)',
        'darkgray-kleber': '#383C43',
      },
      zIndex: {
        'neg': -1,
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
