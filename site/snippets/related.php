
<?php if(!$page->related()->empty()):
?>
	<article id="related">
		<div class="ym-gbox">
			<h3>Ebenfalls frech</h3>
			<p class="subline">Verwandte Artikel</p>
			<ul>
  			<?php foreach($page->related()->pages() as $item): ?>
  				<li>
    				<a href="<?php echo $item->url() ?>"><?php echo $item->title() ?></a>
		  		</li>
  			<?php endforeach ?>
			</ul>
		</div>
	</article>
<?php endif ?>
