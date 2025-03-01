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

/* staffportal/StaffDashboard.html */
class __TwigTemplate_08c78aa6e3e3bd43e8ca4554862adc03 extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</title>
    <link rel=\"stylesheet\" href=\"/public/css/staff/StaffShared.css\">
</head>
<body>

";
        // line 11
        yield Twig\Extension\CoreExtension::include($this->env, $context, "/staffportal/header.html");
        yield "


<main>
    <section>
    <h1 class=\"\">Dashboard </h1>
        <div class=\"container\">
        ";
        // line 18
        $context["days"] = ["Today Services" =>         // line 19
($context["today"] ?? null), "Tomorrow Services" =>         // line 20
($context["tomorrow"] ?? null), "Day After Services" =>         // line 21
($context["day_after_tomorrow"] ?? null)];
        // line 23
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["days"] ?? null));
        foreach ($context['_seq'] as $context["day"] => $context["services"]) {
            // line 24
            yield "        <div class=\"card\">
            <h3>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["day"], "html", null, true);
            yield "</h3>
            ";
            // line 26
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["services"]) == 0)) {
                // line 27
                yield "            <strong>No service setup</strong>
            ";
            } else {
                // line 29
                yield "            ";
                $context["first_day"] = (($_v0 = $context["services"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null);
                // line 30
                yield "            <strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["first_day"] ?? null), "service_date", [], "any", false, false, false, 30), "html", null, true);
                yield "</strong> <br>
           
            ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["services"]);
                foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                    // line 33
                    yield "            
            <div class=\"meal\">
                <strong>";
                    // line 35
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 35), "html", null, true);
                    yield "</strong>
                <div class=\"meal-time\">";
                    // line 36
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "time_start", [], "any", false, false, false, 36), "html", null, true);
                    yield " - ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "time_end", [], "any", false, false, false, 36), "html", null, true);
                    yield "</div>
            </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['service'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                yield "            ";
            }
            // line 40
            yield "        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['day'], $context['services'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "    </div>
    </section>

    <section>
    <div class=\"story\">
        <h3 class=\"\">Services List</h3>
        <p>List of services for the day alongside their times and total number of bookings made. To view more indepth for each service please click the Details Button which will expand each service. </p>
    </div>


    <table>
        <thead>
            <tr>
                <th>Service Name</th>
                <th>Total Bookings</th>
                <th>Service Time</th>
                <th>Service Date</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
            <!-- using twig to iterate and fulfill the table-->
            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["services"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 65
            yield "            <tr>
                <td>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 66), "html", null, true);
            yield "</td>
                <td>";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "total_count", [], "any", false, false, false, 67), "html", null, true);
            yield "</td>
                <td>";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "time_start", [], "any", false, false, false, 68), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "time_end", [], "any", false, false, false, 68), "html", null, true);
            yield "</td>
                <td>";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service_date", [], "any", false, false, false, 69), "html", null, true);
            yield "</td>
                <td><button onclick=\"location.href='/staffportal/bookings'\">Details</button></td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "        </tbody>
    </table>
</section>

</main>

";
        // line 79
        yield Twig\Extension\CoreExtension::include($this->env, $context, "/staffportal/footer.html");
        yield "
</body>
</html>
<script src=\"/public/js/staff/StaffDashboard.js\"></script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "staffportal/StaffDashboard.html";
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
        return array (  195 => 79,  187 => 73,  177 => 69,  171 => 68,  167 => 67,  163 => 66,  160 => 65,  156 => 64,  132 => 42,  125 => 40,  122 => 39,  111 => 36,  107 => 35,  103 => 33,  99 => 32,  93 => 30,  90 => 29,  86 => 27,  84 => 26,  80 => 25,  77 => 24,  72 => 23,  70 => 21,  69 => 20,  68 => 19,  67 => 18,  57 => 11,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{{title}}</title>
    <link rel=\"stylesheet\" href=\"/public/css/staff/StaffShared.css\">
</head>
<body>

{{ include('/staffportal/header.html') }}


<main>
    <section>
    <h1 class=\"\">Dashboard </h1>
        <div class=\"container\">
        {% set days = {
        'Today Services': today,
        'Tomorrow Services': tomorrow,
        'Day After Services': day_after_tomorrow
        } %}
        {% for day, services in days %}
        <div class=\"card\">
            <h3>{{ day }}</h3>
            {% if services|length == 0 %}
            <strong>No service setup</strong>
            {% else %}
            {% set first_day = services[0] %}
            <strong>{{ first_day.service_date }}</strong> <br>
           
            {% for service in services %}
            
            <div class=\"meal\">
                <strong>{{ service.service }}</strong>
                <div class=\"meal-time\">{{ service.time_start }} - {{service.time_end}}</div>
            </div>
            {% endfor %}
            {% endif %}
        </div>
        {% endfor %}
    </div>
    </section>

    <section>
    <div class=\"story\">
        <h3 class=\"\">Services List</h3>
        <p>List of services for the day alongside their times and total number of bookings made. To view more indepth for each service please click the Details Button which will expand each service. </p>
    </div>


    <table>
        <thead>
            <tr>
                <th>Service Name</th>
                <th>Total Bookings</th>
                <th>Service Time</th>
                <th>Service Date</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
            <!-- using twig to iterate and fulfill the table-->
            {% for service in services %}
            <tr>
                <td>{{ service.service }}</td>
                <td>{{ service.total_count }}</td>
                <td>{{ service.time_start }} - {{service.time_end}}</td>
                <td>{{ service.service_date }}</td>
                <td><button onclick=\"location.href='/staffportal/bookings'\">Details</button></td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</section>

</main>

{{ include('/staffportal/footer.html') }}
</body>
</html>
<script src=\"/public/js/staff/StaffDashboard.js\"></script>", "staffportal/StaffDashboard.html", "/var/www/html/mounted/website/src/Views/staffportal/StaffDashboard.html");
    }
}
