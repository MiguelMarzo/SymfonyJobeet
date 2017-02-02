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
        $__internal_ee06f1028d85d713af4118bf3394576c6850b35949fe49dfebf4134a5eb7b932 = $this->env->getExtension("native_profiler");
        $__internal_ee06f1028d85d713af4118bf3394576c6850b35949fe49dfebf4134a5eb7b932->enter($__internal_ee06f1028d85d713af4118bf3394576c6850b35949fe49dfebf4134a5eb7b932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee06f1028d85d713af4118bf3394576c6850b35949fe49dfebf4134a5eb7b932->leave($__internal_ee06f1028d85d713af4118bf3394576c6850b35949fe49dfebf4134a5eb7b932_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_36049c5755088059125575b302822fb9d35d198a3b55bd1a0be94db1d446d6a1 = $this->env->getExtension("native_profiler");
        $__internal_36049c5755088059125575b302822fb9d35d198a3b55bd1a0be94db1d446d6a1->enter($__internal_36049c5755088059125575b302822fb9d35d198a3b55bd1a0be94db1d446d6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<h1>Job creation</h1>
    <div id=\"job_form\">
        ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    <button type=\"submit\" class=\"btn btn-success\">Añadir</button>
    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("job_index");
        echo "\">
                Back to the list
            </a>
        </li>
    </ul>
";
        
        $__internal_36049c5755088059125575b302822fb9d35d198a3b55bd1a0be94db1d446d6a1->leave($__internal_36049c5755088059125575b302822fb9d35d198a3b55bd1a0be94db1d446d6a1_prof);

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
        return array (  61 => 13,  53 => 8,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block content -%}*/
/*     <h1>Job creation</h1>*/
/*     <div id="job_form">*/
/*         {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/*     <button type="submit" class="btn btn-success">Añadir</button>*/
/*     <ul class="record_actions">*/
/*         <li>*/
/*             <a href="{{ path('job_index') }}">*/
/*                 Back to the list*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %} */
/* */
