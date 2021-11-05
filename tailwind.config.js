module.exports = {
  mode: "jit",
  purge: [
    './src/**/*.html',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    height: {
      header: '67px',
    },
    extend: {
      colors: {
        'blue-kleber': 'rgba(15, 49, 175, 0.9)',
        'darkblue-kleber': '#0C288D',
        'yellow-kleber': 'rgba(255, 214, 0, 0.9)',
        'darkgray-kleber': '#383C43',
      },
      backgroundImage: {
        'texture': "url('/img/texture.jfif')",
        'kleber-team': "url('/img/kine-kleber-team.png')",
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
