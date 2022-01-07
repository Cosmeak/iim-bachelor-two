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

                'light-blue': '#38B6FF', // a retirer une fois tout changer en primary
            },
            width: {
                'xxxs': '1rem',
                'xxs': '2rem',
                'xs': '5rem',
                'sm': '10rem',
                'tiny': '20rem',
                'base': '25rem',
                'lg': '30rem',
                'xl': '35rem',
                '2xl': '50rem',
                '3xl': '75rem',
                '4xl': '100rem',
                '5xl': '125rem',
                '6xl': '150rem',
                '7xl': '300rem',
                '1/4': '25%',
                '1/2': '50%',
                '1/3': '33%',
                '2/3' :'66%',
            },
            height: {
                'xxxs': '1rem',
                'xxs': '2rem',
                'xs': '3rem',
                'sm': '10rem',
                'medium': '12rem',
                'tiny': '20rem',
                'base': '25rem',
                'lg': '30rem',
                'xl': '35rem',
                '2xl': '50rem',
                '3xl': '75rem',
                '4xl': '100rem',
                '5xl': '125rem',
                '6xl': '150rem',
                '7xl': '300rem',
                'screen': '100vh',
            },
            borderRadius: {
                DEFAULT: '10px', 
            }
        },
    },
    plugins: [],
}
