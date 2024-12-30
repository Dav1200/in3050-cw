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

/* diner/Reservation.html */
class __TwigTemplate_7711a38dc7f31f3dc83b0afb8a23f6d4 extends Template
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
  <meta name=\"keywords\" content=\"Lancaster's Restaurant,luxury dining, gourmet food, best dinner Lancaster,Reservation\">

  <title>Lancaster - Reservation</title>
  <link rel=\"stylesheet\" href=\"/public/shared/index.css\" />
  <link rel=\"icon\" href=\"../info package/images/logos/Logoico.ico\" />
  <link rel=\"stylesheet\" href=\"/public/css/diner/Reservation.css\">
  <script src=\"https://kit.fontawesome.com/f11736a280.js\" crossorigin=\"anonymous\"></script>
</head>

<body>

  ";
        // line 21
        if (($context["show"] ?? null)) {
            // line 22
            yield "  ";
            yield from $this->loadTemplate("/diner/dinerheader.html", "diner/Reservation.html", 22)->unwrap()->yield($context);
            // line 23
            yield "  ";
        } else {
            // line 24
            yield "  ";
            yield from $this->loadTemplate("header.html", "diner/Reservation.html", 24)->unwrap()->yield($context);
            // line 25
            yield "  ";
        }
        // line 26
        yield "
  <main id=\"Reservation-content\">
    <!-- Main reservation container-->
    <section class=\" story container\">
      <div class=\"background-container\">
        <h2>Online booking</h2>
        <h1>RESERVATIONS </h1>
        <p>
          <span><b>Opening times</b></span>
          <br />
          <!-- Opening Restaurant Time for easy view -->
          <time datetime=\"07:30-23:00\">Mon – Fri: 07:30 am – 11:00 pm</time><br />
          <time datetime=\"09:00-23:00\">Sat: 9:00 am - 11:00 pm</time><br />
          <time datetime=\"11:30-22:00\">Sun: 11:30 am – 10:00 pm</time><br />
          <span>
            <i class=\"fa-solid fa-location-dot fa-lg\" style=\"color: #000000;\"></i>
            <b>52 Haymarket, London, SW1Y 4RP</b>
          </span>
        </p>
        <p>
          <!-- Restaurant Contact Information  -->
          For more information please contact <br> <span><b><a aria-label=\"Click to contact Reservation team\"
                href=\"mailto:Reservation@lancasters.com\" class=\"links\">Reservation@lancasters.com</a></b></span> 020
          0000 0000
        </p>
      </div>
      <!-- Reservation template form inspired view website-design.pdf contains essential details such as email phone, time date -->
      <div class=\"reservation-container\">
        <h2>Lancaster's Reservation</h2>
        <form action=\"/reservation/book\" method=\"post\">
          <!-- label for name -->
          <div class=\"form-group\">
            <label for=\"name\">Name</label>
            <input type=\"text\" id=\"name\" name=\"name\" required>
          </div>
          <!-- label for email -->
          <div class=\"form-group\">
            <label for=\"email\">Email</label>
            <!-- twig used to populate the field is user is logged in and its readonly, if not they can continue as guest -->
            ";
        // line 65
        if (($context["show"] ?? null)) {
            // line 66
            yield "            <input aria-label=\"Input for Your Email Address\" type=\"email\" id=\"email\" name=\"email\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["email"] ?? null), "html", null, true);
            yield "\"
              required readonly>
            ";
        } else {
            // line 69
            yield "            <input aria-label=\"Input for Your Email Address\" type=\"email\" id=\"email\" name=\"email\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["email"] ?? null), "html", null, true);
            yield "\"
              required>
            ";
        }
        // line 72
        yield "          </div>
          <!-- label for date -->
          <div class=\"form-group\">
            <label for=\"date\">Reservation Date</label>
            <input type=\"date\" id=\"date\" name=\"date\" required>
          </div>

          <div class=\"form-group\">
            <label for=\"service\">Service</label>
            <select style=\"width: 100%;\" id=\"service\" name=\"service\" required>
            
            </select>
          </div>

          <!-- label for time -->
          <div class=\"form-group\">
            <label for=\"time\">Reservation Time</label>
            <select style=\"width: 100%;\" id=\"time\" name=\"time\" required>

            </select>
          </div>
          <!-- label for seats -->
          <div class=\"form-group\">
            <label for=\"guests\">Seats Required</label>
            <input type=\"number\" id=\"guests\" name=\"guests\" min=\"1\" max=\"6\" required>
          </div>

          <!-- for phone number  -->

            <div class=\"form-group\">
            <label for=\"phone\">Phone Number (Optional)</label>
            <input type=\"tel\" id=\"phone\" name=\"phone\" pattern=\"^[0-9]{11}\$|^[0-9]{5}[\\s\\-]?[0-9]{6}\$\"
              title=\"Phone number should be 11 digits, with or without spaces or dashes\">
          </div>


          <!-- label for extra requests -->
          <div class=\"form-group\">
            <label for=\"requests\">Special Requests</label>
            <input type=\"text\" id=\"requests\" name=\"requests\" placeholder=\"Any special requests?\">
          </div>
          <!-- drop down to select service breakfast lunch dinner -->

          <div id=\"error-message\" style=\"color: red; display: none;\"></div>
          <div id=\"confirmationMessage\"></div>
          <!-- input button -->
          <div class=\"form-group\">
            <input aria-label=\"Button to reserve your booking\" class=\"red-button\" type=\"submit\" value=\"Reserve Now\"
              style=\"width: auto; font-size: 19px;\">
          </div>
        </form>
      </div>
    </section>
  </main>
  <!-- footer section to include all socials and contact information -->

  ";
        // line 128
        yield Twig\Extension\CoreExtension::include($this->env, $context, "footer.html");
        yield "
