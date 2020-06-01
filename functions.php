<?php
//the_excerptからpタグ削除
remove_filter('the_excerpt', 'wpautop');
//記事の自動整形を無効にする
remove_filter('the_content', 'wpautop');

//サムネイル
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(450, 280, false);


//記事にアーカイブ（投稿一覧）を持たせるようにします。
//記載後にパーマリンク設定で「変更を保存」してください。
function post_has_archive( $args, $post_type ) {
    if ( 'post' == $post_type ) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'blog'; // ページ名
    }
    return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );


//アーカイブページネーション
function pagination($pages = '', $range = 1)
{
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><div class=\"pagination-box\"><span class=\"page-of\">Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">&rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div></div>\n";
     }
}


//個別ページカテゴリー
$category = get_the_category();
  $cat = $category[0];
 
  //カテゴリー名
  $cat_name = $cat->name;
 
  //カテゴリーID
  $cat_id = $cat->cat_ID;
 
  //カテゴリースラッグ
  $cat_slug = $cat->slug;
