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

/* diner/menu.html */
class __TwigTemplate_1f06b88f8d9efdd6a1d62da004fef850 extends Template
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
  <meta name=\"keywords\" content=\"Lancaster's Restaurant,luxury dining, gourmet food, best dinner Lancaster,Menu\">

  <title>Lancaster - Menu</title>
  <link rel=\"stylesheet\" href=\"/public/shared/index.css\" />
  <link rel=\"stylesheet\" href=\"/public/css/diner/menu.css\" />

  <link rel=\"icon\" href=\"/public/info package/images/logos/Logoico.ico\" />
  <script src=\"https://kit.fontawesome.com/f11736a280.js\" crossorigin=\"anonymous\"></script>
</head>

<body>
  <!-- Navigation Bar -->

  ";
        // line 23
        if (($context["show"] ?? null)) {
            // line 24
            yield "  ";
            yield from $this->loadTemplate("/diner/diner-header.html", "diner/menu.html", 24)->unwrap()->yield($context);
            // line 25
            yield "  ";
        } else {
            // line 26
            yield "  ";
            yield from $this->loadTemplate("header.html", "diner/menu.html", 26)->unwrap()->yield($context);
            // line 27
            yield "  ";
        }
        // line 28
        yield "  <!-- Main Content -->
  <main id=\"Menu-content\">

    <!-- Section about dietary requirements and menu download-->
    <section class=\"text-container\" style=\"text-align: center;\">
      <div class=\"story\">
        <h2 style=\"margin: 0%;text-decoration: underline;\"> Dietary Information</h2>
        <p>
          <em>We are happy to accommodate dietary requirements</em>.
          <strong>Please just make a note in your reservation or let us know upon arrival.</strong> <br>
          Lancaster’s is on ground level, with an accessible bathroom situated on the same floor.
        </p>

        <a aria-label=\"Click to view/download our full menu\" class=\"links\"
          href=\"/public/info package/Lancaster's Dinner Menu 17 Jun 2024.pdf\" target=\"_blank\"><b>Download Our Full
            Menu</b></a>
      </div>
    </section>

    <!-- Food Menu section including price name descirption -->
    <section class=\"food-menu-container\">
      <!-- First Course Menu -->
      <article class=\"menu-food\">
        <img src=\"/public/info package/images/food/food-2.jpeg\" alt=\"First Menu Supplementary Image\" />

        <h2><em>First Course</em></h2>
        <div class=\"menu-item\">
          <span class=\"item-name\">Warm Onion Tart</span>
          <span class=\"item-price\">£12</span>
          <p class=\"item-description\">
            Quickes Goats Cheese, Worcestershire and Shallots
          </p>
        </div>
        <div class=\"menu-item\">
          <span class=\"item-name\">Venison Pâté en Croûte</span>
          <span class=\"item-price\">£13</span>
          <p class=\"item-description\">
            Hedgerow Jelly, Mustard Fruit and Pistachio
          </p>
        </div>
        <div class=\"menu-item\">
          <span class=\"item-name\">Lasagne of Rabbit Shoulder</span>
          <span class=\"item-price\">£12</span>
          <p class=\"item-description\">Mushrooms, Riesling and Thyme</p>
        </div>
        <div class=\"menu-item\">
          <span class=\"item-name\">Grilled Beef Tongue</span>
          <span class=\"item-price\">£14</span>
          <p class=\"item-description\">Quince, Aged Vinegar and Beetroot</p>
        </div>
      </article>

      <!-- Second Course Menu -->
      <article class=\"menu-food\">
        <img src=\"/public/info package/images/food/food-service-2.jpeg\" alt=\"Second Menu Supplementary Image\" />
        <h2><em>Second Course</em></h2>
        <div class=\"menu-item\">
          <span class=\"item-name\">Roast Cornish Monkfish</span>
          <span class=\"item-price\">£28</span>
          <p class=\"item-description\">QCheek, Butternut Squash and Sage</p>
        </div>
        <div class=\"menu-item\">
          <span class=\"item-name\">Our Iberian Pork</span>
          <span class=\"item-price\">£32</span>
          <p class=\"item-description\">
            Jerusalem Artichoke and Pickled Walnuts
          </p>
        </div>
        <div class=\"menu-item\">
          <span class=\"item-name\">Wareham Dorset Sika Deer</span>
          <span class=\"item-price\">£35</span>
          <p class=\"item-description\">Pale Ale, Prune and Spring Onion</p>
        </div>
        <div class=\"menu-item\">
          <span class=\"item-name\">Short Rib of Red Ruby Beef</span>
          <span class=\"item-price\">£35</span>
          <p class=\"item-description\">
            Spinach, Chanterelles and Horseradish
          </p>
        </div>
      </article>

      <!-- Third Course Menu -->
      <article class=\"menu-food\">
        <img src=\"/public/info package/images/food/food-3.jpeg\" alt=\"Third Menu Supplementary Image\" />
        <h2><em>Third Course</em></h2>
        <div class=\"menu-item\">
          <span class=\"item-name\">Apple Parfait</span>
          <span class=\"item-price\">£8</span>
          <p class=\"item-description\">Shortbread, Hazelnuts and Sherry</p>
        </div>
        <div class=\"menu-item\">
          <span class=\"item-name\">Plum Ripple Ice Cream</span>
          <span class=\"item-price\">£7</span>
          <p class=\"item-description\">
            Caramelised Pastry, Almond Cream and Camomile
          </p>
        </div>
        <div class=\"menu-item\">
          <span class=\"item-name\">Custard Flan</span>
          <span class=\"item-price\">£8</span>
          <p class=\"item-description\">Quince and Crème Fraîche</p>
        </div>
        <div class=\"menu-item\">
          <span class=\"item-name\">Selection of Cheese</span>
          <span class=\"item-price\">£12</span>
          <p class=\"item-description\">
            Tunworth, Lincolnshire Poacher, Beauvale Blue Crackers and
            Homemade Chutney
          </p>
        </div>
      </article>

      <!-- Tasting Menu -->
      <article class=\"menu-food\">
        <img src=\"/public/info package/images/food/food-service-1.jpeg\" alt=\"Tasting Menu Supplementary image\" />
        <h2><em>Tasting Menu</em></h2>
        <div class=\"menu-item\">
          <span class=\"item-name\">Menu A:</span>
          <span class=\"item-price\">£60</span>
          <ul class=\"item-description\">
            <li>Warm Onion Tart</li>
            <li>Lasagne of Rabbit Shoulder</li>
            <li>Roast Cornish Monkfish</li>
            <li>Wareham Dorset Sika Deer</li>
            <li>Apple Parfait</li>
          </ul>
        </div>
        <div class=\"menu-item\">
          <span class=\"item-name\">Menu B:</span>
          <span class=\"item-price\">£85</span>
          <ul class=\"item-description\">
            <li>Warm Onion Tart</li>
            <li>Lasagne of Rabbit Shoulder</li>
            <li>Grilled Beef Tongue</li>
            <li>Roast Cornish Monkfish</li>
            <li>Wareham Dorset Sika Deer</li>
            <li>Our Iberian Pork</li>
            <li>Apple Parfait</li>
          </ul>
        </div>
      </article>

    </section>



    <!-- Meet the team showcase as a side note-->
    <aside class=\"info\" style=\"margin-top: 15px;\">

      <div class=\"image-grid\">
        <div class=\"section\">
          <img src=\"/public/info package/images/people/ana-cooking.jpeg\"
            alt=\"Image one of the chefs cooking on a round pan \" />
        </div>

        <div class=\"section\">
          <img src=\"/public/info package/images/people/ana-plating.jpeg\"
            alt=\"Image of chef plating the food in a luxary manner\" />
        </div>

        <div class=\"section\">
          <img src=\"/public/info package/images/people/robert-pour.jpeg\" alt=\"Image of bartendender pouring wine\" />
        </div>
        <div class=\"section\">
          <img src=\"/public/info package/images/people/robert-check.jpeg\"
            alt=\"Image bartendender looking at a tilted glass of wine\" />
        </div>
      </div>
    </aside>
  </main>



  <!-- Footer Section -->
  ";
        // line 203
        yield Twig\Extension\CoreExtension::include($this->env, $context, "footer.html");
        yield "

