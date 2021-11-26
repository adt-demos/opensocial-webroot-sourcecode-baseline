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

/* themes/contrib/socialbase/templates/group/group--small-teaser.html.twig */
class __TwigTemplate_dd320f70628ba6ed901eda7e6468b8433cc0872c44c7793bd662d9e2edbd08d4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'teaser_image' => [$this, 'block_teaser_image'],
            'extra_text' => [$this, 'block_extra_text'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "node--small-teaser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("node--small-teaser.html.twig", "themes/contrib/socialbase/templates/group/group--small-teaser.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_teaser_image($context, array $blocks = [])
    {
        // line 4
        echo "  <div class=\"teaser--small__media\">
    ";
        // line 5
        if ( !twig_test_empty(strip_tags($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->renderVar($this->getAttribute(($context["content"] ?? null), "field_group_image", [], "array")), "<img>"))) {
            // line 6
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_group_image", [], "array")), "html", null, true));
            echo "
    ";
        } else {
            // line 8
            echo "      <svg class=\"teaser--small__type-icon\">
        <title>";
            // line 9
            echo t("Group", array());
            echo "</title>
        <use xlink:href=\"#icon-group\"></use>
      </svg>
    ";
        }
        // line 13
        echo "  </div>
";
    }

    // line 16
    public function block_extra_text($context, array $blocks = [])
    {
        // line 17
        echo "  <div class=\"teaser--small__meta\">
    ";
        // line 18
        if (($context["closed_group_lock"] ?? null)) {
            // line 19
            echo "      <svg class=\"icon-gray icon-small\" aria-hidden=\"true\">
        <title>";
            // line 20
            echo t("Closed group", array());
            echo "</title>
        <use xlink:href=\"#icon-lock\"></use>
      </svg>
    ";
        } elseif (        // line 23
($context["secret_group_shield"] ?? null)) {
            // line 24
            echo "      <svg class=\"icon-gray icon-small\" aria-hidden=\"true\">
        <title>";
            // line 25
            echo t("Secret group", array());
            echo "</title>
        <use xlink:href=\"#icon-shield\"></use>
      </svg>
    ";
        }
        // line 29
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_type"] ?? null)), "html", null, true));
        echo " &middot; ";
        echo \Drupal::translation()->formatPlural(abs(($context["group_members"] ?? null)), "1 member", "@count members", array());
        // line 30
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/group/group--small-teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 30,  100 => 29,  93 => 25,  90 => 24,  88 => 23,  82 => 20,  79 => 19,  77 => 18,  74 => 17,  71 => 16,  66 => 13,  59 => 9,  56 => 8,  50 => 6,  48 => 5,  45 => 4,  42 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/group/group--small-teaser.html.twig", "/var/www/html/themes/contrib/socialbase/templates/group/group--small-teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 5, "trans" => 9];
        static $filters = ["striptags" => 5, "render" => 5, "escape" => 6];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['striptags', 'render', 'escape'],
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
