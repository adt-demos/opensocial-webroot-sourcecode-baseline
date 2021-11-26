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

/* themes/contrib/socialbase/templates/profile/profile--profile--small_teaser.html.twig */
class __TwigTemplate_a9d8b7854e0a67b02aafedd5c1ccb4748550d0e01b56c391280daefa3dfb50b6 extends \Twig\Template
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
        // line 22
        echo "

<div class=\"card__block card__block--list teaser--small\">

  <a href=\"";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_home"] ?? null)), "html", null, true));
        echo "\" class=\"card__text list-item\">
    <span class=\"list-item__avatar list-item__avatar--medium\">
      ";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_profile_image", [])), "html", null, true));
        echo "
    </span>

    <span class=\"list-item__text\">
      <span class=\"teaser--small__title\">
        ";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_name"] ?? null)), "html", null, true));
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_name_extra"] ?? null)), "html", null, true));
        echo "
      </span>

      ";
        // line 36
        if (($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_function", [])) || $this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_organization", [])))) {
            // line 37
            echo "        <div class=\"list-item__text--small\">
          ";
            // line 38
            if ($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_organization", []))) {
                // line 39
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("@function @ @organization", ["@function" => $this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_profile_function", []))), "@organization" => $this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_profile_organization", [])))])));
                echo "
          ";
            } else {
                // line 41
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_profile_function", [])), "html", null, true));
                echo "
          ";
            }
            // line 43
            echo "        </div>
      ";
        }
        // line 45
        echo "    </span>

  </a>

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/profile/profile--profile--small_teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 45,  78 => 43,  72 => 41,  66 => 39,  64 => 38,  61 => 37,  59 => 36,  51 => 33,  43 => 28,  38 => 26,  32 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/profile/profile--profile--small_teaser.html.twig", "/var/www/html/themes/contrib/socialbase/templates/profile/profile--profile--small_teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 36];
        static $filters = ["escape" => 26, "render" => 36, "t" => 39];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'render', 't'],
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
