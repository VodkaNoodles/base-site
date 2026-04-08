<?php include 'view/header.php'; ?>
<?php include 'view/horizontal_nav_bar.php'; ?>

<main>
    <?php include 'view/aside.php'; ?>

    <section>
        <h2>Our Guitars</h2>
        <p>Check out our fine selection of premium guitars!</p>
        <div id="slides">
            <ul>
                <li><img src="images/guitars/Caballero11.png" title="Caballero 11" alt="Caballero11"></li>
                <li><img src="images/guitars/FenderStratocaster.png" title="Fender Stratocaster" alt="FenderStratocaster"></li>
                <li><img src="images/guitars/GibsonLesPaul.png" title="Gibson Les Paul" alt="GibsonLesPaul"></li>
                <li><img src="images/guitars/GibsonSB.png" title="Gibson SB" alt="GibsonSB"></li>
                <li><img src="images/guitars/WashburnD10S.png" title="Washburn D10S" alt="WashburnD10S"></li>
                <li><img src="images/guitars/YamahaFG700S.png" title="Yamaha FG700S" alt="YamahaFG700S"></li>
            </ul>
        </div>
        <p id="page-numbers"></p>
    </section>
</main>

<?php include 'view/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
crossorigin="anonymous"></script>

<script src="scripts/jquery.bxslider.js"></script>
<script src="scripts/guitars.js"></script>
<script src="scripts/date.js"></script>

</body>
</html>