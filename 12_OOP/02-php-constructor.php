<?php

class Product {
    public $name;
    public $price;

    function __construct($name, $price)
    {
        $this->name = $name;
        if ($price < 0) {
            $this->price = 0;
        } else {
            $this->price = $price;
        }
    }

    function display_product()
    {
        return $this->name . " - " . $this->price;
    }

    function __destruct()
    {
        echo "nesne silindi";
    }


//    function set_name($name)
//    {
//        $this->name = $name;
//    }

//    function get_name()
//    {
//        return $this->name;
//    }

//    function set_price($price)
//    {
//        if ($price < 0) {
//            $this->price = 0;
//        } else {
//            $this->price = $price;
//        }
//    }

//    function get_price()
//    {
//        return $this->price;
//    }
}

//$p1 = new Product();

//$p1->name = "Iphone 14 Pro";
//$p1->price = 70000;

//echo $p1->name;
//echo $p1->price;

//$p1->set_name("Iphone 14 Pro");
//$p1->set_price(70000);

//echo $p1->get_name();
//echo "<br>";
//echo $p1->get_price();

$p1 = new Product("Iphone 14 Pro", 70000);
$p2 = new Product("Iphone 14 Pro", -70000);

echo $p1->display_product();
echo "<br>";
echo $p2->display_product();
echo "<br>";

