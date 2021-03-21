module.exports = {
    purge: {
      enabled: true,
      content: [
        'resources/views/**/*.blade.php',
        'resources/views/**/*.js',
      ],
    },
    darkMode: false, // or 'media' or 'class'
    theme: {
      extend: {
        animation: {
         'animate-bounce': 'bounce 3s linear infinite',
        }
      }
    },
    variants: {
      extend: {},
    },
    plugins: [],
  }
