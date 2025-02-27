<?php

class Product {
    private string $name;
    private float $price;

    public function __construct(string $name, float $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getPrice(): float {
        return $this->price;
    }
}

class ShoppingCart {
    private array $products = [];

    public function addProduct(Product $product): void {
        $this->products[] = $product;
        echo "Product added successfully: " . $product->getName() . "\n";
    }

    public function removeProduct(Product $product): void {
        foreach ($this->products as $index => $p) {
            if ($p->getName() === $product->getName() && $p->getPrice() === $product->getPrice()) {
                unset($this->products[$index]);
                $this->products = array_values($this->products); // Re-index array
                echo "Removed: " . $product->getName() . "\n";
                return;
            }
        }
        echo "No Product Found in the cart: " . $product->getName() . "\n";
    }

    public function calculateTotalPrice(): float {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }
        return $total;
    }
}

// Create Products
$product1 = new Product("Charger", 40.95);
$product2 = new Product("Cable", 45.99);

// Create Shopping Cart
$cart = new ShoppingCart();

// Add Products to Cart
$cart->addProduct($product1);
$cart->addProduct($product2);

// Calculate Total Price
echo "Total Price: $" . $cart->calculateTotalPrice() . "\n";

// Remove a Product
$cart->removeProduct($product1);
echo "Total Price after removal: $" . $cart->calculateTotalPrice() . "\n";

?>
