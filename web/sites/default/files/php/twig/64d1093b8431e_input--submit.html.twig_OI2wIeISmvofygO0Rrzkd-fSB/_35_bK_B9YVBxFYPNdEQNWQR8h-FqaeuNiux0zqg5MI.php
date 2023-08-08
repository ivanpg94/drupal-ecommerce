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

/* themes/contrib/radix/templates/form/input--submit.html.twig */
class __TwigTemplate_bf75aee8328d2a95f87168ab7ff85077 extends \Twig\Template
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
        // line 1
        echo "
";
        // line 14
        $this->loadTemplate("@radix/form/input.twig", "themes/contrib/radix/templates/form/input--submit.html.twig", 14)->display(twig_array_merge($context, ["attributes" => twig_get_attribute($this->env, $this->source,         // line 15
($context["attributes"] ?? null), "removeClass", [0 => "button"], "method", false, false, true, 15), "remove_form_control" => true, "utility_classes" => [0 => "btn", 1 => "btn-primary"]]));
    }

    public function getTemplateName()
    {
        return "themes/contrib/radix/templates/form/input--submit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 15,  42 => 14,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/radix/templates/form/input--submit.html.twig", "/var/www/html/web/themes/contrib/radix/templates/form/input--submit.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 14);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                [],
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
