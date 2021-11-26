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

/* themes/contrib/socialbase/templates/comment/links--comment.html.twig */
class __TwigTemplate_530bd5aa92dd62f398d521b4736846e6488cb458883db9de5b728aa2cceba742 extends \Twig\Template
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
        echo "
";
        // line 36
        if (($context["links"] ?? null)) {
            // line 37
            if (($context["heading"] ?? null)) {
                // line 38
                if ($this->getAttribute(($context["heading"] ?? null), "level", [])) {
                    // line 39
                    echo "<";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading"] ?? null), "level", [])), "html", null, true));
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading"] ?? null), "attributes", [])), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading"] ?? null), "text", [])), "html", null, true));
                    echo "</";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading"] ?? null), "level", [])), "html", null, true));
                    echo ">";
                } else {
                    // line 41
                    echo "<h2";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading"] ?? null), "attributes", [])), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading"] ?? null), "text", [])), "html", null, true));
                    echo "</h2>";
                }
            }
            // line 45
            if ((($this->getAttribute(($context["links"] ?? null), "comment-edit", [], "array") || $this->getAttribute(($context["links"] ?? null), "comment-delete", [], "array")) || $this->getAttribute(($context["links"] ?? null), "report", []))) {
                // line 46
                echo "    <div class=\"comment__actions pull-right\">
      <button type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\" aria-haspopup=\"true\" class=\"btn btn-icon-toggle dropdown-toggle\" title=\"";
                // line 47
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("More options")));
                echo "\">
        <svg class=\"btn-icon icon-gray\" aria-hidden=\"true\">
          <title>";
                // line 49
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("More options")));
                echo "</title>
          <use xlink:href=\"#icon-expand_more\"></use>
        </svg>
      </button>
      <ul";
                // line 53
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "dropdown-menu"], "method")), "html", null, true));
                echo ">";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["links"] ?? null)));
                foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                    if (($context["key"] != "comment-reply")) {
                        // line 55
                        echo "<li";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($context["key"]))], "method")), "html", null, true));
                        echo ">";
                        // line 56
                        if ($this->getAttribute($context["item"], "link", [])) {
                            // line 57
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "link", [])), "html", null, true));
                        } elseif ($this->getAttribute(                        // line 58
$context["item"], "text_attributes", [])) {
                            // line 59
                            echo "<span";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text_attributes", [])), "html", null, true));
                            echo ">";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text", [])), "html", null, true));
                            echo "</span>";
                        } else {
                            // line 61
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text", [])), "html", null, true));
                        }
                        // line 63
                        echo "</li>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "</ul>
    </div>
  ";
            } else {
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                    if (($context["key"] != "comment-reply")) {
                        // line 70
                        echo "<li";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($context["key"]))], "method")), "html", null, true));
                        echo ">";
                        // line 71
                        if ($this->getAttribute($context["item"], "link", [])) {
                            // line 72
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "link", [])), "html", null, true));
                        } elseif ($this->getAttribute(                        // line 73
$context["item"], "text_attributes", [])) {
                            // line 74
                            echo "<span";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text_attributes", [])), "html", null, true));
                            echo ">";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text", [])), "html", null, true));
                            echo "</span>";
                        } else {
                            // line 76
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text", [])), "html", null, true));
                        }
                        // line 78
                        echo "</li>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        }
        // line 84
        echo "
";
        // line 85
        if ($this->getAttribute(($context["links"] ?? null), "comment-reply", [], "array")) {
            // line 86
            echo "
  <div class=\"btn comment__reply-btn\">";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["links"] ?? null)));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                if (($context["key"] == "comment-reply")) {
                    // line 89
                    if ($this->getAttribute($context["item"], "link", [])) {
                        // line 90
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "link", [])), "html", null, true));
                    } elseif ($this->getAttribute(                    // line 91
$context["item"], "text_attributes", [])) {
                        // line 92
                        echo "<span";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text_attributes", [])), "html", null, true));
                        echo ">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text", [])), "html", null, true));
                        echo "</span>";
                    } else {
                        // line 94
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text", [])), "html", null, true));
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/comment/links--comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 97,  176 => 94,  169 => 92,  167 => 91,  165 => 90,  163 => 89,  158 => 88,  155 => 86,  153 => 85,  150 => 84,  141 => 78,  138 => 76,  131 => 74,  129 => 73,  127 => 72,  125 => 71,  121 => 70,  116 => 69,  111 => 65,  104 => 63,  101 => 61,  94 => 59,  92 => 58,  90 => 57,  88 => 56,  84 => 55,  79 => 54,  76 => 53,  69 => 49,  64 => 47,  61 => 46,  59 => 45,  51 => 41,  41 => 39,  39 => 38,  37 => 37,  35 => 36,  32 => 35,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/comment/links--comment.html.twig", "/var/www/html/themes/contrib/socialbase/templates/comment/links--comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 36, "for" => 54];
        static $filters = ["escape" => 39, "t" => 47, "reverse" => 54, "clean_class" => 55];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 't', 'reverse', 'clean_class'],
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
