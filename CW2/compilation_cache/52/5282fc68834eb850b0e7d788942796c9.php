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

/* diner/about.html */
class __TwigTemplate_d7611666555b0288046d707b1c04b549 extends Template
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
    <meta name=\"description\"
        content=\"Lancaster's Restaurant - Discover Conscious Gastronomy in the heart of St James's.\" />
    <meta name=\"author\" content=\"Lancaster's Restaurant\">
    <meta name=\"keywords\"
        content=\"Lancaster's Restaurant,luxury dining, gourmet food, best dinner Lancaster,about,contact,lancaster's contact,reviews\">

    <title>Lancaster - Abouts</title>
    <link rel=\"stylesheet\" href=\"/public/shared/index.css\" />
    <link rel=\"stylesheet\" href=\"/public/css/diner/about.css\">
    <link rel=\"icon\" href=\"/public/info package/images/logos/Logoico.ico\" />
    <script src=\"/public/js/diner/about.js\"></script>
    <script src=\"https://kit.fontawesome.com/f11736a280.js\" crossorigin=\"anonymous\"></script>
</head>


<body>
    <!-- Navigation Bar  -->
 
    ";
        // line 25
        if (($context["show"] ?? null)) {
            // line 26
            yield "    ";
            yield from $this->loadTemplate("/diner/diner-header.html", "diner/about.html", 26)->unwrap()->yield($context);
            // line 27
            yield "    ";
        } else {
            // line 28
            yield "    ";
            yield from $this->loadTemplate("header.html", "diner/about.html", 28)->unwrap()->yield($context);
            // line 29
            yield "    ";
        }
        // line 30
        yield "    <!-- Main Content Section -->
    <main  id=\"Abouts\">

        <!-- background story section for restaurant -->
        <article class=\"story\" style=\"text-align: center;\">
            <h2>Our Story</h2>
            <p>
                Lancaster’s was founded by chef Ana Lancaster and Sommelier Robert Lancaster in May 2005.
                The essence of this combination makes up much of Fallows DNA, where conscious culinary creativity meets
                hospitality experience and passion for wine. What followed from their meeting were a series of sold-out
                residencies to establish Lancaster’s
                as one of the most exciting restaurant concepts on the UK restaurant scene. Lancaster’s permanent home
                in St James’s market was established in
                November 2010 and has since attracted a string of awards including both the <strong>Marie
                    Claire</strong> and <strong>GQ ‘sustainable restaurant of the year’</strong> and the <strong>Caterer
                    award for ‘best new restaurant’</strong>.
            </p>
            <p>
                Keep yourself updated by following us on <a aria-label=\"Click to Visit Lancaster’s Instagram\"
                    href=\"https://www.instagram.com/fallowrestaurant/\" target=\"_blank\" class=\"links\">
                    <b> Instagram</a></b>.
                <br>
            </p>
            <!-- Contact Information such socials  -->
            <p><strong>For collaborations</strong>, please contact
                <span><b><a aria-label=\"link to email marking team directly\" href=\"mailto:marketing@lancasters.com\"
                    class=\"links\">marketing@lancasters.com</a></b></span>
            </p>
            <p><strong>For business opportunities</strong>, please contact Robert Lancaster at
                <span><b><a aria-label=\"link to email for business opportunities directly\" href=\"mailto:office@lancasters.com\"
                    class=\"links\">office@lancasters.com</a></b></span>
            </p>
        </article>

        <!-- Customer reviews section via Trip Advisor with read more buttons for each review-->
        <section class=\"text-container story\"
            style=\"text-align: center; display: flex; flex-direction: column; justify-content: center; align-items: center; \">
            <div style=\"color: #cf2305; margin-bottom: -10px; \">
                <h2 style=\"margin: 0%;\" class=\"review-author\">Customer Reviews</h2>
                <i class=\"fa-solid fa-star\"></i>
                <i class=\"fa-solid fa-star\"></i>
                <i class=\"fa-solid fa-star\"></i>
                <i class=\"fa-solid fa-star\"></i>
            </div>
            <p style=\"font-size: 18px; max-width: 600px;\">
                Rated <span> <strong>4/5 </strong> </span> on TripAdvisor based on <span> <strong>400+ </strong> </span>
                <br>
                Check out our reviews on
                <a href=\"https://www.tripadvisor.co.uk/Restaurant_Review-g186338-d21270387-Reviews-Fallow_St_James_s-London_England.html\"
                    target=\"_blank\" aria-label=\"Visit Lancaster's TripAdvisor page\"
                    class=\"links\">
                    TripAdvisor
                </a>
            </p>
        </section>


        <!-- individual Customer Reviews Section -->
        <section class=\"review-container\">
            <!-- Review 1 container -->
            <article class=\"review-background\">
                <div class=\"review-header\">
                    <h3 class=\"review-author\">Elizabeth S</h3>
                    <div style=\"color: #cf2305;\"> <i class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> <i
                            class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> <i
                            class=\"fa-solid fa-star\"></i></div>
                </div>
                <h4 class=\"review-title\">Yum!</h4>
                <h4>Aug 2024 • couples</h4>
                <div class=\"review-text-container\" style=\"display: none;\">
                    <p class=\"review-text\">
                        Had a great dinner here during our trip to London from the states. Highly recommend the mushroom
                        parfait, ribs, and strawberry custard cream. The mussels and burger were also very good. Server
                        was attentive and had great knowledge of the menu
                    </p>
                    <p class=\"review-date\">Written 24 August 2024</p>
                    <div class=\"review-reply\">
                        <h3>Roe Restaurant reply</h3>
                        <p>Thanks so much for your lovely review and we're so pleased that you enjoyed your experience
                            with us. We absolutely love the mushroom parfait and ribs too! We're pleased to hear that
                            the team looked after you too. Hopefully we'll see you again on another trip to London. We
                            also think you will love our sister restaurant, Roe which is located in Wood Wharf so please
                            join us there and we'll make sure you're looked after.
                        </p>
                        <p class=\"reply-date\">Written 2 September 2024</p>
                    </div>
                </div>
                <button aria-label=\"Read More Review Button\" onclick=\"readMore(this)\" class=\"red-button\"
                    style=\"font-size: 19px; padding: 10px 20px;\">Read
                    More</button>
            </article>

            <!-- Review 2 container-->
            <article class=\"review-background\">
                <div class=\"review-header\">
                    <h3 class=\"review-author\">BJM</h3>
                    <div style=\"color: #cf2305;\"> <i class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> <i
                            class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> <i
                            class=\"fa-solid fa-star\"></i></div>
                </div>
                <h4 class=\"review-title\">Stunning food</h4>
                <h4>Aug 2024 • couples</h4>
                <div class=\"review-text-container\" style=\"display: none;\">
                    <p class=\"review-text\"></p>
                    Booked to dine here on a Friday night having been a fan of the owner’s YouTube account for a while
                    now. The restaurant was busy but we got seated straight away and were given water by the waiter. We
                    were left with the menu for 10 mins or so and then ordered our drinks and food. Between the two of
                    us we had the corn ribs and croquettes to start and for main sirloin steak and the halibut tikka
                    with muscles. We both went for the Chelsea tart for dessert. I was slightly worried that it wouldn’t
                    live up to expectations given how much I’d hyped it up in the build up but it was genuinely one of
                    the best meals I’ve had all year. Some of the most flavoursome, lip smacking, finger licking food
                    I’ve ever eaten. I could eat those corn ribs every day for the rest of my life and never get bored.
                    Absolutely adored this place and will definitely return when I’m next in London.
                    </p>
                    <p class=\"review-date\">Written 20 August 2024</p>
                </div>
                <button aria-label=\"Read More Review Button\" onclick=\"readMore(this)\" class=\"red-button\"
                    style=\"font-size: 19px; padding: 10px 20px;\">Read
                    More</button>
            </article>

            <!-- Review 3 container -->
            <article class=\"review-background\">
                <div class=\"review-header\">
                    <h3 class=\"review-author\">Mandy A</h3>
                    <div style=\"color: #cf2305;\"> <i class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> <i
                            class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> <i
                            class=\"fa-solid fa-star\"></i></div>
                </div>
                <h4 class=\"review-title\">Fantastic vibe, service, staff and food.</h4>
                <h4>Aug 2024 • friends</h4>
                <div class=\"review-text-container\" style=\"display: none;\">
                    <p class=\"review-text\"></p>
                    My brother and I have been following Fallow on social media for some time and finally decided to
                    take a visit with our partners. On arrival, staff were friendly and helpful and we were taken to our
                    table. The restaurant has a great vibe and watching the chefs (or should I say artists) at work is
                    just something else. We ordered a few things off the menu to start as there was so much choice and
                    we wanted it all! Our server was knowledgeable and explained what was not available and what he
                    would recommend too. What makes for amazing service. Offering drinks when they can see our drinks
                    were running low. All without being asked. Table wiped between courses. Friendly, happy staff. Just
                    great. The food was 10/10 and my husband says it's the best burger he's ever had! We unfortunately
                    didn’t order dessert as we were too full but will do next time we visit. All in all a fantastic
                    visit. We really couldn’t fault any of it. Staff, vibe, service and food all just fantastic. Well
                    done Fallow we are already planning our next visit.
                    </p>
                    <p class=\"review-date\">Written 17 August 2024</p>
                </div>
                <button aria-label=\"Read More Review Button\" onclick=\"readMore(this)\" class=\"red-button\"
                    style=\"font-size: 19px; padding: 10px 20px;\">Read
                    More</button>
            </article>



            <!-- Review 4 container -->
            <article class=\"review-background\">
                <div class=\"review-header\">
                    <h3 class=\"review-author\">Christopher A</h3>
                    <div style=\"color: #cf2305;\"> <i class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> <i
                            class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> <i
                            class=\"fa-solid fa-star\"></i></div>
                </div>
                <h4 class=\"review-title\">Excellent food and great atmosphere</h4>
                <h4>Aug 2024 • couples
                </h4>
                <div class=\"review-text-container\" style=\"display: none;\">
                    <p class=\"review-text\">
                        Exceptional food combined with wonderful service - the mushroom parfait and the beef ribs were
                        sensational. Can’t wait to return!
                    </p>
                    <p class=\"review-date\">Written 19 August 2024</p>
                </div>
                <button aria-label=\"Read More Review Button\" onclick=\"readMore(this)\" class=\"red-button\"
                    style=\"font-size: 19px; padding: 10px 20px;\">Read
                    More</button>
            </article>

        </section>


    </main>

    <!-- Footer Section -->
