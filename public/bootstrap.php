<?php

require __DIR__ . "/../lib/Slim/slim/Slim.php";
require __DIR__ . "/../lib/idiorm/idiorm.php";
require __DIR__ . "/../lib/paris/paris.php";
require __DIR__ . "/../lib/TView.php";

Slim::init(array(
    "view" => "TView"
  , "templates_dir" => __DIR__ . "/../pages"
  , "twig.directory" => __DIR__ . "/../lib/Twig/lib/Twig"
  , "twig.options" => array("auto_reload" => true, "strict_variables" => true, "debug" => true)
));

Slim::get("/", function() {
  Slim::render("helloworld.php");
});

Slim::run();
