<?php

/* job/new.html.twig */
class __TwigTemplate_45eae59e521c45d885531f7a28469200355fcd23f503c02408a4b2032a3375c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "job/new.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d742240dd4e0f09bebf48e16e8af8baebe2125ae7e888377bb96e499ab3e1108 = $this->env->getExtension("native_profiler");
        $__internal_d742240dd4e0f09bebf48e16e8af8baebe2125ae7e888377bb96e499ab3e1108->enter($__internal_d742240dd4e0f09bebf48e16e8af8baebe2125ae7e888377bb96e499ab3e1108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d742240dd4e0f09bebf48e16e8af8baebe2125ae7e888377bb96e499ab3e1108->leave($__internal_d742240dd4e0f09bebf48e16e8af8baebe2125ae7e888377bb96e499ab3e1108_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_42c6bd65434dd30b0a4a1c439a18d5e98f7d227f3c37bca984815008aa539b4f = $this->env->getExtension("native_profiler");
        $__internal_42c6bd65434dd30b0a4a1c439a18d5e98f7d227f3c37bca984815008aa539b4f->enter($__internal_42c6bd65434dd30b0a4a1c439a18d5e98f7d227f3c37bca984815008aa539b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<h1>Job creation</h1>
    <div id=\"job_form\">
        ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    </div>
    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("job_index");
        echo "\">
                Back to the list
            </a>
        </li>
    </ul>
";
        
        $__internal_42c6bd65434dd30b0a4a1c439a18d5e98f7d227f3c37bca984815008aa539b4f->leave($__internal_42c6bd65434dd30b0a4a1c439a18d5e98f7d227f3c37bca984815008aa539b4f_prof);

    }

    public function getTemplateName()
    {
        return "job/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 9,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block content -%}*/
/*     <h1>Job creation</h1>*/
/*     <div id="job_form">*/
/*         {{ form(form) }}*/
/*     </div>*/
/*     <ul class="record_actions">*/
/*         <li>*/
/*             <a href="{{ path('job_index') }}">*/
/*                 Back to the list*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %} */
/* */
