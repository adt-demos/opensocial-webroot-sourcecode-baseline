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

/* profiles/contrib/social/modules/social_features/social_activity/templates/message-user-profile-preview.html.twig */
class __TwigTemplate_99e63fd6c4ab41c0975f56dc39450e54647900bbe7a63eb58addc1a69ee46e2c extends \Twig\Template
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
        echo "<div class=\"card__block card__block--list teaser--small\">
  <span class=\"list-item__avatar list-item__avatar--medium\">
      <img src=\"";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_image"] ?? null)), "html", null, true));
        echo "\"  alt=";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("profile image")));
        echo "/>
  </span>
  <span class=\"list-item__text\">
    <span class=\"teaser--small__title\">
      ";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_name"] ?? null)), "html", null, true));
        echo "
    </span>

    ";
        // line 10
        if ((($context["profile_function"] ?? null) || ($context["profile_organization"] ?? null))) {
            // line 11
            echo "      <div class=\"list-item__text--small\">
        ";
            // line 12
            if (($context["profile_organization"] ?? null)) {
                // line 13
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("@function @ @organization", ["@function" => ($context["profile_function"] ?? null), "@organization" => ($context["profile_organization"] ?? null)])));
                echo "
        ";
            } else {
                // line 15
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_function"] ?? null)), "html", null, true));
                echo "
        ";
            }
            // line 17
            echo "      </div>
    ";
        }
        // line 19
        echo "  </span>
</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/modules/social_features/social_activity/templates/message-user-profile-preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  70 => 17,  64 => 15,  58 => 13,  56 => 12,  53 => 11,  51 => 10,  45 => 7,  36 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/social/modules/social_features/social_activity/templates/message-user-profile-preview.html.twig", "/var/www/html/profiles/contrib/social/modules/social_features/social_activity/templates/message-user-profile-preview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 10];
        static $filters = ["escape" => 3, "t" => 3];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
