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

/* profiles/contrib/social/modules/social_features/social_activity/templates/message-group-preview.html.twig */
class __TwigTemplate_e6cf24104285e85995308043e988adfb extends \Twig\Template
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
        // line 1
        echo "<div class=\"teaser--small__media\" aria-hidden=\"true\">
  <svg class=\"teaser--small__type-icon\">
    <title>";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_capitalize_string_filter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "bundle", [], "any", false, false, true, 3), 3, $this->source))), "html", null, true);
        echo "</title>
    <use xlink:href=\"#icon-group\"></use>
  </svg>
</div>
<div><strong>";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_title"] ?? null), 7, $this->source), "html", null, true);
        echo "</strong></div>
<div class=\"teaser--small__meta\">
  ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_type"] ?? null), 9, $this->source), "html", null, true);
        echo " &middot; ";
        echo \Drupal::translation()->formatPlural(abs(($context["group_members"] ?? null)), "1 member", "@count members", array());
        // line 10
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/modules/social_features/social_activity/templates/message-group-preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  55 => 9,  50 => 7,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/social/modules/social_features/social_activity/templates/message-group-preview.html.twig", "/var/www/html/profiles/contrib/social/modules/social_features/social_activity/templates/message-group-preview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 9);
        static $filters = array("escape" => 3, "capitalize" => 3, "clean_class" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
                ['escape', 'capitalize', 'clean_class'],
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
