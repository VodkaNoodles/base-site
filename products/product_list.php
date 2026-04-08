<?php include 'view/header.php'; ?>
<?php include 'view/horizontal_nav_bar.php'; ?>

<main>
    <?php include 'view/aside.php'; ?>

    <section>
        <h2>Product List</h2>

        <form action="index.php" method="post">
            <input type="hidden" name="action" value="products">
            <select name="category_id">
                <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category['category_id']; ?>" 
                            <?php if ($category['category_id'] == $category_id) echo 'selected'; ?>>
                                <?php echo $category['category_name']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <input type="submit" value="Choose">
        </form>

        <h3><?php echo $category_name; ?></h3>

        <table>
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Name</th>
                    <th class="right">Price</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <td><?php echo $product['product_id']; ?></td>
                        <td><?php echo $product['product_name']; ?></td>
                        <td class="right"><?php echo $product['list_price']; ?></td>

                        <td>
                            <form action="index.php" method="post">
                                <input type="hidden" name="action" value="edit_product">
                                <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>">
                                <input type="hidden" name="category_id" value="<?php echo $category_id; ?>">
                                <input type="submit" value="Edit">
                            </form>
                        </td>

                        <td>
                            <form action="index.php" method="post">
                                <input type="hidden" name="action" value="delete_product">
                                <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>">
                                <input type="hidden" name="category_id" value="<?php echo $category_id; ?>">
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <p><a href="index.php?action=add_product">Add Product</a></p>
    </section>
</main>
<script src="scripts/date.js"></script>

<?php include 'view/footer.php'; ?>