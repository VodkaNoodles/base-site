<?php include 'view/header.php'; ?>
<?php include 'view/horizontal_nav_bar.php'; ?>

<main>
    <?php include 'view/aside.php'; ?>

    <section>
        <h2>Shipping Cost</h2>

        <div>
            <label for="product">Enter the cost of the product</label>
            <input type="text" id="product">
            <button type="button" name="calculate" id="calculate">Calculate</button>
        </div>

        <div>
            <label for="totalCost">Total Cost, including shipping</label>
            <input type="text" id="totalCost" readonly>
        </div>
    </section>
</main>
<?php include 'view/footer.php'; ?>



<script src="scripts/shipping.js"></script>
<script src="scripts/date.js"></script>

</body>
</html>