module.exports = {
  content: [
    'templates/**/*.html.twig',
    'assets/js/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        'blue-topachat': '#184C7C',
        // Color of Nord palette
        'polarNight': {
          '100': '#4C566A',
          '200': '#434C5E',
          '300': '#3B4252',
          '400': '#2E3440'
        },
        'snowStorm': {
          '100': '#ECEFF4',
          '200': '#E5E9F0',
          '300': '#D8DEE9'
        },
        'frost': {
          '100': '#8FBCBB',
          '200': '#88C0D0',
          '300': '#81A1C1',
          '400': '#5E81AC'
        },
        'aurora': {
          'red': '#BF616A',
          'orange': '#D08770',
          'yellow': '#EBCB8B',
          'green': '#A3BE8C',
          'purple': '#A3BE8C'
        }
      },
      boxShadow: {
        'outside': '0 0 8px rgba(76,86,106,0.50)'
      }
    },
  },
  plugins: [],
}
