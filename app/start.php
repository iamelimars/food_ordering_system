<?php

  ini_set('display_errors', 'On');

  define('APP_ROOT', __DIR__);
  define('VIEW_ROOT', APP_ROOT . '/views');
  define('BASE_URL', 'http://localhost:8888/FoodOrdering');

  $db = new PDO('mysql:host=localhost;dbname=food_ordering', 'root', 'root');

  require 'functions.php';
