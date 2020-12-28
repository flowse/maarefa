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

/* themes/contrib/bfd_subtheme/templates/paragraph/paragraph--text-bg-option-6.html.twig */
class __TwigTemplate_7e36236d00ee0966b4cfbe6d43721dd106aa828f40230d1ad28e48b0d721df67 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 9];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<div class=\"container1 paragraph--type--text-bg-option-6\">
    <div class=\"row\">
       <div class=\"col-md-6 col-sm-12 logo-item\">
           <div class=\"col-md-7 logo-bg\">
             <img class=\"logo-bg\" src=\"/sites/default/files/2020-11/stamp.png\" alt=\"stamp\">
           </div>
       </div>
            <div class=\"col-md-6 col-sm-12 image-item\">
                <div class=\"description-bg\">";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_description_of_paragraph", [])), "html", null, true);
        echo "</div>
            </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bfd_subtheme/templates/paragraph/paragraph--text-bg-option-6.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 9,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container1 paragraph--type--text-bg-option-6\">
    <div class=\"row\">
       <div class=\"col-md-6 col-sm-12 logo-item\">
           <div class=\"col-md-7 logo-bg\">
             <img class=\"logo-bg\" src=\"/sites/default/files/2020-11/stamp.png\" alt=\"stamp\">
           </div>
       </div>
            <div class=\"col-md-6 col-sm-12 image-item\">
                <div class=\"description-bg\">{{ content.field_description_of_paragraph }}</div>
            </div>
    </div>
</div>", "themes/contrib/bfd_subtheme/templates/paragraph/paragraph--text-bg-option-6.html.twig", "/home/umedusa/public_html/web/themes/contrib/bfd_subtheme/templates/paragraph/paragraph--text-bg-option-6.html.twig");
    }
}
