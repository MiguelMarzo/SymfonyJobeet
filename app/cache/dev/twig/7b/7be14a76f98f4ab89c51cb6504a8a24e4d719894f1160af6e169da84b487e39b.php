<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5150039f4e8a232d1a6095fe42dbaf845d32a73f1ef64d7d2f607b22a3b9865c extends Twig_Template
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
        $__internal_9ece5e05fc99c1368abba4a9f9d7d99201d363380d1ccb53e9dc11914929afbe = $this->env->getExtension("native_profiler");
        $__internal_9ece5e05fc99c1368abba4a9f9d7d99201d363380d1ccb53e9dc11914929afbe->enter($__internal_9ece5e05fc99c1368abba4a9f9d7d99201d363380d1ccb53e9dc11914929afbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ece5e05fc99c1368abba4a9f9d7d99201d363380d1ccb53e9dc11914929afbe->leave($__internal_9ece5e05fc99c1368abba4a9f9d7d99201d363380d1ccb53e9dc11914929afbe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b87f766b8be2b7fbf79d149a040be4c1d3e78d1291bb22ff650c449c8a16d2ca = $this->env->getExtension("native_profiler");
        $__internal_b87f766b8be2b7fbf79d149a040be4c1d3e78d1291bb22ff650c449c8a16d2ca->enter($__internal_b87f766b8be2b7fbf79d149a040be4c1d3e78d1291bb22ff650c449c8a16d2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b87f766b8be2b7fbf79d149a040be4c1d3e78d1291bb22ff650c449c8a16d2ca->leave($__internal_b87f766b8be2b7fbf79d149a040be4c1d3e78d1291bb22ff650c449c8a16d2ca_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_64ff6862deb0eeb01170d84708af86f92146880934c3918c71ad8b9999bdfb1f = $this->env->getExtension("native_profiler");
        $__internal_64ff6862deb0eeb01170d84708af86f92146880934c3918c71ad8b9999bdfb1f->enter($__internal_64ff6862deb0eeb01170d84708af86f92146880934c3918c71ad8b9999bdfb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_64ff6862deb0eeb01170d84708af86f92146880934c3918c71ad8b9999bdfb1f->leave($__internal_64ff6862deb0eeb01170d84708af86f92146880934c3918c71ad8b9999bdfb1f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_32897a6d4ab6166cacfd3248ebc06c5d912009e3abbc298017505e945c7e5678 = $this->env->getExtension("native_profiler");
        $__internal_32897a6d4ab6166cacfd3248ebc06c5d912009e3abbc298017505e945c7e5678->enter($__internal_32897a6d4ab6166cacfd3248ebc06c5d912009e3abbc298017505e945c7e5678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_32897a6d4ab6166cacfd3248ebc06c5d912009e3abbc298017505e945c7e5678->leave($__internal_32897a6d4ab6166cacfd3248ebc06c5d912009e3abbc298017505e945c7e5678_prof);

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
