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

/* diner/reservation-email.html */
class __TwigTemplate_9694922c69368f95c2478256a9a5ff5b extends Template
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
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pagetitle"] ?? null), "html", null, true);
        yield "</title>
    <link rel=\"stylesheet\" href=\"/public/shared/index.css\" />
</head>

<body>

    ";
        // line 13
        yield Twig\Extension\CoreExtension::include($this->env, $context, "diner/diner-header.html");
        yield "
    <!-- template for reservation email, this is just to showcase how email will look if they were actually sent -->
    <main class=\"story\">
        ";
        // line 16
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["reservation_result"] ?? null))) {
            // line 17
            yield "        <h2>Reservation Confirmation</h2>
        <p>Hello ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rname"] ?? null), "html", null, true);
            yield ",</p>
        <p>Thank you for your reservation! Here are the details:</p>
        <ul>
            <li><strong>Date:</strong> ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rdate"] ?? null), "html", null, true);
            yield "</li>
            <li><strong>Service:</strong> ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rservice"] ?? null), "html", null, true);
            yield "</li>
            <li><strong>Time:</strong> ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rtime"] ?? null), "html", null, true);
            yield "</li>
            <li><strong>Guests:</strong> ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rguests"] ?? null), "html", null, true);
            yield "</li>

        </ul>
        <p>We look forward to seeing you!</p>
        <p>Best regards,<br>Lancaster Reservations</p>


        <!-- Check if there's a reservation result to display -->

        <div class=\"reservation-confirmation\">
            <!-- Display the reservation result message -->
            ";
            // line 35
            yield ($context["reservation_result"] ?? null);
            yield "
        </div>

       
        <a href=\"https://calendar.google.com/calendar/r/eventedit?text=Lancaster+Reservation&dates=";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["combined_datetime"] ?? null), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["end_datetime"] ?? null), "html", null, true);
            yield "&details=We+look+forward+to+serving+you&location=Event+Location\" target=\"_blank\">
            Add to Google Calendar
        </a><br> 

        <a href=\"https://outlook.live.com/calendar/0/deeplink/compose?subject=Lancaster+Reservation&startdt=";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["combined_datetime"] ?? null), "html", null, true);
            yield "&enddt=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["end_datetime"] ?? null), "html", null, true);
            yield "&body=Your+reservation+at+Lancaster&location=Lancaster+Restaurant\" target=\"_blank\">
            Add to Outlook Calendar
        </a><br> 
        
        <a href=\"https://calendar.yahoo.com/?v=60&view=d&type=20&title=Lancaster+Reservation&st=";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["combined_datetime"] ?? null), "html", null, true);
            yield "&et=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["end_datetime"] ?? null), "html", null, true);
            yield "&desc=Your+reservation+at+Lancaster&in_loc=Lancaster+Restaurant\" target=\"_blank\">
            Add to Yahoo Calendar
       <br> </a>
          

        <button class=\"red-button\" onclick=\"window.location.href='/reservation'\">Go Back</button>
        ";
        }
        // line 54
        yield "

    </main>
    ";
        // line 57
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
        return "diner/reservation-email.html";
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
        return array (  144 => 57,  139 => 54,  127 => 47,  118 => 43,  109 => 39,  102 => 35,  88 => 24,  84 => 23,  80 => 22,  76 => 21,  70 => 18,  67 => 17,  65 => 16,  59 => 13,  50 => 7,  42 => 1,);
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

    {{include('diner/diner-header.html')}}
    <!-- template for reservation email, this is just to showcase how email will look if they were actually sent -->
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

       
        <a href=\"https://calendar.google.com/calendar/r/eventedit?text=Lancaster+Reservation&dates={{ combined_datetime }}/{{ end_datetime }}&details=We+look+forward+to+serving+you&location=Event+Location\" target=\"_blank\">
            Add to Google Calendar
        </a><br> 

        <a href=\"https://outlook.live.com/calendar/0/deeplink/compose?subject=Lancaster+Reservation&startdt={{ combined_datetime }}&enddt={{ end_datetime }}&body=Your+reservation+at+Lancaster&location=Lancaster+Restaurant\" target=\"_blank\">
            Add to Outlook Calendar
        </a><br> 
        
        <a href=\"https://calendar.yahoo.com/?v=60&view=d&type=20&title=Lancaster+Reservation&st={{ combined_datetime }}&et={{ end_datetime }}&desc=Your+reservation+at+Lancaster&in_loc=Lancaster+Restaurant\" target=\"_blank\">
            Add to Yahoo Calendar
       <br> </a>
          

        <button class=\"red-button\" onclick=\"window.location.href='/reservation'\">Go Back</button>
        {% endif %}


    </main>
    {{include('footer.html')}}
</body>

</html>", "diner/reservation-email.html", "/var/www/html/mounted/website/src/Views/diner/reservation-email.html");
    }
}
