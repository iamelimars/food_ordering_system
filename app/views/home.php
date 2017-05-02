
<?php require VIEW_ROOT . '/templates/header.php' ?>
<?php $i = 0; ?>
<?php foreach ($menu as $item): ?>
  <?php $i++; ?>
  <?php if($i % 2 == 0): ?>
    <div id="menu-section" class="col-sm-12">
      <div class="col-sm-6 container" id="menu-content">
        <h4><?php echo escape($item['title']); ?></h4>
        <h4><?php echo escape($item['description']); ?></h4>
        <h4><?php echo escape($item['price']); ?></h4>
        <h4><?php echo escape($item['preptime']); ?></h4>
      </div>
      <div class="col-sm-6" id="menu-img-div">
        <img id="menu-img" src="<?php echo escape($item['img-url']); ?>" alt="">
      </div>
    </div>
  <?php else: ?>
    <div id="menu-section" class="col-sm-12">
      <div class="col-sm-6" id="menu-img-div">
        <img id="menu-img" src="<?php echo escape($item['img-url']); ?>" alt="">
      </div>
      <div class="col-sm-6 container" id="menu-content">
        <h4><?php echo escape($item['title']); ?></h4>
        <h4><?php echo escape($item['description']); ?></h4>
        <h4><?php echo escape($item['price']); ?></h4>
        <h4><?php echo escape($item['preptime']); ?></h4>
      </div>
    </div>
  <?php endif; ?>



<?php endforeach; ?>

<?php require VIEW_ROOT . '/templates/footer.php' ?>