</body>

</html>

<script src=\"/public/js/diner/diner_reservation.js\"></script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "diner/Reservation.html";
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
        return array (  193 => 128,  135 => 72,  128 => 69,  121 => 66,  119 => 65,  78 => 26,  75 => 25,  72 => 24,  69 => 23,  66 => 22,  64 => 21,  42 => 1,);
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
  <meta name=\"keywords\" content=\"Lancaster's Restaurant,luxury dining, gourmet food, best dinner Lancaster,Reservation\">

  <title>Lancaster - Reservation</title>
  <link rel=\"stylesheet\" href=\"/public/shared/index.css\" />
  <link rel=\"icon\" href=\"../info package/images/logos/Logoico.ico\" />
  <link rel=\"stylesheet\" href=\"/public/css/diner/Reservation.css\">
  <script src=\"https://kit.fontawesome.com/f11736a280.js\" crossorigin=\"anonymous\"></script>
</head>

<body>

  {% if show %}
  {% include '/diner/dinerheader.html' %}
  {% else %}
  {% include 'header.html' %}
  {% endif %}

  <main id=\"Reservation-content\">
    <!-- Main reservation container-->
    <section class=\" story container\">
      <div class=\"background-container\">
        <h2>Online booking</h2>
        <h1>RESERVATIONS </h1>
        <p>
          <span><b>Opening times</b></span>
          <br />
          <!-- Opening Restaurant Time for easy view -->
          <time datetime=\"07:30-23:00\">Mon – Fri: 07:30 am – 11:00 pm</time><br />
          <time datetime=\"09:00-23:00\">Sat: 9:00 am - 11:00 pm</time><br />
          <time datetime=\"11:30-22:00\">Sun: 11:30 am – 10:00 pm</time><br />
          <span>
            <i class=\"fa-solid fa-location-dot fa-lg\" style=\"color: #000000;\"></i>
            <b>52 Haymarket, London, SW1Y 4RP</b>
          </span>
        </p>
        <p>
          <!-- Restaurant Contact Information  -->
          For more information please contact <br> <span><b><a aria-label=\"Click to contact Reservation team\"
                href=\"mailto:Reservation@lancasters.com\" class=\"links\">Reservation@lancasters.com</a></b></span> 020
          0000 0000
        </p>
      </div>
      <!-- Reservation template form inspired view website-design.pdf contains essential details such as email phone, time date -->
      <div class=\"reservation-container\">
        <h2>Lancaster's Reservation</h2>
        <form action=\"/reservation/book\" method=\"post\">
          <!-- label for name -->
          <div class=\"form-group\">
            <label for=\"name\">Name</label>
            <input type=\"text\" id=\"name\" name=\"name\" required>
          </div>
          <!-- label for email -->
          <div class=\"form-group\">
            <label for=\"email\">Email</label>
            <!-- twig used to populate the field is user is logged in and its readonly, if not they can continue as guest -->
            {% if show %}
            <input aria-label=\"Input for Your Email Address\" type=\"email\" id=\"email\" name=\"email\" value=\"{{email}}\"
              required readonly>
            {% else %}
            <input aria-label=\"Input for Your Email Address\" type=\"email\" id=\"email\" name=\"email\" value=\"{{email}}\"
              required>
            {% endif %}
          </div>
          <!-- label for date -->
          <div class=\"form-group\">
            <label for=\"date\">Reservation Date</label>
            <input type=\"date\" id=\"date\" name=\"date\" required>
          </div>

          <div class=\"form-group\">
            <label for=\"service\">Service</label>
            <select style=\"width: 100%;\" id=\"service\" name=\"service\" required>
            
            </select>
          </div>

          <!-- label for time -->
          <div class=\"form-group\">
            <label for=\"time\">Reservation Time</label>
            <select style=\"width: 100%;\" id=\"time\" name=\"time\" required>

            </select>
          </div>
          <!-- label for seats -->
          <div class=\"form-group\">
            <label for=\"guests\">Seats Required</label>
            <input type=\"number\" id=\"guests\" name=\"guests\" min=\"1\" max=\"6\" required>
          </div>

          <!-- for phone number  -->

            <div class=\"form-group\">
            <label for=\"phone\">Phone Number (Optional)</label>
            <input type=\"tel\" id=\"phone\" name=\"phone\" pattern=\"^[0-9]{11}\$|^[0-9]{5}[\\s\\-]?[0-9]{6}\$\"
              title=\"Phone number should be 11 digits, with or without spaces or dashes\">
          </div>


          <!-- label for extra requests -->
          <div class=\"form-group\">
            <label for=\"requests\">Special Requests</label>
            <input type=\"text\" id=\"requests\" name=\"requests\" placeholder=\"Any special requests?\">
          </div>
          <!-- drop down to select service breakfast lunch dinner -->

          <div id=\"error-message\" style=\"color: red; display: none;\"></div>
          <div id=\"confirmationMessage\"></div>
          <!-- input button -->
          <div class=\"form-group\">
            <input aria-label=\"Button to reserve your booking\" class=\"red-button\" type=\"submit\" value=\"Reserve Now\"
              style=\"width: auto; font-size: 19px;\">
          </div>
        </form>
      </div>
    </section>
  </main>
  <!-- footer section to include all socials and contact information -->

  {{ include('footer.html') }}
</body>

</html>

<script src=\"/public/js/diner/diner_reservation.js\"></script>", "diner/Reservation.html", "/var/www/html/mounted/website/src/Views/diner/Reservation.html");
    }
}
