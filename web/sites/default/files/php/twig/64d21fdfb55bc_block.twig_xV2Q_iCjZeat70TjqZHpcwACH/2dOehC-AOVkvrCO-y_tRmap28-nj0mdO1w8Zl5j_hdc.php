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

/* @radix/block/block.twig */
class __TwigTemplate_a702aa84e098dcd9d4479e121cb3251c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'label' => [$this, 'block_label'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        $context["block_classes"] = twig_array_merge([0 => "block", 1 => ((        // line 13
($context["bundle"] ?? null)) ? (("block--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["bundle"] ?? null), 13, $this->source)))) : ("")), 2 => ((        // line 14
($context["id"] ?? null)) ? (("block--" . \Drupal\Component\Utility\Html::getClass(twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 14, $this->source), ["_" => "-"])))) : (""))], ((        // line 15
($context["block_utility_classes"] ?? null)) ? (($context["block_utility_classes"] ?? null)) : ([])));
        // line 16
        echo "
";
        // line 17
        if (($context["html_tag"] ?? null)) {
            // line 18
            echo "  <";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_tag"] ?? null), 18, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 18, $this->source), "id"), "addClass", [0 => ($context["block_classes"] ?? null)], "method", false, false, true, 18), 18, $this->source), "html", null, true);
            echo ">
";
        }
        // line 20
        echo "
  ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 21, $this->source), "html", null, true);
        echo "
  ";
        // line 22
        if (($context["label"] ?? null)) {
            // line 23
            echo "    ";
            $this->displayBlock('label', $context, $blocks);
            // line 26
            echo "  ";
        }
        // line 27
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 27, $this->source), "html", null, true);
        echo "

  ";
        // line 29
        if (($context["content"] ?? null)) {
            // line 30
            echo "    ";
            $this->displayBlock('content', $context, $blocks);
            // line 33
            echo "  ";
        }
        // line 34
        echo "
";
        // line 35
        if (($context["html_tag"] ?? null)) {
            // line 36
            echo "  </";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_tag"] ?? null), 36, $this->source), "html", null, true);
            echo ">
";
        }
    }

    // line 23
    public function block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "      <h2";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 24, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 24, $this->source), "html", null, true);
        echo "</h2>
    ";
    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 31, $this->source), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@radix/block/block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 31,  113 => 30,  104 => 24,  100 => 23,  92 => 36,  90 => 35,  87 => 34,  84 => 33,  81 => 30,  79 => 29,  73 => 27,  70 => 26,  67 => 23,  65 => 22,  61 => 21,  58 => 20,  51 => 18,  49 => 17,  46 => 16,  44 => 15,  43 => 14,  42 => 13,  41 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@radix/block/block.twig", "themes/contrib/radix/src/components/block/block.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 11, "if" => 17, "block" => 23);
        static $filters = array("merge" => 15, "clean_class" => 13, "replace" => 14, "escape" => 18, "without" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['merge', 'clean_class', 'replace', 'escape', 'without'],
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
