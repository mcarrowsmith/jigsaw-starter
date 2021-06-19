const plugin = require('tailwindcss/plugin');


module.exports = {
  purge: [
    'source/**/*.blade.php',
    'source/**/*.md',
    'source/**/*.html',
  ],
  theme: {
    screens: {
      'xs': '430px',
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
    },
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [
    plugin(function({addBase, theme}) {
      const breakpoints = Object.entries(theme('screens'))
          .filter(value => typeof value[1] == 'string')
          .sort((a, b) => {
            return a[1].replace(/\D/g, '') - b[1].replace(/\D/g, '')
          })
          .map((value) => {
            return {
              [`@media (min-width: ${value[1]})`]: {
                '.breakpoint::before': {
                  content: `"${value[0]}"`,
                }
              }
            }
          })
      addBase(breakpoints)
    }),
  ],
};
