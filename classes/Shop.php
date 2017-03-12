<?php

class Shop extends Entity
{
	protected $_table = 'shop';

	public function __construct(Db $db)
	{
		parent::__construct($db);
	}
}