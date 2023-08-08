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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--page--full.html.twig */
class __TwigTemplate_1b3a1908d10a6c5e91618b4fd704f0c0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return "@apigee-kickstart/node/node.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@apigee-kickstart/node/node.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--page--full.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
  ";
        // line 10
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_header", [], "any", false, false, true, 10))) {
            // line 11
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_header", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "

    ";
            // line 13
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["tasks"] ?? null))) {
                // line 14
                echo "      <div class=\"page__tasks\">
        <div class=\"container\">
          ";
                // line 16
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tasks"] ?? null), 16, $this->source), "html", null, true);
                echo "
        </div>
      </div>
    ";
            }
            // line 20
            echo "  ";
        }
        // line 21
        echo "
  ";
        // line 22
        $this->loadTemplate("@apigee-kickstart/page/sidebar-default.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--page--full.html.twig", 22)->display(twig_array_merge($context, ["container" => true, "content" => $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(        // line 24
($context["content"] ?? null), "field_header"), "sidebar_first" =>         // line 25
($context["sidebar_first"] ?? null), "sidebar_second" =>         // line 26
($context["sidebar_second"] ?? null), "content_no_sidebar_col_classes" => [0 => "col-lg-8"]]));
        // line 29
        echo "
";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--page--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 29,  85 => 26,  84 => 25,  83 => 24,  82 => 22,  79 => 21,  76 => 20,  69 => 16,  65 => 14,  63 => 13,  57 => 11,  55 => 10,  52 => 9,  48 => 8,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--page--full.html.twig", "/var/www/html/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--page--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10, "include" => 22);
        static $filters = array("render" => 10, "escape" => 11, "without" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['render', 'escape', 'without'],
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
