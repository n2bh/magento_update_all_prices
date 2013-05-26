<?php
require 'app/Mage.php'; Mage::app();


  $products = Mage::getModel('catalog/product')->getCollection()
				->addStoreFilter()
				->addAttributeToSelect('name')
				->addAttributeToSelect('price')
	;
	foreach ($products as $product) {
		echo $product->getName() .'<br>';
		echo "old: " . $product->getPrice() .'<br>';
			$newPrice = ($product->getPrice() + 5);
			$product->setPrice($newPrice);
			$product->save();
		echo "new: " . $product->getPrice();
		echo '<br><br><br><br>';
	}

?>
