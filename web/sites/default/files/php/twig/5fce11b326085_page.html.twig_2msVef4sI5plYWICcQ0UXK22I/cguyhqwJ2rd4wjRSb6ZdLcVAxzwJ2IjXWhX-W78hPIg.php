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

/* themes/contrib/bfd_subtheme/templates/layout/page.html.twig */
class __TwigTemplate_6d9329a2e7cf0e998d29d7f9ba888c70bf3517a6cfd45ab8fa236fa80e468a5e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 46, "set" => 65, "if" => 71];
        $filters = ["escape" => 50];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'set', 'if'],
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
        echo "<!-- HEADER-->
";
        // line 46
        $this->loadTemplate("@bootstrap_for_drupal_subtheme/includes/header.html.twig", "themes/contrib/bfd_subtheme/templates/layout/page.html.twig", 46)->display($context);
        // line 47
        echo "<!-- HEADER-->

<div class=\"hidden\">
  ";
        // line 50
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "um_more", [])), "html", null, true);
        echo "
</div>
<div class=\"hidden\">
  ";
        // line 53
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "um_map", [])), "html", null, true);
        echo "
</div>

<!-- MAIN -->
<main role=\"main \" class=\"d-print-block\">
  <a id=\"main-content\" tabindex=\"-1\"></a>
  ";
        // line 60
        echo "
  <div class=\"container\">
    <div class=\"row\">

          <!-- If no sidebar_left content take full width -->
          ";
        // line 65
        $context["content_classes"] = (($this->getAttribute(($context["page"] ?? null), "sidebar_left", [])) ? ("col-md-8 col-lg-9") : ("col-12"));
        // line 66
        echo "          <!-- If no sidebar_left content take full width -->

          <div class=\"";
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_classes"] ?? null)), "html", null, true);
        echo " col-print-12\">

          <!-- CONTENT BEFORE -->
          ";
        // line 71
        if ($this->getAttribute(($context["page"] ?? null), "content_before", [])) {
            // line 72
            echo "            <aside class=\"mt-2 mt-md-3\" id=\"content-before\">
              ";
            // line 73
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_before", [])), "html", null, true);
            echo "
            </aside>
          ";
        }
        // line 76
        echo "          <!-- CONTENT BEFORE -->

          <!-- MAIN CONTENT -->
          <section class=\"py-2 py-md-3\" id=\"page-content\">
            ";
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
          </section>
          <!-- MAIN CONTENT -->

          <!-- CONTENT AFTER -->
          ";
        // line 85
        if ($this->getAttribute(($context["page"] ?? null), "content_after", [])) {
            // line 86
            echo "            <aside  id=\"content-after\">
              ";
            // line 87
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_after", [])), "html", null, true);
            echo "
            </aside>
          ";
        }
        // line 90
        echo "        </div>
        <!-- CONTENT AFTER -->

      <!-- ASIDE CONTENT -->
      ";
        // line 94
        $this->loadTemplate("@bootstrap_for_drupal_subtheme/includes/aside-content.html.twig", "themes/contrib/bfd_subtheme/templates/layout/page.html.twig", 94)->display($context);
        // line 95
        echo "      <!-- ASIDE CONTENT -->

    </div>
  </div>
</main>
<!-- MAIN -->

<!-- FOOTER -->
";
        // line 103
        $this->loadTemplate("@bootstrap_for_drupal_subtheme/includes/footer.html.twig", "themes/contrib/bfd_subtheme/templates/layout/page.html.twig", 103)->display($context);
        // line 104
        echo "<!-- FOOTER -->
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bfd_subtheme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 104,  153 => 103,  143 => 95,  141 => 94,  135 => 90,  129 => 87,  126 => 86,  124 => 85,  116 => 80,  110 => 76,  104 => 73,  101 => 72,  99 => 71,  93 => 68,  89 => 66,  87 => 65,  80 => 60,  71 => 53,  65 => 50,  60 => 47,  58 => 46,  55 => 45,);
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
<main role=\"main \" class=\"d-print-block\">
  <a id=\"main-content\" tabindex=\"-1\"></a>
  {# link is in html.html.twig #}

  <div class=\"container\">
    <div class=\"row\">

          <!-- If no sidebar_left content take full width -->
          {% set content_classes = (page.sidebar_left) ? 'col-md-8 col-lg-9' : 'col-12' %}
          <!-- If no sidebar_left content take full width -->

          <div class=\"{{ content_classes }} col-print-12\">

          <!-- CONTENT BEFORE -->
          {% if page.content_before %}
            <aside class=\"mt-2 mt-md-3\" id=\"content-before\">
              {{ page.content_before }}
            </aside>
          {% endif %}
          <!-- CONTENT BEFORE -->

          <!-- MAIN CONTENT -->
          <section class=\"py-2 py-md-3\" id=\"page-content\">
            {{ page.content }}
          </section>
          <!-- MAIN CONTENT -->

          <!-- CONTENT AFTER -->
          {% if page.content_after %}
            <aside  id=\"content-after\">
              {{ page.content_after }}
            </aside>
          {% endif %}
        </div>
        <!-- CONTENT AFTER -->

      <!-- ASIDE CONTENT -->
      {% include '@bootstrap_for_drupal_subtheme/includes/aside-content.html.twig' %}
      <!-- ASIDE CONTENT -->

    </div>
  </div>
</main>
<!-- MAIN -->

<!-- FOOTER -->
{% include '@bootstrap_for_drupal_subtheme/includes/footer.html.twig' %}
<!-- FOOTER -->
", "themes/contrib/bfd_subtheme/templates/layout/page.html.twig", "/home/umedusa/public_html/web/themes/contrib/bfd_subtheme/templates/layout/page.html.twig");
    }
}
