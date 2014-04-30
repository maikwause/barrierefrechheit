    <?php
    $articles = $pages->find('archiv')
                     ->children()
                     ->children()
                     //->visible()
                     ->filterBy('tags', 'Quick-Tipp', ',')
                     //->flip()
                     ->shuffle()
                     ->limit($limit);

    
    foreach ($articles as $article):
    ?>
    <article class="ym-g50 ym-gl quicktipp">
        <div class="ym-gbox">
            <h4><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h4>
            <p><?php echo excerpt($article->text(), 150) ?></p>
            <p><a href="<?php echo $article->url() ?>"><?php echo html($article->title())?> en detail…</a></p>
        </div>
    </article>
    <?endforeach;
    
  	?>
