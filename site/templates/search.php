<?php snippet('header') ?>
    <main id="main">
      <h2 class="ym-hideme">Inhalt</h2>
      <div class="ym-column linearize-level-1">
        <div class="ym-col1">
          <div class="ym-cbox">
            <section>
              <article>

                <?php

                $search = new search(array(
                  'searchfield' => 'q',
                  'paginate' => 10
                ));

                $results = $search->results();

                ?>

                <h3>Suchergebnisse zu "<?php echo $_GET['q']?>"</h3>

                <form action="<?php echo thisURL() ?>">
                  <input type="text" placeholder="Suchbegriff…" name="q" value="<?php echo $_GET['q']?>" />
                  <input type="submit" value="abschicken" />
                </form>

                <?php if($results): ?>
                <ul id="searchresults">
                  <?php foreach($results as $result): ?>
                  <li>
                    <h4><a href="<?php echo $result->url() ?>"><?php echo html($result->title()) ?></a></h4>
                    <a href="<?php echo $result->url() ?>"><?php echo html($result->url()) ?></a>
                    <p><?php echo excerpt($result->text(), 300) ?></p>
                  </li>
                  <?php endforeach ?>
                </ul>
                <?php else: ?>
                <p><strong>Leider keine Treffer zu "<?php echo $_GET['q'] ?>"...</strong></p><p> Mal in der Tag-Cloud nachsehen?</p>
                <?php endif ?>

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