<?php 
if ($page->related()) {
?>
	<article id="related">
		<div class="ym-gbox">
			<h3>Ebenfalls frech</h3>
			<p class="subline">Verwandte Artikel</p>
			<ul>
			<?php foreach (related($page->related()) as $related): ?>
				<li><a href="<?php echo $related->url() ?>"><?php echo html($related->title()) ?></a></li>
			<?php endforeach ?>	
			</ul>
		</div>
	</article>

<?}?>