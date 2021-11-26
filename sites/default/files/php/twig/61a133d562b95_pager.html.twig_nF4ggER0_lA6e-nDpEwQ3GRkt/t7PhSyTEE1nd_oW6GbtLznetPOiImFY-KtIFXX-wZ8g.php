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

/* themes/contrib/socialbase/templates/system/pager.html.twig */
class __TwigTemplate_d7a61ad71dbbb64e77e51f9f1bd104f89126851da9de53d852d91c061707c9a2 extends \Twig\Template
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
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/pagination"), "html", null, true));
        echo "

";
        // line 36
        if (($context["items"] ?? null)) {
            // line 37
            echo "  <nav class=\"pager-nav text-center\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 id=\"pagination-heading\" class=\"visually-hidden\">";
            // line 38
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Pagination")));
            echo "</h4>
    <ul class=\"pagination js-pager__items\">

      ";
            // line 42
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "first", [])) {
                // line 43
                echo "        <li class=\"pager__item pager__item--first\">
          <a href=\"";
                // line 44
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", []), "href", [])), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to first page")));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", []), "attributes", [])), "html", null, true));
                echo ">
            <span class=\"visually-hidden\">";
                // line 45
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("First page")));
                echo "</span>
            ";
                // line 46
                $context["default_first"] = t("first");
                // line 47
                echo "            <span aria-hidden=\"true\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", [], "any", false, true), "text", [])), $this->sandbox->ensureToStringAllowed(($context["default_first"] ?? null)))) : (($context["default_first"] ?? null))), "html", null, true));
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 51
            echo "
      ";
            // line 53
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "previous", [])) {
                // line 54
                echo "        <li class=\"pager__item pager__item--previous\">
          <a href=\"";
                // line 55
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "href", [])), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to previous page")));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "attributes", [])), "html", null, true));
                echo ">
            <span class=\"visually-hidden\">";
                // line 56
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Previous page")));
                echo "</span>
            ";
                // line 57
                $context["default_previous"] = t("previous");
                // line 58
                echo "            <span aria-hidden=\"true\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", [], "any", false, true), "text", [])), $this->sandbox->ensureToStringAllowed(($context["default_previous"] ?? null)))) : (($context["default_previous"] ?? null))), "html", null, true));
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 62
            echo "
      ";
            // line 64
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["items"] ?? null), "pages", []));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 65
                echo "        <li class=\"pager__item";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" is-active active") : (""))));
                echo "\">
          ";
                // line 66
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 67
                    echo "            ";
                    $context["title"] = t("Current page");
                    // line 68
                    echo "          ";
                } else {
                    // line 69
                    echo "            ";
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 70
                    echo "          ";
                }
                // line 71
                echo "          <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "href", [])), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true));
                echo "\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "attributes", [])), "html", null, true));
                echo ">
            <span class=\"visually-hidden\">
              ";
                // line 73
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page")))));
                echo "
            </span>";
                // line 75
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"]), "html", null, true));
                // line 76
                echo "</a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "
      ";
            // line 81
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "next", [])) {
                // line 82
                echo "        <li class=\"pager__item pager__item--next\">
          <a href=\"";
                // line 83
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "href", [])), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to next page")));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "attributes", [])), "html", null, true));
                echo ">
            <span class=\"visually-hidden\">";
                // line 84
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Next page")));
                echo "</span>
            ";
                // line 85
                $context["default_next"] = t("next");
                // line 86
                echo "            <span aria-hidden=\"true\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", [], "any", false, true), "text", [])), $this->sandbox->ensureToStringAllowed(($context["default_next"] ?? null)))) : (($context["default_next"] ?? null))), "html", null, true));
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 90
            echo "
      ";
            // line 92
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "last", [])) {
                // line 93
                echo "      <li class=\"pager__item pager__item--last\">
        <a href=\"";
                // line 94
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", []), "href", [])), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to last page")));
                echo "\" rel=\"last\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", []), "attributes", [])), "html", null, true));
                echo ">
          <span class=\"visually-hidden\">";
                // line 95
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Last page")));
                echo "</span>
          ";
                // line 96
                $context["default_last"] = t("last");
                // line 97
                echo "          <span aria-hidden=\"true\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", [], "any", false, true), "text", [])), $this->sandbox->ensureToStringAllowed(($context["default_last"] ?? null)))) : (($context["default_last"] ?? null))), "html", null, true));
                echo "</span>
        </a>
      </li>
      ";
            }
            // line 101
            echo "
    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/system/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 101,  212 => 97,  210 => 96,  206 => 95,  198 => 94,  195 => 93,  192 => 92,  189 => 90,  181 => 86,  179 => 85,  175 => 84,  167 => 83,  164 => 82,  161 => 81,  158 => 79,  150 => 76,  148 => 75,  144 => 73,  134 => 71,  131 => 70,  128 => 69,  125 => 68,  122 => 67,  120 => 66,  115 => 65,  110 => 64,  107 => 62,  99 => 58,  97 => 57,  93 => 56,  85 => 55,  82 => 54,  79 => 53,  76 => 51,  68 => 47,  66 => 46,  62 => 45,  54 => 44,  51 => 43,  48 => 42,  42 => 38,  39 => 37,  37 => 36,  32 => 34,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/system/pager.html.twig", "/var/www/html/themes/contrib/socialbase/templates/system/pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 36, "set" => 46, "for" => 64];
        static $filters = ["escape" => 34, "t" => 38, "default" => 47];
        static $functions = ["attach_library" => 34];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 't', 'default'],
                ['attach_library']
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
