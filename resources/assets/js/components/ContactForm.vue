<template>
	<div>
		<div v-show="!formPosted">
			<div class="mbr-header mbr-header--center mbr-header--std-padding">
	        <h1 class="main_header"><span class="header__border">FORMULARZ KONTAKTOWY</span></h1>
	    </div>
		<form action="/contact" method="POST" @submit.prevent="submitForm">   
	        <div class="form-group">
	            <input type="text" class="form-control" name="name" placeholder="Imie i nazwisko" 
	             v-bind:class="{ 'form-group--error': $v.form.name.$error }" 
	             v-model.trim="form.name" 
	             @blur="$v.form.name.$touch()">
	            <transition name="fade"><span class="form-group--message" v-if="!$v.form.name.required && $v.form.name.$dirty">Uzupełnij pole by móc przesłac formularz.</span></transition>
	            <transition name="fade"><span class="form-group--message" v-if="!$v.form.name.maxLength">Imie i nazwisko nie może składać się z z więcej niż 60 znaków.</span></transition>
	        </div>
	        <div class="form-group">
	            <input type="email" class="form-control" v-bind:class="{ 'form-group--error': $v.form.email.$error }" name="email" placeholder="Twój adres E-mail" v-model.trim="form.email" @blur="$v.form.email.$touch()">
	            <span class="form-group--message" v-if="!$v.form.email.required && $v.form.email.$dirty">Uzupełnij pole by móc przesłac formularz.</span>
	            <span class="form-group--message" v-if="!$v.form.email.email">Wpisz prawidłowy adres e-mail.*</span>
	        </div>
	        <div class="form-group">
	            <input type="text" class="form-control" v-bind:class="{ 'form-group--error': $v.form.subject.$error }" name="subject" placeholder="Temat wiadomości" v-model.trim="form.subject" @blur="$v.form.subject.$touch()">
	            <transition name="fade"><span class="form-group--message" v-if="!$v.form.subject.required && $v.form.subject.$dirty">Uzupełnij pole by móc przesłac formularz.</span></transition>
	            <transition name="fade"><span class="form-group--message" v-if="!$v.form.subject.maxLength">Temat wiadomości nie może składać się z z więcej niż 120 znaków.</span></transition>
	        </div>
	        <div class="form-group">
	            <textarea class="form-control" v-bind:class="{ 'form-group--error': $v.form.message.$error }" name="message" placeholder="Treść wiadomości..." rows="7" v-model.trim="form.message" @blur="$v.form.message.$touch()"></textarea>
	            <transition name="fade"><span class="form-group--message" v-if="!$v.form.message.required && $v.form.message.$dirty">Uzupełnij pole by móc przesłac formularz.</span></transition>
	            <transition name="fade"><span class="form-group--message" v-if="!$v.form.message.maxLength">Treść wiadomości nie może składać się z z więcej niż 900 znaków.</span></transition>
	        </div>
	        <div class="row form-footer">
	        	<div class="col-lg-12">
	        		<div id="captcha"></div>
	        	</div>
	        	<div class="col-lg-12">
	        		<div class="mbr-buttons--left">
	        			<button type="submit" class="mbr-button--form mbr-buttons__btn btn btn-lg btn-warning" :disabled="invalidValues">
	        			<span v-show="!loading">WYŚLIJ</span><i v-show="loading" class="fa fa-circle-o-notch fa-spin fa-2x fa-fw"></i></button>
	        		</div>
	        	</div>
	        </div>
	    </form>
		</div>
		<div v-show="formPosted" class="col-sm-10 col-sm-offset-1 form-send--message">
		   	<p class="form-send--message__text">Twoja wiadomość została pomyślnie przesłana.</p>
		   	<p class="form-send--message__text">DZIĘKUJEMY</p>
		    <button class="mbr-buttons__btn btn btn-lg btn-warning" @click="closeMessage">Powrót do formularza kontaktowego</button>
		 </div>
    </div>
</template>

<script>
import { validationMixin } from 'vuelidate'
import { required, email, alpha, maxLength } from 'vuelidate/lib/validators'

	export default {
		data() {
			return {
				form: {
					name:'',
					email:'',
					subject:'',
					message:'',
					grecaptcha: ''
				},
				errors: {},
				formPosted: false,
				loading: false
			}
		},
		mixins: [validationMixin],
		validations: {
			form: {
				name: {
					required,
					maxLength: maxLength(60)
				},
				email: {
					required,
					email: email
				},
				subject: {
					required,
					maxLength: maxLength(120)
				},
				message: {
					required,
					maxLength: maxLength(900)
				}
			}
		},
		computed: {
			invalidValues() {
				if(this.$v.$dirty === false || this.$v.$invalid === true || !this.form.grecaptcha) {
					return true;
				}
				return false;
			}
		},
		methods: {
			submitForm() {
				this.loading = true;
				this.$http.post('/contact', this.form).then(response => {
					this.formPosted = true;
				    this.resetToken();
				    this.cleanForm();
				    this.loading = false;
				  }, response => {

				  	this.resetToken();
				  });
			},
			resetToken() {
				 grecaptcha.reset();
				 this.form.grecaptcha = '';
			},
			assignToken() {
				 this.form.grecaptcha = grecaptcha.getResponse();
			},
			loadCaptcha() {
				if (window.grecaptcha) {
   					grecaptcha.render(document.getElementById('captcha'), 
   						{ sitekey : '6LcGaRUUAAAAAGqwKcmpYpwMXozMKx9ooyGTk-nd',
   						  callback: this.assignToken });
				}

				
			},
			closeMessage() {
				this.formPosted = false;
			},
			cleanForm() {
				for(var input in this.form) {
					this.form[input] = '';
				}

				this.$v.form.$reset();
			}
		}
}
</script>

