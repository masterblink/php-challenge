<?php

namespace App\Services;

use App\Contact;


class ContactService
{
	
	public static function findByName($name): Contact
	{
		$contact = new Contact($name);

		return $contact;
	}

	public static function validateNumber(string $number): bool
	{
		return preg_match('/^[0-9]{10}+$/', $number);
	}
}