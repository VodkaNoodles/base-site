<?php
require_once('model/database.php');
require_once('model/category_db.php');
require_once('model/product_db.php');
require_once('model/customer_db.php');
require_once('model/address_db.php');

$categories = get_categories();

$action = filter_input(INPUT_POST, 'action') ?? filter_input(INPUT_GET, 'action') ?? 'home';

if ($action == 'home') {
    include('home.php');
} elseif ($action == 'delete_product') {
    include('home.php');
} elseif ($action == 'add_product') {
    include('home.php');
} elseif ($action == 'guitars') {
    include('products/guitars.php');
} elseif ($action == 'products') {
    $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT) ?: filter_input(INPUT_GET, 'category_id', FILTER_VALIDATE_INT) ?: 1;
    $category_name = get_category_name($category_id);
    $products = get_products_by_category($category_id);
    include('products/product_list.php');
} elseif ($action == 'basses' || $action == 'drums' || $action == 'keyboards' || $action == 'Ludwig') {
    include('home.php');
} elseif ($action == 'support') {
    include('support.php');
} elseif ($action == 'shipping') {
    include('shipping.php');
} elseif ($action == 'customer_login') {
    include('customer/customer_login.php');
} elseif ($action == 'customer_page') {
    $user_email = filter_input(INPUT_POST, 'user_email');

    if (filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
        $customer = get_customer_info_by_email_address($user_email);

        if ($customer) {
            $customer_id = $customer['customer_id'];
            $billing_address = get_address($customer['billing_address_id']);
            $shipping_address = get_address($customer['shipping_address_id']);
            $states = get_states();
            include('customer/customer.php');
        } else {
            $login_error = true; 
            include('customer/customer_login.php');
        }
    } else {
        include('customer/customer_login.php');
    }
} elseif ($action == 'update_customer_info') {
    $customer_id = filter_input(INPUT_POST, 'customer_id', FILTER_VALIDATE_INT);
    $first_name = filter_input(INPUT_POST, 'first_name');
    $last_name = filter_input(INPUT_POST, 'last_name');
    $email_address = filter_input(INPUT_POST, 'email_address', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'password');

    update_first_name($customer_id, $first_name);
    update_last_name($customer_id, $last_name);
    update_email_address($customer_id, $email_address);

     if (!empty($password)) {
        $hashed_password = password_hash(filter_input(INPUT_POST, 'password'), PASSWORD_DEFAULT);
        
        update_password($customer_id, $hashed_password);
    }

    $customer = get_customer_info($customer_id);
    $billing_address = get_address($customer['billing_address_id']);
    $shipping_address = get_address($customer['shipping_address_id']);
    $states = get_states();
    
    $update_message = "Customer information Updated";
    include('customer/customer.php');
    
    
} elseif ($action == 'update_billing_address') {

    $customer_id = filter_input(INPUT_POST, 'customer_id', FILTER_VALIDATE_INT);
    $address_id = filter_input(INPUT_POST, 'address_id', FILTER_VALIDATE_INT);
    $line1 = filter_input(INPUT_POST, 'line1');
    $line2 = filter_input(INPUT_POST, 'line2');
    $city = filter_input(INPUT_POST, 'city');
    $state = filter_input(INPUT_POST, 'state');
    $zip_code = filter_input(INPUT_POST, 'zip_code');
    $phone = filter_input(INPUT_POST, 'phone');

    update_address($address_id, $line1, $line2, $city, $state, $zip_code, $phone);

    $customer = get_customer_info($customer_id);
    $billing_address = get_address($customer['billing_address_id']);
    $shipping_address = get_address($customer['shipping_address_id']);
    $states = get_states();

    $update_message = "Billing address updated.";
    include('customer/customer.php');

} elseif ($action == 'update_shipping_address') {
    $customer_id = filter_input(INPUT_POST, 'customer_id', FILTER_VALIDATE_INT);
    $address_id = filter_input(INPUT_POST, 'address_id', FILTER_VALIDATE_INT);
    
    $line1 = filter_input(INPUT_POST, 'line1');
    $line2 = filter_input(INPUT_POST, 'line2');
    $city = filter_input(INPUT_POST, 'city');
    $state = filter_input(INPUT_POST, 'state');
    $zip_code = filter_input(INPUT_POST, 'zip_code');
    $phone = filter_input(INPUT_POST, 'phone');

    update_address($address_id, $line1, $line2, $city, $state, $zip_code, $phone);

    $customer = get_customer_info($customer_id);
    $billing_address = get_address($customer['billing_address_id']);
    $shipping_address = get_address($customer['shipping_address_id']);
    $states = get_states();
    
    $update_message = "Shipping address updated.";
    include('customer/customer.php');
}else {
    include('home.php');
}
?>
