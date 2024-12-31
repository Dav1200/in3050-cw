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

/* /diner/diner-login.html */
class __TwigTemplate_0c289307118754ee05f36b5cccb5996e extends Template
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
    <meta name=\"description\" content=\"Lancaster's Restaurant - Login.\" />
    <meta name=\"author\" content=\"Lancaster's Restaurant\">
    <meta name=\"keywords\" content=\"Lancaster's Restaurant,lancaster login, login, diner\">
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

        <!-- section for the form for diner to login -->
        <section class=\"staff-form\">
            <h2> Login</h2>

            <form action=\"/authdiner\" method=\"post\">
                <div class=\"form-group\">
                    <input style=\"width: 95%;\" type=\"email\" id=\"username\" name=\"username\" placeholder=\"Email\" required>
                </div>
                <div class=\"form-group\">
                    <input style=\"width: 95%;\" type=\"password\" id=\"password\" name=\"password\" placeholder=\"Password\"
                        required>
                </div>
                <!-- change password option -->
                <a style=\"margin-bottom: 20px;\" href=\"/changepassword\">Forgot Password?</a>

                <!-- error handling -->
                <div id=\"error-message\" style=\"color: red; display: none;\"></div>
                <button style=\"width: 100%; margin-top: 10px; margin-bottom: 10px;\" class=\"red-button\"
                    type=\"submit\">Login</button>
                <!-- new account registration -->
                <label for=\"register\">
                    Don't have an account? <a href=\"/register\">Sign up</a>
                </label>

            </form>
        </section>





    </main>

    ";
        // line 55
        yield Twig\Extension\CoreExtension::include($this->env, $context, "footer.html");
        yield "
</body>

</html>

<script src=\"/public/js/diner/login.js\"></script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/diner/diner-login.html";
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
        return array (  104 => 55,  64 => 18,  53 => 10,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta name=\"description\" content=\"Lancaster's Restaurant - Login.\" />
    <meta name=\"author\" content=\"Lancaster's Restaurant\">
    <meta name=\"keywords\" content=\"Lancaster's Restaurant,lancaster login, login, diner\">
    <title>{{pagetitle}}</title>
    <link rel=\"icon\" href=\"/public/info package/images/logos/Logoico.ico\" />
    <link rel=\"stylesheet\" href=\"/public/shared/index.css\" />
    <link rel=\"stylesheet\" href=\"/public/shared/login-register.css\" />
    <script src=\"https://kit.fontawesome.com/f11736a280.js\" crossorigin=\"anonymous\"></script>
</head>

<body>
    {{include('header.html')}}

    <main>

        <!-- section for the form for diner to login -->
        <section class=\"staff-form\">
            <h2> Login</h2>

            <form action=\"/authdiner\" method=\"post\">
                <div class=\"form-group\">
                    <input style=\"width: 95%;\" type=\"email\" id=\"username\" name=\"username\" placeholder=\"Email\" required>
                </div>
                <div class=\"form-group\">
                    <input style=\"width: 95%;\" type=\"password\" id=\"password\" name=\"password\" placeholder=\"Password\"
                        required>
                </div>
                <!-- change password option -->
                <a style=\"margin-bottom: 20px;\" href=\"/changepassword\">Forgot Password?</a>

                <!-- error handling -->
                <div id=\"error-message\" style=\"color: red; display: none;\"></div>
                <button style=\"width: 100%; margin-top: 10px; margin-bottom: 10px;\" class=\"red-button\"
                    type=\"submit\">Login</button>
                <!-- new account registration -->
                <label for=\"register\">
                    Don't have an account? <a href=\"/register\">Sign up</a>
                </label>

            </form>
        </section>





    </main>

    {{include('footer.html')}}
</body>

</html>

<script src=\"/public/js/diner/login.js\"></script>", "/diner/diner-login.html", "/var/www/html/mounted/website/src/Views/diner/diner-login.html");
    }
}
