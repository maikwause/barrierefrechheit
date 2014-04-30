<?php snippet('header') ?>
    <main id="listing" role="main">
      <h2 class="ym-hideme" id="main">archiv</h2>
      <div class="ym-column linearize-level-1">
        <div class="ym-col1">
          <div class="ym-cbox">
            <section>
                <?php 
                if(param('tag')) {
                    echo"<h3>Weitere Artikel zum Stichwort \"". urldecode(param('tag'))."\"</h3>";
                }else{
                    echo '<h3>Übersicht über alle Artikel</h3>';
                }?>

            <?php
           //Artikel holen. Ob mit Tag oder ohne
            if(param('tag')) {

            $articles = $pages->find('archiv')
                              ->children()
                              ->children()
                                //->visible()
                              ->filterBy('tags', urldecode(param('tag')), ',')
                              ->flip();
                            //->paginate(10);


            foreach ($articles as $article):
            ?>

            <article>
                <a href="<?php echo $article->parent()->url() ?>"><?php echo $article->parent()->title() ?></a>
                <h4><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h4>
                <p><?php echo excerpt($article->text(), 250) ?> <a href="<?php echo $article->url() ?>">Read more…</a></p>
            </article>
            <?
            endforeach;
} else {// wenn kein Tag


    $cats = $pages->find('archiv')
                  ->children()
                  ->without('quicktipps')
                  ->visible();  
/*
   $articles = $pages->find('archiv/assistivetechnologien', 'archiv/techniken', 'archiv/beispiele')
                     ->children()
                     ->visible()
                     ->flip();
                     //->paginate(10);

*/
    foreach ($cats as $cat) {
        echo '<h3 class="cat"><a href="'.$cat->url().'">'. $cat->title().'</a></h3>';
        
           $articles = $pages->find('archiv/'.$cat->uid)
                     ->children()
                     ->visible()
                     ->flip();
                     //->paginate(10);


        foreach ($articles as $article):
            ?>
            <article>
                <h4><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h4>
                <p><?php echo excerpt($article->text(), 250) ?></p>
                <?php //Tags pro Artikel
                if ($article->tags()) {
                    ?>
                    <ul class="artikeltags">
                    <?php foreach(str::split($article->tags()) as $tag): ?>
                        <li><a href="<?php echo url('archiv/tag;' . urlencode($tag)) ?>"><?php echo $tag ?></a></li>
                    <?php endforeach ?>
                    </ul>
                <?}?>
            </article>
        <?
        endforeach;             

    }

}// wenn kein Tag zu


    ?>


              </article>
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


<!--
<section class="content">
    <article>
        <h3><?php echo html($page->title()) ?></h3>
        <?php echo kirbytext($page->text()) ?>

    <?php 
    if(param('tag')) {
        echo"<h3>Weitere Artikel zum Stichwort \"". urldecode(param('tag'))."\"</h3>";
    }else{
        echo '<h3>Übersicht über alle Artikel</h3>';
    }
    ?>
    
    <?php
   
   //Artikel holen. Ob mit Tag oder ohne
   if(param('tag')) {

   $articles = $pages->find('archiv')
                     ->children()
                     ->children()
                     //->visible()
                     ->filterBy('tags', urldecode(param('tag')), ',')
                     ->flip();
                     //->paginate(10);


    foreach ($articles as $article):
    ?>
    <article>
     <a href="<?php echo $article->parent()->url() ?>"><?php echo $article->parent()->title() ?></a>
     <h1><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h1>
     <p><?php echo excerpt($article->text(), 200) ?></p>
     <a href="<?php echo $article->url() ?>">Read more…</a>
   </article>
    <?
    endforeach;



} else {// wenn kein Tag


    $cats = $pages->find('archiv')
                  ->children()
                  ->visible();  
/*
   $articles = $pages->find('archiv/assistivetechnologien', 'archiv/techniken', 'archiv/beispiele')
                     ->children()
                     ->visible()
                     ->flip();
                     //->paginate(10);

*/
    foreach ($cats as $cat) {
        echo '<h2><a href="'.$cat->url().'">'. $cat->title().'</a></h2>';
        
           $articles = $pages->find('archiv/'.$cat->uid)
                     ->children()
                     ->visible()
                     ->flip();
                     //->paginate(10);


        foreach ($articles as $article):
            ?>
            <article>
                <h1><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h1>
                <p><?php echo excerpt($article->text(), 200) ?></p>
                <?php //Tags pro Artikel
                if ($article->tags()) {
                    ?>
                    <?php foreach(str::split($article->tags()) as $tag): ?>
                        <a href="<?php echo url('archiv/tag;' . urlencode($tag)) ?>"><?php echo $tag ?></a>&nbsp;&nbsp;
                    <?php endforeach ?>
                <?}?>
            </article>
        <?
        endforeach;             

    }

}// wenn kein Tag zu


    ?>
  		
  </article>
</section>
<?php snippet('footer') ?>
-->