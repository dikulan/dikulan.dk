<?php
require_once __DIR__ . "/Slim/views/TwigView.php";

class TView extends View {
  public $twig_directory;

  public $twig_options;

  private $twig_environment = null;

  public function __construct() {
    $this->twig_directory = Slim::config("twig.directory");
    $this->twig_options = Slim::config("twig.options");
  }

  public static function urlHelper($name, $params = null) {
    if (is_null($params) || $params === "") {
      $params = array();
    }

    return Slim::urlFor($name, $params);
  }

  private function getEnvironment() {
    if ( !$this->twig_environment ) {
      require_once $this->twig_directory . '/Autoloader.php';
      Twig_Autoloader::register();
      $loader = new Twig_Loader_Filesystem($this->getTemplatesDirectory());
      $this->twig_environment = new Twig_Environment(
        $loader,
        $this->twig_options
      );

      $this->twig_environment->addFunction("url", new Twig_Function_Function("TView::urlHelper"));
    }
    return $this->twig_environment;
  }

  public function render( $template ) {
    $env = $this->getEnvironment();
    $template = $env->loadTemplate($template);
    return $template->render($this->data);
  }
}
