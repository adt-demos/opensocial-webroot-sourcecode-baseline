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

/* node--teaser.html.twig */
class __TwigTemplate_c8c72c9d14e38c2f9a1eabbcf5017106de159251104255e5a7e0ec96e43d9a26 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'card_teaser_type' => [$this, 'block_card_teaser_type'],
            'card_image' => [$this, 'block_card_image'],
            'card_title' => [$this, 'block_card_title'],
            'card_body' => [$this, 'block_card_body'],
            'card_actionbar' => [$this, 'block_card_actionbar'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 68
        echo "
";
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/teaser"), "html", null, true));
        echo "
";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/page-node"), "html", null, true));
        echo "

";
        // line 73
        $context["classes"] = [0 => "teaser", 1 => ("teaser-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 75
($context["node"] ?? null), "bundle", [])))), 2 => (((        // line 76
($context["view_mode"] ?? null) == "teaser")) ? ("card") : ("")), 3 => (((        // line 77
($context["view_mode"] ?? null) == "activity")) ? ("teaser--stream") : ("")), 4 => (((        // line 78
($context["view_mode"] ?? null) == "activity_comment")) ? ("teaser--stream") : ("")), 5 => (($this->getAttribute(        // line 79
($context["node"] ?? null), "isPromoted", [], "method")) ? ("promoted") : ("")), 6 => (($this->getAttribute(        // line 80
($context["node"] ?? null), "isSticky", [], "method")) ? ("sticky") : ("")), 7 => (( !$this->getAttribute(        // line 81
($context["node"] ?? null), "isPublished", [], "method")) ? ("teaser--unpublished") : ("")), 8 => ((        // line 82
($context["no_image"] ?? null)) ? ("no-image") : (""))];
        // line 85
        echo "
<div";
        // line 86
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method"), "removeAttribute", [0 => "dir"], "method")), "html", null, true));
        echo ">
  ";
        // line 87
        if (($context["status_label"] ?? null)) {
            // line 88
            echo "    <div class=\"node--unpublished__label\">
      ";
            // line 89
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["status_label"] ?? null)), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 92
        echo "
  <div class='teaser__image'>

    ";
        // line 95
        if (((($context["view_mode"] ?? null) == "teaser") || ($context["no_image"] ?? null))) {
            // line 96
            echo "      ";
            $this->displayBlock('card_teaser_type', $context, $blocks);
            // line 110
            echo "    ";
        }
        // line 111
        echo "
    ";
        // line 112
        $this->displayBlock('card_image', $context, $blocks);
        // line 115
        echo "
  </div>

  <div class='teaser__body'>
    <div class=\"teaser__content\">

      ";
        // line 121
        $this->displayBlock('card_title', $context, $blocks);
        // line 129
        $this->displayBlock('card_body', $context, $blocks);
        // line 173
        echo "    </div>

    <div class=\"card__actionbar\">
      ";
        // line 176
        $this->displayBlock('card_actionbar', $context, $blocks);
        // line 221
        echo "    </div>

  </div>

</div>

