    <?php
/*    
    //Artikelliste generieren
    $articles = $pages->find('quicktipps')
                     ->children()
                     //->visible()
                     ->shuffle()
                     ->limit($limit);
*/

    $articles = $pages->find('archiv')
                     ->children()
                     ->children()
                     //->visible()
                     ->filterBy('tags', 'Quick-Tipp', ',')
                     //->flip()
                     ->shuffle()
                     ->limit($limit);

    

    //Einzelne Artikel arstellen
    foreach ($articles as $article):
    ?>
    <article class="quickstart">
        <div class="ym-gbox">
            <h3><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h3>
            <p><?php echo excerpt($article->text(), 150) ?></p>
            <p><a href="<?php echo $article->url() ?>"><?php echo html($article->title())?> en detail…</a></p>
        </div>
    </article>
<!--
    <div class="quicktipp">
        <h1><?php echo html($article->title()) ?></h1>
        <p><?php echo excerpt($article->text(), 150) ?>
        <a href="<?php echo $article->url() ?>"><?php echo html($article->title())?> en detail…</a>
        </p>
   </div>
-->   
    <?endforeach;
    
  	?>
