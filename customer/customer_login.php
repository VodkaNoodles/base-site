<?php include 'view/header.php'; ?>
<?php include 'view/horizontal_nav_bar.php'; ?>

<?php
$user_email = filter_input(INPUT_POST, 'user_email') ?? '';
?>

<main>
    <?php include 'view/aside.php'; ?>

    <section>
        <h2>Customer Login</h2>
        <form action="index.php" method="post">
            <input type="hidden" name="action" value="customer_page">

            <label>Email Address:</label>
            <input type="text" name="user_email" id="user_email" 
                   value="<?php echo htmlspecialchars($user_email); ?>">

            <input type="submit" value="Login" id="login_button">
            <input type="button" value="Cancel" id="cancel_button">

        </form>
    </section>
</main>
<script src="scripts/customer_login.js"></script>
<script src="scripts/date.js"></script>

<?php include 'view/footer.php'; ?>
