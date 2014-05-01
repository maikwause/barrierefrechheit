<?php
if ($page->tags()) {
?>

	<article id="tags">
		<div class="ym-gbox">
			<h3>Stichworte</h3>
			<ul class="artikeltags">
				<?php foreach(str::split($page->tags()) as $tag): ?>				
					<li><a href="<?php echo url('/archiv/tag;' . urlencode($tag)) ?>"><?php echo $tag ?></a></li>   
				<?php endforeach ?>
			</ul>
		</div>
	</article>
<?}?>