<?php

/* ::base.html.twig */
class __TwigTemplate_339025eb8fd5254580b3e03e11e07594e11a56196e38e6fbc6ca8fc6eb257eb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MopaBootstrapBundle::base.html.twig", "::base.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MopaBootstrapBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5e6355e02fe967f4398d71018855008dbbd69765774efacf269fe3e5ed29bb4 = $this->env->getExtension("native_profiler");
        $__internal_b5e6355e02fe967f4398d71018855008dbbd69765774efacf269fe3e5ed29bb4->enter($__internal_b5e6355e02fe967f4398d71018855008dbbd69765774efacf269fe3e5ed29bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5e6355e02fe967f4398d71018855008dbbd69765774efacf269fe3e5ed29bb4->leave($__internal_b5e6355e02fe967f4398d71018855008dbbd69765774efacf269fe3e5ed29bb4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_06a8fd57083cd1816f24c87eb092a89d45eb5f2cfd7d3300b9cc5df6cda6cfc6 = $this->env->getExtension("native_profiler");
        $__internal_06a8fd57083cd1816f24c87eb092a89d45eb5f2cfd7d3300b9cc5df6cda6cfc6->enter($__internal_06a8fd57083cd1816f24c87eb092a89d45eb5f2cfd7d3300b9cc5df6cda6cfc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<link rel=\"shortcut icon\" href=\"/favicon.ico\" />
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/job.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/jobs.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/main.css"), "html", null, true);
        echo "\" />
    <div id=\"container\">
        <div id=\"header\">
            <div class=\"content\">
                <h1>
                    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("job_index");
        echo "\">
                        <img src=\"/legacy/images/logo.jpg\" alt=\"Plataforma web para la
                             búsqueda de empleo\" />
                    </a>
                </h1>
                <div id=\"sub_header\">
                    <div class=\"post\">
                        <h2>Busca desarrolladores</h2>
                        <div>
                            <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("job_new");
        echo "\">Añade un empleo</a>
                        </div>
                    </div>
                    <div class=\"search\">
                        <h2>Busca un empleo</h2>
                        <form action=\"\" method=\"get\">
                            <input type=\"text\" name=\"keywords\"
                                   id=\"search_keywords\" />
                            <input type=\"submit\" value=\"search\" />
                            <div class=\"help\">
                                Entre palabra clave para la búsqueda (ciudad, país,
                                cargo,...)
                            </div>
                        </form>
                    </div> 
                </div>
            </div>
            ";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "        </div>
        <div id=\"footer\">
            <div class=\"content\">
                <span class=\"symfony\">
                    <img src=\"/legacy/images/jobeet-mini.png\" />
                    desarrollado con <a href=\"/\">
                        <img src=\"/legacy/images/symfony.gif\" alt=\"symfony framework\" />
                    </a>
                </span>
                <ul>
                    <li><a href=\"\">Sobre Jobeet</a></li>
                    <li class=\"feed\"><a href=\"\">Todos los feed</a></li>
                    <li><a href=\"\">Jobeet API</a></li>
                    <li class=\"last\"><a href=\"\">Afiliados</a></li>
                </ul>
            </div>
        </div>
    </div>
    <";
        
        $__internal_06a8fd57083cd1816f24c87eb092a89d45eb5f2cfd7d3300b9cc5df6cda6cfc6->leave($__internal_06a8fd57083cd1816f24c87eb092a89d45eb5f2cfd7d3300b9cc5df6cda6cfc6_prof);

    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        $__internal_37fe77ef13ccba949a9781da6ab6e93beffe11dd41cbb052da19b5272ce8e908 = $this->env->getExtension("native_profiler");
        $__internal_37fe77ef13ccba949a9781da6ab6e93beffe11dd41cbb052da19b5272ce8e908->enter($__internal_37fe77ef13ccba949a9781da6ab6e93beffe11dd41cbb052da19b5272ce8e908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 38
        echo "            ";
        
        $__internal_37fe77ef13ccba949a9781da6ab6e93beffe11dd41cbb052da19b5272ce8e908->leave($__internal_37fe77ef13ccba949a9781da6ab6e93beffe11dd41cbb052da19b5272ce8e908_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 38,  119 => 37,  94 => 39,  92 => 37,  72 => 20,  60 => 11,  52 => 6,  48 => 5,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'MopaBootstrapBundle::base.html.twig' %}*/
/* {% block body -%}*/
/*     <link rel="shortcut icon" href="/favicon.ico" />*/
/*     <link rel="stylesheet" href="{{ asset('bundles/framework/css/job.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('bundles/framework/css/jobs.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('bundles/framework/css/main.css') }}" />*/
/*     <div id="container">*/
/*         <div id="header">*/
/*             <div class="content">*/
/*                 <h1>*/
/*                     <a href="{{ path('job_index') }}">*/
/*                         <img src="/legacy/images/logo.jpg" alt="Plataforma web para la*/
/*                              búsqueda de empleo" />*/
/*                     </a>*/
/*                 </h1>*/
/*                 <div id="sub_header">*/
/*                     <div class="post">*/
/*                         <h2>Busca desarrolladores</h2>*/
/*                         <div>*/
/*                             <a href="{{ path('job_new') }}">Añade un empleo</a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="search">*/
/*                         <h2>Busca un empleo</h2>*/
/*                         <form action="" method="get">*/
/*                             <input type="text" name="keywords"*/
/*                                    id="search_keywords" />*/
/*                             <input type="submit" value="search" />*/
/*                             <div class="help">*/
/*                                 Entre palabra clave para la búsqueda (ciudad, país,*/
/*                                 cargo,...)*/
/*                             </div>*/
/*                         </form>*/
/*                     </div> */
/*                 </div>*/
/*             </div>*/
/*             {% block content %}*/
/*             {% endblock %}*/
/*         </div>*/
/*         <div id="footer">*/
/*             <div class="content">*/
/*                 <span class="symfony">*/
/*                     <img src="/legacy/images/jobeet-mini.png" />*/
/*                     desarrollado con <a href="/">*/
/*                         <img src="/legacy/images/symfony.gif" alt="symfony framework" />*/
/*                     </a>*/
/*                 </span>*/
/*                 <ul>*/
/*                     <li><a href="">Sobre Jobeet</a></li>*/
/*                     <li class="feed"><a href="">Todos los feed</a></li>*/
/*                     <li><a href="">Jobeet API</a></li>*/
/*                     <li class="last"><a href="">Afiliados</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <{% endblock -%} */
