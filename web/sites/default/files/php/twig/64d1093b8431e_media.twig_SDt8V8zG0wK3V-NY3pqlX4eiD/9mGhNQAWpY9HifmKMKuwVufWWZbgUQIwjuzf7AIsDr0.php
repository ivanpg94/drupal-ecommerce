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

/* @radix/content/media.twig */
class __TwigTemplate_dede3305e078bfc5d3f9ca7dacc01b37 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        $context["media_classes"] = [0 => "media", 1 => ("media--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 20
($context["media"] ?? null), "bundle", [], "method", false, false, true, 20), 20, $this->source))), 2 => (( !twig_get_attribute($this->env, $this->source,         // line 21
($context["media"] ?? null), "isPublished", [], "method", false, false, true, 21)) ? ("media--unpublished") : ("")), 3 => ((        // line 22
($context["view_mode"] ?? null)) ? (("media--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 22, $this->source)))) : (""))];
        // line 25
        echo "
<div";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["media_classes"] ?? null)], "method", false, false, true, 26), 26, $this->source), "html", null, true);
        echo ">
  ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_suffix"] ?? null), "contextual_links", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "
  
  ";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "</div>
";
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    ";
        if (($context["content"] ?? null)) {
            // line 31
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 31, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 33
        echo "  ";
    }

    public function getTemplateName()
    {
        return "@radix/content/media.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 33,  71 => 31,  68 => 30,  64 => 29,  59 => 34,  57 => 29,  52 => 27,  48 => 26,  45 => 25,  43 => 22,  42 => 21,  41 => 20,  40 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "@radix/content/media.twig", "themes/contrib/radix/src/components/content/media.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 18, "block" => 29, "if" => 30);
        static $filters = array("clean_class" => 20, "escape" => 26);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape'],
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
