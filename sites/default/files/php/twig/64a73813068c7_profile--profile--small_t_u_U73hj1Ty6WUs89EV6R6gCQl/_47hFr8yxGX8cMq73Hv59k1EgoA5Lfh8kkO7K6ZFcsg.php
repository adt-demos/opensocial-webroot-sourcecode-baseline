<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/socialbase/templates/profile/profile--profile--small_teaser.html.twig */
class __TwigTemplate_0e3fee23a378f89e7aa96ff7ece77a5f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "
<div class=\"card__block card__block--list teaser--small\">
  <div class=\"card__text list-item\">
    <a href=\"";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_home"] ?? null), 27, $this->source), "html", null, true);
        echo "\" ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["avatar_attributes"] ?? null), 27, $this->source), "html", null, true);
        echo " title=\"";
        echo t("profile avatar", array());
        echo "\">
      <span class=\"list-item__avatar list-item__avatar--medium\">
        ";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_image", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "
      </span>
    </a>


    <a href=\"";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_home"] ?? null), 34, $this->source), "html", null, true);
        echo "\" ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null), 34, $this->source), "html", null, true);
        echo " title=\"";
        echo t("profile information", array());
        echo "\">
      <span class=\"list-item__text\">
        <span class=\"teaser--small__title\">
          ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_name"] ?? null), 37, $this->source), "html", null, true);
        echo "
          ";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_name_extra"] ?? null), 38, $this->source), "html", null, true);
        echo "
        </span>
        ";
        // line 40
        if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_function", [], "any", false, false, true, 40)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_organization", [], "any", false, false, true, 40)))) {
            // line 41
            echo "          <div class=\"list-item__text--small\">
            ";
            // line 42
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_organization", [], "any", false, false, true, 42))) {
                // line 43
                echo "              ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("@function @ @organization", ["@function" => $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_function", [], "any", false, false, true, 43), 43, $this->source)), "@organization" => $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_organization", [], "any", false, false, true, 43), 43, $this->source))]));
                echo "
            ";
            } else {
                // line 45
                echo "              ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_function", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                echo "
            ";
            }
            // line 47
            echo "          </div>
        ";
        }
        // line 49
        echo "      </span>
    </a>
  </div>

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
        return array (  103 => 49,  99 => 47,  93 => 45,  87 => 43,  85 => 42,  82 => 41,  80 => 40,  75 => 38,  71 => 37,  61 => 34,  53 => 29,  44 => 27,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/profile/profile--profile--small_teaser.html.twig", "/var/www/html/themes/contrib/socialbase/templates/profile/profile--profile--small_teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 27, "if" => 40);
        static $filters = array("escape" => 27, "render" => 40, "t" => 43);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['trans', 'if'],
                ['escape', 'render', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
