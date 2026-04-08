<?php
function get_products_by_category($category_id) {
    global $db;
    $query = 'SELECT * 
               FROM products WHERE category_id = :category_id 
               ORDER BY product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
    return $products;
}

function get_product($product_id) {
    global $db;
    $query = 'SELECT *
              FROM products
              WHERE Product_id = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":product_id", $product_id);
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;           
}

function delete_product($product_id) {
    global $db;
    $query = 'DELETE FROM products
              WHERE Product_id = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":product_id", $product_id);
    $statement->execute();
    $statement->closeCursor();
}

function add_product($category_id, $code, $name, $price) {
    global $db;
    $query = 'INSERT INTO products
                 (category_id, product_code, product_name, list_price)
              VALUES
                 (:category_id, :code, :name, :price)';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':price', $price);
    $statement->execute();
    $statement->closeCursor();
}
?>