<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php
        session_start();
        $_SESSION['login'] = LOGIN;
        ?>
        <?php if (isset($_SESSION[login])): ?>
            <h1> <?php echo 'Bonjour ', $_SESSION['login']; ?></h1>
        <h2>Voici votre Panier:</h2>
        <?php else: ?>



    </div>
</section>
<?php require 'inc/foot.php'; ?>
