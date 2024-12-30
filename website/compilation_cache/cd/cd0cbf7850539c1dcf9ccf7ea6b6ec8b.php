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

/* diner/reservation_email.html */
class __TwigTemplate_b611a5ce7d2ff90824a13d891b387557 extends Template
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
</head>
<body>
    
";
        // line 11
        yield Twig\Extension\CoreExtension::include($this->env, $context, "diner/dinerheader.html");
        yield "

<main class=\"story\">
    ";
        // line 14
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["reservation_result"] ?? null))) {
            // line 15
            yield "<h2>Reservation Confirmation</h2>
    <p>Hello ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rname"] ?? null), "html", null, true);
            yield ",</p>
    <p>Thank you for your reservation! Here are the details:</p>
    <ul>
        <li><strong>Date:</strong> ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rdate"] ?? null), "html", null, true);
            yield "</li>
        <li><strong>Service:</strong> ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rservice"] ?? null), "html", null, true);
            yield "</li>
        <li><strong>Time:</strong> ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rtime"] ?? null), "html", null, true);
            yield "</li>
        <li><strong>Guests:</strong> ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rguests"] ?? null), "html", null, true);
            yield "</li>
  
    </ul>
    <p>We look forward to seeing you!</p>
    <p>Best regards,<br>Lancaster Reservations</p>


<!-- Check if there's a reservation result to display -->

    <div class=\"reservation-confirmation\">
        <!-- Display the reservation result message -->
        ";
            // line 33
            yield ($context["reservation_result"] ?? null);
            yield "
    </div>
    
    <button class=\"red-button\" onclick=\"window.location.href='/reservation'\">Go Back</button>
";
        }
        // line 38
        yield "

</main>
";
        // line 41
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
        return "diner/reservation_email.html";
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
        return array (  113 => 41,  108 => 38,  100 => 33,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  68 => 16,  65 => 15,  63 => 14,  57 => 11,  49 => 6,  42 => 1,);
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
</head>
<body>
    
{{include('diner/dinerheader.html')}}

<main class=\"story\">
    {% if reservation_result is not empty %}
<h2>Reservation Confirmation</h2>
    <p>Hello {{rname}},</p>
    <p>Thank you for your reservation! Here are the details:</p>
    <ul>
        <li><strong>Date:</strong> {{rdate}}</li>
        <li><strong>Service:</strong> {{rservice}}</li>
        <li><strong>Time:</strong> {{rtime}}</li>
        <li><strong>Guests:</strong> {{rguests}}</li>
  
    </ul>
    <p>We look forward to seeing you!</p>
    <p>Best regards,<br>Lancaster Reservations</p>


<!-- Check if there's a reservation result to display -->

    <div class=\"reservation-confirmation\">
        <!-- Display the reservation result message -->
        {{ reservation_result|raw }}
    </div>
    
    <button class=\"red-button\" onclick=\"window.location.href='/reservation'\">Go Back</button>
{% endif %}


</main>
{{include('footer.html')}}
</body>
</html>", "diner/reservation_email.html", "/var/www/html/mounted/website/src/Views/diner/reservation_email.html");
    }
}
