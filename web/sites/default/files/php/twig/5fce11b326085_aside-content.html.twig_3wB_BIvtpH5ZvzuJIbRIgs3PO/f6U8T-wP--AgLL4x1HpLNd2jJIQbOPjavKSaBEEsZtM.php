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

/* @bootstrap_for_drupal_subtheme/includes/aside-content.html.twig */
class __TwigTemplate_ab66a02c4f9f5db80b3b86d48a501db2c17ba6b23cd5ea16ac0c763eec79febd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1];
        $filters = ["escape" => 6];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        // line 1
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_left", [])) {
            // line 2
            echo "<!-- ASIDE CONTENT -->
<div class=\"col-md-4 mb-4 col-lg-3 d-print-none\">
  <aside class=\"my-3 position-sticky sticky-top\" id=\"content-aside\">
    <div>
      ";
            // line 6
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_left", [])), "html", null, true);
            echo "
    </div>
  </aside>
</div>
<!-- ASIDE CONTENT -->
";
        }
    }

    public function getTemplateName()
    {
        return "@bootstrap_for_drupal_subtheme/includes/aside-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 6,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if page.sidebar_left %}
<!-- ASIDE CONTENT -->
<div class=\"col-md-4 mb-4 col-lg-3 d-print-none\">
  <aside class=\"my-3 position-sticky sticky-top\" id=\"content-aside\">
    <div>
      {{ page.sidebar_left }}
    </div>
  </aside>
</div>
<!-- ASIDE CONTENT -->
{% endif %}
", "@bootstrap_for_drupal_subtheme/includes/aside-content.html.twig", "/home/umedusa/public_html/web/themes/contrib/bfd_subtheme/templates/includes/aside-content.html.twig");
    }
}
