<?php if (!$page->blockhead()->empty()){ ?>
	<article id="box">
		<div class="ym-gbox">
   	    	<h3><?php echo html($page->blockhead())?></h3>
       		<p><?php echo kirbytext($page->block())?></p>
		</div>
	</article>
<?php } ?>
