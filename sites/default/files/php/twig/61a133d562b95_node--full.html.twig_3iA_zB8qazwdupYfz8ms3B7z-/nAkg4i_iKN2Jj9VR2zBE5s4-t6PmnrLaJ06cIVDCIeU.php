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

/* node--full.html.twig */
class __TwigTemplate_d6d990e2b08c6f99dd172399e527ad27ae92aa2a8b5e549e967aa332f585e9fa extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'metainfo' => [$this, 'block_metainfo'],
            'nodefull_specialfields' => [$this, 'block_nodefull_specialfields'],
            'metaengage' => [$this, 'block_metaengage'],
            'nodefull_body' => [$this, 'block_nodefull_body'],
            'nodefull_below_content' => [$this, 'block_nodefull_below_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 66
        echo "
";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/page-node"), "html", null, true));
        echo "

";
        // line 70
        $context["classes"] = [0 => "card", 1 => (($this->getAttribute(        // line 72
($context["node"] ?? null), "isPromoted", [], "method")) ? ("node--promoted") : ("")), 2 => (( !$this->getAttribute(        // line 73
($context["node"] ?? null), "isPublished", [], "method")) ? ("node--unpublished") : (""))];
        // line 76
        echo "
";
        // line 77
        if (($context["details_label"] ?? null)) {
            // line 78
            echo "  <h4 class=\"section-title section-title-node\">
    ";
            // line 79
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["details_label"] ?? null)), "html", null, true));
            echo "
  </h4>
";
        }
        // line 82
        echo "
<article";
        // line 83
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true));
        echo ">

  <div";
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "card__body"], "method")), "html", null, true));
        echo ">

    ";
        // line 87
        if ( !$this->getAttribute(($context["node"] ?? null), "isPublished", [], "method")) {
            // line 88
            echo "      <div class=\"node--unpublished__label\">";
            echo t("unpublished", array());
            echo "</div>
    ";
        }
        // line 90
        echo "
    ";
        // line 91
        if (($context["display_submitted"] ?? null)) {
            // line 92
            echo "      ";
            $this->displayBlock('metainfo', $context, $blocks);
            // line 122
            echo "    ";
        }
        // line 123
        echo "
    ";
        // line 124
        if (($context["event_date"] ?? null)) {
            // line 125
            echo "      ";
            $this->displayBlock('nodefull_specialfields', $context, $blocks);
            // line 128
            echo "    ";
        }
        // line 129
        echo "

    ";
        // line 131
        if ((($this->getAttribute(($context["node"] ?? null), "isSticky", [], "method") ||  !twig_test_empty(($context["comment_field_status"] ?? null))) || ($context["logged_in"] ?? null))) {
            // line 132
            echo "      ";
            $this->displayBlock('metaengage', $context, $blocks);
            // line 227
            echo "    ";
        }
        // line 228
        echo "
    ";
        // line 229
        $this->displayBlock('nodefull_body', $context, $blocks);
        // line 232
        echo "

  </div>

</article>

