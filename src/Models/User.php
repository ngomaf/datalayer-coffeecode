<?php

namespace App\Models;

use CoffeeCode\DataLayer\DataLayer;

/**
 *  @var
 */
class User extends DataLayer
{
	
	function __construct()
	{
		parent::__construct("users", ["first_name", "last_name"]);
	}

	public function addresses() {
		return (new Address())->find("user_id = :uid", "uid = {$this->id}")->fetch(true);
	}
}