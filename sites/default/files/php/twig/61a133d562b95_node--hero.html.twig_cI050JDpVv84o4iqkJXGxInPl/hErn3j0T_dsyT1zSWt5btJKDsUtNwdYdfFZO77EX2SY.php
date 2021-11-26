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

/* themes/contrib/socialbase/templates/node/node--hero.html.twig */
class __TwigTemplate_bb1e0ea93a3b4cf0d1e3c7504b7aa40bc26c6eebec3852d54918bbbe5c0d7f6c extends \Twig\Template
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
        // line 68
        echo "
";
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/hero"), "html", null, true));
        echo "

";
        // line 72
        $context["cover_classes"] = [0 => "cover", 1 => ((        // line 74
($context["hero_styled_image_url"] ?? null)) ? ("cover-img cover-img-gradient") : (""))];
        // line 77
        echo "
<div";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["cover_classes"] ?? null)], "method")), "html", null, true));
        echo " ";
        if (($context["hero_styled_image_url"] ?? null)) {
            echo " style=\"background-image: url('";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_styled_image_url"] ?? null)), "html", null, true));
            echo "');\" ";
        }
        echo ">
  <div class=\"hero__bgimage-overlay\"></div>
  ";
        // line 80
        if (($context["node_edit_url"] ?? null)) {
            // line 81
            echo "    <div class=\"hero-action-button\">
      <a href=\"";
            // line 82
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["node_edit_url"] ?? null)), "html", null, true));
            echo "\" title=\"";
            echo t("Edit content", array());
            echo "\"
         class=\"btn btn-raised btn-default btn-floating\">
        <svg class=\"icon-gray icon-medium\" aria-hidden=\"true\">
          <title>";
            // line 85
            echo t("Edit content", array());
            echo "</title>
          <use xlink:href=\"#icon-edit\"></use>
        </svg>
      </a>
    </div>
  ";
        }
        // line 91
        echo "
  <div class=\"cover-wrap\">
    <header class=\"page-title\">
      <p>";
        // line 94
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true));
        echo "</p>
      ";
        // line 95
        if (($context["label"] ?? null)) {
            // line 96
            echo "        <h1";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null)), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true));
            echo "</h1>
      ";
        }
        // line 98
        echo "      <p>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true));
        echo "</p>
    </header>

    ";
        // line 101
        if (($context["event_enrollment"] ?? null)) {
            // line 102
            echo "      <div class=\"hero-footer\">
        <div class=\"hero-footer__text\"></div>
        <div class=\"hero-footer__cta\">
          <div class=\"btn-group\">
            ";
            // line 106
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["event_enrollment"] ?? null)), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    ";
        }
        // line 111
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/node/node--hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 111,  113 => 106,  107 => 102,  105 => 101,  98 => 98,  90 => 96,  88 => 95,  84 => 94,  79 => 91,  70 => 85,  62 => 82,  59 => 81,  57 => 80,  46 => 78,  43 => 77,  41 => 74,  40 => 72,  35 => 69,  32 => 68,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/node/node--hero.html.twig", "/var/www/html/themes/contrib/socialbase/templates/node/node--hero.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 72, "if" => 78, "trans" => 82];
        static $filters = ["escape" => 69];
        static $functions = ["attach_library" => 69];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['escape'],
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
