module.exports = {
    purge: [],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {

            fontSize: {
                '10': '0.625rem',
                '11': '0.688rem',
                '13': '0.813rem',
                '27': '1.688rem'

            },
            borderColor: theme => theme('colors'),
            borderColor: {
                'dark-navy': '#1F2024',
                'gray' : '#cccccc',
                'green' : '#86c540'
            },
            backgroundColor: theme => theme('colors'),
            backgroundColor: {
                'dark-navy'    : '#1F2024',
                'black-russian': '#1F2024',
                'green'        : '#86c540',
                'dark-green'   : '#72b12c',
                'light-blue'   : '#1DA1F2',
                'red-violet'   : '#bc2a8d',
                'dark-blue'    : '#0077b5',
                'light-grey'   : '#232D35'
            },
            textColor: theme => theme('colors'),
            textColor: {
                'black-light': '#1C1C1C',
                'dark-green'   : '#72b12c',
                'dark-blue'  : '#1e73be',
                'dark-gray'  : '#a3a3a3',
                'dark-blue'  : '#516eab',
                'light-blue'  : '#29c5f6',
                'light-green'  : '#7bbf6a',
                'blue-7'  : '#0A66C2',
                'green'        : '#86c540'

            },

            placeholderColor: theme => theme('colors'),
            placeholderColor: {
                'black-light': '#1C1C1C',
                'dark-gray'  : '#a3a3a3'
            },
            width: {
                '110' : '6.875rem',
                '1/03': '30%',
                '3/3': '70%'
            },
            maxWidth: {
            },
            height: {
                '50': '50px',
                lg: '30px'
            },
            margin: {
                '03': '0.188rem',
                '15': '0.938rem',
            },
            lineHeight: {
                '21': '1.313rem',
                '24': '1.313rem',
                '30': '1.875rem',
                '34': '2.125rem'
            },
            padding: {
                '3': '0.188rem',
                '7': '0.438rem',
                '11': '0.688rem',
                '13': '0.813rem',
                '15': '0.938rem',
                '19': '1.188rem',
                '22': '1.375rem',
                '30': '1.875rem',
                '350': '21.875rem'
            },
            spacing: {
                '31': '1.938rem'
              },
            borderWidth: {
                '5': '5px'
            },
            fontFamily: {
                Jost: ['Jost', 'sans-serif']
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}