<?php

class Shop_coordinates extends Entity
{
	protected $_table = 'shop_coordinates';

	public function __construct(Db $db)
	{
		parent::__construct($db);
	}
}