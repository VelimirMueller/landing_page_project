const mix = require('laravel-mix');

// webpack.mix.js
mix.js("resources/js/app.js", "public/js")
	.postCss("resources/css/app.css", "public/css", [
		require("tailwindcss"),
    	])
		
	.sass('resources/sass/landing-page.scss', 'public/css/landing')

	.js('resources/js/landing/landing.js', 'public/js/landing');