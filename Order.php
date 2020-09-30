<?php

include_once 'Receipt.php';
/**
 * 
 */
class Order 
{
	public array $items;
	public $table;
	public $price = 0;
	public $createdAt;
	private $isPaid = 1;

	public function setTable($table) {
		$this->table = $table;
	}

	public function addFood($name) {
		$this->items['meals'] = $name;
		$this->price = $this->price + rand(300, 600);
	}

	public function addDrink($name, $volume) {
		$this->items['drinks'] = $name . ' ' . $volume;
		$this->price = $this->price + rand(150, 500);
	}

	public function addTopping($name) {
		$this->items['toppings'] = $name;
		$this->price = $this->price + rand(20, 100);
	}

	public function order() {
		if ($isPaid = 0) {
			throw new Exception("Can't create a new order before you pay the last one!");
			return;
		}

		$this->isPaid = 0;
		$this->createdAt = date('Y-m-d H:i:s');
	}

	public function receipt() {
		$receipt = new Receipt($this->items, $this->table, $this->price, $this->createdAt);
		$this->isPaid = 1;
		return $receipt->bill;
	}
}