<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="名古屋市のかくう動物クリニックのブログ一覧(1/5)。動物たちの健康を維持するために役立つ情報を発信しています。記事を読んでわからない点などありましたら、お気軽にご相談いただければと思います。">
    <title>かくう動物クリニック | 健康お役立ちブログ</title>
    <?php get_template_part('meta'); ?>
    <?php wp_head(); ?>
</head>
<body class="archive">
    <?php get_header(); ?>
    <div class="key">
        <h1 class="key__title">健康お役立ち<br class="break">ブログ</h1>
    </div><!-- key -->
    <main>
        <div class="mainwrap">
            <div class="breadcrumb">
                <span class="root"><a href="<?php echo home_url(); ?>/">HOME</a></span><span class="current">健康お役立ちブログ</span>
            </div><!-- breadcrumb -->
            <div class="contbox">
                <div class="mainbox">
                    <div class="articlebox">
                        <ul class="cont05__list">
                        <?php if(have_posts()): while(have_posts()): the_post(); ?>
                            <li class="cont05__listitem">
                                <a class="cont05__listitem" href="<?php the_permalink(); ?>">
                                    <div class="cont05__txtbox">
                                        <time class="cont05__list-date"><?php the_time('Y/m/d'); ?></time>
                                        
                                        <?php
                                            $category = get_the_category();
                                            
                                            if (!empty( $category )) { ?>
                                            <ul class="cont05__list-cat">
                                            
                                            <?php
                                            foreach($category as $cat){
                                                    
                                            echo '<li>' . $cat->cat_name . '</li>'; 
                                            
                                            } ?>
                                                
                                            </ul>
                                            <?php } ?>
                                        
                                        <h2 class="cont05__list-title"><?php the_title(); ?></h2>
                                        <p class="cont05__list-txt"><?php the_excerpt(); ?></p>
                                        
                                    </div>
                                    <div class="cont05__img">
                                        <?php if(has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/home_img16.png" alt="健康お役立ちブログイメージ">
                                        <?php endif; ?>
                                    </div>
                                    
                                </a>
                            </li>
                            <?php endwhile; endif; ?>
                        </ul>
                    </div>

                    <?php if (function_exists("pagination")) {
                        pagination($additional_loop->max_num_pages);
                    } ?>
                </div>
                <?php get_sidebar(); ?>
            </div><!-- contbox -->
        </div>
    </main>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>
</html>