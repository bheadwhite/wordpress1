<?php get_header(); ?>

<body>
    <header>
        <div class="container">
            <h1><?php bloginfo('name') ?></h1>
            <span><?php bloginfo('description') ?></span>
        </div>
    </header>

    <div class="main">
        <div class="container">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()): the_post(); ?>
                    <a href="<?php thepermalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <div class="meta">
                        Created By <?php the_author(); ?> on <?php the_date(); ?>
                    </div>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <?php echo wpautop('Sorry, No posts were found'); ?>
            <?php endif; ?>
        </div>
    </div>
    
<?php get_footer(); ?>
