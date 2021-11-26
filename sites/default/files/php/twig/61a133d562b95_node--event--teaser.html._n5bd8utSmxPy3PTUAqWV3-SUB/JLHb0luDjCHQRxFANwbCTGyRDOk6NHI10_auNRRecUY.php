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

/* node--event--teaser.html.twig */
class __TwigTemplate_6a9ea35826f3176c7fce1e3638ad52027bebd0f32f561f5d4f7be5432677e2c3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'card_teaser_type' => [$this, 'block_card_teaser_type'],
            'card_body' => [$this, 'block_card_body'],
            'card_actionbar' => [$this, 'block_card_actionbar'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "node--teaser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("node--teaser.html.twig", "node--event--teaser.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_card_teaser_type($context, array $blocks = [])
    {
        // line 4
        echo "  <a href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true));
        echo "\" aria-hidden=\"true\" title=\"";
        echo t("Event: &nbsp;", array());
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->renderVar($this->sandbox->ensureToStringAllowed(($context["label"] ?? null))))), "html", null, true));
        echo "\">
    <div class=\"teaser__teaser-type\">
      <svg class=\"teaser__teaser-type-icon\" aria-hidden=\"true\">
        <title>";
        // line 7
        echo t("Event: &nbsp;", array());
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->renderVar($this->sandbox->ensureToStringAllowed(($context["label"] ?? null))))), "html", null, true));
        echo "</title>
        ";
        // line 8
        if (($context["event_type_icon"] ?? null)) {
            // line 9
            echo "          <use xlink:href=\"#";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["event_type_icon"] ?? null)), "html", null, true));
            echo "\"></use>
        ";
        } else {
            // line 11
            echo "          <use xlink:href=\"#icon-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "bundle", []))), "html", null, true));
            echo "\"></use>
        ";
        }
        // line 13
        echo "      </svg>
    </div>
  </a>
";
    }

    // line 18
    public function block_card_body($context, array $blocks = [])
    {
        // line 19
        echo "
  ";
        // line 20
        $this->loadTemplate("node--event--teaser.html.twig", "node--event--teaser.html.twig", 20, "1886226854")->display($context);
        // line 28
        echo "
  ";
        // line 29
        if ( !twig_test_empty($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->renderVar($this->getAttribute(($context["content"] ?? null), "field_event_location", [])))) {
            // line 30
            echo "    ";
            $this->loadTemplate("node--event--teaser.html.twig", "node--event--teaser.html.twig", 30, "1131119904")->display($context);
            // line 38
            echo "  ";
        }
        // line 39
        echo "
  ";
        // line 40
        if (($context["event_type"] ?? null)) {
            // line 41
            echo "    ";
            $this->loadTemplate("node--event--teaser.html.twig", "node--event--teaser.html.twig", 41, "333198804")->display($context);
            // line 49
            echo "  ";
        }
        // line 50
        echo "
  ";
        // line 51
        if ($this->getAttribute(($context["content"] ?? null), "group_name", [])) {
            // line 52
            echo "    ";
            $this->loadTemplate("node--event--teaser.html.twig", "node--event--teaser.html.twig", 52, "276774695")->display($context);
            // line 60
            echo "  ";
        }
        // line 61
        echo "
";
    }

    // line 64
    public function block_card_actionbar($context, array $blocks = [])
    {
        // line 65
        echo "
  ";
        // line 66
        if ((($context["visibility_icon"] ?? null) && ($context["visibility_label"] ?? null))) {
            // line 67
            echo "    <div class=\"badge teaser__badge\">
      <span class=\"badge__container\">
        <svg class=\"badge__icon\">
           <title>";
            // line 70
            echo t("Visibility", array());
            echo "</title>
          <use xlink:href=\"#icon-";
            // line 71
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["visibility_icon"] ?? null)), "html", null, true));
            echo "\"></use>
        </svg>
        <span class=\"badge__label text-gray\">";
            // line 73
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, twig_capitalize_string_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["visibility_label"] ?? null))), "html", null, true));
            echo "</span>
      </span>
    </div>
  ";
        }
        // line 77
        echo "
  ";
        // line 78
        if ( !twig_test_empty($this->getAttribute(($context["content"] ?? null), "enrollments_count", []))) {
            // line 79
            echo "    <div class=\"badge teaser__badge\">
      <span class=\"badge__container\">
        <svg class=\"badge__icon\">
          <title>";
            // line 82
            echo t("Total amount of enrollments", array());
            echo "</title>
          <use xlink:href=\"#icon-person\"></use>
        </svg>
        <span class=\"badge__label text-gray\">
          ";
            // line 86
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "enrollments_count", [])), "html", null, true));
            echo "
        </span>
      </span>
    </div>
  ";
        }
        // line 91
        echo "
  ";
        // line 92
        if ($this->getAttribute(($context["content"] ?? null), "ongoing", [])) {
            // line 93
            echo "    <span class=\"badge badge-primary teaser__badge\">
          ";
            // line 94
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "ongoing", [])), "html", null, true));
            echo "
        </span>
  ";
        }
        // line 97
        echo "  ";
        if ($this->getAttribute(($context["content"] ?? null), "enrolled", [])) {
            // line 98
            echo "    <span class=\"badge badge-default teaser__badge\">
      ";
            // line 99
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "enrolled", [])), "html", null, true));
            echo "
    </span>
  ";
        }
        // line 102
        echo "
  ";
        // line 103
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "links", [])), "html", null, true));
        echo "

