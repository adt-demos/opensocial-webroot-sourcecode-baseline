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

/* themes/contrib/socialbase/templates/form/fieldset.html.twig */
class __TwigTemplate_7624ba8c0dfcb72a2137512fb4358c544628fc9e81108cde597202381d96272a extends \Twig\Template
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
        // line 26
        $context["classes"] = [0 => ((        // line 27
($context["form_group"] ?? null)) ? ("form-group") : ("")), 1 => (( !        // line 28
($context["form_group"] ?? null)) ? ("js-form-wrapper") : ("")), 2 => (( !        // line 29
($context["form_group"] ?? null)) ? ("form-wrapper") : (""))];
        // line 32
        echo "
";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/popover"), "html", null, true));
        echo "

<fieldset";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true));
        echo ">
  ";
        // line 37
        $context["label_classes"] = [0 => ((        // line 38
($context["form_group"] ?? null)) ? ("control-label") : ("")), 1 => ((        // line 39
($context["required"] ?? null)) ? ("js-form-required") : ("")), 2 => ((        // line 40
($context["required"] ?? null)) ? ("form-required") : ("")), 3 => (((        // line 41
($context["title_display"] ?? null) == "invisible")) ? ("sr-only") : (""))];
        // line 44
        echo "  ";
        // line 45
        echo "  <legend";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["legend"] ?? null), "attributes", []), "addClass", [0 => ($context["label_classes"] ?? null)], "method")), "html", null, true));
        echo ">
    <span";
        // line 46
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["legend_span"] ?? null), "attributes", [])), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["legend"] ?? null), "title", [])), "html", null, true));
        echo "</span>";
        // line 48
        if (($context["required"] ?? null)) {
            // line 49
            echo "<span class=\"form-required\">*</span>";
        }
        // line 52
        if ( !twig_test_empty(($context["popover"] ?? null))) {
            // line 53
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["popover"] ?? null)), "html", null, true));
            echo "
    ";
        }
        // line 55
        echo "  </legend>

  ";
        // line 57
        if ($this->getAttribute(($context["description"] ?? null), "content", [])) {
            // line 58
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", []), "addClass", [0 => "help-block"], "method")), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "content", [])), "html", null, true));
            echo "</div>
  ";
        }
        // line 60
        echo "
  <div class=\"fieldset-wrapper\">
    ";
        // line 62
        if (($context["prefix"] ?? null)) {
            // line 63
            echo "      <span class=\"field-prefix\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null)), "html", null, true));
            echo "</span>
    ";
        }
        // line 65
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true));
        echo "
    ";
        // line 66
        if (($context["suffix"] ?? null)) {
            // line 67
            echo "      <span class=\"field-suffix\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null)), "html", null, true));
            echo "</span>
    ";
        }
        // line 69
        echo "  </div>

  ";
        // line 71
        if (($context["errors"] ?? null)) {
            // line 72
            echo "    <div class=\"form-item--error-message alert alert-danger alert-sm alert-dismissible form-control-radius\">
      ";
            // line 73
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null)), "html", null, true));
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"";
            // line 74
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close")));
            echo "\">
        <span aria-hidden=\"true\">×</span>
      </button>
    </div>
  ";
        }
        // line 79
        echo "
";
        // line 83
        echo "
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/form/fieldset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 83,  140 => 79,  132 => 74,  128 => 73,  125 => 72,  123 => 71,  119 => 69,  113 => 67,  111 => 66,  106 => 65,  100 => 63,  98 => 62,  94 => 60,  86 => 58,  84 => 57,  80 => 55,  74 => 53,  72 => 52,  69 => 49,  67 => 48,  62 => 46,  57 => 45,  55 => 44,  53 => 41,  52 => 40,  51 => 39,  50 => 38,  49 => 37,  45 => 35,  40 => 33,  37 => 32,  35 => 29,  34 => 28,  33 => 27,  32 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/form/fieldset.html.twig", "/var/www/html/themes/contrib/socialbase/templates/form/fieldset.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 26, "if" => 48];
        static $filters = ["escape" => 33, "t" => 74];
        static $functions = ["attach_library" => 33];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 't'],
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
