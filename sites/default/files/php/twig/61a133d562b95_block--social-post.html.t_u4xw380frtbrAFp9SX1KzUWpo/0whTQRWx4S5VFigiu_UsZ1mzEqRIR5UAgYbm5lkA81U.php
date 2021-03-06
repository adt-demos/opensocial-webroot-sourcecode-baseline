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

/* themes/contrib/socialbase/templates/block/block--social-post.html.twig */
class __TwigTemplate_9dd3c90cfc63bad23489102e8032a353d4ffa83668b268f11adb1a969d0edca6 extends \Twig\Template
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
        // line 49
        $context["classes"] = [0 => "card", 1 => "card--stream", 2 =>         // line 52
($context["extra_stream_class"] ?? null)];
        // line 55
        echo "<div ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true));
        echo ">
  <div class=\"card__block\">
    <div class=\"media\">
      <div class=\"media-left avatar hidden-for-phone-only\">
        ";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "current_user_image", [])), "html", null, true));
        echo "
      </div>
      <div class=\"media-body\">
        ";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "current_user_image"), "html", null, true));
        echo "
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/block/block--social-post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 62,  43 => 59,  35 => 55,  33 => 52,  32 => 49,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/block/block--social-post.html.twig", "/var/www/html/themes/contrib/socialbase/templates/block/block--social-post.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 49];
        static $filters = ["escape" => 55, "without" => 62];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape', 'without'],
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
