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

<<<<<<<< Updated upstream:sites/default/files/php/twig/655f097e55f04_menu-local-action.html.tw_DFqA8VgfGR8YHrH_AJZncjBP4/cu5KsXBsJsbDYU7pwQoub1vfKxv6KS4ziBS-7iFIOb4.php
/* core/themes/classy/templates/navigation/menu-local-action.html.twig */
class __TwigTemplate_f9149e80e2c702f106eca11e0c30713529d0d1c5aa60cefa117d796be98274b7 extends \Twig\Template
========
/* core/themes/stable/templates/admin/system-config-form.html.twig */
class __TwigTemplate_17320b07e2a60bec5445e2c13766ed66ff1ac80be1648a45dba32f528ea50b1b extends \Twig\Template
>>>>>>>> Stashed changes:sites/default/files/php/twig/655f071224312_system-config-form.html.t_L2CsSJgXlrmF3yET12eCXf-QB/Q2jS_XYokaaC2-v4hLx24ueShcBTiH17AfiLpRymnKM.php
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 15];
        $functions = [];

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
<<<<<<<< Updated upstream:sites/default/files/php/twig/655f097e55f04_menu-local-action.html.tw_DFqA8VgfGR8YHrH_AJZncjBP4/cu5KsXBsJsbDYU7pwQoub1vfKxv6KS4ziBS-7iFIOb4.php
        // line 13
        echo "<li";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null)), "html", null, true);
        echo "</li>
========
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["form"] ?? null)), "html", null, true);
        echo "
>>>>>>>> Stashed changes:sites/default/files/php/twig/655f071224312_system-config-form.html.t_L2CsSJgXlrmF3yET12eCXf-QB/Q2jS_XYokaaC2-v4hLx24ueShcBTiH17AfiLpRymnKM.php
";
    }

    public function getTemplateName()
    {
<<<<<<<< Updated upstream:sites/default/files/php/twig/655f097e55f04_menu-local-action.html.tw_DFqA8VgfGR8YHrH_AJZncjBP4/cu5KsXBsJsbDYU7pwQoub1vfKxv6KS4ziBS-7iFIOb4.php
        return "core/themes/classy/templates/navigation/menu-local-action.html.twig";
========
        return "core/themes/stable/templates/admin/system-config-form.html.twig";
>>>>>>>> Stashed changes:sites/default/files/php/twig/655f071224312_system-config-form.html.t_L2CsSJgXlrmF3yET12eCXf-QB/Q2jS_XYokaaC2-v4hLx24ueShcBTiH17AfiLpRymnKM.php
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<<< Updated upstream:sites/default/files/php/twig/655f097e55f04_menu-local-action.html.tw_DFqA8VgfGR8YHrH_AJZncjBP4/cu5KsXBsJsbDYU7pwQoub1vfKxv6KS4ziBS-7iFIOb4.php
        return array (  55 => 13,);
========
        return array (  55 => 15,);
>>>>>>>> Stashed changes:sites/default/files/php/twig/655f071224312_system-config-form.html.t_L2CsSJgXlrmF3yET12eCXf-QB/Q2jS_XYokaaC2-v4hLx24ueShcBTiH17AfiLpRymnKM.php
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
<<<<<<<< Updated upstream:sites/default/files/php/twig/655f097e55f04_menu-local-action.html.tw_DFqA8VgfGR8YHrH_AJZncjBP4/cu5KsXBsJsbDYU7pwQoub1vfKxv6KS4ziBS-7iFIOb4.php
        return new Source("", "core/themes/classy/templates/navigation/menu-local-action.html.twig", "/Applications/MAMP/htdocs/drupal-8.9.20/core/themes/classy/templates/navigation/menu-local-action.html.twig");
========
        return new Source("", "core/themes/stable/templates/admin/system-config-form.html.twig", "/Applications/MAMP/htdocs/drupal-8.9.20/core/themes/stable/templates/admin/system-config-form.html.twig");
>>>>>>>> Stashed changes:sites/default/files/php/twig/655f071224312_system-config-form.html.t_L2CsSJgXlrmF3yET12eCXf-QB/Q2jS_XYokaaC2-v4hLx24ueShcBTiH17AfiLpRymnKM.php
    }
}
