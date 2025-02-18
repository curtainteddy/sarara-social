const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    theme: {
        extend: {
            colors: {
                'coral-red': {
                    50: '#fff1f1',
                    100: '#ffe0e0',
                    200: '#ffc6c6',
                    300: '#ff9f9f',
                    400: '#ff6868',
                    500: '#fb4141',
                    600: '#e91919',
                    700: '#c41111',
                    800: '#a21212',
                    900: '#861616',
                    950: '#490606',
                },
                'dark-theme-background': '#0e0e11',
            },
            fontFamily: {
                sans: ['Jost var', ...defaultTheme.fontFamily.sans],
                serif: ['Merriweather', ...defaultTheme.fontFamily.serif],
                mono: ['Menlo', ...defaultTheme.fontFamily.mono],
            },
        },
    },
    content: [
        './app/**/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.html',
        './resources/**/*.js',
        './resources/**/*.jsx',
        './resources/**/*.ts',
        './resources/**/*.tsx',
        './resources/**/*.php',
        './resources/**/*.vue',
        './resources/**/*.twig',
        'node_modules/preline/dist/*.js',
    ],
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('preline/plugin'),
    ],
}
