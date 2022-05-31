<?php
/** @var string $title */
/** @var array $newsItemCollection */
?>

<div class="reviews-archive">
    <?php if($title): ?>
        <h1><?php echo $title; ?></h1>
    <?php endif; ?>

    <?php if($reviewsItemCollection): ?>
        <?php render('views/organisms/reviews-item-list.php', compact('reviewsItemCollection')); ?>
    <?php endif; ?>
</div>