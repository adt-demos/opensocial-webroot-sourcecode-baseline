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

/* themes/contrib/socialbase/templates/field/address-plain.html.twig */
class __TwigTemplate_723e44c18afcf8c96e41eac7c71d22f739b747eabca03651a5be1a93a8d63ce0 extends \Twig\Template
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
        // line 33
        echo "
";
        // line 34
        if (($context["recipient"] ?? null)) {
            // line 35
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["recipient"] ?? null)), "html", null, true));
            echo ",
";
        }
        // line 37
        echo "
";
        // line 38
        if (($context["organization"] ?? null)) {
            // line 39
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["organization"] ?? null)), "html", null, true));
            echo ",
";
        }
        // line 41
        echo "
";
        // line 42
        if (($context["address_line1"] ?? null)) {
            // line 43
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address_line1"] ?? null)), "html", null, true));
            echo ",
";
        }
        // line 45
        echo "
";
        // line 46
        if (($context["address_line2"] ?? null)) {
            // line 47
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address_line2"] ?? null)), "html", null, true));
            echo ",
";
        }
        // line 49
        echo "
";
        // line 50
        if ($this->getAttribute(($context["dependent_locality"] ?? null), "name", [])) {
            // line 51
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, (($this->getAttribute(($context["dependent_locality"] ?? null), "code", [])) ? ($this->getAttribute(($context["dependent_locality"] ?? null), "code", [])) : ($this->getAttribute(($context["dependent_locality"] ?? null), "name", []))), "html", null, true));
            echo ",
";
        }
        // line 53
        echo "
";
        // line 54
        if ($this->getAttribute(($context["locality"] ?? null), "name", [])) {
            // line 55
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["locality"] ?? null), "name", [])), "html", null, true));
            echo ",
";
        } elseif ($this->getAttribute(        // line 56
($context["locality"] ?? null), "code", [])) {
            // line 57
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["locality"] ?? null), "code", [])), "html", null, true));
            echo ",
";
        } elseif ( !twig_test_iterable(        // line 58
($context["locality"] ?? null))) {
            // line 59
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["locality"] ?? null)), "html", null, true));
            echo ",
";
        }
        // line 61
        echo "
";
        // line 62
        if (($context["postal_code"] ?? null)) {
            // line 63
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["postal_code"] ?? null)), "html", null, true));
            echo ",
";
        }
        // line 65
        echo "
";
        // line 66
        if ($this->getAttribute(($context["administrative_area"] ?? null), "name", [])) {
            // line 67
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, (($this->getAttribute(($context["administrative_area"] ?? null), "code", [])) ? ($this->getAttribute(($context["administrative_area"] ?? null), "code", [])) : ($this->getAttribute(($context["administrative_area"] ?? null), "name", []))), "html", null, true));
            echo ",
";
        }
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["country"] ?? null), "name", [])), "html", null, true));
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/field/address-plain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 70,  120 => 67,  118 => 66,  115 => 65,  109 => 63,  107 => 62,  104 => 61,  99 => 59,  97 => 58,  93 => 57,  91 => 56,  87 => 55,  85 => 54,  82 => 53,  77 => 51,  75 => 50,  72 => 49,  67 => 47,  65 => 46,  62 => 45,  57 => 43,  55 => 42,  52 => 41,  47 => 39,  45 => 38,  42 => 37,  37 => 35,  35 => 34,  32 => 33,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/field/address-plain.html.twig", "/var/www/html/themes/contrib/socialbase/templates/field/address-plain.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 34];
        static $filters = ["escape" => 35];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
