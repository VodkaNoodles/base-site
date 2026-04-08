<?php 

function get_categories() {
    global $db;
    $query = 'SELECT * 
              FROM categories 
              ORDER BY category_id';
 
    $statement = $db->prepare($query);
    $statement->execute(); 
    $categories = $statement->fetchAll();
    $statement->closeCursor();
    return $categories;
}

function get_category_name($category_id) {
    global $db;
    $query = 'SELECT * FROM categories
              WHERE category_id = :category_id'; 
    
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id); 
    $statement->execute(); 
    $category = $statement->fetch();
    $statement->closeCursor();
    return $category['category_name'];
}

