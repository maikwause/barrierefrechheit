<?php 

// find the open/active page on the first level
$open  = $pages->findOpen();
$items = ($open) ? $open->children()->visible() : false; 

?>
<?php if($items && $items->count()): ?>
  <div class="submenu">
  <ul>
    <?php foreach($items AS $item): ?>
              <li <?php echo ($item->isOpen()) ? ' class="active"' : '' ?>><a href="<?php echo $item->url()?>"><?php echo html($item->title()) ?></a></li>
    <?php endforeach ?>            
  </ul>
  </div>
<?php endif ?>

