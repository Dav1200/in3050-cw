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

/* diner/dinerhub.html */
class __TwigTemplate_5f8344861b429cb476109706ba18d8ef extends Template
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
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pagetitle"] ?? null), "html", null, true);
        yield "</title>
    <link rel=\"stylesheet\" href=\"/public/shared/index.css\" />
    <link rel=\"stylesheet\" href=\"/public/css/diner/dinerhub.css\" />
</head>
<body>
    
";
        // line 12
        yield from $this->loadTemplate("diner/dinerheader.html", "diner/dinerhub.html", 12)->unwrap()->yield($context);
        // line 13
        yield "<main>

<section class=\"story\" style=\"text-align: center;\">
<h1 >Welcome to Diner Hub ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["dinername"] ?? null), "html", null, true);
        yield "</h1>
<p>Here you can view your reservations, make new reservations, and update your profile.</p>
</section>

<section class=\"hub\">
 
    <div class=\"hub-item\">
        <h2>New Reservation</h2>
        <p>Make a new reservation</p>
        <a href=\"/reservation\">Make Reservation</a>
    </div>

    <div class=\"hub-item\">
        <h2>Update Password</h2>
        <p>Set a new password </p>
        <a href=\"/changepassword\">Update</a>
    </div>

</section>


<section class=\"story\">
<h1>Your Reservations Histroy</h1>

<div style=\"max-height: 500px; overflow-y: auto\">
    <table id=\"reservation-table\">
      <thead>
        <tr>
          <th>Email</th>
          <th>Booking Date</th>
          <th>Service</th>
          <th>Time</th>
          <th>Diners</th>
          <th>Phone Number</th>
          <th>Extra Requirements</th>
        </tr>
      </thead>
      <tbody id=\"table-body\">
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["reservations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 55
            yield "        <tr>
          <td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "email", [], "any", false, false, false, 56), "html", null, true);
            yield "</td>
          <td>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "reservation_date", [], "any", false, false, false, 57), "html", null, true);
            yield "</td>
          <td>";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "service", [], "any", false, false, false, 58), "html", null, true);
            yield "</td>
          <td>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "time_booked", [], "any", false, false, false, 59), "html", null, true);
            yield "</td>
          <td>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "party_size", [], "any", false, false, false, 60), "html", null, true);
            yield "</td>
          <td>";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "phone_number", [], "any", false, false, false, 61), "html", null, true);
            yield "</td>
          <td>";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "extra_requirements", [], "any", false, false, false, 62), "html", null, true);
            yield "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "

      </tbody>
    </table>
  </div>
</section>


</main>



";
        // line 77
        yield from $this->loadTemplate("footer.html", "diner/dinerhub.html", 77)->unwrap()->yield($context);
        // line 78
        yield "</body>
</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "diner/dinerhub.html";
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
        return array (  162 => 78,  160 => 77,  146 => 65,  137 => 62,  133 => 61,  129 => 60,  125 => 59,  121 => 58,  117 => 57,  113 => 56,  110 => 55,  106 => 54,  65 => 16,  60 => 13,  58 => 12,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{{pagetitle}}</title>
    <link rel=\"stylesheet\" href=\"/public/shared/index.css\" />
    <link rel=\"stylesheet\" href=\"/public/css/diner/dinerhub.css\" />
</head>
<body>
    
{% include 'diner/dinerheader.html' %}
<main>

<section class=\"story\" style=\"text-align: center;\">
<h1 >Welcome to Diner Hub {{dinername}}</h1>
<p>Here you can view your reservations, make new reservations, and update your profile.</p>
</section>

<section class=\"hub\">
 
    <div class=\"hub-item\">
        <h2>New Reservation</h2>
        <p>Make a new reservation</p>
        <a href=\"/reservation\">Make Reservation</a>
    </div>

    <div class=\"hub-item\">
        <h2>Update Password</h2>
        <p>Set a new password </p>
        <a href=\"/changepassword\">Update</a>
    </div>

</section>


<section class=\"story\">
<h1>Your Reservations Histroy</h1>

<div style=\"max-height: 500px; overflow-y: auto\">
    <table id=\"reservation-table\">
      <thead>
        <tr>
          <th>Email</th>
          <th>Booking Date</th>
          <th>Service</th>
          <th>Time</th>
          <th>Diners</th>
          <th>Phone Number</th>
          <th>Extra Requirements</th>
        </tr>
      </thead>
      <tbody id=\"table-body\">
        {% for reservation in reservations %}
        <tr>
          <td>{{reservation.email}}</td>
          <td>{{reservation.reservation_date}}</td>
          <td>{{reservation.service}}</td>
          <td>{{reservation.time_booked}}</td>
          <td>{{reservation.party_size}}</td>
          <td>{{reservation.phone_number}}</td>
          <td>{{reservation.extra_requirements}}</td>
        </tr>
        {% endfor %}


      </tbody>
    </table>
  </div>
</section>


</main>



{% include 'footer.html' %}
</body>
</html>", "diner/dinerhub.html", "/var/www/html/mounted/website/src/Views/diner/dinerhub.html");
    }
}
