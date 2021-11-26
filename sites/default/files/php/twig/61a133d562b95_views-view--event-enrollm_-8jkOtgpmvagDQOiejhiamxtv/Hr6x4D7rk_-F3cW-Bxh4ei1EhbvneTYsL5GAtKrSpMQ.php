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

/* themes/contrib/socialbase/templates/views/views-view--event-enrollments.html.twig */
class __TwigTemplate_8a3cd8ed4b4447b4df7cdd30879e38bdda80911111bd83856961778e43129458 extends \Twig\Template
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
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true));
        echo "
  ";
        // line 37
        if (($context["title"] ?? null)) {
            // line 38
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true));
            echo "
  ";
        }
        // line 40
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true));
        echo "
  ";
        // line 41
        if ($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->renderVar(($context["header"] ?? null))) {
            // line 42
            echo "    <h4 class=\"card__title\"> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null)), "html", null, true));
            echo " </h4>
  ";
        }
        // line 44
        echo "
  <div class=\"card__block text-center\">

    ";
        // line 47
        if (($context["rows"] ?? null)) {
            // line 48
            echo "      <div class=\"img-grid\">
        ";
            // line 49
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null)), "html", null, true));
            echo "
      </div>
    ";
        } elseif (        // line 51
($context["empty"] ?? null)) {
            // line 52
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null)), "html", null, true));
            echo "
    ";
        }
        // line 54
        echo "
    ";
        // line 55
        if (($context["pager"] ?? null)) {
            // line 56
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null)), "html", null, true));
            echo "
    ";
        }
        // line 58
        echo "
    ";
        // line 59
        if ((($context["more"] ?? null) &&  !($context["empty"] ?? null))) {
            // line 60
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null)), "html", null, true));
            echo "
    ";
        }
        // line 62
        echo "
    ";
        // line 63
        if (($context["feed_icons"] ?? null)) {
            // line 64
            echo "      <div class=\"feed-icons\">
        ";
            // line 65
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null)), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 68
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/views/views-view--event-enrollments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 68,  113 => 65,  110 => 64,  108 => 63,  105 => 62,  99 => 60,  97 => 59,  94 => 58,  88 => 56,  86 => 55,  83 => 54,  77 => 52,  75 => 51,  70 => 49,  67 => 48,  65 => 47,  60 => 44,  54 => 42,  52 => 41,  47 => 40,  41 => 38,  39 => 37,  35 => 36,  32 => 35,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/views/views-view--event-enrollments.html.twig", "/var/www/html/themes/contrib/socialbase/templates/views/views-view--event-enrollments.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 37];
        static $filters = ["escape" => 36, "render" => 41];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'render'],
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