</body>


</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "diner/menu.html";
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
        return array (  257 => 203,  80 => 28,  77 => 27,  74 => 26,  71 => 25,  68 => 24,  66 => 23,  42 => 1,);
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
  <meta name=\"keywords\" content=\"Lancaster's Restaurant,luxury dining, gourmet food, best dinner Lancaster,Menu\">

  <title>Lancaster - Menu</title>
  <link rel=\"stylesheet\" href=\"/public/shared/index.css\" />
  <link rel=\"stylesheet\" href=\"/public/css/diner/menu.css\" />

  <link rel=\"icon\" href=\"/public/info package/images/logos/Logoico.ico\" />
  <script src=\"https://kit.fontawesome.com/f11736a280.js\" crossorigin=\"anonymous\"></script>
</head>

<body>
  <!-- Navigation Bar -->

  {% if show %}
  {% include '/diner/diner-header.html' %}
  {% else %}
  {% include 'header.html' %}
  {% endif %}
  <!-- Main Content -->
  <main id=\"Menu-content\">

    <!-- Section about dietary requirements and menu download-->
    <section class=\"text-container\" style=\"text-align: center;\">
      <div class=\"story\">
        <h2 style=\"margin: 0%;text-decoration: underline;\"> Dietary Information</h2>
        <p>
          <em>We are happy to accommodate dietary requirements</em>.
          <strong>Please just make a note in your reservation or let us know upon arrival.</strong> <br>
          Lancaster’s is on ground level, with an accessible bathroom situated on the same floor.
        </p>

        <a aria-label=\"Click to view/download our full menu\" class=\"links\"
          href=\"/public/info package/Lancaster's Dinner Menu 17 Jun 2024.pdf\" target=\"_blank\"><b>Download Our Full
            Menu</b></a>
      </div>
    </section>

    <!-- Food Menu section including price name descirption -->
    <section class=\"food-menu-container\">
      <!-- First Course Menu -->
      <article class=\"menu-food\">
        <img src=\"/public/info package/images/food/food-2.jpeg\" alt=\"First Menu Supplementary Image\" />

        <h2><em>First Course</em></h2>
        <div class=\"menu-item\">
          <span class=\"item-name\">Warm Onion Tart</span>
          <span class=\"item-price\">£12</span>
          <p class=\"item-description\">
            Quickes Goats Cheese, Worcestershire and Shallots
          </p>
        </div>
        <div class=\"menu-item\">
          <span class=\"item-name\">Venison Pâté en Croûte</span>
          <span class=\"item-price\">£13</span>
          <p class=\"item-description\">
            Hedgerow Jelly, Mustard Fruit and Pistachio
          </p>
        </div>
        <div class=\"menu-item\">
          <span class=\"item-name\">Lasagne of Rabbit Shoulder</span>
          <span class=\"item-price\">£12</span>
          <p class=\"item-description\">Mushrooms, Riesling and Thyme</p>
        </div>
        <div class=\"menu-item\">
          <span class=\"item-name\">Grilled Beef Tongue</span>
          <span class=\"item-price\">£14</span>
          <p class=\"item-description\">Quince, Aged Vinegar and Beetroot</p>
        </div>
      </article>

      <!-- Second Course Menu -->
      <article class=\"menu-food\">
        <img src=\"/public/info package/images/food/food-service-2.jpeg\" alt=\"Second Menu Supplementary Image\" />
        <h2><em>Second Course</em></h2>
        <div class=\"menu-item\">
          <span class=\"item-name\">Roast Cornish Monkfish</span>
          <span class=\"item-price\">£28</span>
          <p class=\"item-description\">QCheek, Butternut Squash and Sage</p>
        </div>
        <div class=\"menu-item\">
          <span class=\"item-name\">Our Iberian Pork</span>
          <span class=\"item-price\">£32</span>
          <p class=\"item-description\">
            Jerusalem Artichoke and Pickled Walnuts
          </p>
        </div>
        <div class=\"menu-item\">
          <span class=\"item-name\">Wareham Dorset Sika Deer</span>
          <span class=\"item-price\">£35</span>
          <p class=\"item-description\">Pale Ale, Prune and Spring Onion</p>
        </div>
        <div class=\"menu-item\">
          <span class=\"item-name\">Short Rib of Red Ruby Beef</span>
          <span class=\"item-price\">£35</span>
          <p class=\"item-description\">
            Spinach, Chanterelles and Horseradish
          </p>
        </div>
      </article>

      <!-- Third Course Menu -->
      <article class=\"menu-food\">
        <img src=\"/public/info package/images/food/food-3.jpeg\" alt=\"Third Menu Supplementary Image\" />
        <h2><em>Third Course</em></h2>
        <div class=\"menu-item\">
          <span class=\"item-name\">Apple Parfait</span>
          <span class=\"item-price\">£8</span>
          <p class=\"item-description\">Shortbread, Hazelnuts and Sherry</p>
        </div>
        <div class=\"menu-item\">
          <span class=\"item-name\">Plum Ripple Ice Cream</span>
          <span class=\"item-price\">£7</span>
          <p class=\"item-description\">
            Caramelised Pastry, Almond Cream and Camomile
          </p>
        </div>
        <div class=\"menu-item\">
          <span class=\"item-name\">Custard Flan</span>
          <span class=\"item-price\">£8</span>
          <p class=\"item-description\">Quince and Crème Fraîche</p>
        </div>
        <div class=\"menu-item\">
          <span class=\"item-name\">Selection of Cheese</span>
          <span class=\"item-price\">£12</span>
          <p class=\"item-description\">
            Tunworth, Lincolnshire Poacher, Beauvale Blue Crackers and
            Homemade Chutney
          </p>
        </div>
      </article>

      <!-- Tasting Menu -->
      <article class=\"menu-food\">
        <img src=\"/public/info package/images/food/food-service-1.jpeg\" alt=\"Tasting Menu Supplementary image\" />
        <h2><em>Tasting Menu</em></h2>
        <div class=\"menu-item\">
          <span class=\"item-name\">Menu A:</span>
          <span class=\"item-price\">£60</span>
          <ul class=\"item-description\">
            <li>Warm Onion Tart</li>
            <li>Lasagne of Rabbit Shoulder</li>
            <li>Roast Cornish Monkfish</li>
            <li>Wareham Dorset Sika Deer</li>
            <li>Apple Parfait</li>
          </ul>
        </div>
        <div class=\"menu-item\">
          <span class=\"item-name\">Menu B:</span>
          <span class=\"item-price\">£85</span>
          <ul class=\"item-description\">
            <li>Warm Onion Tart</li>
            <li>Lasagne of Rabbit Shoulder</li>
            <li>Grilled Beef Tongue</li>
            <li>Roast Cornish Monkfish</li>
            <li>Wareham Dorset Sika Deer</li>
            <li>Our Iberian Pork</li>
            <li>Apple Parfait</li>
          </ul>
        </div>
      </article>

    </section>



    <!-- Meet the team showcase as a side note-->
    <aside class=\"info\" style=\"margin-top: 15px;\">

      <div class=\"image-grid\">
        <div class=\"section\">
          <img src=\"/public/info package/images/people/ana-cooking.jpeg\"
            alt=\"Image one of the chefs cooking on a round pan \" />
        </div>

        <div class=\"section\">
          <img src=\"/public/info package/images/people/ana-plating.jpeg\"
            alt=\"Image of chef plating the food in a luxary manner\" />
        </div>

        <div class=\"section\">
          <img src=\"/public/info package/images/people/robert-pour.jpeg\" alt=\"Image of bartendender pouring wine\" />
        </div>
        <div class=\"section\">
          <img src=\"/public/info package/images/people/robert-check.jpeg\"
            alt=\"Image bartendender looking at a tilted glass of wine\" />
        </div>
      </div>
    </aside>
  </main>



  <!-- Footer Section -->
  {{include('footer.html')}}

</body>


</html>", "diner/menu.html", "/var/www/html/mounted/website/src/Views/diner/menu.html");
    }
}
