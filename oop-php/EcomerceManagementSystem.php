<?php
class Order {
    private $pdo;
    private $customerId;
    private $orderId;

    public function __construct($pdo, $customerId) {
        $this->pdo = $pdo;
        $this->customerId = $customerId;
    }

    public function createOrder() {
        $stmt = $this->pdo->prepare("INSERT INTO orders (customer_id, total_price) VALUES (:customer_id, 0) RETURNING id");
        $stmt->execute(['customer_id' => $this->customerId]);
        $this->orderId = $stmt->fetchColumn();
    }

    public function addProductToOrder($productId, $quantity) {
        if (!$this->orderId) {
            $this->createOrder();
        }

        // Get product price
        $stmt = $this->pdo->prepare("SELECT price FROM products WHERE id = :product_id");
        $stmt->execute(['product_id' => $productId]);
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
        //if product is not found
        if (!$product) {
            throw new Exception("Product not found!");
        }

        $price = $product['price'];
        $totalPrice = $price * $quantity;

        // Add to order_items
        $stmt = $this->pdo->prepare("INSERT INTO order_items (order_id, product_id, quantity, price) VALUES (:order_id, :product_id, :quantity, :price)");
        $stmt->execute([
            'order_id' => $this->orderId,
            'product_id' => $productId,
            'quantity' => $quantity,
            'price' => $totalPrice
        ]);
    }

    public function calculateOrderTotal() {
        if (!$this->orderId) {
            return 0;
        }

        $stmt = $this->pdo->prepare("SELECT SUM(price) as total FROM order_items WHERE order_id = :order_id");
        $stmt->execute(['order_id' => $this->orderId]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        $total = $result['total'] ?? 0;

        // Update the order total
        $stmt = $this->pdo->prepare("UPDATE orders SET total_price = :total_price WHERE id = :order_id");
        $stmt->execute([
            'total_price' => $total,
            'order_id' => $this->orderId
        ]);

        return $total;
    }

    public function getOrdersByCustomer() {
        $stmt = $this->pdo->prepare("
            SELECT o.id AS order_id, o.total_price, o.created_at, 
                   oi.product_id, oi.quantity, oi.price
            FROM orders o
            JOIN order_items oi ON o.id = oi.order_id
            WHERE o.customer_id = :customer_id
            ORDER BY o.created_at DESC
        ");
        $stmt->execute(['customer_id' => $this->customerId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
