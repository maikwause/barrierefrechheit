    <?php 
  
   $articles = $pages->find($bereich)
                     ->children()
                     ->visible()
                     ->flip()
                     //->shuffle()
                     ->limit($limit);

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
                        <li><a href="<?php echo url('./archiv/tag;' . urlencode($tag)) ?>"><?php echo $tag ?></a></li>
                    <?php endforeach ?>
                    </ul>
                <?}?>
            </article>
        <?php endforeach ?>
