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

/* node--teaser__field.html.twig */
class __TwigTemplate_5e5747137596d65a4e94b2e402f3ec6d3859f60ba9e026339d4bf68655de21c4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'svg_title' => [$this, 'block_svg_title'],
            'field_icon' => [$this, 'block_field_icon'],
            'field_value' => [$this, 'block_field_value'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"teaser__content-line\">
  <svg class=\"teaser__content-type-icon\" aria-hidden=\"true\">
    ";
        // line 3
        $this->displayBlock('svg_title', $context, $blocks);
        // line 4
        echo "    <use xlink:href=\"#icon-";
        $this->displayBlock('field_icon', $context, $blocks);
        echo "\"></use>
  </svg>
  <div class=\"teaser__content-text\">
    ";
        // line 7
        $this->displayBlock('field_value', $context, $blocks);
        // line 8
        echo "  </div>
</div>
";
    }

    // line 3
    public function block_svg_title($context, array $blocks = [])
    {
        echo " ";
    }

    // line 4
    public function block_field_icon($context, array $blocks = [])
    {
        echo "label";
    }

    // line 7
    public function block_field_value($context, array $blocks = [])
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "node--teaser__field.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 7,  62 => 4,  56 => 3,  50 => 8,  48 => 7,  41 => 4,  39 => 3,  35 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "node--teaser__field.html.twig", "themes/contrib/socialbase/templates/node/node--teaser__field.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 3];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block'],
                [],
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
