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

/* staffportal/manage-service.html */
class __TwigTemplate_234421eefc3842edbc33327dab5d4fd8 extends Template
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
  <title>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pagetitle"] ?? null), "html", null, true);
        yield "</title>
  <link rel=\"stylesheet\" href=\"/public/css/staff/StaffShared.css\" />
</head>

<body>
  ";
        // line 12
        yield Twig\Extension\CoreExtension::include($this->env, $context, "/staffportal/header.html");
        yield "
  <main>
    <h1 class=\"\">Service Management</h1>

    <!-- Helper section to assist staff provides overview for the tables  -->
    <section class=\"story\">
      <h3>Assigned Services</h3>
      <p>
        This section displays the services assigned to the selected date. Use
        the \"Amend\" button to update service details. To view all services,
        clear the filter. To view services for a specific date, select a date
        from the calendar. To add Service click on 'Add Service'
      </p>
    </section>

    <!-- Section to filter the tables, clear the table, add new services and amend the default services form -->
    <section class=\"filter-section\">
      <label for=\"service-date\">Selected Date:</label>
      <input class=\"selecteddate\" type=\"date\" id=\"servicedate\" name=\"service-date\" value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(" now", "Y-m-d"), "html", null, true);
        yield "\">

      <button class=\"red-button\" type=\"button\" onclick=\"clearDate()\">
        Clear Filter
      </button>
      <button class=\"red-button\" type=\"button\" id=\"openFormdefault\">
        Setup Default Form
      </button>

      <button style=\"float: right\" class=\"red-button\" id=\"openFormBtn\">
        Add Service
      </button>
    </section>

    <!-- Section for pop up form to add services for a particular date with their start, end times alongside with all the other information required for service setup -->
    <section>
      <div id=\"serviceFormModal\" class=\"modal\">
        <div class=\"modal-content\">
          <span class=\"close-btn\">&times;</span>
          <h2>Create Service</h2>

          <!-- form to add service  -->
          <form id=\"serviceForm\">
            <div>
              <label for=\"service-date\">Service Date:</label>
              <!-- sets the current day to filter by -->
              <input type=\"date\" id=\"service-date\" name=\"service-date\" value=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(" now", "Y-m-d"), "html", null, true);
        yield "\" required>
            </div>
            <!-- drop down option to select which service you would like to add -->
            <div>
              <label for=\"service\">Service Status:</label>
              <select id=\"service\" name=\"service\" required>
                <option value=\"Breakfast\">Breakfast</option>
                <option value=\"Lunch\">Lunch</option>
                <option value=\"Dinner\">Dinner</option>
              </select>
            </div>
            <!-- start time -->
            <div>
              <label for=\"time-start\">Start Time:</label>
              <input type=\"time\" id=\"time-start\" name=\"time-start\" required />
            </div>
            <!-- end time -->
            <div>
              <label for=\"time-end\">End Time:</label>
              <input type=\"time\" id=\"time-end\" name=\"time-end\" required />
            </div>
            <!-- tables min is 1 and has to be a number -->
            <div>
              <label for=\"tables-available\">Tables Available:</label>
              <input type=\"number\" id=\"tables-available\" name=\"tables-available\" min=\"1\" required />
            </div>
            <!-- drop down to select option for service status -->
            <div>
              <label for=\"service-status\">Service Status:</label>
              <select id=\"service-status\" name=\"service-status\" required>
                <option value=\"available\">Available</option>
                <option value=\"fully booked\">Fully Booked</option>
                <option value=\"closed\">Closed</option>
              </select>
            </div>
            <!-- buttomn to submit -->
            <button class=\"red-button\" type=\"submit\">Submit</button>
          </form>
        </div>
      </div>
    </section>

    <!-- Section for pop up form to setup default services for the staff to use  twig used to prepopulate the form with existing defualt services data-->
    <section>
      <div id=\"defaultFormModal\" class=\"modal\">
        <div class=\"modal-content\">
          <span id=\"closebtndefault\" class=\"close-btn\">&times;</span>
          <h2>Setup Default Service</h2>

          <!-- Form to Setup Default Service -->
          <form id=\"defaultServiceForm\">
            ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["default_services"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 108
            yield "            <div>
              <h3>";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 109), "html", null, true);
            yield "</h3>
              <label for=\"";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 110), "html", null, true);
            yield "-time-start\">Start Time:</label>

              <input type=\"time\" id=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 112), "html", null, true);
            yield "-time-start\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 112), "html", null, true);
            yield "-time-start\"
                value=\"";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "time_start", [], "any", false, false, false, 113), "html", null, true);
            yield "\" required />

              <label for=\"";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 115), "html", null, true);
            yield "-time-end\">End Time:</label>
              <input type=\"time\" id=\"";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 116), "html", null, true);
            yield "-time-end\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 116), "html", null, true);
            yield "-time-end\"
                value=\"";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "time_end", [], "any", false, false, false, 117), "html", null, true);
            yield "\" required />

              <label for=\"";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 119), "html", null, true);
            yield "-tables-available\">Tables Available:</label>
              <input type=\"number\" id=\"";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 120), "html", null, true);
            yield "-tables-available\"
                name=\"";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 121), "html", null, true);
            yield "-tables-available\" min=\"1\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "tables_available", [], "any", false, false, false, 121), "html", null, true);
            yield "\" required />
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        yield "
            <button class=\"red-button\" type=\"submit\">Submit</button>
          </form>
        </div>
      </div>
    </section>

    <!-- Table to display assigned services alongside a button which will allow you to amend a specific service updates in real time -->
    <section class=\"section-fix\">
      <table>
        <thead>
          <!-- headings -->
          <tr>
            <th class=\"id-heading\">ID</th>
            <th>Service</th>
            <th>Service Date</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Total Tables</th>
            <th>Tables Booked</th>
            <th>Status</th>
            <th>Amend</th>
          </tr>
        </thead>
        <!-- body of table for data fetched initially loaded by twig -->
        <tbody id=\"serviceListBody\">
          ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["servicelist"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 151
            yield "          <tr id=\"service-row\">
            <td class=\"id-data\">";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 152), "html", null, true);
            yield "</td>
            <td>";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 153), "html", null, true);
            yield "</td>
            <td>";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service_date", [], "any", false, false, false, 154), "html", null, true);
            yield "</td>
            <td>";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "time_start", [], "any", false, false, false, 155), "html", null, true);
            yield "</td>
            <td>";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "time_end", [], "any", false, false, false, 156), "html", null, true);
            yield "</td>
            <td>";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "tables_available", [], "any", false, false, false, 157), "html", null, true);
            yield "</td>
            <td>";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "tables_booked", [], "any", false, false, false, 158), "html", null, true);
            yield "</td>
            <td>";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service_status", [], "any", false, false, false, 159), "html", null, true);
            yield "</td>
            <td>
              <button class=\"amend-button\" onclick=\"amendService(this)\" type=\"button\">
                Amend
              </button>
            </td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        yield "        </tbody>
      </table>
    </section>

    <!-- Helper section to assist staff provides overview for unassigned table  -->
    <section class=\"story\">
      <h3>Unassigned Services</h3>

      <p>
        This section provides an overview of each day starting from the
        current date, indicating whether services have been assigned. It
        offers a quick and clear status update for convenience. The
        <strong>\"Assign Default\"</strong> button allows you to quickly assign
        default services for a specific day. The form for configuring default
        services can be found above. <strong>Note:</strong>
        <strong>This action will not override any existing services</strong>,
        so you can use it without concern.
      </p>
    </section>

    <!-- Table to display unassigned services with a load more button to dispaly 7 more days -->
    <section class=\"section-fix\">
      <table id=\"service-table\">
        <thead>
          <tr>
            <th>Service Date</th>
            <th>Breakfast</th>
            <th>Lunch</th>
            <th>Dinner</th>
            <th>Assign Default</th>
          </tr>
        </thead>
        <tbody id=\"table-body\"></tbody>
      </table>
    </section>
    <button style=\"margin-bottom: 10px\" class=\"red-button\" onclick=\"loadMoreDates()\">
      Load More
    </button>
  </main>
  ";
        // line 206
        yield Twig\Extension\CoreExtension::include($this->env, $context, "/staffportal/footer.html");
        yield "
