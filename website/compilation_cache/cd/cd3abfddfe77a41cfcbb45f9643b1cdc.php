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

/* staffportal/staff-login.html */
class __TwigTemplate_0cabe4eba9dd2f8253cbbf38016d3112 extends Template
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
    <meta name=\"description\" content=\"Lancaster's Restaurant - Staff Login.\" />
    <meta name=\"author\" content=\"Lancaster's Restaurant\">
    <meta name=\"keywords\" content=\"Lancaster's Restaurant,lancaster staff login, login, staff\">
    <title>";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pagetitle"] ?? null), "html", null, true);
        yield "</title>
    <link rel=\"icon\" href=\"/public/info package/images/logos/Logoico.ico\" />
    <link rel=\"stylesheet\" href=\"/public/shared/index.css\" />
    <link rel=\"stylesheet\" href=\"/public/shared/login-register.css\" />
    <script src=\"https://kit.fontawesome.com/f11736a280.js\" crossorigin=\"anonymous\"></script>
</head>

<body>
    ";
        // line 18
        yield Twig\Extension\CoreExtension::include($this->env, $context, "header.html");
        yield "

    <main>


        <!-- login form for staff -->
        <section class=\"staff-form\">
            <h2>Staff Login</h2>

            <form action=\"/authStaff\" method=\"post\">
                <div class=\"form-group\">
                    <input style=\"width: 100%;\" type=\"email\" id=\"username\" name=\"username\" placeholder=\"Email\" required>
                </div>
                <div class=\"form-group\">
                    <input style=\"width: 100%;\" type=\"password\" id=\"password\" name=\"password\" placeholder=\"Password\"
                        required>
                </div>
                <div id=\"error-message\" style=\"color: red; display: none;\"></div>
                <button style=\"width: 100%;\" class=\"red-button\" type=\"submit\">Login</button>
            </form>
        </section>


    </main>
    ";
        // line 42
        yield Twig\Extension\CoreExtension::include($this->env, $context, "footer.html");
        yield "
</body>

</html>

<script src=\"/public/js/staff/login.js\"></script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "staffportal/staff-login.html";
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
        return array (  91 => 42,  64 => 18,  53 => 10,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta name=\"description\" content=\"Lancaster's Restaurant - Staff Login.\" />
    <meta name=\"author\" content=\"Lancaster's Restaurant\">
    <meta name=\"keywords\" content=\"Lancaster's Restaurant,lancaster staff login, login, staff\">
    <title>{{pagetitle}}</title>
    <link rel=\"icon\" href=\"/public/info package/images/logos/Logoico.ico\" />
    <link rel=\"stylesheet\" href=\"/public/shared/index.css\" />
    <link rel=\"stylesheet\" href=\"/public/shared/login-register.css\" />
    <script src=\"https://kit.fontawesome.com/f11736a280.js\" crossorigin=\"anonymous\"></script>
</head>

<body>
    {{ include('header.html') }}

    <main>


        <!-- login form for staff -->
        <section class=\"staff-form\">
            <h2>Staff Login</h2>

            <form action=\"/authStaff\" method=\"post\">
                <div class=\"form-group\">
                    <input style=\"width: 100%;\" type=\"email\" id=\"username\" name=\"username\" placeholder=\"Email\" required>
                </div>
                <div class=\"form-group\">
                    <input style=\"width: 100%;\" type=\"password\" id=\"password\" name=\"password\" placeholder=\"Password\"
                        required>
                </div>
                <div id=\"error-message\" style=\"color: red; display: none;\"></div>
                <button style=\"width: 100%;\" class=\"red-button\" type=\"submit\">Login</button>
            </form>
        </section>


    </main>
    {{ include('footer.html') }}
</body>

</html>

<script src=\"/public/js/staff/login.js\"></script>", "staffportal/staff-login.html", "/var/www/html/mounted/website/src/Views/staffportal/staff-login.html");
    }
}
