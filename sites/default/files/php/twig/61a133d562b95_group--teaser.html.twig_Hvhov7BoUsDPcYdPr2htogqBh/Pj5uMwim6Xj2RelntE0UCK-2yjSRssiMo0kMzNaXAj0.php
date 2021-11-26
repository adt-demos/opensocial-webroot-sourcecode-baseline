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

/* themes/contrib/socialbase/templates/group/group--teaser.html.twig */
class __TwigTemplate_44633d9330631160424eb9083d6f3c67e74d7e3812dcd0648d9141ff2f9bf8ac extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'card_image' => [$this, 'block_card_image'],
            'card_teaser_type' => [$this, 'block_card_teaser_type'],
            'card_title' => [$this, 'block_card_title'],
            'card_body' => [$this, 'block_card_body'],
            'card_actionbar' => [$this, 'block_card_actionbar'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 42
        echo "
";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/teaser"), "html", null, true));
        echo "

";
        // line 46
        $context["classes"] = [0 => "card", 1 => "teaser", 2 => (( !$this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 49
($context["content"] ?? null), "field_group_image", [])))) ? ("no-image") : (""))];
        // line 52
        echo "
<div";
        // line 53
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true));
        echo ">

  <div class='teaser__image'>
    ";
        // line 56
        $this->displayBlock('card_image', $context, $blocks);
        // line 59
        echo "
    ";
        // line 60
        $this->displayBlock('card_teaser_type', $context, $blocks);
        // line 74
        echo "  </div>

  <div class='teaser__body'>
    <div class=\"teaser__content\">

      ";
        // line 79
        $this->displayBlock('card_title', $context, $blocks);
        // line 97
        echo "
      ";
        // line 98
        $this->displayBlock('card_body', $context, $blocks);
        // line 127
        echo "    </div>

    <div class=\"card__actionbar\">
      ";
        // line 130
        $this->displayBlock('card_actionbar', $context, $blocks);
        // line 159
        echo "    </div>

  </div>
