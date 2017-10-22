<?php 
		class Item {
				var $productID;
				var $productName;
				var $cost;
				var $quantity;

				public function Item($productID, $productName, $cost){
					$this->productID = $productID;
					$this->productName = $productName;
					$this->cost = $cost;
				}

				function setProductID($newID){
						$this->productID = $newID;
				}
				function setProductName($newName){
						$this->productName = $newName;
				}
				function setProductCost($newCost){
						$this->productCost = $newCost;
				}
				function setQuantity($newQuantity){
						$this->quantity = $newQuantity;
				}
				function getProductID(){
						return $this->productID;
				}
				function getProductName(){
						return $this->productName;
				}
				function getProductCost(){
						return $this->cost;
				}
				function getQuantity(){
						return $this->quantity;
				}
		}

		class Cart {
				var $items;
				var $tax;
				var $shippingCost;
				var $subtotalItem;
				var $subtotal;
				var $total;

				public function Cart(){
					$this->items = array();
					$this->tax = 1.08;
					$this->shippingCost = 2;
					$this->subtotalItem = array();
					$this->subtotal = 0;
					$this->total = 0;
				}

				function deleteItem($itemID){
					unset($items[$itemID]);
				}
				function setTotal($newTotal){
						$this->total = $newTotal;
				}
				function getItems(){
						return $this->items;
				}
				function getSubTotal(){
					foreach ($subtotalItem as $key => $value) {
					  	$this->subtotal+= $value;
					  }
						return $this->subTotal;
				}
				function getTotal(){

						return ((($this->getSubTotal()) * $tax) + $shippingCost);
				}
				function getShippingCost(){
					return $this->shippingCost;
				}
		}
?>