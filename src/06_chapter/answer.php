<?php
class Product {
  public $name;
  public $price;

  public function __construct($name, $price) {
    $this->name = $name;
    $this->price = $price;
  }

  public function show() {
      return "Name: {$this->name}, Price: {$this->price}";
  }
}

class Book extends Product {
  public function show() {
    return "書籍名: {$this->name}, 価格: {$this->price}";
  }
}

print "\n";
$product = new Product('Hoge', 1500);
print $product->show();
print "\n\n";

$book = new Book('「エンジニア×スタートアップ」こそ、最高のキャリアである', 'Priceless');
print $book->show();
print "\n\n";
