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

/* themes/contrib/socialbase/templates/post/post--activity.html.twig */
class __TwigTemplate_ecfe6f74d3233f76d454f85d56190bef241cb7f0d0f15467482ce3f2d7f21a7a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 18
        echo "
";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/comment"), "html", null, true));
        echo "
";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/page-node"), "html", null, true));
        echo "

";
        // line 23
        $context["classes"] = [0 => "margin-top-m", 1 => "iframe-container", 2 => ((        // line 26
($context["logged_in"] ?? null)) ? ("margin-bottom-m") : (""))];
        // line 29
        echo "
";
        // line 30
        if ($this->getAttribute(($context["content"] ?? null), "links", [])) {
            // line 31
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "links", [])), "html", null, true));
            echo "
";
        }
        // line 33
        echo "
<div";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true));
        echo ">

  ";
        // line 37
        echo "  <div class=\"body-text\">
    ";
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "links", "field_post_comments", "like_and_dislike", "field_post_image", "user_id", "field_album"), "html", null, true));
        echo "
  </div>

  ";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_post_image", [])), "html", null, true));
        echo "

  <div class=\"clearfix\"></div>

  <div class=\"footer-post\">
    ";
        // line 46
        if ((($context["dashboard"] ?? null) && (($context["comment_count"] ?? null) > 0))) {
            // line 47
            echo "      <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_url"] ?? null)), "html", null, true));
            echo "\" class=\"badge badge--pill badge--post\" title=\"";
            echo t("Total amount of comments", array());
            echo "\">
            <span class=\"badge__container\">
              <svg class=\"badge__icon\" aria-hidden=\"true\">
                <title>";
            // line 50
            echo t("Total amount of comments", array());
            echo "</title>
                <use xlink:href=\"#icon-comment\"></use>
              </svg>
              <span class=\"badge__label\">
                ";
            // line 54
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_count"] ?? null)), "html", null, true));
            echo "
              </span>
            </span>
      </a>
    ";
        }
        // line 59
        echo "
    ";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "like_and_dislike", [])), "html", null, true));
        echo "

    ";
        // line 62
        if (($context["dashboard"] ?? null)) {
            // line 63
            echo "      <div class=\"card__link\">
        ";
            // line 64
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more_link"] ?? null)), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 67
        echo "
    <div class=\"album-name\">
      ";
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_album", [])), "html", null, true));
        echo "
    </div>

    ";
        // line 72
        if (($context["share_post"] ?? null)) {
            // line 73
            echo "      <div class=\"share-button\">
        ";
            // line 74
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["share_post"] ?? null)), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 77
        echo "  </div>

</div>

";
        // line 81
        if (($context["logged_in"] ?? null)) {
            // line 82
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_post_comments", [])), "html", null, true));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/post/post--activity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 82,  155 => 81,  149 => 77,  143 => 74,  140 => 73,  138 => 72,  132 => 69,  128 => 67,  122 => 64,  119 => 63,  117 => 62,  112 => 60,  109 => 59,  101 => 54,  94 => 50,  85 => 47,  83 => 46,  75 => 41,  69 => 38,  66 => 37,  61 => 34,  58 => 33,  52 => 31,  50 => 30,  47 => 29,  45 => 26,  44 => 23,  39 => 20,  35 => 19,  32 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/post/post--activity.html.twig", "/var/www/html/themes/contrib/socialbase/templates/post/post--activity.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 23, "if" => 30, "trans" => 47];
        static $filters = ["escape" => 19, "without" => 38];
        static $functions = ["attach_library" => 19];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['escape', 'without'],
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
