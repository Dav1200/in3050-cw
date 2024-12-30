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

/* /diner/dinersignup.html */
class __TwigTemplate_e37e1bccad07f37f269f431d15bdffed extends Template
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
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pagetitle"] ?? null), "html", null, true);
        yield "</title>
        <link rel=\"icon\" href=\"/public/info package/images/logos/Logoico.ico\" />
        <link rel=\"stylesheet\" href=\"/public/shared/index.css\" />
        <link rel=\"stylesheet\" href=\"/public/shared/login-register.css\" />
        <script src=\"https://kit.fontawesome.com/f11736a280.js\" crossorigin=\"anonymous\"></script>
    </head>
<body>
    ";
        // line 16
        yield Twig\Extension\CoreExtension::include($this->env, $context, "header.html");
        yield "

<main>

    <section class=\"staff-form\" id=\"diner-signup\">
        <h2>Signup</h2>
        <form action=\"/authDinerSignup\" method=\"post\">
            <!-- Name input field -->
            <div class=\"form-group\">
                <input  type=\"text\" id=\"name\" name=\"name\" placeholder=\"Full Name\" required>
            </div>

            <!-- Email input field -->
            <div class=\"form-group\">
                <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"Email\" required>
            </div>

            <!-- Password input field -->
            <div class=\"form-group\">
                <input  type=\"password\" id=\"password\" name=\"password\"
                    pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\\W).{8,}\"
                    title=\"Password must be at least 8 characters long, contain a mix of letters, digits, at least one symbol, and a mix of upper and lower case letters.\"
                    placeholder=\"Password\" required>
            </div>

            <!-- Confirm Password input field -->
            <div class=\"form-group\">
                <input  type=\"password\" id=\"confirm_password\" name=\"confirm_password\"
                    pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\\W).{8,}\"
                    title=\"Password must be at least 8 characters long, contain a mix of letters, digits, at least one symbol, and a mix of upper and lower case letters.\"
                    placeholder=\"Confirm Password\" required>
            </div>

            <!-- Submit button -->
            <div id=\"error-message\" style=\"color: red; display: none;\"></div>
            <button  class=\"red-button\" type=\"submit\">Register</button>
        </form>
    </section>

    <section id=\"registration-confirm\" class=\"story\" style=\"display: none; text-align: center;\">
        <h1>Registration Complete!</h1>
        <div id=\"email-download\"></div>
        <button style=\"margin-top: 10px;\" class=\"red-button\" onclick=\"viewDinerHub()\" >View Hub</button>


    </section>





</main>

    ";
        // line 69
        yield Twig\Extension\CoreExtension::include($this->env, $context, "footer.html");
        yield "
</body>
</html>

<script src=\"/public/js/diner/dinnerSignup.js\"></script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/diner/dinersignup.html";
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
        return array (  118 => 69,  62 => 16,  52 => 9,  42 => 1,);
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

    <section class=\"staff-form\" id=\"diner-signup\">
        <h2>Signup</h2>
        <form action=\"/authDinerSignup\" method=\"post\">
            <!-- Name input field -->
            <div class=\"form-group\">
                <input  type=\"text\" id=\"name\" name=\"name\" placeholder=\"Full Name\" required>
            </div>

            <!-- Email input field -->
            <div class=\"form-group\">
                <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"Email\" required>
            </div>

            <!-- Password input field -->
            <div class=\"form-group\">
                <input  type=\"password\" id=\"password\" name=\"password\"
                    pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\\W).{8,}\"
                    title=\"Password must be at least 8 characters long, contain a mix of letters, digits, at least one symbol, and a mix of upper and lower case letters.\"
                    placeholder=\"Password\" required>
            </div>

            <!-- Confirm Password input field -->
            <div class=\"form-group\">
                <input  type=\"password\" id=\"confirm_password\" name=\"confirm_password\"
                    pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\\W).{8,}\"
                    title=\"Password must be at least 8 characters long, contain a mix of letters, digits, at least one symbol, and a mix of upper and lower case letters.\"
                    placeholder=\"Confirm Password\" required>
            </div>

            <!-- Submit button -->
            <div id=\"error-message\" style=\"color: red; display: none;\"></div>
            <button  class=\"red-button\" type=\"submit\">Register</button>
        </form>
    </section>

    <section id=\"registration-confirm\" class=\"story\" style=\"display: none; text-align: center;\">
        <h1>Registration Complete!</h1>
        <div id=\"email-download\"></div>
        <button style=\"margin-top: 10px;\" class=\"red-button\" onclick=\"viewDinerHub()\" >View Hub</button>


    </section>





</main>

    {{include('footer.html')}}
</body>
</html>

<script src=\"/public/js/diner/dinnerSignup.js\"></script>", "/diner/dinersignup.html", "/var/www/html/mounted/website/src/Views/diner/dinersignup.html");
    }
}
