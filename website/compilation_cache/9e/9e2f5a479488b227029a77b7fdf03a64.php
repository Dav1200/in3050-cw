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
                <p>View today's <strong>breakfast</strong>, <strong>lunch</strong>, and <strong>dinner</strong>
                    reservations below. Each section lists the <strong>service type</strong>, <strong>booking
                        name</strong>, <strong>email</strong>, <strong>phone number</strong>, <strong>service
                        date</strong>, <strong>time booked</strong>, <strong>party size</strong>, <strong>tables
                        booked</strong>, and any <strong>extra requirements</strong>. Click the button below to see the
                    next service with valid reservations. This is synchronised with the current time! For example, if the service time for lunch is 12 PM and it is 12 PM now, it will show dinner reservations, and so on 
                    it tries to find service wiht atleast 1 booking, e.g. if no booking today besides breakfast but we have one tomorrow it will show that.</p>
                <button onclick=\"openOverlay()\" class=\"red-button\">Next Service List</button>
            </div>
        </section>

        <!-- section for the overlay to show the next reservation list for next service if any -->

        <section id=\"overlay-reservation\" class=\"overlay\">
            <div class=\"overlay-content\">

                <table style=\"width: 100%;\">
                    <thead>
                        <tr>
                            <th colspan=\"9\" class=\"remove-th-space\"\">Next Service ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v0 = ($context["next_Service"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "service", [], "any", false, false, false, 41), "html", null, true);
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
                    <!-- twig template used to prepopulate the table  -->
                    <tbody>
                        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["next_Service"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 58
            yield "                        <tr>
                            <td>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "service", [], "any", false, false, false, 59), "html", null, true);
            yield "</td>
                            <td>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "name", [], "any", false, false, false, 60), "html", null, true);
            yield "</td>
                            <td>";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "email", [], "any", false, false, false, 61), "html", null, true);
            yield "</td>
                            <td>";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "phone", [], "any", false, false, false, 62), "html", null, true);
            yield "</td>
                            <td>";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "reservation_date", [], "any", false, false, false, 63), "html", null, true);
            yield "</td>
                            <td>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "time_booked", [], "any", false, false, false, 64), "html", null, true);
            yield "</td>
                            <td>";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "party_size", [], "any", false, false, false, 65), "html", null, true);
            yield "</td>
                            <td>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "tables", [], "any", false, false, false, 66), "html", null, true);
            yield "</td>
                            <td>";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "extra_requirements", [], "any", false, false, false, 67), "html", null, true);
            yield "</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['booking'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "
                       

                  
                    </tbody>
        
                </table>
                <!-- button to close overlay and prin the service service plan -->
                <div class=\" sticky-buttons\">
                                <button class=\"red-button\" onclick=\"closeOverlay()\">Close</button>
                                <button class=\"red-button\" onclick=\"printList()\">Print List</button>
            </div>
            </div>

        </section>
        <!-- section shows todays bookings for breakfast -->

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
                <!-- twig template to prepopulate breakfast table -->
                <tbody>
                    ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["bookings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 109
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "service", [], "any", false, false, false, 109) == "Breakfast")) {
                // line 110
                yield "                    <tr>
                        <td>";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "service", [], "any", false, false, false, 111), "html", null, true);
                yield "</td>
                        <td>";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "name", [], "any", false, false, false, 112), "html", null, true);
                yield "</td>
                        <td>";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "email", [], "any", false, false, false, 113), "html", null, true);
                yield "</td>
                        <td>";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "phone", [], "any", false, false, false, 114), "html", null, true);
                yield "</td>
                        <td>";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "reservation_date", [], "any", false, false, false, 115), "html", null, true);
                yield "</td>
                        <td>";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "time_booked", [], "any", false, false, false, 116), "html", null, true);
                yield "</td>
                        <td>";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "party_size", [], "any", false, false, false, 117), "html", null, true);
                yield "</td>
                        <td>";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "tables", [], "any", false, false, false, 118), "html", null, true);
                yield "</td>
                        <td>";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "extra_requirements", [], "any", false, false, false, 119), "html", null, true);
                yield "</td>
                    </tr>
                    ";
            }
            // line 122
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['booking'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        yield "                </tbody>

            </table>

        </section>

        <!-- sections shows todays bookings for lunch -->
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
                    <!-- twig template to prepopulate lunch table -->
                    ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["bookings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 154
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "service", [], "any", false, false, false, 154) == "Lunch")) {
                // line 155
                yield "                    <tr>
                        <td>";
                // line 156
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "service", [], "any", false, false, false, 156), "html", null, true);
                yield "</td>
                        <td>";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "name", [], "any", false, false, false, 157), "html", null, true);
                yield "</td>
                        <td>";
                // line 158
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "email", [], "any", false, false, false, 158), "html", null, true);
                yield "</td>
                        <td>";
                // line 159
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "phone", [], "any", false, false, false, 159), "html", null, true);
                yield "</td>
                        <td>";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "reservation_date", [], "any", false, false, false, 160), "html", null, true);
                yield "</td>
                        <td>";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "time_booked", [], "any", false, false, false, 161), "html", null, true);
                yield "</td>
                        <td>";
                // line 162
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "party_size", [], "any", false, false, false, 162), "html", null, true);
                yield "</td>
                        <td>";
                // line 163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "tables", [], "any", false, false, false, 163), "html", null, true);
                yield "</td>
                        <td>";
                // line 164
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "extra_requirements", [], "any", false, false, false, 164), "html", null, true);
                yield "</td>
                    </tr>
                    ";
            }
            // line 167
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['booking'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        yield "
                </tbody>
            </table>
        </section>

<!-- section shows todays bookings for dinner -->
        <section class=\" section-fix\">



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
                    <!-- twig template to prepopulate dinner table -->
                    ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["bookings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 199
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "service", [], "any", false, false, false, 199) == "Dinner")) {
                // line 200
                yield "                    <tr>
                        <td>";
                // line 201
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "service", [], "any", false, false, false, 201), "html", null, true);
                yield "</td>
                        <td>";
                // line 202
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "name", [], "any", false, false, false, 202), "html", null, true);
                yield "</td>
                        <td>";
                // line 203
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "email", [], "any", false, false, false, 203), "html", null, true);
                yield "</td>
                        <td>";
                // line 204
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "phone", [], "any", false, false, false, 204), "html", null, true);
                yield "</td>
                        <td>";
                // line 205
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "reservation_date", [], "any", false, false, false, 205), "html", null, true);
                yield "</td>
                        <td>";
                // line 206
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "time_booked", [], "any", false, false, false, 206), "html", null, true);
                yield "</td>
                        <td>";
                // line 207
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "party_size", [], "any", false, false, false, 207), "html", null, true);
                yield "</td>
                        <td>";
                // line 208
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "tables", [], "any", false, false, false, 208), "html", null, true);
                yield "</td>
                        <td>";
                // line 209
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "extra_requirements", [], "any", false, false, false, 209), "html", null, true);
                yield "</td>
                    </tr>
                    ";
            }
            // line 212
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['booking'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        yield "
                </tbody>
            </table>
        </section>





    </main>


    ";
        // line 225
        yield Twig\Extension\CoreExtension::include($this->env, $context, "/staffportal/footer.html");
        yield "
</body>

</html>
<script src=\" /public/js/staff/bookings.js\">
</script>";
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
        return array (  440 => 225,  426 => 213,  420 => 212,  414 => 209,  410 => 208,  406 => 207,  402 => 206,  398 => 205,  394 => 204,  390 => 203,  386 => 202,  382 => 201,  379 => 200,  376 => 199,  372 => 198,  340 => 168,  334 => 167,  328 => 164,  324 => 163,  320 => 162,  316 => 161,  312 => 160,  308 => 159,  304 => 158,  300 => 157,  296 => 156,  293 => 155,  290 => 154,  286 => 153,  254 => 123,  248 => 122,  242 => 119,  238 => 118,  234 => 117,  230 => 116,  226 => 115,  222 => 114,  218 => 113,  214 => 112,  210 => 111,  207 => 110,  204 => 109,  200 => 108,  160 => 70,  151 => 67,  147 => 66,  143 => 65,  139 => 64,  135 => 63,  131 => 62,  127 => 61,  123 => 60,  119 => 59,  116 => 58,  112 => 57,  93 => 41,  68 => 19,  60 => 14,  50 => 7,  42 => 1,);
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
                <p>View today's <strong>breakfast</strong>, <strong>lunch</strong>, and <strong>dinner</strong>
                    reservations below. Each section lists the <strong>service type</strong>, <strong>booking
                        name</strong>, <strong>email</strong>, <strong>phone number</strong>, <strong>service
                        date</strong>, <strong>time booked</strong>, <strong>party size</strong>, <strong>tables
                        booked</strong>, and any <strong>extra requirements</strong>. Click the button below to see the
                    next service with valid reservations. This is synchronised with the current time! For example, if the service time for lunch is 12 PM and it is 12 PM now, it will show dinner reservations, and so on 
                    it tries to find service wiht atleast 1 booking, e.g. if no booking today besides breakfast but we have one tomorrow it will show that.</p>
                <button onclick=\"openOverlay()\" class=\"red-button\">Next Service List</button>
            </div>
        </section>

        <!-- section for the overlay to show the next reservation list for next service if any -->

        <section id=\"overlay-reservation\" class=\"overlay\">
            <div class=\"overlay-content\">

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
                    <!-- twig template used to prepopulate the table  -->
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
                <!-- button to close overlay and prin the service service plan -->
                <div class=\" sticky-buttons\">
                                <button class=\"red-button\" onclick=\"closeOverlay()\">Close</button>
                                <button class=\"red-button\" onclick=\"printList()\">Print List</button>
            </div>
            </div>

        </section>
        <!-- section shows todays bookings for breakfast -->

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
                <!-- twig template to prepopulate breakfast table -->
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

        <!-- sections shows todays bookings for lunch -->
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
                    <!-- twig template to prepopulate lunch table -->
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

<!-- section shows todays bookings for dinner -->
        <section class=\" section-fix\">



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
                    <!-- twig template to prepopulate dinner table -->
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
<script src=\" /public/js/staff/bookings.js\">
</script>", "staffportal/bookings.html", "/var/www/html/mounted/website/src/Views/staffportal/bookings.html");
    }
}
