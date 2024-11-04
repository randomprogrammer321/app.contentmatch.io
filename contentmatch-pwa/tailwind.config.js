import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import("tailwindcss").Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: "#0F051D",
                secondary: "#FDFDFD",
                error: "#FF0B0B",
                error2: "#FF0000",
                success: "#00FF00",
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
                custom15: "rgba(15, 5, 29, 0.72)",
                custom16: "rgba(18, 18, 18, 0.4)",
                custom17: "#00FF00",
                custom18: "#F0F0F0",
                custom19: "#7C8B9F",
                custom20: "#1E1E1F",
                custom21: "#121212",
                custom22: "#2D2D30",
                custom32: "rgba(15, 5, 29, 0.72)",
                custom33: "#07233D",
                custom34: "#CCCCCC",
                custom35: "#EBF5FF",
                custom36: "#8D8D8D"
            },
            screens: {
                "size1": "846px",
                "size2": "954px",
                "size3": "1234px",
                "size4": "1150px",
                "size5": "900px",
                "size6": "1352px",
                "size7": "1000px",
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
                "custom": "16px 16px 40px 0 rgba(128, 128, 128, 0.12)",
                "combined": "0px 1px 3px 0px rgba(37, 37, 37, 0.3), 0px 4px 8px 3px rgba(37, 37, 37, 0.15)",
                "custom1": "8px 8px 20px 0px #8080801F"
            },
            borderImage: {
                custom: "linear-gradient(144.36deg, #FFFFFF 0.04%, #737373 70.03%)",
            },
            animation: {
                "fade-in": "fadeIn 2s ease forwards",
                "slideIn": "slideIn 0.3s ease-out forwards",
            },
            keyframes: {
                fadeIn: {
                    "0%": { opacity: "0", transform: "translateY(20px)" },
                    "100%": { opacity: "1", transform: "translateY(0)" },
                },
                slideIn: {
                    "0%": { transform: "translateY(-10px)", opacity: "0" },
                    "100%": { transform: "translateY(0)", opacity: "1" },
                },
            },
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        ({ addUtilities }) => {
            addUtilities({
                ".border-image-custom": {
                    border: "1px solid",
                    borderImageSource: "linear-gradient(144.36deg, #FFFFFF 0.04%, #737373 99.03%)",
                    borderImageSlice: 1,
                },
            });
        },
    ],
};
