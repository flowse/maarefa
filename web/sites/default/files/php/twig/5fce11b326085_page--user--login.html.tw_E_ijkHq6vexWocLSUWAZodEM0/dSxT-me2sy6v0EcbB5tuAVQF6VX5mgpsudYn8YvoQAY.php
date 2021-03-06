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

/* themes/contrib/bfd_subtheme/templates/page/page--user--login.html.twig */
class __TwigTemplate_33083822f03c38fd3eaeda1347f3ce0118d6c860ba269b8c8f919febc47fb5e9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 47, "if" => 64];
        $filters = ["escape" => 51];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
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
        // line 47
        $this->loadTemplate("@bootstrap_for_drupal_subtheme/includes/header.html.twig", "themes/contrib/bfd_subtheme/templates/page/page--user--login.html.twig", 47)->display($context);
        // line 48
        echo "<!-- HEADER-->

<div class=\"hidden\">
  ";
        // line 51
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "um_more", [])), "html", null, true);
        echo "
</div>
<div class=\"hidden\">
  ";
        // line 54
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "um_map", [])), "html", null, true);
        echo "
</div>

<!-- MAIN -->
<main role=\"main\" class=\"form-login\">
  <a id=\"main-content\" tabindex=\"-1\"></a>
  ";
        // line 61
        echo "  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 64
        if ($this->getAttribute(($context["page"] ?? null), "content_before", [])) {
            // line 65
            echo "          <aside class=\"mt-2 mt-md-3\">
            ";
            // line 66
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_before", [])), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 69
        echo "        <div class=\"row justify-content-md-center\">
          <div class=\"col col-md-8 col-lg-6\">
            <section class=\"bg-light p-4 my-2 my-md-5 form-login user rounded\">
              ";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- MAIN -->

<!-- FOOTER -->
";
        // line 83
        $this->loadTemplate("@bootstrap_for_drupal_subtheme/includes/footer.html.twig", "themes/contrib/bfd_subtheme/templates/page/page--user--login.html.twig", 83)->display($context);
        // line 84
        echo "<!-- FOOTER -->
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bfd_subtheme/templates/page/page--user--login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 84,  116 => 83,  102 => 72,  97 => 69,  91 => 66,  88 => 65,  86 => 64,  81 => 61,  72 => 54,  66 => 51,  61 => 48,  59 => 47,  55 => 45,);
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
{% include '@bootstrap_for_drupal_subtheme/includes/header.html.twig' %}
<!-- HEADER-->

<div class=\"hidden\">
  {{ page.um_more }}
</div>
<div class=\"hidden\">
  {{ page.um_map }}
</div>

<!-- MAIN -->
<main role=\"main\" class=\"form-login\">
  <a id=\"main-content\" tabindex=\"-1\"></a>
  {# link is in html.html.twig #}
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col\">
        {% if page.content_before %}
          <aside class=\"mt-2 mt-md-3\">
            {{ page.content_before }}
          </aside>
        {% endif %}
        <div class=\"row justify-content-md-center\">
          <div class=\"col col-md-8 col-lg-6\">
            <section class=\"bg-light p-4 my-2 my-md-5 form-login user rounded\">
              {{ page.content }}
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- MAIN -->

<!-- FOOTER -->
{% include '@bootstrap_for_drupal_subtheme/includes/footer.html.twig' %}
<!-- FOOTER -->
", "themes/contrib/bfd_subtheme/templates/page/page--user--login.html.twig", "/home/umedusa/public_html/web/themes/contrib/bfd_subtheme/templates/page/page--user--login.html.twig");
    }
}
