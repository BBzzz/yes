<?php
class StockTest extends CDbTestCase
{
	public $fixtures=array(
		'stocks'=>'Stock',
		'products'=>'Products',
	);	
	public function testGetProductOptions()
	{	
		$stock = $this->stocks('stock1');
		$options = $stock->getProducts();
		$this->assertTrue(is_array($options));
		$this->assertTrue(count($options) > 0);
		$products=Products::getAllProducts();
		$this->assertTrue(is_array($products));
	}
}
