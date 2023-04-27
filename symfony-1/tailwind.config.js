module.exports = {
  content: [
    'templates/**/*.html.twig',
    'assets/js/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        'cs_yellow': {
          full: '#FFD765',
          80: 'rgba(255, 214, 101, 0.8)',
        },
        'cs_black': '#4A4841',
        'cs_blue': '#58a4b0',
      }
    },
  },
  plugins: [],
}
