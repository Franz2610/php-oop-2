<?php
include __DIR__ . '/view/header.php';

include __DIR__ .'/database/db.php';
?>

<main class="container">
<?php foreach ($products as $product) : ?>
<div class="row">
    <div class=" col ">        
        <div class="card ">
            <div class="card-image">
                <img src="<?php echo $product->image?>" alt="<?php echo $product->name ?>">
            </div>
        <div class="card-body">
            <h1> <?php echo $product->name ?> </h1>
            <h4><?php echo $product->price ?> €</h4>
            <?php if (property_exists($product, 'type')) : ?>
            <?php if ($product->type == 'cat') : ?>
                <p>Accessorio: </p> <i class="fa-solid fa-cat fs-3 p-2 rounded-circle bg-danger"></i>
            <?php elseif ($product->type == 'dog') : ?>
                    <p>Accessorio: </p> <i class="fa-solid fa-dog fs-3 p-2 rounded-circle bg-success"></i>
                <?php endif;  ?>
                <?php endif;  ?>
                <?php if (property_exists($product, 'weight')): ?>
                <span> <?php echo  $product->getWeight() ?></span>
                <?php endif;  ?> 
        </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

</main>




<?php
include __DIR__ . '/view/footer.php';
?>