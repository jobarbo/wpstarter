<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 */
?>

<?php get_header(); ?>

<?php
$page_404 = get_field('page_404', 'options');
$sub_title = $page_404['sub_title'];
$title = $page_404['title'];
$button = $page_404['button'];
?>

<section class="error">
    <div class="error__container">
        <div class="error__info">
            <p class="error__subtitle">
                <?php echo $sub_title ?>
            </p>
            <h2 class="error__title">
                <?php echo $title ?>
            </h2>
        </div>
        <div class="error__action">
            <p class="error__label"> <?= $button['title'] ?></p>
            <a href="<?= $button['url']; ?>" class="error__button"></a>
        </div>
    </div>
</section>

<?php get_footer(); ?>