</body>

</html>

<script src=\"/public/js/staff/manage-service.js\"></script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "staffportal/manage-service.html";
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
        return array (  341 => 206,  300 => 167,  286 => 159,  282 => 158,  278 => 157,  274 => 156,  270 => 155,  266 => 154,  262 => 153,  258 => 152,  255 => 151,  251 => 150,  223 => 124,  212 => 121,  208 => 120,  204 => 119,  199 => 117,  193 => 116,  189 => 115,  184 => 113,  178 => 112,  173 => 110,  169 => 109,  166 => 108,  162 => 107,  108 => 56,  79 => 30,  58 => 12,  50 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
  <title>{{pagetitle}}</title>
  <link rel=\"stylesheet\" href=\"/public/css/staff/StaffShared.css\" />
</head>

<body>
  {{ include('/staffportal/header.html') }}
  <main>
    <h1 class=\"\">Service Management</h1>

    <!-- Helper section to assist staff provides overview for the tables  -->
    <section class=\"story\">
      <h3>Assigned Services</h3>
      <p>
        This section displays the services assigned to the selected date. Use
        the \"Amend\" button to update service details. To view all services,
        clear the filter. To view services for a specific date, select a date
        from the calendar. To add Service click on 'Add Service'
      </p>
    </section>

    <!-- Section to filter the tables, clear the table, add new services and amend the default services form -->
    <section class=\"filter-section\">
      <label for=\"service-date\">Selected Date:</label>
      <input class=\"selecteddate\" type=\"date\" id=\"servicedate\" name=\"service-date\" value=\"{{ \" now\" | date(\"Y-m-d\") }}\">

      <button class=\"red-button\" type=\"button\" onclick=\"clearDate()\">
        Clear Filter
      </button>
      <button class=\"red-button\" type=\"button\" id=\"openFormdefault\">
        Setup Default Form
      </button>

      <button style=\"float: right\" class=\"red-button\" id=\"openFormBtn\">
        Add Service
      </button>
    </section>

    <!-- Section for pop up form to add services for a particular date with their start, end times alongside with all the other information required for service setup -->
    <section>
      <div id=\"serviceFormModal\" class=\"modal\">
        <div class=\"modal-content\">
          <span class=\"close-btn\">&times;</span>
          <h2>Create Service</h2>

          <!-- form to add service  -->
          <form id=\"serviceForm\">
            <div>
              <label for=\"service-date\">Service Date:</label>
              <!-- sets the current day to filter by -->
              <input type=\"date\" id=\"service-date\" name=\"service-date\" value=\"{{ \" now\" | date(\"Y-m-d\") }}\" required>
            </div>
            <!-- drop down option to select which service you would like to add -->
            <div>
              <label for=\"service\">Service Status:</label>
              <select id=\"service\" name=\"service\" required>
                <option value=\"Breakfast\">Breakfast</option>
                <option value=\"Lunch\">Lunch</option>
                <option value=\"Dinner\">Dinner</option>
              </select>
            </div>
            <!-- start time -->
            <div>
              <label for=\"time-start\">Start Time:</label>
              <input type=\"time\" id=\"time-start\" name=\"time-start\" required />
            </div>
            <!-- end time -->
            <div>
              <label for=\"time-end\">End Time:</label>
              <input type=\"time\" id=\"time-end\" name=\"time-end\" required />
            </div>
            <!-- tables min is 1 and has to be a number -->
            <div>
              <label for=\"tables-available\">Tables Available:</label>
              <input type=\"number\" id=\"tables-available\" name=\"tables-available\" min=\"1\" required />
            </div>
            <!-- drop down to select option for service status -->
            <div>
              <label for=\"service-status\">Service Status:</label>
              <select id=\"service-status\" name=\"service-status\" required>
                <option value=\"available\">Available</option>
                <option value=\"fully booked\">Fully Booked</option>
                <option value=\"closed\">Closed</option>
              </select>
            </div>
            <!-- buttomn to submit -->
            <button class=\"red-button\" type=\"submit\">Submit</button>
          </form>
        </div>
      </div>
    </section>

    <!-- Section for pop up form to setup default services for the staff to use  twig used to prepopulate the form with existing defualt services data-->
    <section>
      <div id=\"defaultFormModal\" class=\"modal\">
        <div class=\"modal-content\">
          <span id=\"closebtndefault\" class=\"close-btn\">&times;</span>
          <h2>Setup Default Service</h2>

          <!-- Form to Setup Default Service -->
          <form id=\"defaultServiceForm\">
            {% for service in default_services %}
            <div>
              <h3>{{ service.service }}</h3>
              <label for=\"{{ service.service }}-time-start\">Start Time:</label>

              <input type=\"time\" id=\"{{ service.service }}-time-start\" name=\"{{ service.service }}-time-start\"
                value=\"{{service.time_start}}\" required />

              <label for=\"{{ service.service }}-time-end\">End Time:</label>
              <input type=\"time\" id=\"{{ service.service }}-time-end\" name=\"{{ service.service }}-time-end\"
                value=\"{{service.time_end}}\" required />

              <label for=\"{{ service.service }}-tables-available\">Tables Available:</label>
              <input type=\"number\" id=\"{{ service.service }}-tables-available\"
                name=\"{{ service.service }}-tables-available\" min=\"1\" value=\"{{service.tables_available}}\" required />
            </div>
            {% endfor %}

            <button class=\"red-button\" type=\"submit\">Submit</button>
          </form>
        </div>
      </div>
    </section>

    <!-- Table to display assigned services alongside a button which will allow you to amend a specific service updates in real time -->
    <section class=\"section-fix\">
      <table>
        <thead>
          <!-- headings -->
          <tr>
            <th class=\"id-heading\">ID</th>
            <th>Service</th>
            <th>Service Date</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Total Tables</th>
            <th>Tables Booked</th>
            <th>Status</th>
            <th>Amend</th>
          </tr>
        </thead>
        <!-- body of table for data fetched initially loaded by twig -->
        <tbody id=\"serviceListBody\">
          {% for service in servicelist %}
          <tr id=\"service-row\">
            <td class=\"id-data\">{{ service.id }}</td>
            <td>{{ service.service }}</td>
            <td>{{ service.service_date }}</td>
            <td>{{ service.time_start }}</td>
            <td>{{ service.time_end }}</td>
            <td>{{ service.tables_available }}</td>
            <td>{{ service.tables_booked }}</td>
            <td>{{ service.service_status }}</td>
            <td>
              <button class=\"amend-button\" onclick=\"amendService(this)\" type=\"button\">
                Amend
              </button>
            </td>
          </tr>
          {% endfor %}
        </tbody>
      </table>
    </section>

    <!-- Helper section to assist staff provides overview for unassigned table  -->
    <section class=\"story\">
      <h3>Unassigned Services</h3>

      <p>
        This section provides an overview of each day starting from the
        current date, indicating whether services have been assigned. It
        offers a quick and clear status update for convenience. The
        <strong>\"Assign Default\"</strong> button allows you to quickly assign
        default services for a specific day. The form for configuring default
        services can be found above. <strong>Note:</strong>
        <strong>This action will not override any existing services</strong>,
        so you can use it without concern.
      </p>
    </section>

    <!-- Table to display unassigned services with a load more button to dispaly 7 more days -->
    <section class=\"section-fix\">
      <table id=\"service-table\">
        <thead>
          <tr>
            <th>Service Date</th>
            <th>Breakfast</th>
            <th>Lunch</th>
            <th>Dinner</th>
            <th>Assign Default</th>
          </tr>
        </thead>
        <tbody id=\"table-body\"></tbody>
      </table>
    </section>
    <button style=\"margin-bottom: 10px\" class=\"red-button\" onclick=\"loadMoreDates()\">
      Load More
    </button>
  </main>
  {{ include('/staffportal/footer.html') }}
</body>

</html>

<script src=\"/public/js/staff/manage-service.js\"></script>", "staffportal/manage-service.html", "/var/www/html/mounted/website/src/Views/staffportal/manage-service.html");
    }
}
