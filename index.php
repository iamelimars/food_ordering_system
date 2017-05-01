<?php

require 'app/start.php';

$menu = $db->query("
  SELECT *
  FROM menu
")->fetchAll(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/home.php';
