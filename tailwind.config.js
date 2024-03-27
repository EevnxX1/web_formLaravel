/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/views/*.blade.php"],
    theme: {
        extend: {
            colors: {
                inputBg: "#e2e8f0",
                teksInput: "#374151",
                validColor: "#0ea5e9",
            },
            keyframes: {
                slide: {
                    "0%": {
                        left: "0%",
                    },
                    "100%": {
                        left: "45.5%",
                    },
                },
                rotateArrow: {
                    "0%": {
                        transform: "rotateX(0deg) translateX(0)",
                    },
                    "100%": {
                        transform: "rotateY(-180deg) translateX(-190px)",
                    },
                },
                textOpacity: {
                    "0%, 100%": {
                        opacity: "1",
                    },
                    "50%": {
                        opacity: "0",
                    },
                },
            },
            animation: {
                slideLayout: "slide 1s ease-in-out forwards",
                slideLayoutR: "slide 1s ease-in-out reverse forwards",
                rotateBtn: "rotateArrow 1s linear forwards",
                rotateBtnR: "rotateArrow 1s linear reverse forwards",
                textOpacity: "textOpacity 1s linear",
            },
        },
    },
    plugins: [],
};
