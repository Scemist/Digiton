/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		"./resources/**/*.blade.php",
		"./resources/**/*.js",
		"./resources/**/*.vue",
	],
	theme: {
	  extend: {
		fontFamily: {
			sans: ['"Open Sans"', 'sans-serif']
		},
		keyframes: {
			wiggle: {
			  '0%, 100%': { transform: 'rotate(-1deg)' },
			  '50%': { transform: 'rotate(1deg)' },
			},
			paginate: {
			  '0%, 35%, 100%': { transform: 'translateX(0)' },
			  '50%, 85%': { transform: 'translateX(-50%)' },
			},
		},
		animation: {
			wiggle: 'wiggle 4s ease-in-out infinite',
			paginate: 'paginate 12s ease-in-out infinite',
		},
		colors: {
			primary: {
				50: '#E5F9FF',
				100: '#B3E9FB',
				200: '#68D3F6',
				300: '#35C0EE',
				400: '#0899C9',
				500: '#057CA4',
				600: '#025B79',
				700: '#00475F',
				800: '#023141',
				900: '#001F29',
			},
			auxiliar: {
				50: '#F3F0FF',
				100: '#C1B7F2',
				200: '#907CEF',
				300: '#5B3EDC',
				400: '#4122C9',
				500: '#2406AA',
				600: '#1E0395',
				700: '#160270',
				800: '#0C0043',
				900: '#09012B',
			},
			success: {
				50: '#E1FBE5',
				100: '#9FF6AE',
				200: '#5DE974',
				300: '#32D74D',
				400: '#0BBA28',
				500: '#099621',
				600: '#017214',
				700: '#02520F',
				800: '#013309',
				900: '#002206',
			},
			danger: {
				50: '#F9E8EC',
				100: '#F8B5C3',
				200: '#EE738D',
				300: '#E24768',
				400: '#CC143B',
				500: '#AC0B2D',
				600: '#84041F',
				700: '#76061E',
				800: '#530213',
				900: '#280009',
			},
			warning: {
				50: '#FFFDEA',
				100: '#FFF8C1',
				200: '#F2E370',
				300: '#E9D74A',
				400: '#CCB714',
				500: '#B09D0A',
				600: '#827305',
				700: '#685C01',
				800: '#484000',
				900: '#2F2901',
			},
			secondary: {
				50: '#EDEDED',
				100: '#B9C3C6',
				200: '#8A989D',
				300: '#5E757D',
				400: '#39525A',
				500: '#29434B',
				600: '#1B323A',
				700: '#10262D',
				800: '#071D24',
				900: '#020F13',
			},
		}
	  },
	},
	plugins: [],
  }