";
    }

    public function getTemplateName()
    {
        return "node--event--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 103,  208 => 102,  202 => 99,  199 => 98,  196 => 97,  190 => 94,  187 => 93,  185 => 92,  182 => 91,  174 => 86,  167 => 82,  162 => 79,  160 => 78,  157 => 77,  150 => 73,  145 => 71,  141 => 70,  136 => 67,  134 => 66,  131 => 65,  128 => 64,  123 => 61,  120 => 60,  117 => 52,  115 => 51,  112 => 50,  109 => 49,  106 => 41,  104 => 40,  101 => 39,  98 => 38,  95 => 30,  93 => 29,  90 => 28,  88 => 20,  85 => 19,  82 => 18,  75 => 13,  69 => 11,  63 => 9,  61 => 8,  56 => 7,  46 => 4,  43 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "node--event--teaser.html.twig", "themes/contrib/socialbase/templates/node/event/node--event--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["trans" => 4, "if" => 8, "embed" => 20];
        static $filters = ["escape" => 4, "trim" => 4, "striptags" => 4, "render" => 4, "clean_class" => 11, "capitalize" => 73];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['trans', 'if', 'embed'],
                ['escape', 'trim', 'striptags', 'render', 'clean_class', 'capitalize'],
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


/* node--event--teaser.html.twig */
class __TwigTemplate_6a9ea35826f3176c7fce1e3638ad52027bebd0f32f561f5d4f7be5432677e2c3___1886226854 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'field_icon' => [$this, 'block_field_icon'],
            'svg_title' => [$this, 'block_svg_title'],
            'field_value' => [$this, 'block_field_value'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--event--teaser.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_field_icon($context, array $blocks = [])
    {
        echo "event";
    }

    // line 22
    public function block_svg_title($context, array $blocks = [])
    {
        echo "<title>";
        echo t("Event date", array());
        echo "</title>";
    }

    // line 23
    public function block_field_value($context, array $blocks = [])
    {
        // line 24
        echo "      <span class=\"sr-only\">";
        echo t("Event date", array());
        echo " </span>
      ";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["event_date"] ?? null)), "html", null, true));
    }

    public function getTemplateName()
    {
        return "node--event--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 25,  321 => 24,  318 => 23,  310 => 22,  304 => 21,  294 => 20,  211 => 103,  208 => 102,  202 => 99,  199 => 98,  196 => 97,  190 => 94,  187 => 93,  185 => 92,  182 => 91,  174 => 86,  167 => 82,  162 => 79,  160 => 78,  157 => 77,  150 => 73,  145 => 71,  141 => 70,  136 => 67,  134 => 66,  131 => 65,  128 => 64,  123 => 61,  120 => 60,  117 => 52,  115 => 51,  112 => 50,  109 => 49,  106 => 41,  104 => 40,  101 => 39,  98 => 38,  95 => 30,  93 => 29,  90 => 28,  88 => 20,  85 => 19,  82 => 18,  75 => 13,  69 => 11,  63 => 9,  61 => 8,  56 => 7,  46 => 4,  43 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "node--event--teaser.html.twig", "themes/contrib/socialbase/templates/node/event/node--event--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["trans" => 22];
        static $filters = ["escape" => 25];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
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


/* node--event--teaser.html.twig */
class __TwigTemplate_6a9ea35826f3176c7fce1e3638ad52027bebd0f32f561f5d4f7be5432677e2c3___1131119904 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'field_icon' => [$this, 'block_field_icon'],
            'svg_title' => [$this, 'block_svg_title'],
            'field_value' => [$this, 'block_field_value'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 30
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--event--teaser.html.twig", 30);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    public function block_field_icon($context, array $blocks = [])
    {
        echo "location";
    }

    // line 32
    public function block_svg_title($context, array $blocks = [])
    {
        echo "<title>";
        echo t("Located at:", array());
        echo "</title>";
    }

    // line 33
    public function block_field_value($context, array $blocks = [])
    {
        // line 34
        echo "<span class=\"sr-only\">";
        echo t("The event will take place at the", array());
        echo " </span>
        ";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_event_location", [])), "html", null, true));
    }

    public function getTemplateName()
    {
        return "node--event--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  438 => 35,  433 => 34,  430 => 33,  422 => 32,  416 => 31,  406 => 30,  326 => 25,  321 => 24,  318 => 23,  310 => 22,  304 => 21,  294 => 20,  211 => 103,  208 => 102,  202 => 99,  199 => 98,  196 => 97,  190 => 94,  187 => 93,  185 => 92,  182 => 91,  174 => 86,  167 => 82,  162 => 79,  160 => 78,  157 => 77,  150 => 73,  145 => 71,  141 => 70,  136 => 67,  134 => 66,  131 => 65,  128 => 64,  123 => 61,  120 => 60,  117 => 52,  115 => 51,  112 => 50,  109 => 49,  106 => 41,  104 => 40,  101 => 39,  98 => 38,  95 => 30,  93 => 29,  90 => 28,  88 => 20,  85 => 19,  82 => 18,  75 => 13,  69 => 11,  63 => 9,  61 => 8,  56 => 7,  46 => 4,  43 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "node--event--teaser.html.twig", "themes/contrib/socialbase/templates/node/event/node--event--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["trans" => 32];
        static $filters = ["escape" => 35];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
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


/* node--event--teaser.html.twig */
class __TwigTemplate_6a9ea35826f3176c7fce1e3638ad52027bebd0f32f561f5d4f7be5432677e2c3___333198804 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'field_icon' => [$this, 'block_field_icon'],
            'svg_title' => [$this, 'block_svg_title'],
            'field_value' => [$this, 'block_field_value'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 41
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--event--teaser.html.twig", 41);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 42
    public function block_field_icon($context, array $blocks = [])
    {
        echo "label";
    }

    // line 43
    public function block_svg_title($context, array $blocks = [])
    {
        echo "<title>";
        echo t("Event type", array());
        echo "</title>";
    }

    // line 44
    public function block_field_value($context, array $blocks = [])
    {
        // line 45
        echo "<span class=\"sr-only\">";
        echo t("This event has type", array());
        echo " </span>
        ";
        // line 46
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["event_type"] ?? null)), "html", null, true));
    }

    public function getTemplateName()
    {
        return "node--event--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  550 => 46,  545 => 45,  542 => 44,  534 => 43,  528 => 42,  518 => 41,  438 => 35,  433 => 34,  430 => 33,  422 => 32,  416 => 31,  406 => 30,  326 => 25,  321 => 24,  318 => 23,  310 => 22,  304 => 21,  294 => 20,  211 => 103,  208 => 102,  202 => 99,  199 => 98,  196 => 97,  190 => 94,  187 => 93,  185 => 92,  182 => 91,  174 => 86,  167 => 82,  162 => 79,  160 => 78,  157 => 77,  150 => 73,  145 => 71,  141 => 70,  136 => 67,  134 => 66,  131 => 65,  128 => 64,  123 => 61,  120 => 60,  117 => 52,  115 => 51,  112 => 50,  109 => 49,  106 => 41,  104 => 40,  101 => 39,  98 => 38,  95 => 30,  93 => 29,  90 => 28,  88 => 20,  85 => 19,  82 => 18,  75 => 13,  69 => 11,  63 => 9,  61 => 8,  56 => 7,  46 => 4,  43 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "node--event--teaser.html.twig", "themes/contrib/socialbase/templates/node/event/node--event--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["trans" => 43];
        static $filters = ["escape" => 46];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
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


/* node--event--teaser.html.twig */
class __TwigTemplate_6a9ea35826f3176c7fce1e3638ad52027bebd0f32f561f5d4f7be5432677e2c3___276774695 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'field_icon' => [$this, 'block_field_icon'],
            'svg_title' => [$this, 'block_svg_title'],
            'field_value' => [$this, 'block_field_value'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 52
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--event--teaser.html.twig", 52);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 53
    public function block_field_icon($context, array $blocks = [])
    {
        echo "group";
    }

    // line 54
    public function block_svg_title($context, array $blocks = [])
    {
        echo "<title>";
        echo t("Group", array());
        echo "</title>";
    }

    // line 55
    public function block_field_value($context, array $blocks = [])
    {
        // line 56
        echo "<span class=\"sr-only\">";
        echo t("This event is posted in", array());
        echo " </span>
        ";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "group_name", [])), "html", null, true));
    }

    public function getTemplateName()
    {
        return "node--event--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  662 => 57,  657 => 56,  654 => 55,  646 => 54,  640 => 53,  630 => 52,  550 => 46,  545 => 45,  542 => 44,  534 => 43,  528 => 42,  518 => 41,  438 => 35,  433 => 34,  430 => 33,  422 => 32,  416 => 31,  406 => 30,  326 => 25,  321 => 24,  318 => 23,  310 => 22,  304 => 21,  294 => 20,  211 => 103,  208 => 102,  202 => 99,  199 => 98,  196 => 97,  190 => 94,  187 => 93,  185 => 92,  182 => 91,  174 => 86,  167 => 82,  162 => 79,  160 => 78,  157 => 77,  150 => 73,  145 => 71,  141 => 70,  136 => 67,  134 => 66,  131 => 65,  128 => 64,  123 => 61,  120 => 60,  117 => 52,  115 => 51,  112 => 50,  109 => 49,  106 => 41,  104 => 40,  101 => 39,  98 => 38,  95 => 30,  93 => 29,  90 => 28,  88 => 20,  85 => 19,  82 => 18,  75 => 13,  69 => 11,  63 => 9,  61 => 8,  56 => 7,  46 => 4,  43 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "node--event--teaser.html.twig", "themes/contrib/socialbase/templates/node/event/node--event--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["trans" => 54];
        static $filters = ["escape" => 57];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
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
