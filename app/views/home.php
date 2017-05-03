<div id="hero" class="">

</div>
<div class="container" >
  <div class="col-sm-12"id="menu-background">
    <?php require VIEW_ROOT . '/templates/header.php' ?>
    <?php $i = 0; ?>
    <?php foreach ($menu as $item): ?>
      <?php $i++; ?>
      <?php if($i % 2 == 0): ?>

        <div id="menu-section" class="col-sm-12">
          <div class="col-sm-6 container" id="menu-content">
            <h4><?php echo escape($item['title']); ?></h4>
            <h6><?php echo escape($item['description']); ?></h6>
            <h6><?php echo escape($item['price']); ?></h6>
            <h6><?php echo escape($item['preptime']); ?></h6>
          </div>
          <div class="col-sm-6" id="menu-img-div">
            <a href="#">
              <img id="menu-img" src="<?php echo escape($item['img-url']); ?>" alt="">
            </a>

          </div>
        </div>
      <?php else: ?>
        <div id="menu-section" class="col-sm-12">
          <div class="col-sm-6" id="menu-img-div">
            <img id="menu-img" src="<?php echo escape($item['img-url']); ?>" alt="">
          </div>
          <div class="col-sm-6 container" id="menu-content">
            <h4><?php echo escape($item['title']); ?></h4>
            <h6><?php echo escape($item['description']); ?></h6>
            <h6><?php echo escape($item['price']); ?></h6>
            <h6><?php echo escape($item['preptime']); ?></h6>
          </div>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>

</div>

<div class="" id="hero2">

</div>
<div class="container">
  <div class="col-sm-12" id="menu-background">
    <div class="col-sm-8 col-sm-offset-2">
      <h2>menu</h2>
      <div class="" id="apps">
        <h3>APPETIZERS</h3>
        <div class="col-sm-6 menu-item">

          <h5>Title</h5>
          <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn</h6>
        </div>
        <div class="col-sm-6 menu-item">
          <h5>Title</h5>
          <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn</h6>
        </div>
        <div class="col-sm-6 menu-item">
          <h5>Title</h5>
          <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn</h6>
        </div>
        <div class="col-sm-6 menu-item">
          <h5>Title</h5>
          <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn</h6>
        </div>
      </div>
      <div class="" id="entrees">
        <h3>ENTREES</h3>
        <div class="col-sm-6 menu-item">
          <h5>Title</h5>
          <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn</h6>
        </div>
        <div class="col-sm-6 menu-item">
          <h5>Title</h5>
          <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn</h6>
        </div>
        <div class="col-sm-6 menu-item">
          <h5>Title</h5>
          <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn</h6>
        </div>
        <div class="col-sm-6 menu-item">
          <h5>Title</h5>
          <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn</h6>
        </div>
      </div>
      <div class="" id="desserts">
        <h3>DESSERT</h3>
        <div class="col-sm-6 menu-item">
          <h5>Title</h5>
          <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn</h6>
        </div>
        <div class="col-sm-6 menu-item">
          <h5>Title</h5>
          <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn</h6>
        </div>
        <div class="col-sm-6 menu-item">
          <h5>Title</h5>
          <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn</h6>
        </div>
        <div class="col-sm-6 menu-item">
          <h5>Title</h5>
          <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn</h6>
        </div>
      </div>
    </div>

  </div>
</div>

<?php require VIEW_ROOT . '/templates/footer.php' ?>
