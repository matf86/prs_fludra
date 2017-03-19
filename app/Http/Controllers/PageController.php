<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recaptcha\Recaptcha;
use App\Jobs\SendContactEmail;
use Validator;

class PageController extends Controller
{
    public function postForm(Request $request, Recaptcha $recaptcha)
    {
    	$rules = [
	        'name' => 'bail|required|max:90',
	        'email' => 'bail|required|email',
	        'subject' => 'bail|required|max:120',
	        'message' => 'bail|required|max:900',
	        'grecaptcha' => 'required',
    	];

    	$messages = [
    		'name.required' => 'Podaj swoje imie oraz nazwisko.',
    		'name.max' => 'Imie i nazwisko nie może składać się z z więcej niż 60 znaków.',
		    'email.required' => 'Podaj swój adres e-mail.',
		    'email.email' => 'Podany adres e-mail jest niepoprawny',
		    'subject.required' => 'Podaj tytuł swojej wiadomości.',
		    'subject.max' => 'Temat wiadomości nie może składać się z z więcej niż 120 znaków.',
		    'message.required' => 'Wprowadź treść wiadomości.',
		    'message.max' => 'Treść wiadomości nie może składać się z z więcej niż 900 znaków.',
		    'grecaptcha.required' => 'Oznacz pole "Nie jestem robotem".',
		];

    	Validator::make($request->all(), $rules, $messages)->validate();

        if($recaptcha->verify($request->get('grecaptcha')) === false) {
        	return response()->json([
			    'error' => 'Nieudana weryfikacja nadawcy formularza. Odśwież strone i spróbuj ponownie.',
			], 400);
        }

        dispatch(new SendContactEmail($request->only('name', 'email', 'subject', 'message')));

        return response()->json([
			    'response_message' => 'Wiadomość została pomyslnie wysłana.'
		], 201);
    }
}
