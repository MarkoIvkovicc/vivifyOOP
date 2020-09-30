<?php

/**
 * 
 */
class Receipt
{
	public $bill;
	
	function __construct($items, $table, $price, $createAt)
	{
		isset($items['meals']) ? '' : $items['meals']=null;
		isset($items['drinks']) ? '' : $items['drinks']=null;
		isset($items['toppings']) ? '' : $items['toppings']=null;
		
		$order = 'Order: date ' . $createAt . ', for table number: ' . $table;
		$listOrder = 'Ordered meals: ' . $items['meals'] . "\n" . 
					 'Ordered drinks: ' . $items['drinks'] . "\n" .
					 'Ordered toppings: ' . $items['toppings'] . "\n";
		$receipt = 'Receipt: ' . date('Y-m-d H:i:s') . ', for table number: ' . $table . ' and total price is: ' . $price . 'rsd';

		$bill = $order . "\n" . $listOrder . "\n" . $receipt;
		$this->bill = $bill;
	}
}