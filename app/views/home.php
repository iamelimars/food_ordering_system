<?php foreach ($menu as $item): ?>
  <h4><?php echo escape($item['title']); ?></h4>
  <h4><?php echo escape($item['description']); ?></h4>
  <h4><?php echo escape($item['price']); ?></h4>
  <h4><?php echo escape($item['preptime']); ?></h4>
  <h4><?php echo escape($item['img-url']); ?></h4>
<?php endforeach; ?>
