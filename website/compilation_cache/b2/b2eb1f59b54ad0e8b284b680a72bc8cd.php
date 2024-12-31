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

/* staffportal/stafflogin.html */
class __TwigTemplate_bfa87bced3db494d74a069c04cbe59b8 extends Template
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

  

    <section class=\"staff-form\">
        <h2>Staff Login</h2>

        <form action=\"/authStaff\" method=\"post\">
            <div class=\"form-group\">
            <input style=\"width: 100%;\" type=\"email\" id=\"username\" name=\"username\" placeholder=\"Email\" required>
            </div>
            <div class=\"form-group\">
            <input style=\"width: 100%;\" type=\"password\" id=\"password\" name=\"password\" placeholder=\"Password\" required>
            </div>
            <div id=\"error-message\" style=\"color: red; display: none;\"></div>
            <button style=\"width: 100%;\" class=\"red-button\" type=\"submit\">Login</button>
        </form>
    </section>


</main>
    ";
        // line 41
        yield Twig\Extension\CoreExtension::include($this->env, $context, "footer.html");
        yield "
</body>

</html>

<script>


    function submitLoginForm(e) {
        e.preventDefault(); // Prevent default form submission
        const formData = new FormData(this);
        const loginForm = this;
        fetch('/authStaff', {
            method: 'POST',
            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Redirect or perform success action
                    window.location.href = '/staffportal';
                } else {
                    // Highlight the input fields with red outline
                    document.getElementById('username').style.border = '2px solid red';
                    document.getElementById('password').style.border = '2px solid red';
                    showErrorMessage(\"Invalid username or password\");
                }

            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    function showErrorMessage(message) {
        const errorDiv = document.getElementById('error-message');
        errorDiv.innerHTML = message;    // Set the message
        errorDiv.style.display = 'block'; // Display the message
    }

    document.querySelector('.staff-form form').addEventListener('submit', submitLoginForm);
</script>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "staffportal/stafflogin.html";
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
        return array (  90 => 41,  64 => 18,  53 => 10,  42 => 1,);
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

  

    <section class=\"staff-form\">
        <h2>Staff Login</h2>

        <form action=\"/authStaff\" method=\"post\">
            <div class=\"form-group\">
            <input style=\"width: 100%;\" type=\"email\" id=\"username\" name=\"username\" placeholder=\"Email\" required>
            </div>
            <div class=\"form-group\">
            <input style=\"width: 100%;\" type=\"password\" id=\"password\" name=\"password\" placeholder=\"Password\" required>
            </div>
            <div id=\"error-message\" style=\"color: red; display: none;\"></div>
            <button style=\"width: 100%;\" class=\"red-button\" type=\"submit\">Login</button>
        </form>
    </section>


</main>
    {{ include('footer.html') }}
</body>

</html>

<script>


    function submitLoginForm(e) {
        e.preventDefault(); // Prevent default form submission
        const formData = new FormData(this);
        const loginForm = this;
        fetch('/authStaff', {
            method: 'POST',
            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Redirect or perform success action
                    window.location.href = '/staffportal';
                } else {
                    // Highlight the input fields with red outline
                    document.getElementById('username').style.border = '2px solid red';
                    document.getElementById('password').style.border = '2px solid red';
                    showErrorMessage(\"Invalid username or password\");
                }

            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    function showErrorMessage(message) {
        const errorDiv = document.getElementById('error-message');
        errorDiv.innerHTML = message;    // Set the message
        errorDiv.style.display = 'block'; // Display the message
    }

    document.querySelector('.staff-form form').addEventListener('submit', submitLoginForm);
</script>

", "staffportal/stafflogin.html", "/var/www/html/mounted/website/src/Views/staffportal/stafflogin.html");
    }
}
