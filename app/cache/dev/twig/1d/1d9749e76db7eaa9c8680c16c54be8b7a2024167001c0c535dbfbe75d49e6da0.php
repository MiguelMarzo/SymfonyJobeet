<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f51deba91e95fce7b2d986ee691438ccd48c3eee3b629cdc9608f69ab659b639 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5732952894c05ca4767bf2367035d02b10506d59fdc04448188cf4277932f4f = $this->env->getExtension("native_profiler");
        $__internal_b5732952894c05ca4767bf2367035d02b10506d59fdc04448188cf4277932f4f->enter($__internal_b5732952894c05ca4767bf2367035d02b10506d59fdc04448188cf4277932f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5732952894c05ca4767bf2367035d02b10506d59fdc04448188cf4277932f4f->leave($__internal_b5732952894c05ca4767bf2367035d02b10506d59fdc04448188cf4277932f4f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_77e8df01ea01fc6f5b18f79865acf165605d7f464e00b9cd53665175fdf5868f = $this->env->getExtension("native_profiler");
        $__internal_77e8df01ea01fc6f5b18f79865acf165605d7f464e00b9cd53665175fdf5868f->enter($__internal_77e8df01ea01fc6f5b18f79865acf165605d7f464e00b9cd53665175fdf5868f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_77e8df01ea01fc6f5b18f79865acf165605d7f464e00b9cd53665175fdf5868f->leave($__internal_77e8df01ea01fc6f5b18f79865acf165605d7f464e00b9cd53665175fdf5868f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5e4f6368e3574ebd8401fad98820e2c4c1989802b6b35ea6be06294cf8130d3e = $this->env->getExtension("native_profiler");
        $__internal_5e4f6368e3574ebd8401fad98820e2c4c1989802b6b35ea6be06294cf8130d3e->enter($__internal_5e4f6368e3574ebd8401fad98820e2c4c1989802b6b35ea6be06294cf8130d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5e4f6368e3574ebd8401fad98820e2c4c1989802b6b35ea6be06294cf8130d3e->leave($__internal_5e4f6368e3574ebd8401fad98820e2c4c1989802b6b35ea6be06294cf8130d3e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_69e21ce6c98d44275069bc16561b2b2eeef34fb3fb0b19afa3c4c4278087b70a = $this->env->getExtension("native_profiler");
        $__internal_69e21ce6c98d44275069bc16561b2b2eeef34fb3fb0b19afa3c4c4278087b70a->enter($__internal_69e21ce6c98d44275069bc16561b2b2eeef34fb3fb0b19afa3c4c4278087b70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_69e21ce6c98d44275069bc16561b2b2eeef34fb3fb0b19afa3c4c4278087b70a->leave($__internal_69e21ce6c98d44275069bc16561b2b2eeef34fb3fb0b19afa3c4c4278087b70a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
