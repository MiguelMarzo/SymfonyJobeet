<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_70e74088aaf71b89b24d32327ccb6fcea7ea8d5d90c2a86cf12cdd2a1af6bdd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_161634a28d207a0520ea217215b82047211035609a05eab1428b0eb79b117708 = $this->env->getExtension("native_profiler");
        $__internal_161634a28d207a0520ea217215b82047211035609a05eab1428b0eb79b117708->enter($__internal_161634a28d207a0520ea217215b82047211035609a05eab1428b0eb79b117708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_161634a28d207a0520ea217215b82047211035609a05eab1428b0eb79b117708->leave($__internal_161634a28d207a0520ea217215b82047211035609a05eab1428b0eb79b117708_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e865708354c301b1f3ebd7d5ce19765ff8b6b93031027312b01f52705daf5167 = $this->env->getExtension("native_profiler");
        $__internal_e865708354c301b1f3ebd7d5ce19765ff8b6b93031027312b01f52705daf5167->enter($__internal_e865708354c301b1f3ebd7d5ce19765ff8b6b93031027312b01f52705daf5167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e865708354c301b1f3ebd7d5ce19765ff8b6b93031027312b01f52705daf5167->leave($__internal_e865708354c301b1f3ebd7d5ce19765ff8b6b93031027312b01f52705daf5167_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0d6b68ac8d7c58e9d74a2ae5cd7219758803f6717a4593755d967b5ec7f2c7d = $this->env->getExtension("native_profiler");
        $__internal_f0d6b68ac8d7c58e9d74a2ae5cd7219758803f6717a4593755d967b5ec7f2c7d->enter($__internal_f0d6b68ac8d7c58e9d74a2ae5cd7219758803f6717a4593755d967b5ec7f2c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f0d6b68ac8d7c58e9d74a2ae5cd7219758803f6717a4593755d967b5ec7f2c7d->leave($__internal_f0d6b68ac8d7c58e9d74a2ae5cd7219758803f6717a4593755d967b5ec7f2c7d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b59d7e17c49680f6453a0915edc27dbb886466496b35b4b205806d079f9a4bc3 = $this->env->getExtension("native_profiler");
        $__internal_b59d7e17c49680f6453a0915edc27dbb886466496b35b4b205806d079f9a4bc3->enter($__internal_b59d7e17c49680f6453a0915edc27dbb886466496b35b4b205806d079f9a4bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b59d7e17c49680f6453a0915edc27dbb886466496b35b4b205806d079f9a4bc3->leave($__internal_b59d7e17c49680f6453a0915edc27dbb886466496b35b4b205806d079f9a4bc3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
