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

/* __string_template__8c3072f50c34454b3c636a154928304cde2d4bb009bd913bb35c086f9d874e78 */
class __TwigTemplate_c5dd36f134f632490251749c2229f29f56f45c0ca987bcf7b17bcd21d0c3e0a7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 8, "for" => 11];
        $filters = ["escape" => 5];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
        // line 2
        echo "        <div class=\"layout-paragraphs-add-more-menu hidden\">
          <h4 class=\"visually-hidden\">Add Item</h4>
          <div class=\"layout-paragraphs-add-more-menu__search hidden\">
            <input type=\"text\" placeholder=\"";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["search_text"] ?? null)), "html", null, true);
        echo "\" />
          </div>
          <div class=\"layout-paragraphs-add-more-menu__group\">
            ";
        // line 8
        if ($this->getAttribute(($context["types"] ?? null), "layout", [])) {
            // line 9
            echo "            <div class=\"layout-paragraphs-add-more-menu__group--layout\">
            ";
        }
        // line 11
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["types"] ?? null), "layout", []));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 12
            echo "              <div class=\"layout-paragraphs-add-more-menu__item paragraph-type-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["type"], "id", [])), "html", null, true);
            echo " layout-paragraph\">
                <a data-type=\"";
            // line 13
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["type"], "id", [])), "html", null, true);
            echo "\" href=\"#";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["type"], "id", [])), "html", null, true);
            echo "\">
                ";
            // line 14
            if ($this->getAttribute($context["type"], "image", [])) {
                // line 15
                echo "                <img src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["type"], "image", [])), "html", null, true);
                echo "\" alt =\"\" />
                ";
            }
            // line 17
            echo "                <div>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["type"], "name", [])), "html", null, true);
            echo "</div>
                </a>
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            ";
        if ($this->getAttribute(($context["types"] ?? null), "layout", [])) {
            // line 22
            echo "            </div>
            ";
        }
        // line 24
        echo "            ";
        if ($this->getAttribute(($context["types"] ?? null), "content", [])) {
            // line 25
            echo "            <div class=\"layout-paragraphs-add-more-menu__group--content\">
            ";
        }
        // line 27
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["types"] ?? null), "content", []));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 28
            echo "              <div class=\"layout-paragraphs-add-more-menu__item paragraph-type-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["type"], "id", [])), "html", null, true);
            echo "\">
                <a data-type=\"";
            // line 29
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["type"], "id", [])), "html", null, true);
            echo "\" href=\"#";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["type"], "id", [])), "html", null, true);
            echo "\">
                ";
            // line 30
            if ($this->getAttribute($context["type"], "image", [])) {
                // line 31
                echo "                <img src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["type"], "image", [])), "html", null, true);
                echo "\" alt =\"\" />
                ";
            }
            // line 33
            echo "                <div>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["type"], "name", [])), "html", null, true);
            echo "</div>
                </a>
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            ";
        if ($this->getAttribute(($context["types"] ?? null), "content", [])) {
            // line 38
            echo "            </div>
            ";
        }
        // line 40
        echo "          </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "__string_template__8c3072f50c34454b3c636a154928304cde2d4bb009bd913bb35c086f9d874e78";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 40,  159 => 38,  156 => 37,  145 => 33,  139 => 31,  137 => 30,  131 => 29,  126 => 28,  121 => 27,  117 => 25,  114 => 24,  110 => 22,  107 => 21,  96 => 17,  90 => 15,  88 => 14,  82 => 13,  77 => 12,  72 => 11,  68 => 9,  66 => 8,  60 => 5,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}
        <div class=\"layout-paragraphs-add-more-menu hidden\">
          <h4 class=\"visually-hidden\">Add Item</h4>
          <div class=\"layout-paragraphs-add-more-menu__search hidden\">
            <input type=\"text\" placeholder=\"{{ search_text }}\" />
          </div>
          <div class=\"layout-paragraphs-add-more-menu__group\">
            {% if types.layout %}
            <div class=\"layout-paragraphs-add-more-menu__group--layout\">
            {% endif %}
            {% for type in types.layout %}
              <div class=\"layout-paragraphs-add-more-menu__item paragraph-type-{{type.id}} layout-paragraph\">
                <a data-type=\"{{ type.id }}\" href=\"#{{ type.id }}\">
                {% if type.image %}
                <img src=\"{{ type.image }}\" alt =\"\" />
                {% endif %}
                <div>{{ type.name }}</div>
                </a>
              </div>
            {% endfor %}
            {% if types.layout %}
            </div>
            {% endif %}
            {% if types.content %}
            <div class=\"layout-paragraphs-add-more-menu__group--content\">
            {% endif %}
            {% for type in types.content %}
              <div class=\"layout-paragraphs-add-more-menu__item paragraph-type-{{type.id}}\">
                <a data-type=\"{{ type.id }}\" href=\"#{{ type.id }}\">
                {% if type.image %}
                <img src=\"{{ type.image }}\" alt =\"\" />
                {% endif %}
                <div>{{ type.name }}</div>
                </a>
              </div>
            {% endfor %}
            {% if types.content %}
            </div>
            {% endif %}
          </div>
        </div>", "__string_template__8c3072f50c34454b3c636a154928304cde2d4bb009bd913bb35c086f9d874e78", "");
    }
}
