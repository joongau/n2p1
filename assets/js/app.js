/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (_bootswatch.scss in this case)
import '../css/app.scss';
import "bootswatch/dist/darkly/bootstrap.min.css";

// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.
// import $ from 'jquery';

console.log('Hello Webpack Encore! Edit me in assets/js/app.js');

const logoPath = require('../images/logo.png');

let html = `<img src="${logoPath}" alt="N2P logo">`;