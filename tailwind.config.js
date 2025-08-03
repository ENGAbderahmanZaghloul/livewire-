// // tailwind.config.js
// export const theme = {
//     extend: {
//         colors: {
//             primary: "",
//             secondary: "",
//             accent: "",
//             dark: "",
//             light: "",
//         },
//         fontFamily: {
//             sans: ["Inter", "sans-serif"],
//             body: ["Cairo", "sans-serif"],
//         },
//     },
// };
// tailwind.config.js
export const darkMode = 'class';
export const theme = {
    extend: {
        colors: {
            // Primary color palette - Zinc (most used)
            primary: {
                50: "oklch(.985 0 0)",      // zinc-50
                200: "oklch(.92 .004 286.32)", // zinc-200
                400: "oklch(.705 .015 286.067)", // zinc-400
                500: "oklch(.552 .016 285.938)", // zinc-500
                600: "oklch(.442 .017 285.786)", // zinc-600
                700: "oklch(.37 .013 285.805)",  // zinc-700
                800: "oklch(.274 .006 286.033)", // zinc-800
                900: "oklch(.21 .006 285.885)",  // zinc-900
                DEFAULT: "#1E40AF",
                dark: "#1E3A8A",
            },

            // Secondary color palette - Neutral
            secondary: {
                100: "oklch(.97 0 0)",      // neutral-100
                200: "oklch(.922 0 0)",     // neutral-200
                700: "oklch(.371 0 0)",     // neutral-700
                800: "oklch(.269 0 0)",     // neutral-800
                900: "oklch(.205 0 0)",     // neutral-900
                950: "oklch(.145 0 0)",     // neutral-950
            },

            // Accent colors
            accent: {
                green: "oklch(.627 .194 149.214)", // green-600
                gray: "oklch(.21 .034 264.665)",   // gray-900
            },

            // Base colors
            dark: "#000",    // black
            light: "#fff",   // white
        },

        // Background colors commonly used
        backgroundColor: {
            'zinc-50': "oklch(.985 0 0)",
            'zinc-200': "oklch(.92 .004 286.32)",
            'neutral-100': "oklch(.97 0 0)",
            'neutral-200': "oklch(.922 0 0)",
            'neutral-900': "oklch(.205 0 0)",
            'white': "#fff",
            'light': "#F9FAFB",
            'dark': "#111827",
        },

        // Border colors commonly used
        borderColor: {
            'neutral-200': "oklch(.922 0 0)",
            'neutral-700': "oklch(.371 0 0)",
            'zinc-200': "oklch(.92 .004 286.32)",
            'black': "#000",
        },

        fontFamily: {
            sans: ['"Libertinus Serif"', 'sans-serif'],
          },
    },
    darkMode: 'class',
    plugins: [],
};