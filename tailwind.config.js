/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        height: {
            '500': '500px', // Add your custom value to the height scale
          },

      },
    },
    plugins: [],
  }
