<section class="ym-grid linearize-level-2">


    <?php 
   
   //Alle Artikel holen. Nach Datum sortiert. Mit Begrenzung
   
   $articles = $pages->find($bereich)
                     ->children()
                     ->children()
                     ->visible()
                     //->flip()
                     ->shuffle()
                     ->limit($limit);


    

   
    $articlesoben = $articles->slice(0,3);
    foreach ($articlesoben as $article):
    

    //print_r($article);
    
    ?>
    <article class="ym-g33 ym-gl">
        <div class="ym-gbox">
            <h3><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h3>
            <h4><a href="<?php echo $article->parent()->url() ?>"><?php echo $article->parent()->title() ?></a></h4>
            <p><?php echo excerpt($article->text(), 250) ?></p>
            <?php
            
            //Tags pro Artikel
            if ($article->tags()) {?>
                <ul class="artikeltags">
                    <?php foreach(str::split($article->tags()) as $tag): ?>
                        <li><a href="<?php echo url('archiv/tag;' . urlencode($tag)) ?>"><?php echo $tag ?></a></li>
                    <?php endforeach ?>
                </ul>    
            <?}?>
        </div>
       </article>
    <? endforeach;?>
</section>
<section class="ym-grid linearize-level-2">
<?php
    $articlesmitte = $articles->slice(3,3);
    foreach ($articlesmitte as $article):
?>

    <article class="ym-g33 ym-gl">
        <div class="ym-gbox">
            <h3><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h3>
            <h4><a href="<?php echo $article->parent()->url() ?>"><?php echo $article->parent()->title() ?></a></h4>
            <p><?php echo excerpt($article->text(), 250) ?></p>
            <?php
            
            //Tags pro Artikel
            if ($article->tags()) {?>
                <ul class="artikeltags">
                    <?php foreach(str::split($article->tags()) as $tag): ?>
                        <li><a href="<?php echo url('/archiv/tag;' . urlencode($tag)) ?>"><?php echo $tag ?></a></li>
                    <?php endforeach ?>
                </ul>    
            <?}?>
        </div>
       </article>
    <? endforeach;?>
</section>

