<?php

class Floor extends Entity
{
	protected $_table = 'floor';

	public function __construct(Db $db)
	{
		parent::__construct($db);
	}
}