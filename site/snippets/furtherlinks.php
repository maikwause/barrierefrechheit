<?php 
if (!$page->links()->empty()) {
?>
    <article id="links">
      <div class="ym-gbox">
        <h3>Weiterführende Links</h3>

        <?php $links = yaml($page->links()) ?>

        <dl>
          <?php foreach ($links as $link): ?>
            <dt><a href="<?php echo $link['Url'] ?>"><?php echo $link['Url'] ?></a></dt>
              <?php if(isset($link['Beschreibung'])){?>
                <dd><?php echo $link['Beschreibung']?></dd>
            <?php }
          endforeach ?>
        </dl> 
      </div>
    </article>
<?}?>