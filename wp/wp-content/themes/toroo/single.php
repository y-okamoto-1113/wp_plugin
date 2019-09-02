<?php
/**
 * The main template file
 *
 *
 * @package WordPress
 * @subpackage toroo
 */

get_header();
the_post();
?>

<article id="article_common">
<!--下層ページ共通パーツ[START]-->
<nav id="breadcrumbs">
	<ol class="wrap">
    	<li><a href="index.html">ホーム</a></li>
    	<li><a href="#">リクルーティングコラム</a></li>
    	<li><?php get_the_title(); ?></li>
	</ol>
</nav>
<div id="pttl">
	<h2 class="wrap">リクルーティングコラム </h2>
</div>
<!--下層ページ共通パーツ[END]-->



	<section class="wrap cf">
    
		<!--記事コンテンツ[START]-->
    	<div id="postmain">
        
        
			<!--投稿記事見出し[START]-->
            <section class="postcontent_ttl">
            	<h2 class="mid"><?php the_title(); ?></h2>
                <div class="postcontent_ttl_box cf">
                	<div class="postcontent_ttl1">
                   	  <p class="postDate2"><span class="mid">更新日：</span><?php the_modified_time('Y.n.j') ?></p>
                   	  <p class="postDate"><span class="mid">公開日：</span><?php the_time('Y.n.j') ?></p>                        
                  </div>
                    
                  <div class="postcontent_ttl2">
                    	<p class="postCat"><span class="mid">カテゴリ：</span><?php the_category( "　" ); ?></p>
                    	<p class="postTag"><span class="mid">タグ：</span><?php the_tags( "　" ); ?></p>
                  </div>
                
              </div>
            </section>
			<!--投稿記事見出し[END]-->

            <?php the_content(); ?>
			


			<!--share[START]-->
            <div class="post_share">
            シェアボタン
            </div>
			<!--share[END]-->


			<!--次/前の記事へのリンク[START]-->
            <div class="postcontent_link">
                <a rel="#" class="prev">
                    <div class="box1">
                        <div class="postPh"><img src="<?php echo get_template_directory_uri(); ?>/img/dammy2.jpg"></div>
                    </div>    
                    <div class="box2">
                        <span class="postTtl">記事タイトル記事タイトル記事タイトル記事タイトル</span>
                    </div>
                </a>    
                            
                <a rel="#" class="next">
                    <div class="box2">
                        <span class="postTtl">記事タイトル記事タイトル記事タイトル記事タイトル記事タイトル記事タイトル</span>
                    </div>
                    <div class="box1">
                        <div class="postPh"><img src="<?php echo get_template_directory_uri(); ?>/img/dammy3.jpg"></div>
                    </div>    
                </a>                
            
            </div>
			<!--次/前の記事へのリンク[END]-->


			<!--関連記事へのリンク[START]-->
            <div class="postcontent_related">
            	<p class="mid">関連：同じカテゴリのコラム</p>
             	<ul>
                	<li>
                    	<a rel="#">
                        	<div>
                            	<div class="postPh"><img src="<?php echo get_template_directory_uri(); ?>/img/dammy1.jpg"></div>
                        	</div>    
                    		<div>
                            	<span class="postDate">2018.7.15</span>
                                <span class="postTtl">記事タイトル記事タイトル記事タイトル記事タイトル</span>
                            	<p class="postLead">
                                	テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<span class="pc">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</span>…
                                </p>
                            </div>
                    	</a>
                    </li>

                	<li>
                    	<a rel="#">
                        	<div>
                            	<div class="postPh"><img src="<?php echo get_template_directory_uri(); ?>/img/dammy2.jpg"></div>
                        	</div>    
                    		<div>
                            	<span class="postDate">2018.7.15</span>
                                <span class="postTtl">記事タイトル記事タイトル記事タイトル記事タイトル</span>
                            	<p class="postLead">
                                	テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<span class="pc">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</span>…
                                </p>
                            </div>
                    	</a>
                    </li>


                	<li>
                    	<a rel="#">
                        	<div>
                            	<div class="postPh"><img src="<?php echo get_template_directory_uri(); ?>/img/dammy3.jpg"></div>
                        	</div>    
                    		<div>
                            	<span class="postDate">2018.7.15</span>
                                <span class="postTtl">記事タイトル記事タイトル記事タイトル記事タイトル記事タイトル記事タイトル記事タイトル</span>
                            	<p class="postLead">
                                	テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<span class="pc">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</span>…
                                </p>
                            </div>
                    	</a>
                    </li>

                </ul>
                
                <a href="#" class="btnWh">コラム一覧</a>
           
            </div>
			<!--関連記事へのリンク[END]-->


                
        </div>

		<!--記事コンテンツ[END]-->



        <!--記事サイドコンテンツ[START]-->
        <?php get_sidebar(); ?>

		<!--記事サイドコンテンツ[END]-->


    </section>


</article>		



<?php get_footer(); ?>