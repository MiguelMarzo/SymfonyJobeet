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
        $__internal_83252d34c961ec8ebd52b6bb4cac8a9c6f684b39fd34b6370be5942355fe140d = $this->env->getExtension("native_profiler");
        $__internal_83252d34c961ec8ebd52b6bb4cac8a9c6f684b39fd34b6370be5942355fe140d->enter($__internal_83252d34c961ec8ebd52b6bb4cac8a9c6f684b39fd34b6370be5942355fe140d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83252d34c961ec8ebd52b6bb4cac8a9c6f684b39fd34b6370be5942355fe140d->leave($__internal_83252d34c961ec8ebd52b6bb4cac8a9c6f684b39fd34b6370be5942355fe140d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7e3ac4630e7a7f630f6511c002c49156a49def6bc17fd72b00890ee2706f41f0 = $this->env->getExtension("native_profiler");
        $__internal_7e3ac4630e7a7f630f6511c002c49156a49def6bc17fd72b00890ee2706f41f0->enter($__internal_7e3ac4630e7a7f630f6511c002c49156a49def6bc17fd72b00890ee2706f41f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7e3ac4630e7a7f630f6511c002c49156a49def6bc17fd72b00890ee2706f41f0->leave($__internal_7e3ac4630e7a7f630f6511c002c49156a49def6bc17fd72b00890ee2706f41f0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8eb1e870ec846a5003fa8d4dfcf62891e43a5114bdb6d285ae1b79331e1c41d3 = $this->env->getExtension("native_profiler");
        $__internal_8eb1e870ec846a5003fa8d4dfcf62891e43a5114bdb6d285ae1b79331e1c41d3->enter($__internal_8eb1e870ec846a5003fa8d4dfcf62891e43a5114bdb6d285ae1b79331e1c41d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8eb1e870ec846a5003fa8d4dfcf62891e43a5114bdb6d285ae1b79331e1c41d3->leave($__internal_8eb1e870ec846a5003fa8d4dfcf62891e43a5114bdb6d285ae1b79331e1c41d3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_46096dd4c94f73d27a69465fb412978028633f9054ea65ecfb867d0c8790ca6c = $this->env->getExtension("native_profiler");
        $__internal_46096dd4c94f73d27a69465fb412978028633f9054ea65ecfb867d0c8790ca6c->enter($__internal_46096dd4c94f73d27a69465fb412978028633f9054ea65ecfb867d0c8790ca6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_46096dd4c94f73d27a69465fb412978028633f9054ea65ecfb867d0c8790ca6c->leave($__internal_46096dd4c94f73d27a69465fb412978028633f9054ea65ecfb867d0c8790ca6c_prof);

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
