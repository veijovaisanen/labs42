<?php


class Product
{
    private $name;
    private $price;
    private $amount; //Amount in storage

    public  function __construct($name, $price, $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function countValue()
    {
        return ($this->amount * $this->price);
    }

    public function printProduct()
    {
        printf("Product %s, price %4.1f and balance %d pcs", $this->name,$this->price,$this->amount);
    }
	
	 public function changeAmount($amount)
    {
        $this->amount = $amount;
    }
}

$product = new Product("Edam", 3.3, 120);
$product->changeAmount(200);
printf("Product value is %4.1f", $product->countValue());
echo "<br>";
$product->printProduct();

?>

