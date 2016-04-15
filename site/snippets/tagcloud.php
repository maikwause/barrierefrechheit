

	<article id="tagcloud">
		<div class="ym-gbox">
   	    	<h3>Stichwortliste</h3>
    	  		<?php 
    	  		$tags = $pages->find('archiv/assistivetechnologien', 'archiv/techniken', 'archiv/beispiele', 'archiv/quicktipps')->children()->visible()->pluck('tags', ',', true);
    	  		asort($tags);
    	  		?>
	  		<ul id="cloudtags">
				<?php foreach($tags as $tag): ?>
  				<li><a href="<?php echo url('/archiv/tag;' . $tag)?>"><?php echo html($tag)?> </a></li>
				<?php endforeach ?>
			</ul>   
		</div>
	</article>