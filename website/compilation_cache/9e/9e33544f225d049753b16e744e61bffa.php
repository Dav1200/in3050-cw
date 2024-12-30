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

/* /diner/DinerHubHeader.html */
class __TwigTemplate_961899107ea75fca1d831c989d86fe59 extends Template
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
        yield "
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
    <div class=\"dropdown\">
        <button class=\"dropbtn\">Profile</button>
        <div class=\"dropdown-content\">
            <a href=\"/profile\">My Dashboard</a>
            <a href=\"/index\">Logout</a>
        </div>
    </div>
    <style>
    /* Dropdown Button */
    .dropbtn {
        color: white;
        padding: 16px;
        font-size: 19px;
        font-weight: bold;
        border: none;
        cursor: pointer;
        background-color: rgba(128, 128, 128, 0); /* Grey background with 50% opacity */
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {
        background-color: #8e3e3e;
    }</style>
  </nav>
</header>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/diner/DinerHubHeader.html";
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
        return new Source("
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
    <div class=\"dropdown\">
        <button class=\"dropbtn\">Profile</button>
        <div class=\"dropdown-content\">
            <a href=\"/profile\">My Dashboard</a>
            <a href=\"/index\">Logout</a>
        </div>
    </div>
    <style>
    /* Dropdown Button */
    .dropbtn {
        color: white;
        padding: 16px;
        font-size: 19px;
        font-weight: bold;
        border: none;
        cursor: pointer;
        background-color: rgba(128, 128, 128, 0); /* Grey background with 50% opacity */
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {
        background-color: #8e3e3e;
    }</style>
  </nav>
</header>", "/diner/DinerHubHeader.html", "/var/www/html/mounted/website/src/Views/diner/DinerHubHeader.html");
    }
}
