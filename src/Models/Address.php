<?php

namespace App\Models;

use CoffeeCode\DataLayer\DataLayer;


/**
 * @var
 */
class Address extends DataLayer
{
	
	function __construct()
	{
		parent::__construct("addresses", ["addr_id", "user_id"], "addr_id", false);
	}

	public function add(User $user, string $street, string $number) {
		$this->user_id = $user->id;
		$this->street = $street;
		$this->user_id = $number;

		return $this;
	}
}