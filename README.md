# Stage-4 PHP with Object-Oriented Programming

This repository contains simple scenario-based tasks to practice Object-Oriented Programming (OOP) in PHP.

## Task 1: Create a Basic Product Class

### Objective
Understand the basics of classes, objects, properties, and methods.

### Details
Create a `Product` class in PHP with the following properties:
- `name`
- `price`
- `description`

Implement methods to set and get these properties, and a method `displayProductDetails()` to output the product details in a readable format.

### Requirements
- The class should have **private** properties.
- Use **constructor overloading** to initialize the object properties.
- Implement **getter and setter** methods for each property.
- Create an instance of the `Product` class and use its methods to demonstrate functionality.

---

## Task 2: Implement a Simple Shopping Cart System

### Objective
Practice using classes, objects, and basic object interactions.

### Details
Create a `ShoppingCart` class that can hold multiple `Product` objects. The cart should support adding, removing, and calculating the total price of products.

### Requirements
- The `ShoppingCart` class should have a **private property** to store an array of `Product` objects.
- Implement the following methods:
  - `addProduct(Product $product)` - Adds a product to the cart.
  - `removeProduct(Product $product)` - Removes a product from the cart.
  - `calculateTotalPrice()` - Calculates and returns the total price of all products in the cart.
- Demonstrate functionality by adding and removing products and calculating the total price.

---

## Task 3: Develop a Library Management System

### Objective
Understand inheritance and polymorphism.

### Details
Create a library management system with different types of materials: **Book, Magazine, and DVD**. Each material type should inherit from a base class `LibraryMaterial` and override its methods where necessary.

### Requirements
- The `LibraryMaterial` class should have properties like:
  - `title`
  - `author`
  - `ISBN`
  - `publicationYear`
- Create subclasses `Book`, `Magazine`, and `DVD`, each with specific properties like:
  - `pageCount` (for books)
  - `duration` (for DVDs)
- Implement methods in the base class and override them in the subclasses to demonstrate **polymorphism**.
- Create a method `displayMaterialDetails()` that outputs the details of each material.

---

## Task 4: Build a Simple Contact Management System

### Objective
Learn about encapsulation and data validation.

### Details
Create a `Contact` class that represents a person's contact information (e.g., name, email, phone number). Include validation for email format and phone number length.

### Requirements
- Use **private properties** for `name`, `email`, and `phone number`.
- Implement **setter methods** that include validation:
  - Ensure the email contains an "@" symbol.
  - Validate the phone number length.
- Implement **getter methods** to retrieve contact information.
- Create a test script that demonstrates setting and getting properties with validation.

---

## How to Run the Code
1. Ensure you have PHP installed on your system.
2. Clone this repository and navigate to the respective task directories.
3. Run the PHP files using the command:
   ```sh
   php filename.php
   ```
4. Observe the output to verify the implemented functionalities.

---

## Conclusion
These tasks help in understanding fundamental OOP concepts in PHP, including **encapsulation, inheritance, polymorphism, and object interactions**. Completing them will enhance your PHP development skills and prepare you for real-world applications.

Happy Coding! 🚀
