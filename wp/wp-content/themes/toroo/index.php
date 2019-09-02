<?php
/**
 * The main template file
 *
 *
 * @package WordPress
 * @subpackage toroo
 */

get_header(); ?>




<article id="article_common">
<!--下層ページ共通パーツ[START]-->
<nav id="breadcrumbs">
	<ol class="wrap">
    	<li><a href="index.html">ホーム</a></li>
    	<li>リクルーティングコラム </li>
	</ol>
</nav>
<div id="pttl">
	<h2 class="wrap">リクルーティングコラム</h2>
</div>
<!--下層ページ共通パーツ[END]-->



	<section class="wrap cf">
    
		<!--記事コンテンツ[START]-->
    	<div id="postmain">
        <ul class="postli">
        <?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				get_template_part( 'content', get_post_format() );

			// End the loop.
			endwhile;
        ?>
        </ul>
        <?php if(function_exists('wp_pagenavi')) : wp_pagenavi(); endif; ?>
<!--                 
                <ul class="pager">
                	<li><a href="#" class="prev"><span class="arrow">&lt;</span><span class="pc">&nbsp;&nbsp;prev</span></a></li>
                	<li><a href="#">1</a></li>
                	<li><a href="#" class="current">2</a></li>
                	<li><a href="#">3</a></li>
                	<li><a href="#">4</a></li>
                	<li><a href="#">5</a></li>
                	<li><span class="font_ja">…</span></li>
                	<li><a href="#">10</a></li>
                	<li><a href="#" class="next"><span class="pc">next&nbsp;&nbsp;</span><span class="arrow">&gt;</span></a></li>
                </ul> -->
                
                
                
        </div>
		<!--記事コンテンツ[END]-->



        <!--記事サイドコンテンツ[START]-->
        <?php get_sidebar(); ?>

		<!--記事サイドコンテンツ[END]-->


    </section>


</article>		



<?php get_footer(); ?>