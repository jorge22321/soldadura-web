import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

const rgbVariable = (name) => `rgb(var(--color-${name}) / <alpha-value>)`;
const hslVariable = (name) => `hsl(var(--color-${name}) / <alpha-value>)`;

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            colors: {
                brand: {
                    DEFAULT: hslVariable('brand'),
                    hover: hslVariable('brand-hover'),
                    warm: hslVariable('brand-warm'),
                    soft: hslVariable('brand-soft'),
                    light: hslVariable('brand-light'),
                    pale: hslVariable('brand-pale'),
                    focus: hslVariable('brand-focus'),
                    contrast: hslVariable('brand-contrast'),
                },
                canvas: {
                    DEFAULT: rgbVariable('canvas'),
                    deep: rgbVariable('canvas-deep'),
                    soft: rgbVariable('canvas-soft'),
                },
                surface: {
                    DEFAULT: rgbVariable('surface'),
                    deep: rgbVariable('surface-deep'),
                    soft: rgbVariable('surface-soft'),
                    raised: rgbVariable('surface-raised'),
                    muted: rgbVariable('surface-muted'),
                    elevated: rgbVariable('surface-elevated'),
                    shell: rgbVariable('surface-shell'),
                },
                content: {
                    strong: rgbVariable('content-strong'),
                    DEFAULT: rgbVariable('content'),
                    soft: rgbVariable('content-soft'),
                    muted: rgbVariable('content-muted'),
                    subtle: rgbVariable('content-subtle'),
                    faint: rgbVariable('content-faint'),
                },
                white: rgbVariable('white'),
                black: rgbVariable('black'),
                gray: {
                    50: rgbVariable('gray-50'),
                    100: rgbVariable('gray-100'),
                    200: rgbVariable('gray-200'),
                    300: rgbVariable('gray-300'),
                    400: rgbVariable('gray-400'),
                    500: rgbVariable('gray-500'),
                    600: rgbVariable('gray-600'),
                    700: rgbVariable('gray-700'),
                    800: rgbVariable('gray-800'),
                    900: rgbVariable('gray-900'),
                },
                indigo: {
                    50: hslVariable('brand-50'),
                    100: hslVariable('brand-100'),
                    400: hslVariable('brand-400'),
                    500: hslVariable('brand-500'),
                    600: hslVariable('brand-600'),
                    700: hslVariable('brand-700'),
                    800: hslVariable('brand-800'),
                },
                green: {
                    600: rgbVariable('success'),
                },
                red: {
                    500: rgbVariable('danger-light'),
                    600: rgbVariable('danger'),
                    700: rgbVariable('danger-dark'),
                },
            },
            boxShadow: {
                sm: '0 1px 2px 0 rgb(var(--color-shadow) / 0.05)',
                DEFAULT:
                    '0 1px 3px 0 rgb(var(--color-shadow) / 0.1), 0 1px 2px -1px rgb(var(--color-shadow) / 0.1)',
                md: '0 4px 6px -1px rgb(var(--color-shadow) / 0.1), 0 2px 4px -2px rgb(var(--color-shadow) / 0.1)',
                lg: '0 10px 15px -3px rgb(var(--color-shadow) / 0.1), 0 4px 6px -4px rgb(var(--color-shadow) / 0.1)',
                xl: '0 20px 25px -5px rgb(var(--color-shadow) / 0.1), 0 8px 10px -6px rgb(var(--color-shadow) / 0.1)',
                '2xl': '0 25px 50px -12px rgb(var(--color-shadow) / 0.25)',
                inner: 'inset 0 2px 4px 0 rgb(var(--color-shadow) / 0.05)',
            },
            ringColor: {
                DEFAULT: hslVariable('brand'),
            },
            ringOffsetColor: {
                DEFAULT: rgbVariable('white'),
            },
            spacing: {
                "space-lg": "1.5rem", "margin-mobile": "1rem", "space-2xl": "3rem", "space-3xl": "4.5rem", 
                "gutter-mobile": "1rem", "gutter-desktop": "1.5rem", "space-xs": "0.5rem", "space-sm": "0.75rem", 
                "margin-tablet": "2rem", "grid-unit": "4px", "margin-desktop": "3rem", "space-4xl": "6rem", 
                "max-width": "1440px", "space-md": "1rem", "space-2xs": "0.25rem", "space-xl": "2rem"
            },
            fontFamily: {
                "display-hero-mobile": ["barlowCondensed"], "technical-data-md": ["jetbrainsMono"], 
                "display-hero": ["barlowCondensed"], "headline-lg-mobile": ["barlowCondensed"], 
                "label-caps": ["barlowCondensed"], "label-code": ["jetbrainsMono"], "headline-md": ["barlowCondensed"], 
                "headline-sm": ["barlowCondensed"], "body-md": ["inter"], "headline-lg": ["barlowCondensed"], 
                "body-sm": ["inter"], "technical-data-lg": ["jetbrainsMono"], "body-lg": ["inter"]
            },
            fontSize: {
                "display-hero-mobile": ["44px", { lineHeight: "48px", letterSpacing: "-0.01em", fontWeight: "800" }], 
                "technical-data-md": ["14px", { lineHeight: "18px", letterSpacing: "0.04em", fontWeight: "500" }], 
                "display-hero": ["72px", { lineHeight: "76px", letterSpacing: "-0.02em", fontWeight: "800" }], 
                "headline-lg-mobile": ["32px", { lineHeight: "36px", letterSpacing: "0.01em", fontWeight: "700" }], 
                "label-caps": ["14px", { lineHeight: "16px", letterSpacing: "0.14em", fontWeight: "700" }], 
                "label-code": ["11px", { lineHeight: "14px", letterSpacing: "0.08em", fontWeight: "500" }], 
                "headline-md": ["32px", { lineHeight: "38px", letterSpacing: "0.02em", fontWeight: "600" }], 
                "headline-sm": ["24px", { lineHeight: "28px", letterSpacing: "0.03em", fontWeight: "600" }], 
                "body-md": ["15px", { lineHeight: "24px", fontWeight: "400" }], 
                "headline-lg": ["48px", { lineHeight: "52px", letterSpacing: "0.01em", fontWeight: "700" }], 
                "body-sm": ["13px", { lineHeight: "20px", fontWeight: "400" }], 
                "technical-data-lg": ["20px", { lineHeight: "24px", letterSpacing: "0.02em", fontWeight: "600" }], 
                "body-lg": ["18px", { lineHeight: "28px", fontWeight: "400" }]
            }
        },
    },

    plugins: [forms],
};
