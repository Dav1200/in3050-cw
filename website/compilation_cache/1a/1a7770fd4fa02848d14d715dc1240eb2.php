<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* header.php */
class __TwigTemplate_d77d38a01c02238b0abcabff45acdf5c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php
session_start();
?>

<link rel=\"stylesheet\" href=\"/public/shared/index.css\" />

<!-- Header Section and Navigation Bar for UX -->
<header>
  <div class=\"image\">
    <a href=\"index.php\">
      <img src=\"/public/info package/images/logos/Lancaster's-logos_white.png\" alt=\"Lancaster Restaurant Logo\" />
    </a>
  </div>
  <nav>
    <a aria-label=\"currently on page Home Page click to refresh\" href=\"index.php\">Home</a>
    <a aria-label=\"click to view Menu Page\" href=\"Menu/menu.html\">Menu</a>
    <a aria-label=\"click to view Reservation Page\" href=\"/reservation\">Reservation</a>
    <a aria-label=\"click to view Team Page\" href=\"about/about.html\">About Us</a>
    <?php
    if (isset(\$_SESSION['diner_logged']) && \$_SESSION['diner_logged'] == true) {
        echo '<a aria-label=\"click to view Profile Page\" href=\"/profile\">Profile</a>';
    } else {
        echo '<a aria-label=\"Login to your account\" href=\"/login\">Login</a>';
    }
    ?>
  </nav>
</header>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "header.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<?php
session_start();
?>

<link rel=\"stylesheet\" href=\"/public/shared/index.css\" />

<!-- Header Section and Navigation Bar for UX -->
<header>
  <div class=\"image\">
    <a href=\"index.php\">
      <img src=\"/public/info package/images/logos/Lancaster's-logos_white.png\" alt=\"Lancaster Restaurant Logo\" />
    </a>
  </div>
  <nav>
    <a aria-label=\"currently on page Home Page click to refresh\" href=\"index.php\">Home</a>
    <a aria-label=\"click to view Menu Page\" href=\"Menu/menu.html\">Menu</a>
    <a aria-label=\"click to view Reservation Page\" href=\"/reservation\">Reservation</a>
    <a aria-label=\"click to view Team Page\" href=\"about/about.html\">About Us</a>
    <?php
    if (isset(\$_SESSION['diner_logged']) && \$_SESSION['diner_logged'] == true) {
        echo '<a aria-label=\"click to view Profile Page\" href=\"/profile\">Profile</a>';
    } else {
        echo '<a aria-label=\"Login to your account\" href=\"/login\">Login</a>';
    }
    ?>
  </nav>
</header>", "header.php", "/var/www/html/mounted/website/src/Views/header.php");
    }
}
