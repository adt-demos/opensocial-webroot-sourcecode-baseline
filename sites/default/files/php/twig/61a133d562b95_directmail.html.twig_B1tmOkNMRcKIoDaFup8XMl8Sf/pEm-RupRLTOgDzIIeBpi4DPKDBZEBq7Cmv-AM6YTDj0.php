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

/* profiles/contrib/social/modules/custom/activity_send/modules/activity_send_email/templates/directmail.html.twig */
class __TwigTemplate_fbde9582b187ec4770d69542b39f75d97253fa3200d789f818a63c051d9f4f8b extends \Twig\Template
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
        // line 1
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(strip_tags($this->sandbox->ensureToStringAllowed(($context["notification"] ?? null)), "<p><a><strong><small><em><div><table><tbody><tr><td><span><img>")));
        echo "

<p>&nbsp;</p>

<p><small>";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(strip_tags($this->sandbox->ensureToStringAllowed(($context["notification_settings"] ?? null)), "<a><strong>")));
        echo "</small></p>
";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/modules/custom/activity_send/modules/activity_send_email/templates/directmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/social/modules/custom/activity_send/modules/activity_send_email/templates/directmail.html.twig", "/var/www/html/profiles/contrib/social/modules/custom/activity_send/modules/activity_send_email/templates/directmail.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["raw" => 1, "striptags" => 1];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['raw', 'striptags'],
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
