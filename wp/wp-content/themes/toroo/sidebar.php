<aside id="postside">
            <h3 class="mid">カテゴリ</h3>
            <div class="postsideBlk">
            	<ul class="postside_cat">
                    <?php wp_list_categories('orderby=count&order=desc&show_count=1&title_li='); ?>
                </ul>
            </div>

        	<h3 class="mid">タグ</h3>
            <div class="postsideBlk">
            	<div class="postside_tag">
                <?php
                    $posttags = get_tags();
                    if ($posttags) {
                        foreach($posttags as $tag) {
                            echo '<a href="'. get_tag_link($tag->term_id) .'">' . $tag->name . '</a>';
                        }
                    }
                ?>
                </div>
            </div>

        	<h3 class="mid">最新コラム</h3>
            <div class="postsideBlk">
            	<ul class="postside_post">
                    <?php $paged = get_query_var('paged');
                        query_posts("posts_per_page=10");
                        //query_posts("posts_per_page=5&paged=$paged&orderby=meta_value_num&meta_key=views");
                        $i = 1;
                        if (have_posts()) {
                            while(have_posts()) {
                                the_post();
                    ?>
                        <li>
                            <a href="<?php the_permalink( $post ); ?>">
                                <div>
                                    <div class="postPh"><?php the_post_thumbnail(array(112,75) ); ?></div>
                                </div>    
                                <div>
                                    <span class="postDate"><?php the_modified_date('Y.m.d') ?></span>
                                    <span class="postTtl"><?php the_title(); ?></span>
                                </div>
                            </a>
                        </li>
                    <?php
                        }
                    }
                    ?>

                </ul>
            </div>

        	<h3 class="mid">人気コラム</h3>
            <div class="postsideBlk">
            	<ul class="postside_post postside_postrank">
                	<li>
                    	<a rel="#">
                        	<div>
                            	<div class="postPh"><img src="<?php echo get_template_directory_uri(); ?>/img/dammy1.jpg"></div>
                        	</div>    
                    		<div>
                            	<span class="postDate">2018.7.15</span>
                                <span class="postTtl">記事タイトル記事タイトル記事タイトル記事タイトル</span>
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
                                <span class="postTtl">記事タイトル記事タイトル記事タイトル記事タイトル</span>
                            </div>
                    	</a>
                    </li>

                </ul>
            </div>
            
        </aside>