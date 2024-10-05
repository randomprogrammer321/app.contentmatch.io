/** @type {import("tailwindcss").Config} */
const plugin = require('tailwindcss/plugin');

module.exports = {
  content: [
    "./assets/**/*.html",      
    "./components/**/*.js",     
    "./**/*.html",
    "!./node_modules/**",               
  ],
  theme: {
    extend: {
      fontFamily: {
        geist: ['Geist', 'sans-serif'],
      },
      colors: {
        primary: "#0F051D",
        secondary: "#FDFDFD",
        custom1: "#737373",
        custom2: "#EBEBEB",
        custom3: "#1E90FF",
        custom4: "#ADADAD",
        custom5: "#0F051D66",
        custom6: "#3E3E42",
        custom7: "#F5F7FE",
        custom8: "#2E2E2E",
        custom9: "#252526",
        custom10: "rgba(255, 255, 255, 0.2)",
        custom11: "#FFD700",
        custom12: "rgba(37, 37, 38, 0.24)",
        custom13: "rgba(235, 235, 235, 0.5)",
        custom14: "#395AFF",
        custom15: "rgba(15, 5, 29, 0.72)"
      },
      screens: {
        'size1': '846px',
        'size2': '954px',
        'size3': '1234px',
        'size4': '1150px',
        'size5': '900px',
      },
      padding: {
        mpd: "16px"
      },
      borderWidth: {
        "0.5": "0.5px",
      },
      backdropBlur: {
        "40": "40px",
        "8": "8px"
      },
      boxShadow: {
        "custom": "16px 16px 40px 0 rgba(128, 128, 128, 0.12)", // Custom shadow
        "combined": "0px 1px 3px 0px rgba(37, 37, 37, 0.3), 0px 4px 8px 3px rgba(37, 37, 37, 0.15)",
      },
      borderImage: {
        custom: "linear-gradient(144.36deg, #FFFFFF 0.04%, #737373 99.03%)", // Custom gradient
      },
      animation: {
        'fade-in': 'fadeIn 2s ease forwards',
      },
      keyframes: {
        fadeIn: {
          '0%': { opacity: '0', transform: 'translateY(20px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
      },
    },
  },
  plugins: [
    require("@tailwindcss/forms"),
    plugin(function({ addUtilities }) {
      addUtilities({
        '.border-image-custom': {
          border: '1px solid',
          borderImageSource: 'linear-gradient(144.36deg, #FFFFFF 0.04%, #737373 99.03%)',
          borderImageSlice: 1,
        },
      });
    }),
  ],
};