";
        // line 227
        if (((($context["view_mode"] ?? null) == "activity") && $this->getAttribute(($context["content"] ?? null), "field_book_comments", []))) {
            // line 228
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_book_comments", [])), "html", null, true));
            echo "
";
        }
    }

    // line 96
    public function block_card_teaser_type($context, array $blocks = [])
    {
        // line 97
        echo "        <a href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true));
        echo "\" aria-hidden=\"true\" title=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, twig_capitalize_string_filter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "bundle", [])))), "html", null, true));
        echo ": &nbsp;";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->renderVar($this->sandbox->ensureToStringAllowed(($context["label"] ?? null))))), "html", null, true));
        echo "\">
          <div class=\"teaser__teaser-type\">
            <svg class=\"teaser__teaser-type-icon\">
              <title>";
        // line 100
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, twig_capitalize_string_filter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "bundle", [])))), "html", null, true));
        echo ": &nbsp;";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->renderVar($this->sandbox->ensureToStringAllowed(($context["label"] ?? null))))), "html", null, true));
        echo "</title>
              ";
        // line 101
        if (($context["topic_type_icon"] ?? null)) {
            // line 102
            echo "                <use xlink:href=\"#";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topic_type_icon"] ?? null)), "html", null, true));
            echo "\"></use>
              ";
        } else {
            // line 104
            echo "                <use xlink:href=\"#icon-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "bundle", []))), "html", null, true));
            echo "\"></use>
              ";
        }
        // line 106
        echo "            </svg>
          </div>
        </a>
      ";
    }

    // line 112
    public function block_card_image($context, array $blocks = [])
    {
        // line 113
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["node_image"] ?? null)), "html", null, true));
        echo "
    ";
    }

    // line 121
    public function block_card_title($context, array $blocks = [])
    {
        // line 122
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true));
        echo "
          <h4";
        // line 123
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null)), "html", null, true));
        echo " class=\"teaser__title\">
            <a href=\"";
        // line 124
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true));
        echo "\" rel=\"bookmark\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true));
        echo "</a>
          </h4>
        ";
        // line 126
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true));
    }

    // line 129
    public function block_card_body($context, array $blocks = [])
    {
        // line 130
        echo "
        ";
        // line 131
        if (($context["display_submitted"] ?? null)) {
            // line 132
            echo "          ";
            $this->loadTemplate("node--teaser.html.twig", "node--teaser.html.twig", 132, "1753940432")->display($context);
            // line 144
            echo "        ";
        }
        // line 145
        echo "
        ";
        // line 146
        if (($context["topic_type"] ?? null)) {
            // line 147
            echo "          ";
            $this->loadTemplate("node--teaser.html.twig", "node--teaser.html.twig", 147, "2094142556")->display($context);
            // line 155
            echo "        ";
        }
        // line 156
        echo "
        ";
        // line 157
        if ($this->getAttribute(($context["content"] ?? null), "group_name", [])) {
            // line 158
            echo "          ";
            $this->loadTemplate("node--teaser.html.twig", "node--teaser.html.twig", 158, "1990548816")->display($context);
            // line 166
            echo "        ";
        }
        // line 167
        echo "
        ";
        // line 168
        $this->loadTemplate("node--teaser.html.twig", "node--teaser.html.twig", 168, "1798823908")->display($context);
        // line 171
        echo "
      ";
    }

    // line 176
    public function block_card_actionbar($context, array $blocks = [])
    {
        // line 177
        echo "
        ";
        // line 178
        if ((($context["visibility_icon"] ?? null) && ($context["visibility_label"] ?? null))) {
            // line 179
            echo "          <div class=\"badge teaser__badge\">
            <span class=\"badge__container\">
                <svg class=\"badge__icon\">
                  <title>";
            // line 182
            echo t("Visibility", array());
            echo "</title>
                  <use xlink:href=\"#icon-";
            // line 183
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["visibility_icon"] ?? null)), "html", null, true));
            echo "\"></use>
                </svg>
                <span class=\"badge__label text-gray\">";
            // line 185
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, twig_capitalize_string_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["visibility_label"] ?? null))), "html", null, true));
            echo "</span>
            </span>
          </div>
        ";
        }
        // line 189
        echo "

        ";
        // line 191
        if ( !twig_test_empty(($context["likes_count"] ?? null))) {
            // line 192
            echo "          <div class=\"badge teaser__badge\">
            <span class=\"badge__container\">
              <svg class=\"badge__icon\">
                <title>";
            // line 195
            echo t("Total amount of likes", array());
            echo "</title>
                <use xlink:href=\"#icon-like\"></use>
              </svg>
              <span class=\"badge__label text-gray\">
                ";
            // line 199
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["likes_count"] ?? null)), "html", null, true));
            echo "
              </span>
            </span>
          </div>
        ";
        }
        // line 204
        echo "
        ";
        // line 205
        if ( !twig_test_empty(($context["comment_count"] ?? null))) {
            // line 206
            echo "          <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true));
            echo "#section-comments\" class=\"badge badge--pill teaser__badge\"
             title=\"";
            // line 207
            echo t("Total amount of comments", array());
            echo "\">
            <span class=\"badge__container\">
              <svg class=\"badge__icon\" aria-hidden=\"true\">
                <title>";
            // line 210
            echo t("Total amount of comments", array());
            echo "</title>
                <use xlink:href=\"#icon-comment\"></use>
              </svg>
              <span class=\"badge__label text-gray\">";
            // line 213
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_count"] ?? null)), "html", null, true));
            echo "</span>
            </span>
          </a>
        ";
        }
        // line 217
        echo "
        ";
        // line 218
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "links", [])), "html", null, true));
        echo "

      ";
    }

    public function getTemplateName()
    {
        return "node--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 218,  336 => 217,  329 => 213,  323 => 210,  317 => 207,  312 => 206,  310 => 205,  307 => 204,  299 => 199,  292 => 195,  287 => 192,  285 => 191,  281 => 189,  274 => 185,  269 => 183,  265 => 182,  260 => 179,  258 => 178,  255 => 177,  252 => 176,  247 => 171,  245 => 168,  242 => 167,  239 => 166,  236 => 158,  234 => 157,  231 => 156,  228 => 155,  225 => 147,  223 => 146,  220 => 145,  217 => 144,  214 => 132,  212 => 131,  209 => 130,  206 => 129,  202 => 126,  195 => 124,  191 => 123,  186 => 122,  183 => 121,  176 => 113,  173 => 112,  166 => 106,  160 => 104,  154 => 102,  152 => 101,  146 => 100,  135 => 97,  132 => 96,  124 => 228,  122 => 227,  114 => 221,  112 => 176,  107 => 173,  105 => 129,  103 => 121,  95 => 115,  93 => 112,  90 => 111,  87 => 110,  84 => 96,  82 => 95,  77 => 92,  71 => 89,  68 => 88,  66 => 87,  62 => 86,  59 => 85,  57 => 82,  56 => 81,  55 => 80,  54 => 79,  53 => 78,  52 => 77,  51 => 76,  50 => 75,  49 => 73,  44 => 70,  40 => 69,  37 => 68,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "node--teaser.html.twig", "themes/contrib/socialbase/templates/node/node--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 73, "if" => 87, "block" => 96, "embed" => 132, "trans" => 182];
        static $filters = ["escape" => 69, "clean_class" => 75, "capitalize" => 97, "trim" => 97, "striptags" => 97, "render" => 97];
        static $functions = ["attach_library" => 69];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'embed', 'trans'],
                ['escape', 'clean_class', 'capitalize', 'trim', 'striptags', 'render'],
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


