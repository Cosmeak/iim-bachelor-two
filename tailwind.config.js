module.exports = {
  mode: "jit",
  purge: [
    './src/**/*.html',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      width: {
        img: '308px',
        card: '419px',
        cercle: '48px',
      },
      height: {
        headerTop: '96px',
        headerBottom: '67px',
        footerTop: '349px',
        map: '737px',
        card: '612px',
        cercle: '48px',
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
      fontFamily: {
        'title': 'Source Sans Pro', 
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
