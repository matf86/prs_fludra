
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('google-map', require('./components/GoogleMap.vue'));
Vue.component('contact-form', require('./components/ContactForm.vue'));
Vue.component('card', require('./components/Card.vue'));
Vue.component('mini-card', require('./components/MiniCard.vue'));


const app = window.app = new Vue({
    el: '#prs',
});



/**
 * to do
	- zredagowanie tekstów,
	- google maps i captcha loader
	- testy formularza
	- testy reponsywnosc i poprawki w tej kwesti
	- podzial na szablony balde'a
	- porzadkowanie css (zmienne kolorów, trzcionek, nazewnictwwo klas, usuniecie mbr-)
	- poprawa obrazów paralax
	- ...

 */