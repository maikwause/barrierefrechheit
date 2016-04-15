<?php snippet('header') ?>
    <main id="main">
      <h2 class="ym-hideme">Inhalt</h2>
      <div class="ym-column linearize-level-1">
        <div class="ym-col1">
          <div class="ym-cbox">
            <section> 
              <article>

                <h3>Suchergebnisse zu "<?php echo $_GET['q']?>"</h3>
                <form>
                    <input type="search" name="q" value="<?php echo esc($query) ?>">
                    <input type="submit" value="abschicken">
                </form>

                <?php 
                    $pagination = $results->pagination();
                    $itemCount = $pagination->countItems();
                
                if($itemCount > 0){ ?>
                <ul id="searchresults">
                  <?php foreach($results as $result): ?>
                  <li>
                    <h4><a href="<?php echo $result->url() ?>"><?php echo $result->title()->html() ?></a></h4>
                    <a href="<?php echo $result->url() ?>"><?php echo html($result->url()) ?></a>
                    <p><?php echo excerpt($result->text(), 300) ?></p>
                  </li>
                  <?php endforeach ?>
                </ul>
                <?php }else{ ?>
                <p><strong>Leider keine Treffer zu "<?php echo $_GET['q'] ?>"...</strong></p><p> Mal in der Tag-Cloud nachsehen?</p>
                <?php } ?>

              </article>
            </section>
          </div>
        </div>
        <aside class="ym-col3">
        <h2 class="ym-hideme">Sidebar</h2>
          <div class="ym-cbox">  

            <?php
            snippet('tagcloud'); 
            ?>

          </div>
        </aside>
      </div>
    </main>

<?php snippet('footer') ?>