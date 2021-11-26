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

/* themes/contrib/socialbase/templates/node/event/node--event--full.html.twig */
class __TwigTemplate_e3bc503ece834f745189950a4df995a3d129cc637672f2b1b1f895f02f1f2c0d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'metainfo' => [$this, 'block_metainfo'],
            'nodefull_specialfields' => [$this, 'block_nodefull_specialfields'],
            'nodefull_body' => [$this, 'block_nodefull_body'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "node--full.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        if (($context["display_submitted"] ?? null)) {
        }
        // line 1
        $this->parent = $this->loadTemplate("node--full.html.twig", "themes/contrib/socialbase/templates/node/event/node--event--full.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_metainfo($context, array $blocks = [])
    {
        // line 5
        echo "    <header class=\"metainfo\">

      <div class=\"metainfo__avatar\">
        ";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null)), "html", null, true));
        echo "
      </div>

      <div class=\"metainfo__content\">

        ";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author"] ?? null)), "html", null, true));
        echo "

        <div>
          ";
        // line 16
        if (($context["event_type"] ?? null)) {
            // line 17
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["event_type"] ?? null)), "html", null, true));
            echo "
          ";
        }
        // line 19
        echo "          ";
        if (($context["group_link"] ?? null)) {
            // line 20
            echo "            ";
            echo t("in group", array());
            // line 21
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_link"] ?? null)), "html", null, true));
            echo "
          ";
        }
        // line 23
        echo "        </div>

      </div>

      ";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "links", []), "moderation", [])), "html", null, true));
        echo "

    </header>
  ";
    }

    // line 34
    public function block_nodefull_specialfields($context, array $blocks = [])
    {
        // line 35
        echo "
  <div class=\"article__special-fields\">
    <div class=\"article__special-field\">
      <svg class=\"article__special-fields-icon\" aria-hidden=\"true\">
        <title>";
        // line 39
        echo t("Event date", array());
        echo "</title>
        <use xlink:href=\"#icon-event\"></use>
      </svg>
      <span class=\"sr-only\">";
        // line 42
        echo t("Event date", array());
        echo "</span>
      <span class=\"inline-center\">
        <strong>";
        // line 44
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["event_date"] ?? null)), "html", null, true));
        echo "</strong>
      </span>
    </div>
    ";
        // line 47
        if (($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->renderVar($this->getAttribute(($context["content"] ?? null), "field_event_address", [])) || $this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->renderVar($this->getAttribute(($context["content"] ?? null), "field_event_location", [])))) {
            // line 48
            echo "      <div class=\"article__special-field\">
        <svg class=\"article__special-fields-icon\" aria-hidden=\"true\">
          <title>";
            // line 50
            echo t("Located at:", array());
            echo "</title>
          <use xlink:href=\"#icon-location\"></use></svg>
        <span class=\"sr-only\">";
            // line 52
            echo t("Event location", array());
            echo "</span>
        <span class=\"inline-center\">
          <strong>";
            // line 54
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_event_location", [])), "html", null, true));
            echo "</strong>
          ";
            // line 55
            if (( !twig_test_empty($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->renderVar($this->getAttribute(($context["content"] ?? null), "field_event_address", []))) &&  !twig_test_empty($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->renderVar($this->getAttribute(($context["content"] ?? null), "field_event_location", []))))) {
                echo " &bullet; ";
            }
            // line 56
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_event_address", [])), "html", null, true));
            echo "
        </span>
      </div>
    ";
        }
        // line 60
        echo "  </div>

";
    }

    // line 64
    public function block_nodefull_body($context, array $blocks = [])
    {
        // line 65
        echo "
  ";
        // line 66
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_event_address", "field_event_location", "field_event_type", "book_navigation", "flag_follow_content", "field_event_an_enroll", "field_enrollment_status", "enrolled", "enrollments_count", "links", "ongoing", "field_event_addtocal"), "html", null, true));
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/node/event/node--event--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 66,  170 => 65,  167 => 64,  161 => 60,  153 => 56,  149 => 55,  145 => 54,  140 => 52,  135 => 50,  131 => 48,  129 => 47,  123 => 44,  118 => 42,  112 => 39,  106 => 35,  103 => 34,  95 => 27,  89 => 23,  83 => 21,  80 => 20,  77 => 19,  71 => 17,  69 => 16,  63 => 13,  55 => 8,  50 => 5,  47 => 4,  42 => 1,  39 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/node/event/node--event--full.html.twig", "/var/www/html/themes/contrib/socialbase/templates/node/event/node--event--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 3, "trans" => 20];
        static $filters = ["escape" => 8, "render" => 47, "without" => 66];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 'render', 'without'],
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
