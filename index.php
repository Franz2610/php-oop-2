<?php
include __DIR__ . '/view/header.php';
include __DIR__ .'/models/product.php';
include __DIR__ .'/database/db.php';
?>

<main>
<div class="col">
    <div class="row">
        <div class="card">
        <?php foreach ($products as $product) : ?>
            <h1> <?php echo $product->name ?> </h1>
        </div>

    </div>
    <?php endforeach; ?>
</div>
</main>




<?php
include __DIR__ . '/view/footer.php';
?>