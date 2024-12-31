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

/* index.html */
class __TwigTemplate_ae269a722ec3eac0d38c1884df635d57 extends Template
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
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
  <meta name=\"description\"
    content=\"Lancaster's Restaurant - Discover Conscious Gastronomy in the heart of St James's.\" />
  <meta name=\"author\" content=\"Lancaster's Restaurant\">
  <meta name=\"keywords\" content=\"Lancaster's Restaurant,luxury dining, gourmet food, best dinner Lancaster\">

  <title>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pagetitle"] ?? null), "html", null, true);
        yield "</title>
  <link rel=\"icon\" href=\"/public/info package/images/logos/Logoico.ico\" />
  <link rel=\"stylesheet\" href=\"/public/shared/index.css\" />
  <script src=\"https://kit.fontawesome.com/f11736a280.js\" crossorigin=\"anonymous\"></script>
</head>

<body>
  ";
        // line 19
        if (($context["show"] ?? null)) {
            // line 20
            yield "  ";
            yield from $this->loadTemplate("/diner/diner-header.html", "index.html", 20)->unwrap()->yield($context);
            // line 21
            yield "  ";
        } else {
            // line 22
            yield "  ";
            yield from $this->loadTemplate("header.html", "index.html", 22)->unwrap()->yield($context);
            // line 23
            yield "  ";
        }
        // line 24
        yield "
  <!-- Main Section of Content -->
  <main id=\"Home-content\">
    <!-- Hero Section Inspired -->
    <section class=\"hero-section\">
      <div class=\"hero-content\">
        <h1><em>Discover Conscious Gastronomy in the heart of St James's </em></h1>
        <p>
          <span><strong>Opening times</strong></span>
          <br />
          <time datetime=\"07:30-23:00\">Mon – Fri: 07:30 am – 11:00 pm</time><br />
          <time datetime=\"09:00-23:00\">Sat: 9:00 am - 11:00 pm</time><br />
          <time datetime=\"11:30-22:00\">Sun: 11:30 am – 10:00 pm</time><br />
          <span>
            <i class=\"fa-solid fa-location-dot fa-lg\" style=\"color: #ffffff;\"></i>
            <strong>52 Haymarket, London, SW1Y 4RP</strong>
          </span><br>

        </p>
        <a aria-label=\"Click to view to the reservation page\" class=\"red-button\" href=\"/reservation\">
          Reserve Now <i class=\"fa-regular fa-calendar-check\"></i>
        </a>
      </div>
    </section>

    <!-- Food Image Grid below hero section -->

    <section class=\"info\" style=\"margin: 0px;\">
      <div class=\"image-grid\">

        <div class=\"section\">
          <img src=\"/public/info package/images/people/ana-cooking.jpeg\"
            alt=\"Chef Prepping Steak on Plate with stir fried vegetables on the side\" />
        </div>
        <div class=\"section\">
          <img src=\"/public/info package/images/food/food-4.jpeg\" alt=\"Chef garnishing dish with rosemary\" />
        </div>
        <div class=\"section\">
          <img src=\"/public/info package/images/food/food-5.jpeg\"
            alt=\"Dish with sprouts tomatoes leefy greens thinly sliced and chef adding finals touches\" />
        </div>
        <div class=\"section\">
          <img src=\"/public/info package/images/food/food-7.jpeg\"
            alt=\"Dish composed of small artfully arranged items\" />
        </div>
      </div>
    </section>

    <!-- Quotes content as it relates to the restaurant-->
    <aside class=\"quotes\">
      <h2>What People Are Saying</h2>
      <blockquote>
        <p>“Well-balanced dishes which are packed with flavour.”</p>
        <cite>— Michelin Guide</cite>
      </blockquote>
      <blockquote>
        <p>
          “Lancaster’s is generous and indulgent, relaxed and innovative,
          and in short, it’s everything you want from eating out.”
        </p>
        <cite>— Squaremeal</cite>
      </blockquote>
      <blockquote>
        <p>
          “Style and substance in equal - and environmentally conscious –
          measure.”
        </p>
        <cite>— CONDÉ NAST TRAVELLER</cite>
      </blockquote>
      <blockquote>
        <p>
          “Sustainable kitchen offers charm, finesse and an enlightened
          drinks list.”
        </p>
        <cite>— Fay Maschler</cite>
      </blockquote>
    </aside>


  </main>

  <!-- Footer Section to display contact and awards-->
  ";
        // line 106
        yield Twig\Extension\CoreExtension::include($this->env, $context, "footer.html");
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "index.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  163 => 106,  79 => 24,  76 => 23,  73 => 22,  70 => 21,  67 => 20,  65 => 19,  55 => 12,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
  <meta name=\"description\"
    content=\"Lancaster's Restaurant - Discover Conscious Gastronomy in the heart of St James's.\" />
  <meta name=\"author\" content=\"Lancaster's Restaurant\">
  <meta name=\"keywords\" content=\"Lancaster's Restaurant,luxury dining, gourmet food, best dinner Lancaster\">

  <title>{{pagetitle}}</title>
  <link rel=\"icon\" href=\"/public/info package/images/logos/Logoico.ico\" />
  <link rel=\"stylesheet\" href=\"/public/shared/index.css\" />
  <script src=\"https://kit.fontawesome.com/f11736a280.js\" crossorigin=\"anonymous\"></script>
