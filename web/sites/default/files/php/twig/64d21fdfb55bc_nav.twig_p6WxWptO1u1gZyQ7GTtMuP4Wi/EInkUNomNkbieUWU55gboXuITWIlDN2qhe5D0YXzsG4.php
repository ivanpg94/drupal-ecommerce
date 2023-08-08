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

/* @radix/nav/nav.twig */
class __TwigTemplate_e2a65cd4de56266628134a575fe5bb91 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'items' => [$this, 'block_items'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 15
        echo "
";
        // line 16
        if ((($context["alignment"] ?? null) == "right")) {
            // line 17
            echo "  ";
            $context["alignment"] = "justify-content-end";
        } elseif ((        // line 18
($context["alignment"] ?? null) == "center")) {
            // line 19
            echo "  ";
            $context["alignment"] = "justify-content-center";
        } elseif ((        // line 20
($context["alignment"] ?? null) == "vertical")) {
            // line 21
            echo "  ";
            $context["alignment"] = "flex-column";
        } else {
            // line 23
            echo "  ";
            $context["alignment"] = "";
        }
        // line 25
        echo "
";
        // line 26
        $context["style"] = ((($context["style"] ?? null)) ? (("nav-" . $this->sandbox->ensureToStringAllowed(($context["style"] ?? null), 26, $this->source))) : (""));
        // line 27
        $context["fill"] = ((($context["fill"] ?? null)) ? (("nav-" . $this->sandbox->ensureToStringAllowed(($context["fill"] ?? null), 27, $this->source))) : (""));
        // line 28
        echo "
";
        // line 29
        $context["nav_classes"] = twig_array_merge([0 => "nav", 1 =>         // line 31
($context["style"] ?? null), 2 =>         // line 32
($context["alignment"] ?? null), 3 =>         // line 33
($context["fill"] ?? null)], ((        // line 34
($context["utility_classes"] ?? null)) ? (($context["utility_classes"] ?? null)) : ([])));
        // line 36
        echo "
";
        // line 37
        if (($context["items"] ?? null)) {
            // line 38
            echo "  <ul";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["nav_classes"] ?? null)], "method", false, false, true, 38), 38, $this->source), "html", null, true);
            echo ">
    ";
            // line 39
            $this->displayBlock('items', $context, $blocks);
            // line 72
            echo "  </ul>
";
        }
        // line 74
        echo "
";
    }

    // line 39
    public function block_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 41
            echo "        ";
            $context["nav_item_classes"] = twig_array_merge([0 => "nav-item", 1 => ((twig_get_attribute($this->env, $this->source,             // line 43
$context["item"], "in_active_trail", [], "any", false, false, true, 43)) ? ("active") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,             // line 44
$context["item"], "is_expanded", [], "any", false, false, true, 44) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 44))) ? ("dropdown") : (""))], ((            // line 45
($context["nav_item_utility_classes"] ?? null)) ? (($context["nav_item_utility_classes"] ?? null)) : ([])));
            // line 47
            echo "        ";
            $context["nav_link_classes"] = twig_array_merge([0 => "nav-link"], ((            // line 49
($context["nav_link_utility_classes"] ?? null)) ? (($context["nav_link_utility_classes"] ?? null)) : ([])));
            // line 51
            echo "
        ";
            // line 52
            if (twig_test_iterable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 52), "options", [], "any", false, false, true, 52), "attributes", [], "any", false, false, true, 52), "class", [], "any", false, false, true, 52))) {
                // line 53
                echo "          ";
                $context["nav_link_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["nav_link_classes"] ?? null), 53, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 53), "options", [], "any", false, false, true, 53), "attributes", [], "any", false, false, true, 53), "class", [], "any", false, false, true, 53), 53, $this->source));
                // line 54
                echo "        ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 54), "options", [], "any", false, false, true, 54), "attributes", [], "any", false, false, true, 54), "class", [], "any", false, false, true, 54)) {
                // line 55
                echo "          ";
                $context["nav_link_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["nav_link_classes"] ?? null), 55, $this->source), [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 55), "options", [], "any", false, false, true, 55), "attributes", [], "any", false, false, true, 55), "class", [], "any", false, false, true, 55)]);
                // line 56
                echo "        ";
            }
            // line 57
            echo "        
        <li";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 58), "addClass", [0 => ($context["nav_item_classes"] ?? null)], "method", false, false, true, 58), 58, $this->source), "html", null, true);
            echo ">
          ";
            // line 59
            if (((twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 59) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 59)) && ((array_key_exists("dropdown", $context)) ? (_twig_default_filter(($context["dropdown"] ?? null), true)) : (true)))) {
                // line 60
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 60), 60, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 60), 60, $this->source), ["class" => twig_array_merge($this->sandbox->ensureToStringAllowed(($context["nav_link_classes"] ?? null), 60, $this->source), [0 => "dropdown-toggle"]), "data-bs-toggle" => "dropdown"]), "html", null, true);
                echo "
            ";
                // line 61
                if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 61)) {
                    // line 62
                    echo "              ";
                    $this->loadTemplate("@radix/dropdown/dropdown-menu.twig", "@radix/nav/nav.twig", 62)->display(twig_array_merge($context, ["items" => twig_get_attribute($this->env, $this->source,                     // line 63
$context["item"], "below", [], "any", false, false, true, 63)]));
                    // line 65
                    echo "            ";
                }
                // line 66
                echo "          ";
            } else {
                // line 67
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 67), 67, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 67), 67, $this->source), ["class" => ($context["nav_link_classes"] ?? null)]), "html", null, true);
                echo "
          ";
            }
            // line 69
            echo "        </li>
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@radix/nav/nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 71,  183 => 69,  177 => 67,  174 => 66,  171 => 65,  169 => 63,  167 => 62,  165 => 61,  160 => 60,  158 => 59,  154 => 58,  151 => 57,  148 => 56,  145 => 55,  142 => 54,  139 => 53,  137 => 52,  134 => 51,  132 => 49,  130 => 47,  128 => 45,  127 => 44,  126 => 43,  124 => 41,  106 => 40,  102 => 39,  97 => 74,  93 => 72,  91 => 39,  86 => 38,  84 => 37,  81 => 36,  79 => 34,  78 => 33,  77 => 32,  76 => 31,  75 => 29,  72 => 28,  70 => 27,  68 => 26,  65 => 25,  61 => 23,  57 => 21,  55 => 20,  52 => 19,  50 => 18,  47 => 17,  45 => 16,  42 => 15,  40 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "@radix/nav/nav.twig", "themes/contrib/radix/src/components/nav/nav.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 14, "if" => 16, "set" => 17, "block" => 39, "for" => 40, "include" => 62);
        static $filters = array("merge" => 34, "escape" => 38, "default" => 59);
        static $functions = array("link" => 60);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'if', 'set', 'block', 'for', 'include'],
                ['merge', 'escape', 'default'],
                ['link']
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
