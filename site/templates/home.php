<?php snippet('header') ?>
		<main id="start">
			<h2 class="ym-hideme" id="main">Inhalt</h2>
			<div class="ym-column linearize-level-1">
				<div class="ym-col1">
					<div class="ym-cbox">
						<section class="ym-grid linearize-level-2">
							<?php snippet('newestarticle', array('bereich'=> 'archiv', 'limit' =>6)) ?>
						</section>	
					</div>
				</div>
				<aside class="ym-col3">
					<h2 class="ym-hideme">Sidebar</h2>
					<div class="ym-cbox">
						<?php snippet('quicktipps', array('limit'=>'3'))?>
					</div>
				</aside>
			</div>	
		</main>
<?php snippet('footer') ?>