";
        // line 213
        yield Twig\Extension\CoreExtension::include($this->env, $context, "footer.html");
        yield "
</body>

</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "diner/about.html";
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
        return array (  267 => 213,  82 => 30,  79 => 29,  76 => 28,  73 => 27,  70 => 26,  68 => 25,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\"
        content=\"Lancaster's Restaurant - Discover Conscious Gastronomy in the heart of St James's.\" />
    <meta name=\"author\" content=\"Lancaster's Restaurant\">
    <meta name=\"keywords\"
        content=\"Lancaster's Restaurant,luxury dining, gourmet food, best dinner Lancaster,about,contact,lancaster's contact,reviews\">

    <title>Lancaster - Abouts</title>
    <link rel=\"stylesheet\" href=\"/public/shared/index.css\" />
    <link rel=\"stylesheet\" href=\"/public/css/diner/about.css\">
    <link rel=\"icon\" href=\"/public/info package/images/logos/Logoico.ico\" />
    <script src=\"/public/js/diner/about.js\"></script>
    <script src=\"https://kit.fontawesome.com/f11736a280.js\" crossorigin=\"anonymous\"></script>
</head>


<body>
    <!-- Navigation Bar  -->
 
    {% if show %}
    {% include '/diner/diner-header.html' %}
    {% else %}
    {% include 'header.html' %}
    {% endif %}
    <!-- Main Content Section -->
    <main  id=\"Abouts\">

        <!-- background story section for restaurant -->
        <article class=\"story\" style=\"text-align: center;\">
            <h2>Our Story</h2>
            <p>
                Lancaster’s was founded by chef Ana Lancaster and Sommelier Robert Lancaster in May 2005.
                The essence of this combination makes up much of Fallows DNA, where conscious culinary creativity meets
                hospitality experience and passion for wine. What followed from their meeting were a series of sold-out
                residencies to establish Lancaster’s
                as one of the most exciting restaurant concepts on the UK restaurant scene. Lancaster’s permanent home
                in St James’s market was established in
                November 2010 and has since attracted a string of awards including both the <strong>Marie
                    Claire</strong> and <strong>GQ ‘sustainable restaurant of the year’</strong> and the <strong>Caterer
                    award for ‘best new restaurant’</strong>.
            </p>
            <p>
                Keep yourself updated by following us on <a aria-label=\"Click to Visit Lancaster’s Instagram\"
                    href=\"https://www.instagram.com/fallowrestaurant/\" target=\"_blank\" class=\"links\">
                    <b> Instagram</a></b>.
                <br>
            </p>
            <!-- Contact Information such socials  -->
            <p><strong>For collaborations</strong>, please contact
                <span><b><a aria-label=\"link to email marking team directly\" href=\"mailto:marketing@lancasters.com\"
                    class=\"links\">marketing@lancasters.com</a></b></span>
            </p>
            <p><strong>For business opportunities</strong>, please contact Robert Lancaster at
                <span><b><a aria-label=\"link to email for business opportunities directly\" href=\"mailto:office@lancasters.com\"
                    class=\"links\">office@lancasters.com</a></b></span>
            </p>
        </article>

        <!-- Customer reviews section via Trip Advisor with read more buttons for each review-->
        <section class=\"text-container story\"
            style=\"text-align: center; display: flex; flex-direction: column; justify-content: center; align-items: center; \">
            <div style=\"color: #cf2305; margin-bottom: -10px; \">
                <h2 style=\"margin: 0%;\" class=\"review-author\">Customer Reviews</h2>
                <i class=\"fa-solid fa-star\"></i>
                <i class=\"fa-solid fa-star\"></i>
                <i class=\"fa-solid fa-star\"></i>
                <i class=\"fa-solid fa-star\"></i>
            </div>
            <p style=\"font-size: 18px; max-width: 600px;\">
                Rated <span> <strong>4/5 </strong> </span> on TripAdvisor based on <span> <strong>400+ </strong> </span>
                <br>
                Check out our reviews on
                <a href=\"https://www.tripadvisor.co.uk/Restaurant_Review-g186338-d21270387-Reviews-Fallow_St_James_s-London_England.html\"
                    target=\"_blank\" aria-label=\"Visit Lancaster's TripAdvisor page\"
                    class=\"links\">
                    TripAdvisor
                </a>
            </p>
        </section>


        <!-- individual Customer Reviews Section -->
        <section class=\"review-container\">
            <!-- Review 1 container -->
            <article class=\"review-background\">
                <div class=\"review-header\">
                    <h3 class=\"review-author\">Elizabeth S</h3>
                    <div style=\"color: #cf2305;\"> <i class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> <i
                            class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> <i
                            class=\"fa-solid fa-star\"></i></div>
                </div>
                <h4 class=\"review-title\">Yum!</h4>
                <h4>Aug 2024 • couples</h4>
                <div class=\"review-text-container\" style=\"display: none;\">
                    <p class=\"review-text\">
                        Had a great dinner here during our trip to London from the states. Highly recommend the mushroom
                        parfait, ribs, and strawberry custard cream. The mussels and burger were also very good. Server
                        was attentive and had great knowledge of the menu
                    </p>
                    <p class=\"review-date\">Written 24 August 2024</p>
                    <div class=\"review-reply\">
                        <h3>Roe Restaurant reply</h3>
                        <p>Thanks so much for your lovely review and we're so pleased that you enjoyed your experience
                            with us. We absolutely love the mushroom parfait and ribs too! We're pleased to hear that
                            the team looked after you too. Hopefully we'll see you again on another trip to London. We
                            also think you will love our sister restaurant, Roe which is located in Wood Wharf so please
                            join us there and we'll make sure you're looked after.
                        </p>
                        <p class=\"reply-date\">Written 2 September 2024</p>
                    </div>
                </div>
                <button aria-label=\"Read More Review Button\" onclick=\"readMore(this)\" class=\"red-button\"
                    style=\"font-size: 19px; padding: 10px 20px;\">Read
                    More</button>
            </article>

            <!-- Review 2 container-->
            <article class=\"review-background\">
                <div class=\"review-header\">
                    <h3 class=\"review-author\">BJM</h3>
                    <div style=\"color: #cf2305;\"> <i class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> <i
                            class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> <i
                            class=\"fa-solid fa-star\"></i></div>
                </div>
                <h4 class=\"review-title\">Stunning food</h4>
                <h4>Aug 2024 • couples</h4>
                <div class=\"review-text-container\" style=\"display: none;\">
                    <p class=\"review-text\"></p>
                    Booked to dine here on a Friday night having been a fan of the owner’s YouTube account for a while
                    now. The restaurant was busy but we got seated straight away and were given water by the waiter. We
                    were left with the menu for 10 mins or so and then ordered our drinks and food. Between the two of
                    us we had the corn ribs and croquettes to start and for main sirloin steak and the halibut tikka
                    with muscles. We both went for the Chelsea tart for dessert. I was slightly worried that it wouldn’t
                    live up to expectations given how much I’d hyped it up in the build up but it was genuinely one of
                    the best meals I’ve had all year. Some of the most flavoursome, lip smacking, finger licking food
                    I’ve ever eaten. I could eat those corn ribs every day for the rest of my life and never get bored.
                    Absolutely adored this place and will definitely return when I’m next in London.
                    </p>
                    <p class=\"review-date\">Written 20 August 2024</p>
                </div>
                <button aria-label=\"Read More Review Button\" onclick=\"readMore(this)\" class=\"red-button\"
                    style=\"font-size: 19px; padding: 10px 20px;\">Read
                    More</button>
            </article>

            <!-- Review 3 container -->
            <article class=\"review-background\">
                <div class=\"review-header\">
                    <h3 class=\"review-author\">Mandy A</h3>
                    <div style=\"color: #cf2305;\"> <i class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> <i
                            class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> <i
                            class=\"fa-solid fa-star\"></i></div>
                </div>
                <h4 class=\"review-title\">Fantastic vibe, service, staff and food.</h4>
                <h4>Aug 2024 • friends</h4>
                <div class=\"review-text-container\" style=\"display: none;\">
                    <p class=\"review-text\"></p>
                    My brother and I have been following Fallow on social media for some time and finally decided to
                    take a visit with our partners. On arrival, staff were friendly and helpful and we were taken to our
                    table. The restaurant has a great vibe and watching the chefs (or should I say artists) at work is
                    just something else. We ordered a few things off the menu to start as there was so much choice and
                    we wanted it all! Our server was knowledgeable and explained what was not available and what he
                    would recommend too. What makes for amazing service. Offering drinks when they can see our drinks
                    were running low. All without being asked. Table wiped between courses. Friendly, happy staff. Just
                    great. The food was 10/10 and my husband says it's the best burger he's ever had! We unfortunately
                    didn’t order dessert as we were too full but will do next time we visit. All in all a fantastic
                    visit. We really couldn’t fault any of it. Staff, vibe, service and food all just fantastic. Well
                    done Fallow we are already planning our next visit.
                    </p>
                    <p class=\"review-date\">Written 17 August 2024</p>
                </div>
                <button aria-label=\"Read More Review Button\" onclick=\"readMore(this)\" class=\"red-button\"
                    style=\"font-size: 19px; padding: 10px 20px;\">Read
                    More</button>
            </article>



            <!-- Review 4 container -->
            <article class=\"review-background\">
                <div class=\"review-header\">
                    <h3 class=\"review-author\">Christopher A</h3>
                    <div style=\"color: #cf2305;\"> <i class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> <i
                            class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> <i
                            class=\"fa-solid fa-star\"></i></div>
                </div>
                <h4 class=\"review-title\">Excellent food and great atmosphere</h4>
                <h4>Aug 2024 • couples
                </h4>
                <div class=\"review-text-container\" style=\"display: none;\">
                    <p class=\"review-text\">
                        Exceptional food combined with wonderful service - the mushroom parfait and the beef ribs were
                        sensational. Can’t wait to return!
                    </p>
                    <p class=\"review-date\">Written 19 August 2024</p>
                </div>
                <button aria-label=\"Read More Review Button\" onclick=\"readMore(this)\" class=\"red-button\"
                    style=\"font-size: 19px; padding: 10px 20px;\">Read
                    More</button>
            </article>

        </section>


    </main>

    <!-- Footer Section -->
{{ include('footer.html') }}
</body>

</html>", "diner/about.html", "/var/www/html/mounted/website/src/Views/diner/about.html");
    }
}
