const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],

  
        theme: {
          extend: {
            transitionProperty: {
              'height': 'height',
              'spacing': 'margin, padding',
            }
          }
        },

        theme: {
            screens: {
              'tablet': '640px',
              // => @media (min-width: 640px) { ... }
        
              'laptop': '1024px',
              // => @media (min-width: 1024px) { ... }
        
              'desktop': '1280px',
              // => @media (min-width: 1280px) { ... }
            },
          },

          theme: {
            spacing: {
              sm: '8px',
              md: '12px',
              lg: '16px',
              xl: '24px',
            }
          },

          theme: {
            extend: {
              columns: {
                '4xs': '14rem',
              }
            },
          },

          theme: {
            container: {
              padding: '2rem',
            },
          },
          theme: {
            extend: {
              objectPosition: {
                'center-bottom': 'center bottom',
              }
            },
        },
      
};
