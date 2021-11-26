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

/* themes/contrib/socialbase/templates/comment/details--comment.html.twig */
class __TwigTemplate_5f4ae277f3b078b6e32613d1718903ec2fafee924d68219e36bb17b2017dff44 extends \Twig\Template
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
        // line 19
        echo "<details";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true));
        echo ">";
        // line 20
        if (($context["title"] ?? null)) {
            // line 21
            echo "<summary";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["summary_attributes"] ?? null), "addClass", [0 => "btn btn-link btn-flat--gray"], "method")), "html", null, true));
            echo ">
      ";
            // line 22
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true));
            echo "
      <svg aria-hidden=\"true\" class=\"details__open-icon\" height=\"24\" viewBox=\"0 0 24 24\" width=\"24\" xmlns=\"http://www.w3.org/2000/svg\">
        <title>";
            // line 24
            echo t("Collapse in", array());
            echo "</title>
        <path d=\"M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z\"/><path d=\"M0 0h24v24H0z\" fill=\"none\"/></svg>
      <svg aria-hidden=\"true\" class=\"details__close-icon\" height=\"24\" viewBox=\"0 0 24 24\" width=\"24\" xmlns=\"http://www.w3.org/2000/svg\">
        <title>";
            // line 27
            echo t("Collapse out", array());
            echo "</title>
        <path d=\"M12 8l-6 6 1.41 1.41L12 10.83l4.59 4.58L18 14z\"/><path d=\"M0 0h24v24H0z\" fill=\"none\"/></svg>
    </summary>";
        }
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null)), "html", null, true));
        echo "
  ";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null)), "html", null, true));
        echo "
  ";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true));
        echo "
  ";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null)), "html", null, true));
        echo "
</details>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/comment/details--comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 34,  68 => 33,  64 => 32,  60 => 31,  54 => 27,  48 => 24,  43 => 22,  38 => 21,  36 => 20,  32 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/comment/details--comment.html.twig", "/var/www/html/themes/contrib/socialbase/templates/comment/details--comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 20, "trans" => 24];
        static $filters = ["escape" => 19];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
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
