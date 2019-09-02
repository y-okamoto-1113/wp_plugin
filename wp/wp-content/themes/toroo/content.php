<?php
/**
 * 一覧記事
 *
 */
?>

<li class="mHeight">
	<a href="<?php the_permalink(); ?>">
		<div class="postliBox">
			<div class="postPh">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="cf postliBox2">
				<span class="postCat"><object><?php the_category( "　" ); ?></object></span>
				<span class="postDate"><?php the_modified_date('Y年m月d日') ?></span>
			</div>

		</div>    
		<div class="postTtl">
			<?php the_title(); ?>
		</div>
	</a>
</li>
