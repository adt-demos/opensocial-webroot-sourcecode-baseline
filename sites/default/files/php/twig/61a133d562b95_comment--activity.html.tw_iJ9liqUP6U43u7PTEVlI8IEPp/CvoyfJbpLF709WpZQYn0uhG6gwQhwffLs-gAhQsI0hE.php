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

/* themes/contrib/socialbase/templates/comment/comment--activity.html.twig */
class __TwigTemplate_5b202b60aeeb54044a632fbeddd496bd1b8508fe6a4066603cc07325fb04dbb3 extends \Twig\Template
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
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "commented_entity", [])), "html", null, true));
        echo "
";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "comment_link", [])), "html", null, true));
        echo "

";
        // line 72
        if (((null === ($context["dashboard"] ?? null)) || (($context["dashboard"] ?? null) == false))) {
            // line 73
            echo "<div class=\"card__nested-section\">
";
        }
        // line 75
        echo "
  ";
        // line 76
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "comment", [])), "html", null, true));
        echo "

  ";
        // line 78
        if ($this->getAttribute(($context["content"] ?? null), "more_link", [])) {
            // line 79
            echo "    <div class=\"margin-top-l text-center\">
      ";
            // line 80
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "more_link", [])), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 83
        echo "
";
        // line 84
        if (((null === ($context["dashboard"] ?? null)) || (($context["dashboard"] ?? null) == false))) {
            // line 85
            echo "</div>
";
        }
        // line 87
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/comment/comment--activity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 87,  71 => 85,  69 => 84,  66 => 83,  60 => 80,  57 => 79,  55 => 78,  50 => 76,  47 => 75,  43 => 73,  41 => 72,  36 => 70,  32 => 69,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/comment/comment--activity.html.twig", "/var/www/html/themes/contrib/socialbase/templates/comment/comment--activity.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 72];
        static $filters = ["escape" => 69];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