</div>
";
    }

    // line 56
    public function block_card_image($context, array $blocks = [])
    {
        // line 57
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_group_image", [])), "html", null, true));
        echo "
    ";
    }

    // line 60
    public function block_card_teaser_type($context, array $blocks = [])
    {
        // line 61
        echo "      <a href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true));
        echo "\" title=\"";
        echo t("Group: &nbsp;@label", array("@label" => ($context["label"] ?? null), ));
        echo "\" aria-hidden=\"true\">
        <div class=\"teaser__teaser-type\">
          <svg class=\"teaser__teaser-type-icon\">
            <title id=\"group-";
        // line 64
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["group"] ?? null), "id", []), "value", [])), "html", null, true));
        echo "\">";
        echo t("Group: &nbsp;@label", array("@label" => ($context["label"] ?? null), ));
        echo "</title>
            ";
        // line 65
        if (($context["group_type_icon"] ?? null)) {
            // line 66
            echo "              <use xlink:href=\"#";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_type_icon"] ?? null)), "html", null, true));
            echo "\"></use>
            ";
        } else {
            // line 68
            echo "              <use xlink:href=\"#icon-group-white\"></use>
            ";
        }
        // line 70
        echo "          </svg>
        </div>
      </a>
    ";
    }

    // line 79
    public function block_card_title($context, array $blocks = [])
    {
        // line 80
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true));
        echo "
        <h4";
        // line 81
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null)), "html", null, true));
        echo " class=\"teaser__title\">
          ";
        // line 82
        if (($context["closed_group_lock"] ?? null)) {
            // line 83
            echo "            <svg class=\"icon-gray icon-small\" aria-hidden=\"true\">
              <title>";
            // line 84
            echo t("Closed group", array());
            echo "</title>
              <use xlink:href=\"#icon-lock\"></use>
            </svg>
          ";
        } elseif (        // line 87
($context["secret_group_shield"] ?? null)) {
            // line 88
            echo "            <svg class=\"icon-gray icon-small\" aria-hidden=\"true\">
              <title>";
            // line 89
            echo t("Secret group", array());
            echo "</title>
              <use xlink:href=\"#icon-shield\"></use>
            </svg>
          ";
        }
        // line 93
        echo "          <a href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true));
        echo "\" rel=\"bookmark\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true));
        echo "</a>
        </h4>
        ";
        // line 95
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true));
        echo "
      ";
    }

    // line 98
    public function block_card_body($context, array $blocks = [])
    {
        // line 99
        echo "        <div class=\"teaser__content-line\">
          <svg class=\"teaser__content-type-icon\" aria-hidden=\"true\">
            <title>";
        // line 101
        echo t("Type of group", array());
        echo "</title>
            <use xlink:href=\"#icon-label\"></use>
          </svg>
          <span class=\"teaser__content-text\">
            <span class=\"sr-only\">";
        // line 105
        echo t("The group type is", array());
        echo "</span>
            ";
        // line 106
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_type"] ?? null)), "html", null, true));
        echo "
          </span>
        </div>
        ";
        // line 109
        if (($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->renderVar($this->getAttribute(($context["content"] ?? null), "field_group_location", [])) || $this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->renderVar($this->getAttribute(($context["content"] ?? null), "field_group_address", [])))) {
            // line 110
            echo "          <div class=\"teaser__content-line\">
              <svg class=\"teaser__content-type-icon\" aria-hidden=\"true\">
                <title>";
            // line 112
            echo t("Located at", array());
            echo "</title>
                  <use xlink:href=\"#icon-location\"></use>
              </svg>
            <span class=\"teaser__content-text\">
          <span class=\"sr-only\">";
            // line 116
            echo t("Located at:", array());
            echo "</span>
          ";
            // line 117
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_group_location", [])), "html", null, true));
            echo "
              ";
            // line 118
            if (( !twig_test_empty($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->renderVar($this->getAttribute(($context["content"] ?? null), "field_group_location", []))) &&  !twig_test_empty($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->renderVar($this->getAttribute(($context["content"] ?? null), "field_group_address", []))))) {
                // line 119
                echo "                <span class=\"sr-only\">, </span>
                <span aria-hidden=\"true\"> &bullet; </span>
              ";
            }
            // line 122
            echo "              ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_group_address", [])), "html", null, true));
            echo "
            </span>
          </div>
        ";
        }
        // line 126
        echo "      ";
    }

    // line 130
    public function block_card_actionbar($context, array $blocks = [])
    {
        // line 131
        echo "
        ";
        // line 132
        if ( !twig_test_empty(($context["group_members"] ?? null))) {
            // line 133
            echo "          <div class=\"badge teaser__badge\">
            <span class=\"badge__container\">
              <svg class=\"badge__icon\" aria-hidden=\"true\">
                <title>";
            // line 136
            echo t("Number of group members", array());
            echo "</title>
                <use xlink:href=\"#icon-group\"></use>
              </svg>
              <span class=\"badge__label\">
                ";
            // line 140
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_members"] ?? null)), "html", null, true));
            echo "
                <span class=\"sr-only\"> ";
            // line 141
            echo t("group members", array());
            echo " </span>
              </span>
            </span>
          </div>
        ";
        }
        // line 146
        echo "
        ";
        // line 147
        if (($context["joined"] ?? null)) {
            // line 148
            echo "          <span class=\"badge teaser__badge badge-default\">
            ";
            // line 149
            echo t("You have joined", array(), ["context" => "Is a member"]);
            // line 150
            echo "          </span>
        ";
        }
        // line 152
        echo "
        <a href=\"";
        // line 153
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true));
        echo "\" class=\"card__link\" title=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true));
        echo "\">
          ";
        // line 154
        echo t("Read more", array());
        // line 155
        echo "          <span class=\"visually-hidden\">";
        echo t("about @label", array("@label" => ($context["label"] ?? null), ));
        echo " </span>
        </a>

      ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/group/group--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 155,  308 => 154,  302 => 153,  299 => 152,  295 => 150,  293 => 149,  290 => 148,  288 => 147,  285 => 146,  277 => 141,  273 => 140,  266 => 136,  261 => 133,  259 => 132,  256 => 131,  253 => 130,  249 => 126,  241 => 122,  236 => 119,  234 => 118,  230 => 117,  226 => 116,  219 => 112,  215 => 110,  213 => 109,  207 => 106,  203 => 105,  196 => 101,  192 => 99,  189 => 98,  183 => 95,  175 => 93,  168 => 89,  165 => 88,  163 => 87,  157 => 84,  154 => 83,  152 => 82,  148 => 81,  143 => 80,  140 => 79,  133 => 70,  129 => 68,  123 => 66,  121 => 65,  115 => 64,  106 => 61,  103 => 60,  96 => 57,  93 => 56,  85 => 159,  83 => 130,  78 => 127,  76 => 98,  73 => 97,  71 => 79,  64 => 74,  62 => 60,  59 => 59,  57 => 56,  51 => 53,  48 => 52,  46 => 49,  45 => 46,  40 => 43,  37 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/group/group--teaser.html.twig", "/var/www/html/themes/contrib/socialbase/templates/group/group--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 46, "block" => 56, "trans" => 61, "if" => 65];
        static $filters = ["escape" => 43, "render" => 49, "trim" => 61, "striptags" => 61];
        static $functions = ["attach_library" => 43];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'trans', 'if'],
                ['escape', 'render', 'trim', 'striptags'],
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
