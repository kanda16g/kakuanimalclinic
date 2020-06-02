<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title></title>
    <meta name="description" content="">
    <?php get_template_part('meta'); ?>
    <?php wp_head(); ?>
</head>
<body class="single">
    <?php get_header(); ?>
    <div class="key">
        <p class="key__title">健康お役立ち<br class="break">ブログ</p>
    </div><!-- key -->
    <main>
        <div class="mainwrap">
            <div class="breadcrumb">
                <span class="root"><a href="<?php echo home_url(); ?>/">HOME</a></span><span class="current"><a href="<?php echo home_url(); ?>/blog/">健康お役立ちブログ</a></span><br class="break"><span class="current02"><?php the_title(); ?></span>
            </div><!-- breadcrumb -->
            <div class="contbox">
                <div class="mainbox">
                    <div class="article">
                    <?php if(have_posts()):while(have_posts()):the_post(); ?>
                       <div class="article__img">
                            <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('large'); ?>
                                <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/home_img16.png" alt="健康お役立ちブログイメージ">
                                <?php endif; ?>
                       </div>
                        <time class="article__time"><?php the_date(); ?></time>
                        <h1 class="article__title"><?php the_title(); ?></h1>
                        <div class="article__txtbox"><?php the_content(); ?></div>

                        <?php
                            $category = get_the_category();
                            if (!empty( $category )) { ?>
                            <ul class="category__list">
                            <?php
                            foreach($category as $cat){
                                echo '<li><a href="' . get_category_link( $cat->cat_ID ) . '">' . $cat->cat_name . '</a></li>';
                            } ?>
                            </ul>
                        <?php } ?>
                        
                    <?php endwhile;endif; ?>
                        <p class="pager__title">前後の記事</p>
                        
                        <?php the_post_navigation();  ?>
                    </div><!-- article -->
                </div><!-- mainbox -->
                <?php get_sidebar(); ?>
            </div><!-- contbox -->
        </div>
    </main>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>
</html>