<?php snippet('header') ?>
    <main id="listing" role="main">
      <h2 class="ym-hideme" id="main">archiv</h2>
      <div class="ym-column linearize-level-1">
        <div class="ym-col1">
          <div class="ym-cbox">
            <section>
            <article>
                <h3><?php echo html($page->title()) ?></h3>
            </article>
		      <?php snippet('articlelistdir', array('bereich'=> 'archiv/techniken', 'limit' =>500)) ?>
            </section>
          </div>
        </div>
        <aside class="ym-col3" role="complementary">
        <h2 class="ym-hideme">Sidebar</h2>
          <div class="ym-cbox">  
            <?php
            //tagcloud
            snippet('tagcloud'); 
            ?>
          </div>
        </aside>
      </div>
    </main>
<?php snippet('footer') ?>
