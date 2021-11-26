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

/* themes/contrib/socialbase/templates/block/block--views-exposed-filter-block.html.twig */
class __TwigTemplate_684b361006f0ffa4041adc3606446983d0ef962c13ca3ae9faa405094192c9f7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 48
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/offcanvas"), "html", null, true));
        echo "

<div";
        // line 50
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true));
        echo " data-class=\"exposed-filter-block\">
  <div class=\"btn--offcanvas-trigger\">
    <a href=\"#block-filter\" class=\"btn btn-default btn-raised\" title=\"";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Click to open filter")));
        echo "\">
      <svg class=\"btn-icon\" aria-hidden=\"true\">
        <title>";
        // line 54
        echo t("Open filter", array());
        echo "</title>
        <use xlink:href=\"#icon-filter_list\"></use>
      </svg>
      ";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true));
        echo "
    </a>
  </div>
  <div id=\"block-filter\" class=\"off-canvas off-canvas-right off-canvas-xs-only\">
    <div class=\"offcanvas-head\">

    ";
        // line 63
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true));
        echo "
    ";
        // line 64
        if (($context["label"] ?? null)) {
            // line 65
            echo "      <h2 ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "complementary-title", 1 => "no-margin"], "method")), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true));
            echo "</h2>
    ";
        }
        // line 67
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true));
        echo "

      <div class=\"offcanvas-tools\">
        <a href=\"#\" class=\"btn btn-icon-toggle pull-right\" title=\"";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Click to close search box")));
        echo "\">
          <svg class=\"pull-left btn-icon icon-black\" aria-hidden=\"true\">
            <title>";
        // line 72
        echo t("Close filter", array());
        echo "</title>
            <use xlink:href=\"#icon-close\"></use>
          </svg>
        </a>
      </div>
    </div>

    <div class=\"offcanvas-body\">

      ";
        // line 81
        $this->displayBlock('content', $context, $blocks);
        // line 84
        echo "
    </div>
  </div>
</div>
";
    }

    // line 81
    public function block_content($context, array $blocks = [])
    {
        // line 82
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true));
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/block/block--views-exposed-filter-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 82,  111 => 81,  103 => 84,  101 => 81,  89 => 72,  84 => 70,  77 => 67,  69 => 65,  67 => 64,  63 => 63,  54 => 57,  48 => 54,  43 => 52,  38 => 50,  33 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/block/block--views-exposed-filter-block.html.twig", "/var/www/html/themes/contrib/socialbase/templates/block/block--views-exposed-filter-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["trans" => 54, "if" => 64, "block" => 81];
        static $filters = ["escape" => 48, "t" => 52];
        static $functions = ["attach_library" => 48];

        try {
            $this->sandbox->checkSecurity(
                ['trans', 'if', 'block'],
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
