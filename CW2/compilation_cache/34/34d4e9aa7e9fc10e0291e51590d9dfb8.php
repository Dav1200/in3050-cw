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

/* staffportal/staff-dashboard.html */
class __TwigTemplate_b8ef1dc1d20fcc9c1c42c44254bb58a5 extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</title>
    <link rel=\"stylesheet\" href=\"/public/css/staff/StaffShared.css\">
</head>

<body>

    ";
        // line 13
        yield Twig\Extension\CoreExtension::include($this->env, $context, "/staffportal/header.html");
        yield "


    <main>
        <!-- section to show list of quick cards for services setup, for today tomorrow and the day after tomrrow -->
        <section>
            <h1 class=\"\">Dashboard </h1>
            <div class=\"container\">
                ";
        // line 21
        $context["days"] = ["Today Services" =>         // line 22
($context["today"] ?? null), "Tomorrow Services" =>         // line 23
($context["tomorrow"] ?? null), "Day After Services" =>         // line 24
($context["day_after_tomorrow"] ?? null)];
        // line 26
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["days"] ?? null));
        foreach ($context['_seq'] as $context["day"] => $context["services"]) {
            // line 27
            yield "                <div class=\"card\">
                    <h3>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["day"], "html", null, true);
            yield "</h3>
                    ";
            // line 29
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["services"]) == 0)) {
                // line 30
                yield "                    <strong>No service setup</strong>
                    ";
            } else {
                // line 32
                yield "                    ";
                $context["first_day"] = (($_v0 = $context["services"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null);
                // line 33
                yield "                    <strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["first_day"] ?? null), "service_date", [], "any", false, false, false, 33), "html", null, true);
                yield "</strong> <br>

                    ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["services"]);
                foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                    // line 36
                    yield "
                    <div class=\"meal\">
                        <strong>";
                    // line 38
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 38), "html", null, true);
                    yield "</strong>
                        <div class=\"meal-time\">";
                    // line 39
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "time_start", [], "any", false, false, false, 39), "html", null, true);
                    yield " - ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "time_end", [], "any", false, false, false, 39), "html", null, true);
                    yield "</div>
                    </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['service'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                yield "                    ";
            }
            // line 43
            yield "                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['day'], $context['services'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "            </div>
        </section>
        <!-- information about the bookings table -->
        <section>
            <div class=\"story\">
                <h3 class=\"\">Services List</h3>
                <p>List of services for the day alongside their times and total number of bookings made. To view more
                    indepth for each service please click the Details Button which will expand each service. </p>
            </div>

            <!-- table to show bookings for today quick look -->
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
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["services"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 69
            yield "                    <tr>
                        <td>";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 70), "html", null, true);
            yield "</td>
                        <td>";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "total_count", [], "any", false, false, false, 71), "html", null, true);
            yield "</td>
                        <td>";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "time_start", [], "any", false, false, false, 72), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "time_end", [], "any", false, false, false, 72), "html", null, true);
            yield "</td>
                        <td>";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service_date", [], "any", false, false, false, 73), "html", null, true);
            yield "</td>
                        <td><button onclick=\"location.href='/staffportal/bookings'\">Details</button></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "                </tbody>
            </table>
        </section>

    </main>

    ";
        // line 83
        yield Twig\Extension\CoreExtension::include($this->env, $context, "/staffportal/footer.html");
        yield "
</body>

</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "staffportal/staff-dashboard.html";
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
        return array (  199 => 83,  191 => 77,  181 => 73,  175 => 72,  171 => 71,  167 => 70,  164 => 69,  160 => 68,  135 => 45,  128 => 43,  125 => 42,  114 => 39,  110 => 38,  106 => 36,  102 => 35,  96 => 33,  93 => 32,  89 => 30,  87 => 29,  83 => 28,  80 => 27,  75 => 26,  73 => 24,  72 => 23,  71 => 22,  70 => 21,  59 => 13,  50 => 7,  42 => 1,);
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
        <!-- section to show list of quick cards for services setup, for today tomorrow and the day after tomrrow -->
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
        <!-- information about the bookings table -->
        <section>
            <div class=\"story\">
                <h3 class=\"\">Services List</h3>
                <p>List of services for the day alongside their times and total number of bookings made. To view more
                    indepth for each service please click the Details Button which will expand each service. </p>
            </div>

            <!-- table to show bookings for today quick look -->
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
", "staffportal/staff-dashboard.html", "/var/www/html/mounted/website/src/Views/staffportal/staff-dashboard.html");
    }
}
