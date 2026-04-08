<body class="customer">
    <?php include 'view/header.php'; ?>
    <?php include 'view/horizontal_nav_bar.php'; ?>
 
    <main>
        <?php include 'view/aside.php'; ?>

        <section>
            <fieldset id="customer_info">
                <legend>Customer Information</legend>
                <?php if (isset($update_message)) : ?>
                    <p style="color: red; font-weight: bold; text-align: center;">
                        <?php echo htmlspecialchars($update_message); ?>
                    </p>
                <?php endif; ?>
                <form action="index.php" method="post" id="form_customer_info">
                    <input type="hidden" name="action" value="update_customer_info">
                    <input type="hidden" name="customer_id" value="<?php echo $customer['customer_id']; ?>">

                    <table>

                        <tr>
                            <td><label for="first_name">First Name:</label></td>
                            <td><input type="text" name="first_name" id="first_name" value="<?php echo htmlspecialchars($customer['first_name']); ?>"></td>
                        </tr>
                        <tr>
                            <td><label for="last_name">Last Name:</label></td>
                            <td><input type="text" name="last_name" id="last_name" value="<?php echo htmlspecialchars($customer['last_name']); ?>"></td>
                        </tr>

                        <tr>
                            <td><label for="email_address">Email:</label></td>
                            <td><input type="text" name="email_address" id="email_address" value="<?php echo htmlspecialchars($customer['email_address']); ?>"></td>
                        </tr>

                        <tr>
                            <td><label for="password">Password:</label></td>
                            <td><input type="password" name="password" id="password"></td>
                        </tr>

                        <tr>
                            <td><label for="confirm_password">Confirm Password:</label></td>
                            <td><input type="password" name="confirm_password" id="confirm_password"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="Update Customer Info" id="btn_update_customer"></td>
                        </tr>
                    </table>
                </form>
            </fieldset>

            <div class="address-container">
                <fieldset id="billing_info">
                    <legend>Billing Address</legend>
                    <form action="index.php" method="post">
                        <input type="hidden" name="action" value="update_billing_address">
                        <input type="hidden" name="customer_id" value="<?php echo $customer['customer_id']; ?>">
                        <input type="hidden" name="address_id" value="<?php echo $billing_address['address_id']; ?>">

                        <table>
                            <tr>
                                <td><label>Address Line 1:</label></td>
                                <td><input type="text" name="line1" value="<?php echo $billing_address['line1']; ?>"></td>
                            </tr>
                            <tr>
                                <td><label>Address Line 2:</label></td>
                                <td><input type="text" name="line2" value="<?php echo $billing_address['line2']; ?>"></td>
                            </tr>
                            <tr>
                                <td><label>City:</label></td>
                                <td><input type="text" name="city" value="<?php echo $billing_address['city']; ?>"></td>
                            </tr>
                            <tr>
                                <td><label>State:</label></td>
                                <td>
                                    <select name="state" style="width: 280px;">
                                        <?php foreach ($states as $state) : ?>
                                            <option value="<?php echo $state['state']; ?>" 
                                                    <?php if ($state['state'] == $billing_address['state']) echo 'selected'; ?>>
                                                    <?php echo $state['state']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label>Zip Code:</label></td>
                                <td><input type="text" name="zip_code" value="<?php echo $billing_address['zip_code']; ?>"></td>
                            </tr>
                            <tr>
                                <td><label>Phone:</label></td>
                                <td><input type="text" name="phone" value="<?php echo $billing_address['phone']; ?>"></td>
                            </tr>
                            <tr>
                                <td><input type="submit" value="Update Billing Address"></td>
                            </tr>
                        </table>
                    </form>
                </fieldset>

                <fieldset id="shipping_info">
                    <legend>Shipping Address</legend>
                    <form action="index.php" method="post">
                        <input type="hidden" name="action" value="update_shipping_address">
                        <input type="hidden" name="customer_id" value="<?php echo $customer['customer_id']; ?>">
                        <input type="hidden" name="address_id" value="<?php echo $shipping_address['address_id']; ?>">
                        <table>
                            <tr>
                                <td><label>Address Line 1:</label></td>
                                <td><input type="text" name="line1" value="<?php echo $shipping_address['line1']; ?>"></td>
                            </tr>
                            <tr>
                                <td><label>Address Line 2:</label></td>
                                <td><input type="text" name="line2" value="<?php echo $shipping_address['line2']; ?>"></td>
                            </tr>
                            <tr>
                                <td><label>City:</label></td>
                                <td><input type="text" name="city" value="<?php echo $shipping_address['city']; ?>"></td>
                            </tr>
                            <tr>
                                <td><label>State:</label></td>
                                <td>
                                    <select name="state" style="width: 280px;">
                                        <?php foreach ($states as $state) : ?>
                                            <option value="<?php echo $state['state']; ?>" 
                                                    <?php if ($state['state'] == $shipping_address['state']) echo 'selected'; ?>>
                                                    <?php echo $state['state']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label>Zip Code:</label></td>
                                <td><input type="text" name="zip_code" value="<?php echo $shipping_address['zip_code']; ?>"></td>
                            </tr>
                            <tr>
                                <td><label>Phone:</label></td>
                                <td><input type="text" name="phone" value="<?php echo $shipping_address['phone']; ?>"></td>
                            </tr>
                            <tr>
                                <td><input type="submit" value="Update Shipping Address"></td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            </div>
        </section>
    </main>
    <script src="scripts/customers.js"></script>
    <script src="scripts/date.js"></script>

    <?php include 'view/footer.php'; ?>

