<?php snippet('header') ?>
    <main id="main" role="main">
      <h2 class="ym-hideme">Inhalt</h2>
      <div class="ym-column linearize-level-1">
        <div class="ym-col1">
          <div class="ym-cbox">
            <section>
              <article>
                <h3><?php echo html($page->title()) ?></h3>
              </article>
			<?php snippet('quicktippsliste', array('limit'=>'100'))?>
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