/* node--teaser.html.twig */
class __TwigTemplate_c8c72c9d14e38c2f9a1eabbcf5017106de159251104255e5a7e0ec96e43d9a26___1753940432 extends \Twig\Template
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
        // line 132
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--teaser.html.twig", 132);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 133
    public function block_field_icon($context, array $blocks = [])
    {
        echo "account_circle";
    }

    // line 134
    public function block_svg_title($context, array $blocks = [])
    {
        echo t("Author name", array());
    }

    // line 135
    public function block_field_value($context, array $blocks = [])
    {
        // line 136
        echo "              <div class=\"teaser__published\">
                <span class=\"sr-only\">";
        // line 137
        echo t("Created on", array());
        echo " </span>
                <div class=\"teaser__published-date\">";
        // line 138
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null)), "html", null, true));
        echo " <span aria-hidden=\"true\">&bullet;</span></div>
                <span class=\"sr-only\"> ";
        // line 139
        echo t("by", array());
        echo " </span>
                <div class=\"teaser__published-author\">";
        // line 140
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null)), "html", null, true));
        echo "</div>
              </div>";
    }

    public function getTemplateName()
    {
        return "node--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 140,  458 => 139,  454 => 138,  450 => 137,  447 => 136,  444 => 135,  438 => 134,  432 => 133,  422 => 132,  339 => 218,  336 => 217,  329 => 213,  323 => 210,  317 => 207,  312 => 206,  310 => 205,  307 => 204,  299 => 199,  292 => 195,  287 => 192,  285 => 191,  281 => 189,  274 => 185,  269 => 183,  265 => 182,  260 => 179,  258 => 178,  255 => 177,  252 => 176,  247 => 171,  245 => 168,  242 => 167,  239 => 166,  236 => 158,  234 => 157,  231 => 156,  228 => 155,  225 => 147,  223 => 146,  220 => 145,  217 => 144,  214 => 132,  212 => 131,  209 => 130,  206 => 129,  202 => 126,  195 => 124,  191 => 123,  186 => 122,  183 => 121,  176 => 113,  173 => 112,  166 => 106,  160 => 104,  154 => 102,  152 => 101,  146 => 100,  135 => 97,  132 => 96,  124 => 228,  122 => 227,  114 => 221,  112 => 176,  107 => 173,  105 => 129,  103 => 121,  95 => 115,  93 => 112,  90 => 111,  87 => 110,  84 => 96,  82 => 95,  77 => 92,  71 => 89,  68 => 88,  66 => 87,  62 => 86,  59 => 85,  57 => 82,  56 => 81,  55 => 80,  54 => 79,  53 => 78,  52 => 77,  51 => 76,  50 => 75,  49 => 73,  44 => 70,  40 => 69,  37 => 68,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "node--teaser.html.twig", "themes/contrib/socialbase/templates/node/node--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["trans" => 134];
        static $filters = ["escape" => 138];
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


/* node--teaser.html.twig */
class __TwigTemplate_c8c72c9d14e38c2f9a1eabbcf5017106de159251104255e5a7e0ec96e43d9a26___2094142556 extends \Twig\Template
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
        // line 147
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--teaser.html.twig", 147);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 148
    public function block_field_icon($context, array $blocks = [])
    {
        echo "label";
    }

    // line 149
    public function block_svg_title($context, array $blocks = [])
    {
        echo t("Topic type:", array());
    }

    // line 150
    public function block_field_value($context, array $blocks = [])
    {
        // line 151
        echo "<span class=\"sr-only\">";
        echo t("Topic type:", array());
        echo "</span>
              ";
        // line 152
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topic_type"] ?? null)), "html", null, true));
    }

    public function getTemplateName()
    {
        return "node--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  574 => 152,  569 => 151,  566 => 150,  560 => 149,  554 => 148,  544 => 147,  462 => 140,  458 => 139,  454 => 138,  450 => 137,  447 => 136,  444 => 135,  438 => 134,  432 => 133,  422 => 132,  339 => 218,  336 => 217,  329 => 213,  323 => 210,  317 => 207,  312 => 206,  310 => 205,  307 => 204,  299 => 199,  292 => 195,  287 => 192,  285 => 191,  281 => 189,  274 => 185,  269 => 183,  265 => 182,  260 => 179,  258 => 178,  255 => 177,  252 => 176,  247 => 171,  245 => 168,  242 => 167,  239 => 166,  236 => 158,  234 => 157,  231 => 156,  228 => 155,  225 => 147,  223 => 146,  220 => 145,  217 => 144,  214 => 132,  212 => 131,  209 => 130,  206 => 129,  202 => 126,  195 => 124,  191 => 123,  186 => 122,  183 => 121,  176 => 113,  173 => 112,  166 => 106,  160 => 104,  154 => 102,  152 => 101,  146 => 100,  135 => 97,  132 => 96,  124 => 228,  122 => 227,  114 => 221,  112 => 176,  107 => 173,  105 => 129,  103 => 121,  95 => 115,  93 => 112,  90 => 111,  87 => 110,  84 => 96,  82 => 95,  77 => 92,  71 => 89,  68 => 88,  66 => 87,  62 => 86,  59 => 85,  57 => 82,  56 => 81,  55 => 80,  54 => 79,  53 => 78,  52 => 77,  51 => 76,  50 => 75,  49 => 73,  44 => 70,  40 => 69,  37 => 68,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "node--teaser.html.twig", "themes/contrib/socialbase/templates/node/node--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["trans" => 149];
        static $filters = ["escape" => 152];
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


/* node--teaser.html.twig */
class __TwigTemplate_c8c72c9d14e38c2f9a1eabbcf5017106de159251104255e5a7e0ec96e43d9a26___1990548816 extends \Twig\Template
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
        // line 158
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--teaser.html.twig", 158);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 159
    public function block_field_icon($context, array $blocks = [])
    {
        echo "group";
    }

    // line 160
    public function block_svg_title($context, array $blocks = [])
    {
        echo t("Group", array());
    }

    // line 161
    public function block_field_value($context, array $blocks = [])
    {
        // line 162
        echo "<span class=\"sr-only\">";
        echo t("This content is posted in", array());
        echo " </span>
              ";
        // line 163
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "group_name", [])), "html", null, true));
    }

    public function getTemplateName()
    {
        return "node--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  684 => 163,  679 => 162,  676 => 161,  670 => 160,  664 => 159,  654 => 158,  574 => 152,  569 => 151,  566 => 150,  560 => 149,  554 => 148,  544 => 147,  462 => 140,  458 => 139,  454 => 138,  450 => 137,  447 => 136,  444 => 135,  438 => 134,  432 => 133,  422 => 132,  339 => 218,  336 => 217,  329 => 213,  323 => 210,  317 => 207,  312 => 206,  310 => 205,  307 => 204,  299 => 199,  292 => 195,  287 => 192,  285 => 191,  281 => 189,  274 => 185,  269 => 183,  265 => 182,  260 => 179,  258 => 178,  255 => 177,  252 => 176,  247 => 171,  245 => 168,  242 => 167,  239 => 166,  236 => 158,  234 => 157,  231 => 156,  228 => 155,  225 => 147,  223 => 146,  220 => 145,  217 => 144,  214 => 132,  212 => 131,  209 => 130,  206 => 129,  202 => 126,  195 => 124,  191 => 123,  186 => 122,  183 => 121,  176 => 113,  173 => 112,  166 => 106,  160 => 104,  154 => 102,  152 => 101,  146 => 100,  135 => 97,  132 => 96,  124 => 228,  122 => 227,  114 => 221,  112 => 176,  107 => 173,  105 => 129,  103 => 121,  95 => 115,  93 => 112,  90 => 111,  87 => 110,  84 => 96,  82 => 95,  77 => 92,  71 => 89,  68 => 88,  66 => 87,  62 => 86,  59 => 85,  57 => 82,  56 => 81,  55 => 80,  54 => 79,  53 => 78,  52 => 77,  51 => 76,  50 => 75,  49 => 73,  44 => 70,  40 => 69,  37 => 68,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "node--teaser.html.twig", "themes/contrib/socialbase/templates/node/node--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["trans" => 160];
        static $filters = ["escape" => 163];
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


/* node--teaser.html.twig */
class __TwigTemplate_c8c72c9d14e38c2f9a1eabbcf5017106de159251104255e5a7e0ec96e43d9a26___1798823908 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'field_body' => [$this, 'block_field_body'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 168
        return "node--teaser__body.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("node--teaser__body.html.twig", "node--teaser.html.twig", 168);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 169
    public function block_field_body($context, array $blocks = [])
    {
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true));
        echo " ";
    }

    public function getTemplateName()
    {
        return "node--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  772 => 169,  762 => 168,  684 => 163,  679 => 162,  676 => 161,  670 => 160,  664 => 159,  654 => 158,  574 => 152,  569 => 151,  566 => 150,  560 => 149,  554 => 148,  544 => 147,  462 => 140,  458 => 139,  454 => 138,  450 => 137,  447 => 136,  444 => 135,  438 => 134,  432 => 133,  422 => 132,  339 => 218,  336 => 217,  329 => 213,  323 => 210,  317 => 207,  312 => 206,  310 => 205,  307 => 204,  299 => 199,  292 => 195,  287 => 192,  285 => 191,  281 => 189,  274 => 185,  269 => 183,  265 => 182,  260 => 179,  258 => 178,  255 => 177,  252 => 176,  247 => 171,  245 => 168,  242 => 167,  239 => 166,  236 => 158,  234 => 157,  231 => 156,  228 => 155,  225 => 147,  223 => 146,  220 => 145,  217 => 144,  214 => 132,  212 => 131,  209 => 130,  206 => 129,  202 => 126,  195 => 124,  191 => 123,  186 => 122,  183 => 121,  176 => 113,  173 => 112,  166 => 106,  160 => 104,  154 => 102,  152 => 101,  146 => 100,  135 => 97,  132 => 96,  124 => 228,  122 => 227,  114 => 221,  112 => 176,  107 => 173,  105 => 129,  103 => 121,  95 => 115,  93 => 112,  90 => 111,  87 => 110,  84 => 96,  82 => 95,  77 => 92,  71 => 89,  68 => 88,  66 => 87,  62 => 86,  59 => 85,  57 => 82,  56 => 81,  55 => 80,  54 => 79,  53 => 78,  52 => 77,  51 => 76,  50 => 75,  49 => 73,  44 => 70,  40 => 69,  37 => 68,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "node--teaser.html.twig", "themes/contrib/socialbase/templates/node/node--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 169];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
