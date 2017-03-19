<?php

namespace App\Recaptcha;

use GuzzleHttp\Client;

class Recaptcha 
{
	protected $client;

	function __construct(Client $client) {
		$this->client = $client;
	}

	public function verify(string $recaptcha) {

		$response = $this->callGoogleService($recaptcha);

        $status = json_decode($response->getBody(), true);

      	return $status['success'];
	}

	protected function callGoogleService(string $recaptcha) {
		
		return $this->client->request('POST', 'siteverify', [
            'query' => [
			            'secret' => env('CAPTCHA_SECRET'),
			            'response' => $recaptcha
			        ]
        ]);
	}
}
?>