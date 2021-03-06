<?php get_header() ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
        <?php the_post() ?>

        <!-- Page Header -->
        <header class="masthead"
            style="background-image: url('<?= has_post_thumbnail() ? get_the_post_thumbnail_url($post->ID, 'full') : '' ?>')"
        >
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="post-heading">
                            <h1><?= the_title() ?></h1>
                            <span class="meta">Postado por
                                <a href="<?php echo get_author_posts_url( get_the_author_meta("ID") ) ?>">
                                    <?php the_author() ?>
                                </a>
                                em <?= get_the_date() ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Post Content -->
        <article>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <?= the_content() ?>
                    </div>
                </div>
            </div>
        </article>
        <hr>

    <?php endwhile ?>
<?php endif ?>

<?php get_footer() ?>