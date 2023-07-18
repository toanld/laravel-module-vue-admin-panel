const plugin = require('tailwindcss/plugin')

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/js/**/*.vue',
    './resources/js/**/*.{vue,js,ts,jsx,tsx}',
    './Modules/*/Resources/**/*.blade.php',
    './extensions/plugins/*/resources/**/*.blade.php',
    './Modules/*/Resources/**/*.{vue,js,ts,jsx,tsx}',
    './resources/js/**/*.js',
      "./node_modules/flowbite/**/*.js",
  ],
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    asideScrollbars: {
      light: 'light',
      gray: 'gray'
    },
    extend: {
        colors: {
            primary: {"1050" : "#f94949","1000": "#edf1f8","50":"#eef2ff","100":"#e0e7ff","200":"#c7d2fe","300":"#a5b4fc","400":"#818cf8","500":"#6366f1","600":"#4f46e5","700":"#4338ca","800":"#3730a3","900":"#312e81","950":"#1e1b4b"},
            'main' : '#f94949'
        },
        width: {
            '500': '500px',
        },
        fontFamily: {
            'body': [
                'Inter',
                'ui-sans-serif',
                'system-ui',
                '-apple-system',
                'system-ui',
                'Segoe UI',
                'Roboto',
                'Helvetica Neue',
                'Arial',
                'Noto Sans',
                'sans-serif',
                'Apple Color Emoji',
                'Segoe UI Emoji',
                'Segoe UI Symbol',
                'Noto Color Emoji'
            ],
            'sans': [
                'Inter',
                'ui-sans-serif',
                'system-ui',
                '-apple-system',
                'system-ui',
                'Segoe UI',
                'Roboto',
                'Helvetica Neue',
                'Arial',
                'Noto Sans',
                'sans-serif',
                'Apple Color Emoji',
                'Segoe UI Emoji',
                'Segoe UI Symbol',
                'Noto Color Emoji'
            ]
        },
      zIndex: {
        '-1': '-1',
        '100' : '100'
      },
      left : {
        '22' : '22px'
      },
      transitionTimingFunction: {
        'max-width' : 'max-width .2s ease-in,opacity .2s ease-in'
      },
      fontSize:{
        'mini' : '.7em'
      },
      flexGrow: {
        5: '5'
      },
      boxShadow: {
        '3xl': '0px 5px 10px rgba(0, 0, 0, 0.06),0px 5px 30px -2px rgba(0, 0, 0, 0.16)'
      },
      maxHeight: {
        'screen-menu': 'calc(100vh - 3.5rem)',
        modal: 'calc(100vh - 160px)'
      },
      transitionProperty: {
        position: 'right, left, top, bottom, margin, padding',
        textColor: 'color'
      },
      keyframes: {
        'fade-out': {
          from: { opacity: 1 },
          to: { opacity: 0 }
        },
        'fade-in': {
          from: { opacity: 0 },
          to: { opacity: 1 }
        }
      },
      animation: {
        'fade-out': 'fade-out 250ms ease-in-out',
        'fade-in': 'fade-in 250ms ease-in-out'
      }
    }
  },
  plugins: [
    require('@tailwindcss/forms'),
      require('flowbite/plugin'),
    plugin(function ({ matchUtilities, theme }) {
      matchUtilities(
        {
          'aside-scrollbars': value => {
            const track = value === 'light' ? '100' : '900'
            const thumb = value === 'light' ? '300' : '600'
            const color = value === 'light' ? 'gray' : value

            return {
              scrollbarWidth: 'thin',
              scrollbarColor: `${theme(`colors.${color}.${thumb}`)} ${theme(`colors.${color}.${track}`)}`,
              '&::-webkit-scrollbar': {
                width: '8px',
                height: '8px'
              },
              '&::-webkit-scrollbar-track': {
                backgroundColor: theme(`colors.${color}.${track}`)
              },
              '&::-webkit-scrollbar-thumb': {
                borderRadius: '0.25rem',
                backgroundColor: theme(`colors.${color}.${thumb}`)
              }
            }
          }
        },
        { values: theme('asideScrollbars') }
      )
    }),
    require('@tailwindcss/line-clamp')
  ]
}
