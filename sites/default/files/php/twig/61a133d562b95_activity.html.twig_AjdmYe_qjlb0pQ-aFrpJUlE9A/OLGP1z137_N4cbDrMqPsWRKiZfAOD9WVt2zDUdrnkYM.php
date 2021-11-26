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

/* themes/contrib/socialbase/templates/activity/activity.html.twig */
class __TwigTemplate_074d21b8663264e77004c29ad7dc4cd54a281f83c2cb1cc54fa79f7b4f2c0e00 extends \Twig\Template
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
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/stream"), "html", null, true));
        echo "

";
        // line 22
        $context["classes"] = [0 => "media", 1 => (((        // line 24
($context["post"] ?? null) &&  !($context["published"] ?? null))) ? ("post-unpublished") : (""))];
        // line 27
        echo "
<li class=\"stream-item\">

  <i class=\"stream-icon\"></i>

  <div class=\"card card--stream ";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["extra_stream_class"] ?? null)), "html", null, true));
        echo "\">

    <div class=\"card__block\">

      <div class=\"media-wrapper\">

        <div ";
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true));
        echo ">

          <div class=\"media-left avatar\" aria-hidden=\"true\">
            ";
        // line 41
        if (($context["actor"] ?? null)) {
            // line 42
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["actor"] ?? null)), "html", null, true));
        }
        // line 44
        echo "          </div>

          <div class=\"media-body\">
            <div class=\"media-heading text-m\">
              ";
        // line 48
        if ($this->getAttribute(($context["content"] ?? null), "field_activity_output_text", [])) {
            // line 49
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_activity_output_text", [])), "html", null, true));
        }
        // line 51
        echo "
              <div class=\"post-date\">
                ";
        // line 53
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null)), "html", null, true));
        echo "
                ";
        // line 54
        if ((($context["visibility_icon"] ?? null) && ($context["visibility_label"] ?? null))) {
            // line 55
            echo "                  <svg class=\"margin-left-s icon-visibility\">
                    <title>";
            // line 56
            echo t("Visibility", array());
            echo "</title>
                    <use xlink:href=\"#icon-";
            // line 57
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["visibility_icon"] ?? null)), "html", null, true));
            echo "\"></use>
                  </svg>
                  <strong>";
            // line 59
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["visibility_label"] ?? null)), "html", null, true));
            echo "</strong>
                ";
        }
        // line 61
        echo "                ";
        if ((($context["post"] ?? null) &&  !($context["published"] ?? null))) {
            // line 62
            echo "                  <span class=\"badge badge-default badge--pill\">
                    ";
            // line 63
            echo t("unpublished", array());
            // line 64
            echo "                  </span>
                ";
        }
        // line 66
        echo "
              </div>
            </div>

          </div>

        </div>

        ";
        // line 74
        if ($this->getAttribute(($context["content"] ?? null), "field_activity_entity", [])) {
            // line 75
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_activity_entity", [])), "html", null, true));
            echo "
        ";
        }
        // line 77
        echo "
      </div>

    </div>

  </div>


</li>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/activity/activity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 77,  132 => 75,  130 => 74,  120 => 66,  116 => 64,  114 => 63,  111 => 62,  108 => 61,  103 => 59,  98 => 57,  94 => 56,  91 => 55,  89 => 54,  85 => 53,  81 => 51,  78 => 49,  76 => 48,  70 => 44,  67 => 42,  65 => 41,  59 => 38,  50 => 32,  43 => 27,  41 => 24,  40 => 22,  35 => 19,  32 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/activity/activity.html.twig", "/var/www/html/themes/contrib/socialbase/templates/activity/activity.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 22, "if" => 41, "trans" => 56];
        static $filters = ["escape" => 19];
        static $functions = ["attach_library" => 19];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['escape'],
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
