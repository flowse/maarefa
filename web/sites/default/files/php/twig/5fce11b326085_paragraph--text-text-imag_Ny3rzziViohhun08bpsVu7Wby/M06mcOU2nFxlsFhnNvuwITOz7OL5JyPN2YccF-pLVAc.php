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

/* themes/contrib/bfd_subtheme/templates/paragraph/paragraph--text-text-image-more-option-2.html.twig */
class __TwigTemplate_422cd308cb379a9bc5451e21a3ffd0960542268ce30bfb7053d3826ec79a09ad extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 6];
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
        echo "<div class=\"container1 paragraph--type--text-text-image-more-option-2\">
    <div class=\"row\">

       <div class=\"col-md-6 col-sm-12 descp-item\">
           <div class=\"col-md-7 container-descp\">
               <h2 class=\"title-colored\">";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_title_of_paragraph", [])), "html", null, true);
        echo "</h2>
               <div class=\"container-descp-text\">";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_description_of_paragraph", [])), "html", null, true);
        echo "</div>
               <div class=\"paragraph-link-more\">";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_more_paragraph", [])), "html", null, true);
        echo "</div>
           </div>
       </div>
            <div class=\"col-md-6 col-sm-12 image-item\">
                ";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image_of_paragraph", [])), "html", null, true);
        echo "
           <div class=\"description-image\">";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_description_of_paragraph_2", [])), "html", null, true);
        echo "</div>
       </div>
    </div>
</div>




";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bfd_subtheme/templates/paragraph/paragraph--text-text-image-more-option-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 13,  77 => 12,  70 => 8,  66 => 7,  62 => 6,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container1 paragraph--type--text-text-image-more-option-2\">
    <div class=\"row\">

       <div class=\"col-md-6 col-sm-12 descp-item\">
           <div class=\"col-md-7 container-descp\">
               <h2 class=\"title-colored\">{{ content.field_title_of_paragraph }}</h2>
               <div class=\"container-descp-text\">{{ content.field_description_of_paragraph }}</div>
               <div class=\"paragraph-link-more\">{{ content.field_more_paragraph }}</div>
           </div>
       </div>
            <div class=\"col-md-6 col-sm-12 image-item\">
                {{ content.field_image_of_paragraph }}
           <div class=\"description-image\">{{ content.field_description_of_paragraph_2 }}</div>
       </div>
    </div>
</div>




", "themes/contrib/bfd_subtheme/templates/paragraph/paragraph--text-text-image-more-option-2.html.twig", "/home/umedusa/public_html/web/themes/contrib/bfd_subtheme/templates/paragraph/paragraph--text-text-image-more-option-2.html.twig");
    }
}
