<?php



require 'inc/head.php';
require 'inc/data/products.php';

?>
    <section class="cookies container-fluid">
    <div class="row">
<?php if (isset($_SESSION['loginname'])): ?>
    <h1> <?php echo 'Bonjour ', $_SESSION['loginname']; ?> </h1>
    <h2>Voici votre Panier:</h2>
<?php endif ?>
<?php if (!empty($catalog[$_SESSION['cookie']])): ?>
    <p><?= implode(", ", $catalog[$_SESSION['cookie']]); ?></p>
<?php else: ?>
    <p>Votre panier est vide!</p>
<?php endif; ?>
    </div>
    </section>
    <?php require 'inc/foot.php'; ?>