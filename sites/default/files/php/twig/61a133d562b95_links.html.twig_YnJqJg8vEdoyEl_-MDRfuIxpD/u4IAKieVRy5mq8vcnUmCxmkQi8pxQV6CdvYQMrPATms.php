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

/* themes/contrib/socialbase/templates/system/links.html.twig */
class __TwigTemplate_50b33d753e1e07b47d3f95a5e3be022a4c42986eb67ce9fce6320b39df9cab01 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 35
        if (($context["links"] ?? null)) {
            // line 36
            if (($context["heading"] ?? null)) {
                // line 37
                if ($this->getAttribute(($context["heading"] ?? null), "level", [])) {
                    // line 38
                    echo "<";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading"] ?? null), "level", [])), "html", null, true));
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading"] ?? null), "attributes", [])), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading"] ?? null), "text", [])), "html", null, true));
                    echo "</";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading"] ?? null), "level", [])), "html", null, true));
                    echo ">";
                } else {
                    // line 40
                    echo "<h2";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading"] ?? null), "attributes", [])), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading"] ?? null), "text", [])), "html", null, true));
                    echo "</h2>";
                }
            }
            // line 43
            if (($this->getAttribute(($context["links"] ?? null), "edit", []) || $this->getAttribute(($context["links"] ?? null), "report", []))) {
                // line 44
                echo "<div class=\"comment__actions pull-right\">
      <button type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\" aria-haspopup=\"true\" class=\"btn btn-icon-toggle dropdown-toggle\" aria-label=\"";
                // line 45
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("More options")));
                echo "\">
        <svg class=\"btn-icon icon-gray\" aria-hidden=\"true\">
          <title>";
                // line 47
                echo t("More options", array());
                echo "</title>
          <use xlink:href=\"#icon-expand_more\"></use>
        </svg>
      </button>
      <ul";
                // line 51
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "dropdown-menu"], "method")), "html", null, true));
                echo ">";
            } elseif ($this->getAttribute(            // line 52
($context["attributes"] ?? null), "hasClass", [0 => "inline"], "method")) {
                // line 53
                echo "<ul";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "list-inline"], "method")), "html", null, true));
                echo ">";
            } else {
                // line 55
                echo "<ul";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true));
                echo ">";
            }
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 58
                echo "<li";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($context["key"]))], "method")), "html", null, true));
                echo ">";
                // line 59
                if ($this->getAttribute($context["item"], "link", [])) {
                    // line 60
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "link", [])), "html", null, true));
                } elseif ($this->getAttribute(                // line 61
$context["item"], "text_attributes", [])) {
                    // line 62
                    echo "<span";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text_attributes", [])), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text", [])), "html", null, true));
                    echo "</span>";
                } elseif ($this->getAttribute(                // line 63
$context["item"], "disabled", [])) {
                    // line 64
                    echo "<span>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text", [])), "html", null, true));
                    echo "</span>";
                } else {
                    // line 66
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text", [])), "html", null, true));
                }
                // line 68
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "</ul>";
            // line 71
            if (($this->getAttribute(($context["links"] ?? null), "edit", []) || $this->getAttribute(($context["links"] ?? null), "report", []))) {
                // line 72
                echo "</div>";
            }
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/system/links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 72,  126 => 71,  124 => 70,  118 => 68,  115 => 66,  110 => 64,  108 => 63,  102 => 62,  100 => 61,  98 => 60,  96 => 59,  92 => 58,  88 => 57,  83 => 55,  78 => 53,  76 => 52,  73 => 51,  66 => 47,  61 => 45,  58 => 44,  56 => 43,  48 => 40,  38 => 38,  36 => 37,  34 => 36,  32 => 35,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/system/links.html.twig", "/var/www/html/themes/contrib/socialbase/templates/system/links.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 35, "trans" => 47, "for" => 57];
        static $filters = ["escape" => 38, "t" => 45, "clean_class" => 58];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans', 'for'],
                ['escape', 't', 'clean_class'],
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
}
