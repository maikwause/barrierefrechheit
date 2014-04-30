	<article id="tagcloud">
		<div class="ym-gbox">
   	    	<h3>Stichwortliste</h3>
    	  		<?php $tagcloud = tagcloud($pages->find('archiv/assistivetechnologien', 'archiv/techniken', 'archiv/beispiele', 'archiv/quicktipps'), array('children' => 'all', 'limit' => 400, 'sort' => 'name', 'sortdir' => 'asc')) ?>
	  		<ul id="cloudtags">
				<?php foreach($tagcloud as $tag): ?>
  				<li><a href="<?php echo $tag->url() ?>"><?php echo $tag->name() ?> <?php echo $tag->results()?></a></li>
				<?php endforeach ?>
			</ul>   
		</div>
	</article>
