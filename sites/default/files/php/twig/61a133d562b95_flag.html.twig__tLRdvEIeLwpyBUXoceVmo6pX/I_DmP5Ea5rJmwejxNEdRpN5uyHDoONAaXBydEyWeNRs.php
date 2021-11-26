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

/* themes/contrib/socialbase/templates/field/flag.html.twig */
class __TwigTemplate_2e9554e0f90882a4c5499a84f76dbd281134a5ef3924059e00e8b99c960b235a extends \Twig\Template
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
        ob_start(function () { return ''; });
        // line 15
        echo "
";
        // line 17
        if ((($context["action"] ?? null) == "unflag")) {
            // line 18
            echo "    ";
            $context["action_class"] = "action-unflag";
        } else {
            // line 20
            echo "    ";
            $context["action_class"] = "action-flag";
        }
        // line 22
        echo "
";
        // line 24
        $context["classes"] = [0 => "btn", 1 => "btn-default", 2 => "btn-sm", 3 => "btn-follow", 4 => "flag", 5 => ("flag-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 30
($context["flag"] ?? null), "id", [], "method")))), 6 => ((("js-flag-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 31
($context["flag"] ?? null), "id", [], "method")))) . "-") . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["flaggable"] ?? null), "id", [], "method"))), 7 =>         // line 32
($context["action_class"] ?? null)];
        // line 34
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method");
        // line 35
        echo "
<a role=\"button\"";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true));
        echo "</a>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/field/flag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 36,  57 => 35,  55 => 34,  53 => 32,  52 => 31,  51 => 30,  50 => 24,  47 => 22,  43 => 20,  39 => 18,  37 => 17,  34 => 15,  32 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/field/flag.html.twig", "/var/www/html/themes/contrib/socialbase/templates/field/flag.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["spaceless" => 14, "if" => 17, "set" => 18];
        static $filters = ["clean_class" => 30, "escape" => 36];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'if', 'set'],
                ['clean_class', 'escape'],
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
