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

/* themes/contrib/socialbase/templates/like/like-and-dislike-icons.html.twig */
class __TwigTemplate_125f5e404f456bd1a0cbd25dbeb66aedb907c9ac6abe55cbd5292c6c14627499 extends \Twig\Template
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
        // line 17
        echo "
<div class=\"vote-widget vote-widget--like-and-dislike\">
  <div class=\"vote__wrapper\">
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["icons"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["icon"]) {
            // line 21
            echo "
      ";
            // line 22
            $context["count"] = $this->getAttribute($context["icon"], "count", []);
            // line 23
            echo "
      ";
            // line 24
            if (($context["type"] == "dislike")) {
                // line 25
                echo "        <div class=\"vote-dislike type-";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_type"] ?? null)), "html", null, true));
                echo "\" id=\"dislike-container-";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_type"] ?? null)), "html", null, true));
                echo "-";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_id"] ?? null)), "html", null, true));
                echo "\">
          <a ";
                // line 26
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["icon"], "attributes", [])), "html", null, true));
                echo " title=\"";
                echo t("Number of likes", array());
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["icon"], "label", [])), "html", null, true));
                echo "</a>
          <span class=\"count\">";
                // line 27
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["count"] ?? null)), "html", null, true));
                echo "</span>
        </div>
      ";
            }
            // line 30
            echo "
      ";
            // line 31
            if (($context["type"] == "like")) {
                // line 32
                echo "        <div class=\"vote-like type-";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_type"] ?? null)), "html", null, true));
                echo "\" id=\"like-container-";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_type"] ?? null)), "html", null, true));
                echo "-";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_id"] ?? null)), "html", null, true));
                echo "\">
          <a ";
                // line 33
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["icon"], "attributes", [])), "html", null, true));
                echo " title=\"";
                echo t("Number of likes", array());
                echo "\">
            <svg class=\"icon-vote\" aria-hidden=\"true\">
              <title>";
                // line 35
                echo t("Total amount of likes", array());
                echo "</title>
              <use xlink:href=\"#icon-like\"></use>
            </svg>
          </a>
        </div>

        <div class=\"vote__count\">
          ";
                // line 42
                if (($context["logged_in"] ?? null)) {
                    // line 43
                    echo "            <a class=\"use-ajax\" data-dialog-options='{\"title\":\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modal_title"] ?? null)), "html", null, true));
                    echo "\",\"width\":\"auto\"}' data-dialog-type=\"modal\" href=\"/wholiked/";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_type"] ?? null)), "html", null, true));
                    echo "/";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_id"] ?? null)), "html", null, true));
                    echo "\" title=\"";
                    echo t("Number of likes", array());
                    echo "\">
              ";
                    // line 44
                    echo \Drupal::translation()->formatPlural(abs(($context["count"] ?? null)), "@count like", "@count likes", array("@count" => ($context["count"] ?? null), "@count" => ($context["count"] ?? null), ));
                    // line 45
                    echo "            </a>
          ";
                } else {
                    // line 47
                    echo "            ";
                    echo \Drupal::translation()->formatPlural(abs(($context["count"] ?? null)), "@count like", "@count likes", array("@count" => ($context["count"] ?? null), "@count" => ($context["count"] ?? null), ));
                    // line 48
                    echo "          ";
                }
                // line 49
                echo "        </div>
      ";
            }
            // line 51
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['icon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/like/like-and-dislike-icons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 52,  134 => 51,  130 => 49,  127 => 48,  124 => 47,  120 => 45,  118 => 44,  107 => 43,  105 => 42,  95 => 35,  88 => 33,  79 => 32,  77 => 31,  74 => 30,  68 => 27,  60 => 26,  51 => 25,  49 => 24,  46 => 23,  44 => 22,  41 => 21,  37 => 20,  32 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/like/like-and-dislike-icons.html.twig", "/var/www/html/themes/contrib/socialbase/templates/like/like-and-dislike-icons.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 20, "set" => 22, "if" => 24, "trans" => 26];
        static $filters = ["escape" => 25];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if', 'trans'],
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
}
