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

/* staffportal/bookings.html */
class __TwigTemplate_3d6dcc1ab87dc0d04c048b1cb7b2d5b0 extends Template
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
        // line 14
        yield Twig\Extension\CoreExtension::include($this->env, $context, "/staffportal/header.html");
        yield "

    <main>

        <section class=\"section-fix\">
            <h1>Todays Booking ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["todays_Date"] ?? null), "html", null, true);
        yield "</h1>
            <div class=\"story\">
                <h3>Introduction: </h3>
                <p>View today's <strong>breakfast</strong>, <strong>lunch</strong>, and <strong>dinner</strong> reservations below. Each section lists the <strong>service type</strong>, <strong>booking name</strong>, <strong>email</strong>, <strong>phone number</strong>, <strong>service date</strong>, <strong>time booked</strong>, <strong>party size</strong>, <strong>tables booked</strong>, and any <strong>extra requirements</strong>. Click the button below to see the next service with valid reservation.</p>
                <button onclick=\"openOverlay()\" class=\"red-button\">Next Service List</button>
            </div>
        </section>

        <!-- section for the overlay to show the next reservation list for next service if any -->
        
        <section id=\"overlay-reservation\" class=\"overlay\" >
            <div class=\"overlay-content\" >
        
                <table style=\"width: 100%;\">
                    <thead>
                        <tr>
                            <th colspan=\"9\" class=\"remove-th-space\"\">Next Service ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v0 = ($context["next_Service"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "service", [], "any", false, false, false, 35), "html", null, true);
        yield "</th>
                        </tr>
                        <tr>
                            <th>Service</th>
                            <th>Booking Name</th>
                            <th>Email</th>
                            <th>Phone No (Optional)</th>
                            <th>Service Date</th>
                            <th>Time Booked</th>
                            <th>Party Size</th>
                            <th>Tables Booked</th>
                            <th>Extra Requirements</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["next_Service"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 51
            yield "                        <tr>
                            <td>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "service", [], "any", false, false, false, 52), "html", null, true);
            yield "</td>
                            <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "name", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                            <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "email", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                            <td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "phone", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                            <td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "reservation_date", [], "any", false, false, false, 56), "html", null, true);
            yield "</td>
                            <td>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "time_booked", [], "any", false, false, false, 57), "html", null, true);
            yield "</td>
                            <td>";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "party_size", [], "any", false, false, false, 58), "html", null, true);
            yield "</td>
                            <td>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "tables", [], "any", false, false, false, 59), "html", null, true);
            yield "</td>
                            <td>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "extra_requirements", [], "any", false, false, false, 60), "html", null, true);
            yield "</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['booking'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "
                       

                  
                    </tbody>
        
                </table>
        
                <div class=\"sticky-buttons\">
                    <button class=\"red-button\" onclick=\"closeOverlay()\">Close</button>
                    <button class=\"red-button\" onclick=\"printList()\" >Print List</button>
                </div>
            </div>
           
        </section>


        <section class=\"section-fix\">
            <table style=\" margin-bottom: 60px;\">
                <thead>
                    <tr>
                        <th colspan=\"9\" class=\"remove-th-space\">Breakfast
                            Bookings</th>
                    </tr>
                    <tr>
                        <th>Service</th>
                        <th>Booking Name</th>
                        <th>Email</th>
                        <th>Phone No (Optional)</th>
                        <th>Service Date</th>
                        <th>Time Booked</th>
                        <th>Party Size</th>
                        <th>Tables Booked</th>
                        <th>Extra Requirements</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["bookings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 101
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "service", [], "any", false, false, false, 101) == "Breakfast")) {
                // line 102
                yield "                    <tr>
                        <td>";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "service", [], "any", false, false, false, 103), "html", null, true);
                yield "</td>
                        <td>";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "name", [], "any", false, false, false, 104), "html", null, true);
                yield "</td>
                        <td>";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "email", [], "any", false, false, false, 105), "html", null, true);
                yield "</td>
                        <td>";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "phone", [], "any", false, false, false, 106), "html", null, true);
                yield "</td>
                        <td>";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "reservation_date", [], "any", false, false, false, 107), "html", null, true);
                yield "</td>
                        <td>";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "time_booked", [], "any", false, false, false, 108), "html", null, true);
                yield "</td>
                        <td>";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "party_size", [], "any", false, false, false, 109), "html", null, true);
                yield "</td>
                        <td>";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "tables", [], "any", false, false, false, 110), "html", null, true);
                yield "</td>
                        <td>";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "extra_requirements", [], "any", false, false, false, 111), "html", null, true);
                yield "</td>
                    </tr>
                    ";
            }
            // line 114
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['booking'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        yield "                </tbody>

            </table>

        </section>


        <section class=\"section-fix\">


            <table style=\" margin-bottom: 60px;\">
                <thead>
                    <tr>
                        <th colspan=\"9\" class=\"remove-th-space\"\">Lunch Bookings
                        </th>
                    </tr>
                    <tr>
                        <th>Service</th>
                        <th>Booking Name</th>
                        <th>Email</th>
                        <th>Phone No (Optional)</th>
                        <th>Service Date</th>
                        <th>Time Booked</th>
                        <th>Party Size</th>
                        <th>Tables Booked</th>
                        <th>Extra Requirements</th>
                    </tr>
                </thead>
                <tbody>

                    ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["bookings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 146
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "service", [], "any", false, false, false, 146) == "Lunch")) {
                // line 147
                yield "                    <tr>
                        <td>";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "service", [], "any", false, false, false, 148), "html", null, true);
                yield "</td>
                        <td>";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "name", [], "any", false, false, false, 149), "html", null, true);
                yield "</td>
                        <td>";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "email", [], "any", false, false, false, 150), "html", null, true);
                yield "</td>
                        <td>";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "phone", [], "any", false, false, false, 151), "html", null, true);
                yield "</td>
                        <td>";
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "reservation_date", [], "any", false, false, false, 152), "html", null, true);
                yield "</td>
                        <td>";
                // line 153
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "time_booked", [], "any", false, false, false, 153), "html", null, true);
                yield "</td>
                        <td>";
                // line 154
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "party_size", [], "any", false, false, false, 154), "html", null, true);
                yield "</td>
                        <td>";
                // line 155
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "tables", [], "any", false, false, false, 155), "html", null, true);
                yield "</td>
                        <td>";
                // line 156
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "extra_requirements", [], "any", false, false, false, 156), "html", null, true);
                yield "</td>
                    </tr>
                    ";
            }
            // line 159
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['booking'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        yield "
                </tbody>
            </table>
        </section>


        <section class=\"section-fix\">



            <table>
                <thead>
                    <tr>
                        <th colspan=\"9\" class=\"remove-th-space\"\">Dinner Bookings
                        </th>
                    </tr>
                    <tr>
                        <th>Service</th>
                        <th>Booking Name</th>
                        <th>Email</th>
                        <th>Phone No (Optional)</th>
                        <th>Service Date</th>
                        <th>Time Booked</th>
                        <th>Party Size</th>
                        <th>Tables Booked</th>
                        <th>Extra Requirements</th>
                    </tr>
                </thead>
                <tbody>

                    ";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["bookings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 191
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "service", [], "any", false, false, false, 191) == "Dinner")) {
                // line 192
                yield "                    <tr>
                        <td>";
                // line 193
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "service", [], "any", false, false, false, 193), "html", null, true);
                yield "</td>
                        <td>";
                // line 194
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "name", [], "any", false, false, false, 194), "html", null, true);
                yield "</td>
                        <td>";
                // line 195
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "email", [], "any", false, false, false, 195), "html", null, true);
                yield "</td>
                        <td>";
                // line 196
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "phone", [], "any", false, false, false, 196), "html", null, true);
                yield "</td>
                        <td>";
                // line 197
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "reservation_date", [], "any", false, false, false, 197), "html", null, true);
                yield "</td>
                        <td>";
                // line 198
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "time_booked", [], "any", false, false, false, 198), "html", null, true);
                yield "</td>
                        <td>";
                // line 199
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "party_size", [], "any", false, false, false, 199), "html", null, true);
                yield "</td>
                        <td>";
                // line 200
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "tables", [], "any", false, false, false, 200), "html", null, true);
                yield "</td>
                        <td>";
                // line 201
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "extra_requirements", [], "any", false, false, false, 201), "html", null, true);
                yield "</td>
                    </tr>
                    ";
            }
            // line 204
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['booking'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        yield "
                </tbody>
            </table>
        </section>





    </main>


    ";
        // line 217
        yield Twig\Extension\CoreExtension::include($this->env, $context, "/staffportal/footer.html");
        yield "
</body>

</html>
<script src=\"/public/js/staff/StaffBookings.js\"></script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "staffportal/bookings.html";
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
        return array (  432 => 217,  418 => 205,  412 => 204,  406 => 201,  402 => 200,  398 => 199,  394 => 198,  390 => 197,  386 => 196,  382 => 195,  378 => 194,  374 => 193,  371 => 192,  368 => 191,  364 => 190,  332 => 160,  326 => 159,  320 => 156,  316 => 155,  312 => 154,  308 => 153,  304 => 152,  300 => 151,  296 => 150,  292 => 149,  288 => 148,  285 => 147,  282 => 146,  278 => 145,  246 => 115,  240 => 114,  234 => 111,  230 => 110,  226 => 109,  222 => 108,  218 => 107,  214 => 106,  210 => 105,  206 => 104,  202 => 103,  199 => 102,  196 => 101,  192 => 100,  153 => 63,  144 => 60,  140 => 59,  136 => 58,  132 => 57,  128 => 56,  124 => 55,  120 => 54,  116 => 53,  112 => 52,  109 => 51,  105 => 50,  87 => 35,  68 => 19,  60 => 14,  50 => 7,  42 => 1,);
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

        <section class=\"section-fix\">
            <h1>Todays Booking {{todays_Date}}</h1>
            <div class=\"story\">
                <h3>Introduction: </h3>
                <p>View today's <strong>breakfast</strong>, <strong>lunch</strong>, and <strong>dinner</strong> reservations below. Each section lists the <strong>service type</strong>, <strong>booking name</strong>, <strong>email</strong>, <strong>phone number</strong>, <strong>service date</strong>, <strong>time booked</strong>, <strong>party size</strong>, <strong>tables booked</strong>, and any <strong>extra requirements</strong>. Click the button below to see the next service with valid reservation.</p>
                <button onclick=\"openOverlay()\" class=\"red-button\">Next Service List</button>
            </div>
        </section>

        <!-- section for the overlay to show the next reservation list for next service if any -->
        
        <section id=\"overlay-reservation\" class=\"overlay\" >
            <div class=\"overlay-content\" >
        
                <table style=\"width: 100%;\">
                    <thead>
                        <tr>
                            <th colspan=\"9\" class=\"remove-th-space\"\">Next Service {{ next_Service[0].service}}</th>
                        </tr>
                        <tr>
                            <th>Service</th>
                            <th>Booking Name</th>
                            <th>Email</th>
                            <th>Phone No (Optional)</th>
                            <th>Service Date</th>
                            <th>Time Booked</th>
                            <th>Party Size</th>
                            <th>Tables Booked</th>
                            <th>Extra Requirements</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for booking in next_Service %}
                        <tr>
                            <td>{{ booking.service }}</td>
                            <td>{{ booking.name }}</td>
                            <td>{{ booking.email }}</td>
                            <td>{{ booking.phone }}</td>
                            <td>{{ booking.reservation_date }}</td>
                            <td>{{ booking.time_booked }}</td>
                            <td>{{ booking.party_size }}</td>
                            <td>{{ booking.tables }}</td>
                            <td>{{ booking.extra_requirements }}</td>
                        </tr>
                        {% endfor %}

                       

                  
                    </tbody>
        
                </table>
        
                <div class=\"sticky-buttons\">
                    <button class=\"red-button\" onclick=\"closeOverlay()\">Close</button>
                    <button class=\"red-button\" onclick=\"printList()\" >Print List</button>
                </div>
            </div>
           
        </section>


        <section class=\"section-fix\">
            <table style=\" margin-bottom: 60px;\">
                <thead>
                    <tr>
                        <th colspan=\"9\" class=\"remove-th-space\">Breakfast
                            Bookings</th>
                    </tr>
                    <tr>
                        <th>Service</th>
                        <th>Booking Name</th>
                        <th>Email</th>
                        <th>Phone No (Optional)</th>
                        <th>Service Date</th>
                        <th>Time Booked</th>
                        <th>Party Size</th>
                        <th>Tables Booked</th>
                        <th>Extra Requirements</th>
                    </tr>
                </thead>
                <tbody>
                    {% for booking in bookings %}
                    {% if booking.service == 'Breakfast' %}
                    <tr>
                        <td>{{ booking.service }}</td>
                        <td>{{ booking.name }}</td>
                        <td>{{ booking.email }}</td>
                        <td>{{ booking.phone }}</td>
                        <td>{{ booking.reservation_date }}</td>
                        <td>{{ booking.time_booked }}</td>
                        <td>{{ booking.party_size }}</td>
                        <td>{{ booking.tables }}</td>
                        <td>{{ booking.extra_requirements }}</td>
                    </tr>
                    {% endif %}
                    {% endfor %}
                </tbody>

            </table>

        </section>


        <section class=\"section-fix\">


            <table style=\" margin-bottom: 60px;\">
                <thead>
                    <tr>
                        <th colspan=\"9\" class=\"remove-th-space\"\">Lunch Bookings
                        </th>
                    </tr>
                    <tr>
                        <th>Service</th>
                        <th>Booking Name</th>
                        <th>Email</th>
                        <th>Phone No (Optional)</th>
                        <th>Service Date</th>
                        <th>Time Booked</th>
                        <th>Party Size</th>
                        <th>Tables Booked</th>
                        <th>Extra Requirements</th>
                    </tr>
                </thead>
                <tbody>

                    {% for booking in bookings %}
                    {% if booking.service == 'Lunch' %}
                    <tr>
                        <td>{{ booking.service }}</td>
                        <td>{{ booking.name }}</td>
                        <td>{{ booking.email }}</td>
                        <td>{{ booking.phone }}</td>
                        <td>{{ booking.reservation_date }}</td>
                        <td>{{ booking.time_booked }}</td>
                        <td>{{ booking.party_size }}</td>
                        <td>{{ booking.tables }}</td>
                        <td>{{ booking.extra_requirements }}</td>
                    </tr>
                    {% endif %}
                    {% endfor %}

                </tbody>
            </table>
        </section>


        <section class=\"section-fix\">



            <table>
                <thead>
                    <tr>
                        <th colspan=\"9\" class=\"remove-th-space\"\">Dinner Bookings
                        </th>
                    </tr>
                    <tr>
                        <th>Service</th>
                        <th>Booking Name</th>
                        <th>Email</th>
                        <th>Phone No (Optional)</th>
                        <th>Service Date</th>
                        <th>Time Booked</th>
                        <th>Party Size</th>
                        <th>Tables Booked</th>
                        <th>Extra Requirements</th>
                    </tr>
                </thead>
                <tbody>

                    {% for booking in bookings %}
                    {% if booking.service == 'Dinner' %}
                    <tr>
                        <td>{{ booking.service }}</td>
                        <td>{{ booking.name }}</td>
                        <td>{{ booking.email }}</td>
                        <td>{{ booking.phone }}</td>
                        <td>{{ booking.reservation_date }}</td>
                        <td>{{ booking.time_booked }}</td>
                        <td>{{ booking.party_size }}</td>
                        <td>{{ booking.tables }}</td>
                        <td>{{ booking.extra_requirements }}</td>
                    </tr>
                    {% endif %}
                    {% endfor %}

                </tbody>
            </table>
        </section>





    </main>


    {{ include('/staffportal/footer.html') }}
</body>

</html>
<script src=\"/public/js/staff/StaffBookings.js\"></script>", "staffportal/bookings.html", "/var/www/html/mounted/website/src/Views/staffportal/bookings.html");
    }
}
