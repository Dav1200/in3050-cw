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

/* reservation.html */
class __TwigTemplate_41a5cb43b28bd0ca6bb1112553f647a2 extends Template
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
        yield "

";
        // line 3
        yield Twig\Extension\CoreExtension::include($this->env, $context, "header.html");
        yield "

<main class=\"w3-container\">
    <h1>Welcome to the </h1>

    
</main>

";
        // line 11
        yield Twig\Extension\CoreExtension::include($this->env, $context, "footer.html");
        yield "

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reservation.html";
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
        return array (  57 => 11,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("

{{ include('header.html') }}

<main class=\"w3-container\">
    <h1>Welcome to the </h1>

    
</main>

{{ include('footer.html') }}

", "reservation.html", "/var/www/html/mounted/website/src/Views/reservation.html");
    }
}
