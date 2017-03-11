<?php

class Location extends Entity
{
	protected $_table = 'location';

	public function __construct(Db $db)
	{
		parent::__construct($db);
	}
}