</head>

<body>
  {% if show %}
  {% include '/diner/diner-header.html' %}
  {% else %}
  {% include 'header.html' %}
  {% endif %}

  <!-- Main Section of Content -->
  <main id=\"Home-content\">
    <!-- Hero Section Inspired -->
    <section class=\"hero-section\">
      <div class=\"hero-content\">
        <h1><em>Discover Conscious Gastronomy in the heart of St James's </em></h1>
        <p>
          <span><strong>Opening times</strong></span>
          <br />
          <time datetime=\"07:30-23:00\">Mon – Fri: 07:30 am – 11:00 pm</time><br />
          <time datetime=\"09:00-23:00\">Sat: 9:00 am - 11:00 pm</time><br />
          <time datetime=\"11:30-22:00\">Sun: 11:30 am – 10:00 pm</time><br />
          <span>
            <i class=\"fa-solid fa-location-dot fa-lg\" style=\"color: #ffffff;\"></i>
            <strong>52 Haymarket, London, SW1Y 4RP</strong>
          </span><br>

        </p>
        <a aria-label=\"Click to view to the reservation page\" class=\"red-button\" href=\"/reservation\">
          Reserve Now <i class=\"fa-regular fa-calendar-check\"></i>
        </a>
      </div>
    </section>

    <!-- Food Image Grid below hero section -->

    <section class=\"info\" style=\"margin: 0px;\">
      <div class=\"image-grid\">

        <div class=\"section\">
          <img src=\"/public/info package/images/people/ana-cooking.jpeg\"
            alt=\"Chef Prepping Steak on Plate with stir fried vegetables on the side\" />
        </div>
        <div class=\"section\">
          <img src=\"/public/info package/images/food/food-4.jpeg\" alt=\"Chef garnishing dish with rosemary\" />
        </div>
        <div class=\"section\">
          <img src=\"/public/info package/images/food/food-5.jpeg\"
            alt=\"Dish with sprouts tomatoes leefy greens thinly sliced and chef adding finals touches\" />
        </div>
        <div class=\"section\">
          <img src=\"/public/info package/images/food/food-7.jpeg\"
            alt=\"Dish composed of small artfully arranged items\" />
        </div>
      </div>
    </section>

    <!-- Quotes content as it relates to the restaurant-->
    <aside class=\"quotes\">
      <h2>What People Are Saying</h2>
      <blockquote>
        <p>“Well-balanced dishes which are packed with flavour.”</p>
        <cite>— Michelin Guide</cite>
      </blockquote>
      <blockquote>
        <p>
          “Lancaster’s is generous and indulgent, relaxed and innovative,
          and in short, it’s everything you want from eating out.”
        </p>
        <cite>— Squaremeal</cite>
      </blockquote>
      <blockquote>
        <p>
          “Style and substance in equal - and environmentally conscious –
          measure.”
        </p>
        <cite>— CONDÉ NAST TRAVELLER</cite>
      </blockquote>
      <blockquote>
        <p>
          “Sustainable kitchen offers charm, finesse and an enlightened
          drinks list.”
        </p>
        <cite>— Fay Maschler</cite>
      </blockquote>
    </aside>


  </main>

  <!-- Footer Section to display contact and awards-->
  {{ include('footer.html') }}", "index.html", "/var/www/html/mounted/website/src/Views/index.html");
    }
}
