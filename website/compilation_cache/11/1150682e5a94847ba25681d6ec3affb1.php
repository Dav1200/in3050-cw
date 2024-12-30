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

/* staffsignup.html */
class __TwigTemplate_6f6cfbde1247c433c61b312bddc42bf9 extends Template
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
    <link rel=\"stylesheet\" href=\"/public/css/StaffPortal.css\" />
    <script src=\"https://kit.fontawesome.com/f11736a280.js\" crossorigin=\"anonymous\"></script>
</head>

<body>
    ";
        // line 18
        yield Twig\Extension\CoreExtension::include($this->env, $context, "header.html");
        yield "

    <main>

    </main>

    <section class=\"staff-form\">
        <h2>First-Time Staff Registration</h2>
        <form action=\"/authStaffSignup\" method=\"post\">
            <!-- Name input field -->
            <div class=\"form-group\">
                <label for=\"name\">Full Name:</label>
                <input type=\"text\" id=\"name\" name=\"name\" required>
            </div>

            <!-- Email input field -->
            <div class=\"form-group\">
                <label for=\"username\">Email:</label>
                <input type=\"text\" id=\"username\" name=\"username\" required>
            </div>

            <!-- Password input field I got help to get the regex  -->
            <div class=\"form-group\">
                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" name=\"password\"
                    pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\\W).{8,}\"
                    title=\"Password must be at least 8 characters long, contain a mix of letters, digits, at least one symbol, and a mix of upper and lower case letters.\"
                    required>
            </div>

            <!-- Confirm Password input field -->
            <div class=\"form-group\">
                <label for=\"confirm_password\">Confirm Password:</label>
                <input type=\"password\" id=\"confirm_password\" name=\"confirm_password\"
                    pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\\W).{8,}\"
                    title=\"Password must be at least 8 characters long, contain a mix of letters, digits, at least one symbol, and a mix of upper and lower case letters.\"
                    required>
            </div>

            <div class=\"form-group\">
                <label for=\"secret\">Secret Key:</label>
                <input type=\"password\" id=\"secret\" name=\"secret\"
                    title=\"secret for one time setup\"
                    required>
            </div>

            <!-- Submit button -->
            <div id=\"error-message\" style=\"color: red; display: none;\"></div>
            <button class=\"red-button\" type=\"submit\">Register</button>
        </form>
    </section>


    ";
        // line 71
        yield Twig\Extension\CoreExtension::include($this->env, $context, "footer.html");
        yield "
</body>

</html>

<script>

    function submitSignupForm(e) {
        e.preventDefault()
        var password = document.getElementById('password').value;
        var confirm_password = document.getElementById('confirm_password').value;
        var secret = document.getElementById('secret').value;
        if (password != confirm_password && secret != empty) {
            showErrorMessage('Passwords do not match');
            return;
        }

        else if (secret === ''){
            showErrorMessage('Secret key is required');
            return;
        }


        else {
            const formData = new FormData(this);
            fetch('/authStaffSignup', {
                method: 'POST',
                body: formData,
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Redirect or perform success action
                        window.location.href = '/stafflogin';
                    } else {
                        document.getElementById('secret').style.border = '2px solid red';
                        showErrorMessage(\"Incorrect Secret Key\");
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });

        }
    }

    function showErrorMessage(message) {
        const errorDiv = document.getElementById('error-message');
        errorDiv.innerHTML = message;    // Set the message
        errorDiv.style.display = 'block'; // Display the message
    }

    document.querySelector('.staff-form form').addEventListener('submit', submitSignupForm);
</script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "staffsignup.html";
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
        return array (  120 => 71,  64 => 18,  53 => 10,  42 => 1,);
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
    <link rel=\"stylesheet\" href=\"/public/css/StaffPortal.css\" />
    <script src=\"https://kit.fontawesome.com/f11736a280.js\" crossorigin=\"anonymous\"></script>
</head>

<body>
    {{ include('header.html') }}

    <main>

    </main>

    <section class=\"staff-form\">
        <h2>First-Time Staff Registration</h2>
        <form action=\"/authStaffSignup\" method=\"post\">
            <!-- Name input field -->
            <div class=\"form-group\">
                <label for=\"name\">Full Name:</label>
                <input type=\"text\" id=\"name\" name=\"name\" required>
            </div>

            <!-- Email input field -->
            <div class=\"form-group\">
                <label for=\"username\">Email:</label>
                <input type=\"text\" id=\"username\" name=\"username\" required>
            </div>

            <!-- Password input field I got help to get the regex  -->
            <div class=\"form-group\">
                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" name=\"password\"
                    pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\\W).{8,}\"
                    title=\"Password must be at least 8 characters long, contain a mix of letters, digits, at least one symbol, and a mix of upper and lower case letters.\"
                    required>
            </div>

            <!-- Confirm Password input field -->
            <div class=\"form-group\">
                <label for=\"confirm_password\">Confirm Password:</label>
                <input type=\"password\" id=\"confirm_password\" name=\"confirm_password\"
                    pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\\W).{8,}\"
                    title=\"Password must be at least 8 characters long, contain a mix of letters, digits, at least one symbol, and a mix of upper and lower case letters.\"
                    required>
            </div>

            <div class=\"form-group\">
                <label for=\"secret\">Secret Key:</label>
                <input type=\"password\" id=\"secret\" name=\"secret\"
                    title=\"secret for one time setup\"
                    required>
            </div>

            <!-- Submit button -->
            <div id=\"error-message\" style=\"color: red; display: none;\"></div>
            <button class=\"red-button\" type=\"submit\">Register</button>
        </form>
    </section>


    {{ include('footer.html') }}
</body>

</html>

<script>

    function submitSignupForm(e) {
        e.preventDefault()
        var password = document.getElementById('password').value;
        var confirm_password = document.getElementById('confirm_password').value;
        var secret = document.getElementById('secret').value;
        if (password != confirm_password && secret != empty) {
            showErrorMessage('Passwords do not match');
            return;
        }

        else if (secret === ''){
            showErrorMessage('Secret key is required');
            return;
        }


        else {
            const formData = new FormData(this);
            fetch('/authStaffSignup', {
                method: 'POST',
                body: formData,
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Redirect or perform success action
                        window.location.href = '/stafflogin';
                    } else {
                        document.getElementById('secret').style.border = '2px solid red';
                        showErrorMessage(\"Incorrect Secret Key\");
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });

        }
    }

    function showErrorMessage(message) {
        const errorDiv = document.getElementById('error-message');
        errorDiv.innerHTML = message;    // Set the message
        errorDiv.style.display = 'block'; // Display the message
    }

    document.querySelector('.staff-form form').addEventListener('submit', submitSignupForm);
</script>", "staffsignup.html", "/var/www/html/mounted/website/src/Views/staffsignup.html");
    }
}
