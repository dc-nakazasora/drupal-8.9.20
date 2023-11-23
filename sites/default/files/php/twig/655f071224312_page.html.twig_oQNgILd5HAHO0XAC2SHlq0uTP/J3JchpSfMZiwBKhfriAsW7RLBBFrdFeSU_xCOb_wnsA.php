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

<<<<<<<< Updated upstream:sites/default/files/php/twig/655f097e55f04_file-link.html.twig_EFMRedY1GLHk1foLWequKDK5f/jbDyW08Ppi87-zNnC3tKyFZDeWRsK2qrltuXHTWxhb0.php
/* core/themes/seven/templates/classy/field/file-link.html.twig */
class __TwigTemplate_5a0cb8a9e591d9c925b16c382d60d5816710b935b46bbe290237385cd8243099 extends \Twig\Template
========
/* core/themes/seven/templates/page.html.twig */
class __TwigTemplate_06c190ffcdc67c28351c57571033d39c438e6667545aedc7eb286e4fd4712191 extends \Twig\Template
>>>>>>>> Stashed changes:sites/default/files/php/twig/655f071224312_page.html.twig_oQNgILd5HAHO0XAC2SHlq0uTP/J3JchpSfMZiwBKhfriAsW7RLBBFrdFeSU_xCOb_wnsA.php
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
<<<<<<<< Updated upstream:sites/default/files/php/twig/655f097e55f04_file-link.html.twig_EFMRedY1GLHk1foLWequKDK5f/jbDyW08Ppi87-zNnC3tKyFZDeWRsK2qrltuXHTWxhb0.php
        $tags = [];
        $filters = ["escape" => 16];
        $functions = ["attach_library" => 16];
========
        $tags = ["if" => 54];
        $filters = ["escape" => 44];
        $functions = [];
>>>>>>>> Stashed changes:sites/default/files/php/twig/655f071224312_page.html.twig_oQNgILd5HAHO0XAC2SHlq0uTP/J3JchpSfMZiwBKhfriAsW7RLBBFrdFeSU_xCOb_wnsA.php

        try {
            $this->sandbox->checkSecurity(
                [],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
<<<<<<<< Updated upstream:sites/default/files/php/twig/655f097e55f04_file-link.html.twig_EFMRedY1GLHk1foLWequKDK5f/jbDyW08Ppi87-zNnC3tKyFZDeWRsK2qrltuXHTWxhb0.php
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("seven/classy.file"), "html", null, true);
        echo "
<span";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null)), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null)), "html", null, true);
        echo "</span>
========
        // line 42
        echo "  <header class=\"content-header clearfix\">
    <div class=\"layout-container\">
      ";
        // line 44
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
    </div>
  </header>

  <div class=\"layout-container\">
    ";
        // line 49
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pre_content", [])), "html", null, true);
        echo "
    ";
        // line 50
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "
    <main class=\"page-content clearfix\" role=\"main\">
      <div class=\"visually-hidden\"><a id=\"main-content\" tabindex=\"-1\"></a></div>
      ";
        // line 53
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "
      ";
        // line 54
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 55
            echo "        <div class=\"help\">
          ";
            // line 56
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 59
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
    </main>

  </div>
>>>>>>>> Stashed changes:sites/default/files/php/twig/655f071224312_page.html.twig_oQNgILd5HAHO0XAC2SHlq0uTP/J3JchpSfMZiwBKhfriAsW7RLBBFrdFeSU_xCOb_wnsA.php
";
    }

    public function getTemplateName()
    {
<<<<<<<< Updated upstream:sites/default/files/php/twig/655f097e55f04_file-link.html.twig_EFMRedY1GLHk1foLWequKDK5f/jbDyW08Ppi87-zNnC3tKyFZDeWRsK2qrltuXHTWxhb0.php
        return "core/themes/seven/templates/classy/field/file-link.html.twig";
========
        return "core/themes/seven/templates/page.html.twig";
>>>>>>>> Stashed changes:sites/default/files/php/twig/655f071224312_page.html.twig_oQNgILd5HAHO0XAC2SHlq0uTP/J3JchpSfMZiwBKhfriAsW7RLBBFrdFeSU_xCOb_wnsA.php
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<<< Updated upstream:sites/default/files/php/twig/655f097e55f04_file-link.html.twig_EFMRedY1GLHk1foLWequKDK5f/jbDyW08Ppi87-zNnC3tKyFZDeWRsK2qrltuXHTWxhb0.php
        return array (  59 => 17,  55 => 16,);
========
        return array (  92 => 59,  86 => 56,  83 => 55,  81 => 54,  77 => 53,  71 => 50,  67 => 49,  59 => 44,  55 => 42,);
>>>>>>>> Stashed changes:sites/default/files/php/twig/655f071224312_page.html.twig_oQNgILd5HAHO0XAC2SHlq0uTP/J3JchpSfMZiwBKhfriAsW7RLBBFrdFeSU_xCOb_wnsA.php
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
<<<<<<<< Updated upstream:sites/default/files/php/twig/655f097e55f04_file-link.html.twig_EFMRedY1GLHk1foLWequKDK5f/jbDyW08Ppi87-zNnC3tKyFZDeWRsK2qrltuXHTWxhb0.php
        return new Source("", "core/themes/seven/templates/classy/field/file-link.html.twig", "/Applications/MAMP/htdocs/drupal-8.9.20/core/themes/seven/templates/classy/field/file-link.html.twig");
========
        return new Source("", "core/themes/seven/templates/page.html.twig", "/Applications/MAMP/htdocs/drupal-8.9.20/core/themes/seven/templates/page.html.twig");
>>>>>>>> Stashed changes:sites/default/files/php/twig/655f071224312_page.html.twig_oQNgILd5HAHO0XAC2SHlq0uTP/J3JchpSfMZiwBKhfriAsW7RLBBFrdFeSU_xCOb_wnsA.php
    }
}
