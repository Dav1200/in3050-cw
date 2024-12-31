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

/* /staffportal/footer.html */
class __TwigTemplate_d24e47898df2298b70d8f193fd638bf5 extends Template
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
        yield "<footer>
  <!-- social container and awards information -->
  <div class=\"social-container\">
    <img src=\"/public/info package/images/awards/hotdinners.svg\" alt=\"HotDinner best New Restaurant award logo\" />
    <img src=\"/public/info package/images/awards/National-Restaurant-Awards.svg\"
      alt=\"Estrella/National Restaurant Award logo\" />
    <img src=\"/public/info package/images/awards/Squaremeal.svg\" alt=\"SquareMeal Gold Award Logo\" />
    <img src=\"/public/info package/images/awards/code-1.svg\" alt=\"Code 30 30 Award Logo\" />

    <img src=\"/public/info package/images/awards/B-Corp-Logo-White-RGB.png\" alt=\"food1\" class=\"b-corp Certified Logo\" />
  </div>

  <!-- social media links-->
  <div class=\"social-container\" style=\"margin-bottom: 20px;\">
    <a aria-label=\"Visit Lancaster’s Instagram\" href=\"https://www.instagram.com/fallowrestaurant/\" target=\"_blank\"><i
        class=\"fa-brands fa-instagram fa-2xl\" style=\"color: #ffffff\"></i></a>
    <a aria-label=\"Visit Lancaster’s Youtube\" href=\"https://www.youtube.com/channel/UCJ901NqoRaXMnIm7aOjLyuA\"
      target=\"_blank\"><i class=\"fa-brands fa-youtube fa-2xl\" style=\"color: #ffffff\"></i></a>
    <a aria-label=\"Visit Lancaster’s Tiktok\" href=\"https://www.tiktok.com/@fallow_restaurant?lang=en\" target=\"_blank\"><i
        class=\"fa-brands fa-tiktok fa-2xl\" style=\"color: #ffffff\"></i></a>
  </div>
  <!-- address and contact information -->
  <p></p>


</footer>
</body>

</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/staffportal/footer.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer>
  <!-- social container and awards information -->
  <div class=\"social-container\">
    <img src=\"/public/info package/images/awards/hotdinners.svg\" alt=\"HotDinner best New Restaurant award logo\" />
    <img src=\"/public/info package/images/awards/National-Restaurant-Awards.svg\"
      alt=\"Estrella/National Restaurant Award logo\" />
    <img src=\"/public/info package/images/awards/Squaremeal.svg\" alt=\"SquareMeal Gold Award Logo\" />
    <img src=\"/public/info package/images/awards/code-1.svg\" alt=\"Code 30 30 Award Logo\" />

    <img src=\"/public/info package/images/awards/B-Corp-Logo-White-RGB.png\" alt=\"food1\" class=\"b-corp Certified Logo\" />
  </div>

  <!-- social media links-->
  <div class=\"social-container\" style=\"margin-bottom: 20px;\">
    <a aria-label=\"Visit Lancaster’s Instagram\" href=\"https://www.instagram.com/fallowrestaurant/\" target=\"_blank\"><i
        class=\"fa-brands fa-instagram fa-2xl\" style=\"color: #ffffff\"></i></a>
    <a aria-label=\"Visit Lancaster’s Youtube\" href=\"https://www.youtube.com/channel/UCJ901NqoRaXMnIm7aOjLyuA\"
      target=\"_blank\"><i class=\"fa-brands fa-youtube fa-2xl\" style=\"color: #ffffff\"></i></a>
    <a aria-label=\"Visit Lancaster’s Tiktok\" href=\"https://www.tiktok.com/@fallow_restaurant?lang=en\" target=\"_blank\"><i
        class=\"fa-brands fa-tiktok fa-2xl\" style=\"color: #ffffff\"></i></a>
  </div>
  <!-- address and contact information -->
  <p></p>


</footer>
</body>

</html>", "/staffportal/footer.html", "/var/www/html/mounted/website/src/Views/staffportal/footer.html");
    }
}
