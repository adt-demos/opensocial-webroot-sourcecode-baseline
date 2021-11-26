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

/* themes/contrib/socialbase/templates/comment/input--button--comment.html.twig */
class __TwigTemplate_66d7013ea5dd326521b3d49cfe52dab68ac5610138bb275963e33b3f3fbf824a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "input.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "btn--comment-submit"], "method");
        // line 5
        ob_start(function () { return ''; });
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 1
        $this->parent = $this->loadTemplate("input.html.twig", "themes/contrib/socialbase/templates/comment/input--button--comment.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_input($context, array $blocks = [])
    {
        // line 7
        echo "    <button";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true));
        echo ">
      <span class=\"label\">";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true));
        echo "</span>
      <svg class=\"btn-icon\" aria-hidden=\"true\">
        <title>";
        // line 10
        echo t("Send comment", array());
        echo "</title>
        <use xlink:href=\"#icon-send\"></use>
      </svg>

    </button>";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true));
        echo "

  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/comment/input--button--comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 14,  60 => 10,  55 => 8,  50 => 7,  47 => 6,  42 => 1,  39 => 5,  37 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/comment/input--button--comment.html.twig", "/var/www/html/themes/contrib/socialbase/templates/comment/input--button--comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 3, "spaceless" => 5, "trans" => 10];
        static $filters = ["escape" => 7];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'spaceless', 'trans'],
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
