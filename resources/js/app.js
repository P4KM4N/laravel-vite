import './bootstrap';
import * as bootstrap from 'bootstrap'
import '../sass/app.scss'
import '../css/main.css'

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))


/* Proper way to load asset in JS with Vite */
/* Mais on dirait que ca sert à rien, car ca load quand même si commenté */
import.meta.glob([
  '../images/**',
 /*  '../fonts/**', */
]);