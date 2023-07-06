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

/* node--small-teaser.html.twig */
class __TwigTemplate_225c47b463c8e74ec6102b7b65e0aed0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'teaser_image' => [$this, 'block_teaser_image'],
            'text' => [$this, 'block_text'],
            'extra_text' => [$this, 'block_extra_text'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/teaser"), "html", null, true);
        echo "
";
        // line 70
        $context["classes"] = [0 => "teaser--small"];
        // line 74
        echo "
<div ";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 75), "removeAttribute", [0 => "dir"], "method", false, false, true, 75), 75, $this->source), "html", null, true);
        echo ">

  ";
        // line 77
        $this->displayBlock('teaser_image', $context, $blocks);
        // line 93
        echo "
  <div class=\"teaser--small__details small\">
  ";
        // line 95
        $this->displayBlock('text', $context, $blocks);
        // line 102
        echo "
  ";
        // line 103
        $this->displayBlock('extra_text', $context, $blocks);
        // line 110
        echo "  </div>

</div>
";
    }

    // line 77
    public function block_teaser_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "    <div class=\"teaser--small__media\">
      ";
        // line 79
        if ( !twig_test_empty(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((($__internal_compile_0 = ($context["content"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[(("field_" . twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 79)) . "_image")] ?? null) : null)), "<img>"))) {
            // line 80
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = ($context["content"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[(("field_" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 80), 80, $this->source)) . "_image")] ?? null) : null), 80, $this->source), "html", null, true);
            echo "
      ";
        } else {
            // line 82
            echo "        <svg class=\"teaser--small__type-icon\">
          <title>";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_capitalize_string_filter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 83), 83, $this->source))), "html", null, true);
            echo ": &nbsp;";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 83, $this->source)))), "html", null, true);
            echo "</title>
          ";
            // line 84
            if (($context["topic_type_icon"] ?? null)) {
                // line 85
                echo "            <use xlink:href=\"#";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topic_type_icon"] ?? null), 85, $this->source), "html", null, true);
                echo "\"></use>
          ";
            } else {
                // line 87
                echo "            <use xlink:href=\"#icon-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 87), 87, $this->source)), "html", null, true);
                echo "\"></use>
          ";
            }
            // line 89
            echo "        </svg>
      ";
        }
        // line 91
        echo "    </div>
  ";
    }

    // line 95
    public function block_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 96, $this->source), "html", null, true);
        echo "
    <div";
        // line 97
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 97, $this->source), "html", null, true);
        echo " class=\"card__text teaser--small__title\">
      <a href=\"";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 98, $this->source), "html", null, true);
        echo "\" rel=\"bookmark\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 98, $this->source), "html", null, true);
        echo "</a>
    </div>
    ";
        // line 100
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 100, $this->source), "html", null, true);
        echo "
  ";
    }

    // line 103
    public function block_extra_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        echo "    <div class=\"teaser--small__meta\">
      ";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 105, $this->source), "html", null, true);
        echo " &middot; ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 105, $this->source), "html", null, true);
        echo "

      ";
        // line 107
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 107, $this->source), (("field_" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 107), 107, $this->source)) . "_image")), "html", null, true);
        echo "
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "node--small-teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 107,  156 => 105,  153 => 104,  149 => 103,  143 => 100,  136 => 98,  132 => 97,  127 => 96,  123 => 95,  118 => 91,  114 => 89,  108 => 87,  102 => 85,  100 => 84,  94 => 83,  91 => 82,  85 => 80,  83 => 79,  80 => 78,  76 => 77,  69 => 110,  67 => 103,  64 => 102,  62 => 95,  58 => 93,  56 => 77,  51 => 75,  48 => 74,  46 => 70,  42 => 68,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--small-teaser.html.twig", "themes/contrib/socialbase/templates/node/node--small-teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 70, "block" => 77, "if" => 79);
        static $filters = array("escape" => 68, "striptags" => 79, "render" => 79, "capitalize" => 83, "clean_class" => 83, "trim" => 83, "without" => 107);
        static $functions = array("attach_library" => 68);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['escape', 'striptags', 'render', 'capitalize', 'clean_class', 'trim', 'without'],
                ['attach_library']
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
