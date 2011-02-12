<?php
require __DIR__ . "/Slim/views/TwigView.php";

class TView extends View {
  public $twig_directory;

  public $twig_options;

  private $twigEnvironment = null;

  public function __construct() {
    $this->twig_directory = Slim::config("twig.directory");
    $this->twig_options = Slim::config("twig.options");
  }

  private function getEnvironment() {
    if ( !$this->twigEnvironment ) {
      require_once $this->twig_directory . '/Autoloader.php';
      Twig_Autoloader::register();
      $loader = new Twig_Loader_Filesystem($this->getTemplatesDirectory());
      $this->twigEnvironment = new Twig_Environment(
        $loader,
        $this->twig_options
      );
    }
    return $this->twigEnvironment;
  }
}
