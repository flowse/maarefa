<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/bfd_subtheme/templates/page/page--404.html.twig */
class __TwigTemplate_12d02ff6078a6febaa4b6812cdf5ba92982f4d572a0e72eaec984d36b6adf63b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 48];
        $filters = ["t" => 60];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['t'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 45
        echo "

<!-- HEADER-->
";
        // line 48
        $this->loadTemplate("@bootstrap_for_drupal/includes/header.html.twig", "themes/contrib/bfd_subtheme/templates/page/page--404.html.twig", 48)->display($context);
        // line 49
        echo "<!-- HEADER-->

<!-- MAIN -->
<main role=\"main\">
   <a id=\"main-content\" tabindex=\"-1\"></a>
   ";
        // line 55
        echo "   <div class=\"container\">
      <div class=\"row\">
         <div class=\"col\">
            <div class=\"flex-column d-flex justify-content-center flex-grow-1 align-items-center vh-75\">
               <div class=\"p-5 p-md-7 rounded text-center\">
                  <h1 class=\"display-3 text-danger text-uppercase\">";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("error 404"));
        echo "</h1>
                  <p class=\"lead\">";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Page not found"));
        echo "</p>
                  <a href=\"/\" class=\"btn btn-outline-primary\">";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Back to Home page"));
        echo "</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
<!-- MAIN -->

<!-- FOOTER -->
";
        // line 72
        $this->loadTemplate("@bootstrap_for_drupal/includes/footer.html.twig", "themes/contrib/bfd_subtheme/templates/page/page--404.html.twig", 72)->display($context);
        // line 73
        echo "<!-- FOOTER -->
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bfd_subtheme/templates/page/page--404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 73,  97 => 72,  84 => 62,  80 => 61,  76 => 60,  69 => 55,  62 => 49,  60 => 48,  55 => 45,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}


<!-- HEADER-->
{% include '@bootstrap_for_drupal/includes/header.html.twig' %}
<!-- HEADER-->

<!-- MAIN -->
<main role=\"main\">
   <a id=\"main-content\" tabindex=\"-1\"></a>
   {# link is in html.html.twig #}
   <div class=\"container\">
      <div class=\"row\">
         <div class=\"col\">
            <div class=\"flex-column d-flex justify-content-center flex-grow-1 align-items-center vh-75\">
               <div class=\"p-5 p-md-7 rounded text-center\">
                  <h1 class=\"display-3 text-danger text-uppercase\">{{'error 404'|t }}</h1>
                  <p class=\"lead\">{{'Page not found'|t }}</p>
                  <a href=\"/\" class=\"btn btn-outline-primary\">{{'Back to Home page'|t }}</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
<!-- MAIN -->

<!-- FOOTER -->
{% include '@bootstrap_for_drupal/includes/footer.html.twig' %}
<!-- FOOTER -->
", "themes/contrib/bfd_subtheme/templates/page/page--404.html.twig", "/home/umedusa/public_html/web/themes/contrib/bfd_subtheme/templates/page/page--404.html.twig");
    }
}