";
        // line 238
        $this->displayBlock('nodefull_below_content', $context, $blocks);
    }

    // line 92
    public function block_metainfo($context, array $blocks = [])
    {
        // line 93
        echo "        <header class=\"metainfo\">

          <div class=\"metainfo__avatar\">
            ";
        // line 96
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null)), "html", null, true));
        echo "
          </div>

          <div class=\"metainfo__content\">

            ";
        // line 101
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author"] ?? null)), "html", null, true));
        echo "
            <span class=\"metainfo__published-date\">&bullet; ";
        // line 102
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created_date_formatted"] ?? null)), "html", null, true));
        echo " </span>
            <div>
              ";
        // line 104
        if (($context["event_type"] ?? null)) {
            // line 105
            echo "                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["event_type"] ?? null)), "html", null, true));
            echo "
              ";
        }
        // line 107
        echo "              ";
        if (($context["topic_type"] ?? null)) {
            // line 108
            echo "                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topic_type"] ?? null)), "html", null, true));
            echo "
              ";
        }
        // line 110
        echo "              ";
        if (($context["group_link"] ?? null)) {
            // line 111
            echo "                ";
            echo t("in group", array());
            // line 112
            echo "                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_link"] ?? null)), "html", null, true));
            echo "
              ";
        }
        // line 114
        echo "            </div>

          </div>

          ";
        // line 118
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "links", []), "moderation", [])), "html", null, true));
        echo "

        </header>
      ";
    }

    // line 125
    public function block_nodefull_specialfields($context, array $blocks = [])
    {
        // line 126
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true));
        echo "
      ";
    }

    // line 132
    public function block_metaengage($context, array $blocks = [])
    {
        // line 133
        echo "        <div class=\"meta-engage\">

          <div class=\"meta-engage--buttons\">
            ";
        // line 136
        if (( !twig_test_empty($this->getAttribute(($context["content"] ?? null), "field_event_addtocal", [])) && ($context["logged_in"] ?? null))) {
            // line 137
            echo "              <div class=\"meta-addtocal\">
                ";
            // line 138
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_event_addtocal", [])), "html", null, true));
            echo "
              </div>
            ";
        }
        // line 141
        echo "
            ";
        // line 142
        if (( !twig_test_empty($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->renderVar($this->getAttribute(($context["content"] ?? null), "flag_follow_content", []))) && ($context["logged_in"] ?? null))) {
            // line 143
            echo "              <div class=\"meta-follow\">
                ";
            // line 144
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "flag_follow_content", [])), "html", null, true));
            echo "
              </div>
            ";
        }
        // line 147
        echo "
            ";
        // line 148
        if ($this->getAttribute(($context["node"] ?? null), "isSticky", [], "method")) {
            // line 149
            echo "              <span class=\"badge badge-accent badge--large\">";
            echo t("Featured", array());
            echo "</span>
            ";
        }
        // line 151
        echo "          </div>

          <div class=\"meta-engage--badges\">
            ";
        // line 154
        if ( !twig_test_empty(($context["comment_field_status"] ?? null))) {
            // line 155
            echo "              <a href=\"#section-comments\" class=\"badge badge-default badge--large badge--pill badge--comment-count\" title=\"";
            echo t("Total amount of comments", array());
            echo "\">
                <span class=\"badge__container\">
                  <svg class=\"badge__icon\" aria-hidden=\"true\">
                    <title>";
            // line 158
            echo t("Total amount of comments", array());
            echo "</title>
                    <use xlink:href=\"#icon-comment\"></use>
                  </svg>
                  <span class=\"badge__label\">
                    ";
            // line 162
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_count"] ?? null)), "html", null, true));
            echo "
                  </span>
                  <span class=\"badge__label badge__label--description\">
                    ";
            // line 165
            echo \Drupal::translation()->formatPlural(abs(            // line 167
($context["comment_count"] ?? null)), "comment", "comments", array());
            // line 170
            echo "                  </span>
                </span>
              </a>
            ";
        }
        // line 174
        echo "
            ";
        // line 175
        if ( !twig_test_empty(($context["likes_count"] ?? null))) {
            // line 176
            echo "              <div class=\"badge badge-default badge--large badge--pill\">
                <span class=\"badge__container\">
                  <svg class=\"badge__icon\">
                    <title>";
            // line 179
            echo t("Total amount of likes", array());
            echo "</title>
                    <use xlink:href=\"#icon-like\"></use>
                  </svg>
                  <span class=\"badge__label\">
                    ";
            // line 183
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["likes_count"] ?? null)), "html", null, true));
            echo "
                  </span>
                  <span class=\"badge__label badge__label--description\">
                    ";
            // line 186
            echo \Drupal::translation()->formatPlural(abs(            // line 188
($context["likes_count"] ?? null)), "like", "likes", array());
            // line 191
            echo "                  </span>
                </span>
              </div>
            ";
        }
        // line 195
        echo "
            ";
        // line 196
        if ((($context["visibility_icon"] ?? null) && ($context["visibility_label"] ?? null))) {
            // line 197
            echo "              <div class=\"badge badge-default badge--large badge--pill\">
                <span class=\"badge__container\">
                  <svg class=\"badge__icon\">
                    <title>";
            // line 200
            echo t("Visibility", array());
            echo "</title>
                    <use xlink:href=\"#icon-";
            // line 201
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["visibility_icon"] ?? null)), "html", null, true));
            echo "\"></use>
                  </svg>
                  <span class=\"badge__label\">&nbsp;</span>
                  <span class=\"badge__label badge__label--description\">";
            // line 204
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["visibility_label"] ?? null)), "html", null, true));
            echo "</span>
                </span>
              </div>
            ";
        }
        // line 208
        echo "
            ";
        // line 209
        if (( !twig_test_empty(($context["views_count"] ?? null)) && ($context["views_label"] ?? null))) {
            // line 210
            echo "              <div class=\"badge badge-default badge--large badge--pill\">
              <span class=\"badge__container\">
                <svg class=\"badge__icon\">
                  <title>";
            // line 213
            echo t("Total amount of views", array());
            echo "</title>
                  <use xlink:href=\"#icon-views\"></use>
                </svg>
                <span class=\"badge__label\">
                  ";
            // line 217
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["views_count"] ?? null)), "html", null, true));
            echo "
                </span>
                <span class=\"badge__label badge__label--description\">";
            // line 219
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["views_label"] ?? null)), "html", null, true));
            echo "</span>
              </span>
              </div>
            ";
        }
        // line 223
        echo "          </div>

        </div>
        ";
    }

    // line 229
    public function block_nodefull_body($context, array $blocks = [])
    {
        // line 230
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "flag_follow_content", "links"), "html", null, true));
        echo "
    ";
    }

    // line 238
    public function block_nodefull_below_content($context, array $blocks = [])
    {
        // line 239
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["below_content"] ?? null)), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "node--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 239,  398 => 238,  391 => 230,  388 => 229,  381 => 223,  374 => 219,  369 => 217,  362 => 213,  357 => 210,  355 => 209,  352 => 208,  345 => 204,  339 => 201,  335 => 200,  330 => 197,  328 => 196,  325 => 195,  319 => 191,  317 => 188,  316 => 186,  310 => 183,  303 => 179,  298 => 176,  296 => 175,  293 => 174,  287 => 170,  285 => 167,  284 => 165,  278 => 162,  271 => 158,  264 => 155,  262 => 154,  257 => 151,  251 => 149,  249 => 148,  246 => 147,  240 => 144,  237 => 143,  235 => 142,  232 => 141,  226 => 138,  223 => 137,  221 => 136,  216 => 133,  213 => 132,  206 => 126,  203 => 125,  195 => 118,  189 => 114,  183 => 112,  180 => 111,  177 => 110,  171 => 108,  168 => 107,  162 => 105,  160 => 104,  155 => 102,  151 => 101,  143 => 96,  138 => 93,  135 => 92,  131 => 238,  123 => 232,  121 => 229,  118 => 228,  115 => 227,  112 => 132,  110 => 131,  106 => 129,  103 => 128,  100 => 125,  98 => 124,  95 => 123,  92 => 122,  89 => 92,  87 => 91,  84 => 90,  78 => 88,  76 => 87,  71 => 85,  66 => 83,  63 => 82,  57 => 79,  54 => 78,  52 => 77,  49 => 76,  47 => 73,  46 => 72,  45 => 70,  40 => 67,  37 => 66,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "node--full.html.twig", "themes/contrib/socialbase/templates/node/node--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 70, "if" => 77, "trans" => 88, "block" => 92];
        static $filters = ["escape" => 67, "render" => 142, "without" => 230];
        static $functions = ["attach_library" => 67];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans', 'block'],
                ['escape', 'render', 'without'],
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
