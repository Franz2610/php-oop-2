<?php
include __DIR__ . '/view/header.php';
include __DIR__ .'/models/product.php';
include __DIR__ .'/database/db.php';
?>

<main>
<div class="col-4">
    <div class="row">
        <div class="card">
        <?php foreach ($products as $product) : ?>
            <h1> <?php echo $product->name ?> </h1>
            <div class="card-image">
                <img src="<?php echo $product->image?>" alt="">
            </div>
        </div>

    </div>
    <?php endforeach; ?>
</div>
</main>




<?php
include __DIR__ . '/view/footer.php';
?>