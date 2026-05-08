<?php
// Product Inventory CRUD Simulation

// Array to store products
$products = [];

// Function to add product
function addProduct(&$products, $id, $name, $price, $quantity) {

    // Check duplicate ID
    foreach ($products as $product) {
        if ($product['id'] == $id) {
            echo "❌ Product ID already exists!<br>";
            return;
        }
    }

    $products[] = [
        "id" => $id,
        "name" => $name,
        "price" => $price,
        "quantity" => $quantity
    ];

    echo "✅ Product added successfully!<br>";
}

// Function to update product price
function updatePrice(&$products, $id, $newPrice) {

    foreach ($products as &$product) {
        if ($product['id'] == $id) {
            $product['price'] = $newPrice;
            echo "✅ Price updated successfully!<br>";
            return;
        }
    }

    echo "❌ Product not found!<br>";
}

// Function to delete product
function deleteProduct(&$products, $id) {

    foreach ($products as $index => $product) {
        if ($product['id'] == $id) {
            unset($products[$index]);
            echo "✅ Product deleted successfully!<br>";
            return;
        }
    }

    echo "❌ Product not found!<br>";
}

// Function to display products
function displayProducts($products) {

    if (empty($products)) {
        echo "📦 No products available.<br>";
        return;
    }

    echo "<h3>Product List</h3>";
    echo "<table border='1' cellpadding='10'>";
    echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
          </tr>";

    foreach ($products as $product) {
        echo "<tr>
                <td>{$product['id']}</td>
                <td>{$product['name']}</td>
                <td>{$product['price']}</td>
                <td>{$product['quantity']}</td>
              </tr>";
    }

    echo "</table><br>";
}


// ----------------------
// Example Operations
// ----------------------

// Add Products
addProduct($products, 101, "camera", 150000, 5);
addProduct($products, 102, "iphone", 145000, 10);
addProduct($products, 101, "Drone", 100000, 7); // Duplicate ID

// Display Products
displayProducts($products);

// Update Product Price
updatePrice($products, 102, 130000);

// Delete Product
deleteProduct($products, 101);

// Display Updated Products
displayProducts($products);

?>