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

/* themes/contrib/socialbase/templates/views/views-mini-pager.html.twig */
class __TwigTemplate_fff7d6e8694eb042cbd3d4b6b53843f72e26dd406f964a1cf33cd7f3380856d1 extends \Twig\Template
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
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/pagination"), "html", null, true));
        echo "
";
        // line 15
        if (($this->getAttribute(($context["items"] ?? null), "previous", []) || $this->getAttribute(($context["items"] ?? null), "next", []))) {
            // line 16
            echo "  <nav role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 class=\"sr-only\">";
            // line 17
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Pagination")));
            echo "</h4>
    <ul class=\"mini-pager\">
      ";
            // line 19
            if ($this->getAttribute(($context["items"] ?? null), "previous", [])) {
                // line 20
                echo "        <li class=\"pager__item pager__item--previous\">
          <a class=\"btn btn-flat\" href=\"";
                // line 21
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "href", [])), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to previous page")));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "attributes", [])), "href", "title", "rel"), "html", null, true));
                echo ">
            <span aria-hidden=\"true\">
              <svg class=\"icon-small\" aria-hidden=\"true\">
                <title>";
                // line 24
                echo t("Previous page", array());
                echo "</title>
                <use xlink:href=\"#icon-navigate_before\">  </use>
              </svg>
            </span>
            <span>";
                // line 28
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Newer items")));
                echo " </span>
          </a>
        </li>
      ";
            }
            // line 32
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "next", [])) {
                // line 33
                echo "        <li class=\"pager__item pager__item--next\">
          <a class=\"btn btn-flat\" href=\"";
                // line 34
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "href", [])), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to next page")));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "attributes", [])), "href", "title", "rel"), "html", null, true));
                echo ">
            <span>";
                // line 35
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Older items")));
                echo " </span>
            <span aria-hidden=\"true\">
              <svg class=\"icon-small\" aria-hidden=\"true\">
                <use xlink:href=\"#icon-navigate_next\"> </use>
              </svg>
            </span>
          </a>
        </li>
      ";
            }
            // line 44
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/views/views-mini-pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 44,  89 => 35,  81 => 34,  78 => 33,  75 => 32,  68 => 28,  61 => 24,  51 => 21,  48 => 20,  46 => 19,  41 => 17,  38 => 16,  36 => 15,  32 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/views/views-mini-pager.html.twig", "/var/www/html/themes/contrib/socialbase/templates/views/views-mini-pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 15, "trans" => 24];
        static $filters = ["escape" => 14, "t" => 17, "without" => 21];
        static $functions = ["attach_library" => 14];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 't', 'without'],
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
