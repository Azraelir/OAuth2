<?php
App::uses('Oauth2AppModel', 'Oauth2.Model');

class Oauth2RefreshToken extends Oauth2AppModel {
/**
 * Name
 *
 * @var string
 */
	public $name = 'Oauth2RefreshToken';

/**
 * Primary key
 *
 * @var string
 */
	public $primaryKey = 'refresh_token'; 	
}