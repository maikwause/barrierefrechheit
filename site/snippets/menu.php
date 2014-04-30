      <div class="ym-hlist" >
        <ul>
            <?php foreach($pages->visible() AS $p): ?>
                <li <?php echo ($p->isOpen()) ? ' class="active"' : '' ?>><a href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
          <?php endforeach ?>
        </ul>
      </div>

