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

/* /diner/update-password.html */
class __TwigTemplate_3606808e189d95fbece12872e674e027 extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pagetitle"] ?? null), "html", null, true);
        yield "</title>
    <link rel=\"stylesheet\" href=\"/public/shared/index.css\" />
    <link rel=\"stylesheet\" href=\"/public/shared/login-register.css\" />
</head>

<body>
    ";
        // line 13
        if (($context["show"] ?? null)) {
            // line 14
            yield "    ";
            yield from $this->loadTemplate("/diner/diner-header.html", "/diner/update-password.html", 14)->unwrap()->yield($context);
            // line 15
            yield "    ";
        } else {
            // line 16
            yield "    ";
            yield from $this->loadTemplate("header.html", "/diner/update-password.html", 16)->unwrap()->yield($context);
            // line 17
            yield "    ";
        }
        // line 18
        yield "

    <main>

<!-- email form first to send otp -->
        <section class=\"staff-form\" id=\"otpFormSection\">
            <h2>Send OTP</h2>
            <form id=\"otpForm\" action=\"/sendotp\" method=\"post\">
                <p>Please enter your email address below.<br>If you are already logged in, please confirm your email address.</p>
                <div class=\"form-group\">
                    <input style=\"width: 95%;\" type=\"email\" id=\"username\" name=\"username\" placeholder=\"Email\" required>
                </div>
                <div id=\"error-message\" style=\"color: red; display: none;\"></div>

                <button type=\"submit\" class=\"red-button\">Submit</button>
            </form>
        </section>

<!-- enter otp form  -->
        <section class=\"staff-form\" style='display: none;' id=\"enterOtpSection\">
            <h2>Enter OTP</h2>
            <form id=\"enterotp\" action=\"/checkotp\" method=\"post\">
                <p>Please enter the OTP sent to your email address below.</p>
                <div class=\"form-group\">
                    <input style=\"width: 95%;\" type=\"number\" id=\"otp\" name=\"otp\" placeholder=\"OTP\" maxlength=\"6\"
                        required>
                </div>
                <div id=\"email_download\"></div>
                <div id=\"error-message\" style=\"color: red; display: none;\"></div>
                <button type=\"submit\" class=\"red-button\">Submit</button>
            </form>
        </section>


<!-- if otp correct show the change password form -->

        <section id=\"chnagepasswordsection\" class=\"staff-form\" style='display: none;'>
            <h2>Change Password</h2>
            <form action=\"/authchangepass\" method=\"post\" id=\"changePasswordForm\">
                <!-- Password input field -->
                <div class=\"form-group\">
                    <!-- validation for password must include symbol digit and atleast 8 length -->
                    <input type=\"password\" id=\"password\" name=\"password\"
                        pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\\W).{8,}\"
                        title=\"Password must be at least 8 characters long, contain a mix of letters, digits, at least one symbol, and a mix of upper and lower case letters.\"
                        placeholder=\"Password\" required>
                </div>

                <!-- Confirm Password input field -->
                <div class=\"form-group\">
                    <input type=\"password\" id=\"confirm_password\" name=\"confirm_password\"
                        pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\\W).{8,}\"
                        title=\"Password must be at least 8 characters long, contain a mix of letters, digits, at least one symbol, and a mix of upper and lower case letters.\"
                        placeholder=\"Confirm Password\" required>
                </div>

                <!-- Submit button -->
                <div id=\"error-message\" style=\"color: red; display: none;\"></div>
                <button class=\"red-button\" type=\"submit\">Submit</button>
            </form>
        </section>



    </main>

    ";
        // line 84
        yield Twig\Extension\CoreExtension::include($this->env, $context, "footer.html");
        yield "
</body>

</html>

<script src=\"/public/js/diner/update-password.js\"></script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/diner/update-password.html";
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
        return array (  141 => 84,  73 => 18,  70 => 17,  67 => 16,  64 => 15,  61 => 14,  59 => 13,  50 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{{pagetitle}}</title>
    <link rel=\"stylesheet\" href=\"/public/shared/index.css\" />
    <link rel=\"stylesheet\" href=\"/public/shared/login-register.css\" />
</head>

<body>
    {% if show %}
    {% include '/diner/diner-header.html' %}
    {% else %}
    {% include 'header.html' %}
    {% endif %}


    <main>

<!-- email form first to send otp -->
        <section class=\"staff-form\" id=\"otpFormSection\">
            <h2>Send OTP</h2>
            <form id=\"otpForm\" action=\"/sendotp\" method=\"post\">
                <p>Please enter your email address below.<br>If you are already logged in, please confirm your email address.</p>
                <div class=\"form-group\">
                    <input style=\"width: 95%;\" type=\"email\" id=\"username\" name=\"username\" placeholder=\"Email\" required>
                </div>
                <div id=\"error-message\" style=\"color: red; display: none;\"></div>

                <button type=\"submit\" class=\"red-button\">Submit</button>
            </form>
        </section>

<!-- enter otp form  -->
        <section class=\"staff-form\" style='display: none;' id=\"enterOtpSection\">
            <h2>Enter OTP</h2>
            <form id=\"enterotp\" action=\"/checkotp\" method=\"post\">
                <p>Please enter the OTP sent to your email address below.</p>
                <div class=\"form-group\">
                    <input style=\"width: 95%;\" type=\"number\" id=\"otp\" name=\"otp\" placeholder=\"OTP\" maxlength=\"6\"
                        required>
                </div>
                <div id=\"email_download\"></div>
                <div id=\"error-message\" style=\"color: red; display: none;\"></div>
                <button type=\"submit\" class=\"red-button\">Submit</button>
            </form>
        </section>


<!-- if otp correct show the change password form -->

        <section id=\"chnagepasswordsection\" class=\"staff-form\" style='display: none;'>
            <h2>Change Password</h2>
            <form action=\"/authchangepass\" method=\"post\" id=\"changePasswordForm\">
                <!-- Password input field -->
                <div class=\"form-group\">
                    <!-- validation for password must include symbol digit and atleast 8 length -->
                    <input type=\"password\" id=\"password\" name=\"password\"
                        pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\\W).{8,}\"
                        title=\"Password must be at least 8 characters long, contain a mix of letters, digits, at least one symbol, and a mix of upper and lower case letters.\"
                        placeholder=\"Password\" required>
                </div>

                <!-- Confirm Password input field -->
                <div class=\"form-group\">
                    <input type=\"password\" id=\"confirm_password\" name=\"confirm_password\"
                        pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\\W).{8,}\"
                        title=\"Password must be at least 8 characters long, contain a mix of letters, digits, at least one symbol, and a mix of upper and lower case letters.\"
                        placeholder=\"Confirm Password\" required>
                </div>

                <!-- Submit button -->
                <div id=\"error-message\" style=\"color: red; display: none;\"></div>
                <button class=\"red-button\" type=\"submit\">Submit</button>
            </form>
        </section>



    </main>

    {{ include('footer.html') }}
</body>

</html>

<script src=\"/public/js/diner/update-password.js\"></script>", "/diner/update-password.html", "/var/www/html/mounted/website/src/Views/diner/update-password.html");
    }
}
