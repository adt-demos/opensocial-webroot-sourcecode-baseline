<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/socialbase/templates/comment/comment--activity.html.twig */
class __TwigTemplate_c5cc79bc4f538e50e33fb249c4fbdbc2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "commented_entity", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo "
";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment_link", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "

";
        // line 72
        if (((null === ($context["dashboard"] ?? null)) || (($context["dashboard"] ?? null) == false))) {
            // line 73
            echo "<div class=\"card__nested-section\">
";
        }
        // line 75
        echo "
  ";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo "

  ";
        // line 78
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "more_link", [], "any", false, false, true, 78)) {
            // line 79
            echo "    <div class=\"margin-top-l text-center\">
      ";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "more_link", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 83
        echo "
";
        // line 84
        if (((null === ($context["dashboard"] ?? null)) || (($context["dashboard"] ?? null) == false))) {
            // line 85
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/comment/comment--activity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 85,  76 => 84,  73 => 83,  67 => 80,  64 => 79,  62 => 78,  57 => 76,  54 => 75,  50 => 73,  48 => 72,  43 => 70,  39 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/comment/comment--activity.html.twig", "/var/www/html/themes/contrib/socialbase/templates/comment/comment--activity.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 72);
        static $filters = array("escape" => 69);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
