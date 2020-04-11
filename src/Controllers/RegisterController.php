<?php

class RegisterController {
	public function __construct() {
		add_action('rest_api_init', [$this, 'registerRouter']);
	}

	public function registerRouter() {
	   	register_rest_route('wiloke/v2', '/users/register', [
            'methods'  => 'GET',
            'callback' => [$this, 'handleRegister'],
            'args'	   => [
            	'user_nane' => [
            		'required' => true
            	],
            	'password' => [
            		'required' => true
            	]
            ]
        ]);
	}

	public function handleRegister(\WP_Request) {

	}
}