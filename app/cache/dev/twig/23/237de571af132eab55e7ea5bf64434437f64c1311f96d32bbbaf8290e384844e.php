<?php

/* ::base.html.twig */
class __TwigTemplate_1cd539b09b4c319ed9b0daeb8fde2b4ac76b16b60c2d716ecfcc32e520ed2d2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47d3d0e93a9a111deb6a6dcfc6a3127df8bedd792f0edfdb25151118bbdec3ac = $this->env->getExtension("native_profiler");
        $__internal_47d3d0e93a9a111deb6a6dcfc6a3127df8bedd792f0edfdb25151118bbdec3ac->enter($__internal_47d3d0e93a9a111deb6a6dcfc6a3127df8bedd792f0edfdb25151118bbdec3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"
    \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\">
    <head>
        <title>Jobeet - Tu plataforma de búsqueda de empleo</title>
        <link rel=\"shortcut icon\" href=\"/favicon.ico\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/job.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/jobs.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/main.css"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"container\">
            <div id=\"header\">
                <div class=\"content\">
                    <h1>
                        <a href=\"";
        // line 16
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
        // line 25
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
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "            </div>
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
    </body>
</html>";
        
        $__internal_47d3d0e93a9a111deb6a6dcfc6a3127df8bedd792f0edfdb25151118bbdec3ac->leave($__internal_47d3d0e93a9a111deb6a6dcfc6a3127df8bedd792f0edfdb25151118bbdec3ac_prof);

    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        $__internal_26463762cdb2add2a39106dc43d89e35718de51745b67f1f3166e4142324b7cc = $this->env->getExtension("native_profiler");
        $__internal_26463762cdb2add2a39106dc43d89e35718de51745b67f1f3166e4142324b7cc->enter($__internal_26463762cdb2add2a39106dc43d89e35718de51745b67f1f3166e4142324b7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 43
        echo "                ";
        
        $__internal_26463762cdb2add2a39106dc43d89e35718de51745b67f1f3166e4142324b7cc->leave($__internal_26463762cdb2add2a39106dc43d89e35718de51745b67f1f3166e4142324b7cc_prof);

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
        return array (  115 => 43,  109 => 42,  83 => 44,  81 => 42,  61 => 25,  49 => 16,  39 => 9,  35 => 8,  31 => 7,  23 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"*/
/*     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">*/
/* <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">*/
/*     <head>*/
/*         <title>Jobeet - Tu plataforma de búsqueda de empleo</title>*/
/*         <link rel="shortcut icon" href="/favicon.ico" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/framework/css/job.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/framework/css/jobs.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/framework/css/main.css') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <div id="container">*/
/*             <div id="header">*/
/*                 <div class="content">*/
/*                     <h1>*/
/*                         <a href="{{ path('job_index') }}">*/
/*                             <img src="/legacy/images/logo.jpg" alt="Plataforma web para la*/
/*                                  búsqueda de empleo" />*/
/*                         </a>*/
/*                     </h1>*/
/*                     <div id="sub_header">*/
/*                         <div class="post">*/
/*                             <h2>Busca desarrolladores</h2>*/
/*                             <div>*/
/*                                 <a href="{{ path('job_new') }}">Añade un empleo</a>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="search">*/
/*                             <h2>Busca un empleo</h2>*/
/*                             <form action="" method="get">*/
/*                                 <input type="text" name="keywords"*/
/*                                        id="search_keywords" />*/
/*                                 <input type="submit" value="search" />*/
/*                                 <div class="help">*/
/*                                     Entre palabra clave para la búsqueda (ciudad, país,*/
/*                                     cargo,...)*/
/*                                 </div>*/
/*                             </form>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 {% block content %}*/
/*                 {% endblock %}*/
/*             </div>*/
/*             <div id="footer">*/
/*                 <div class="content">*/
/*                     <span class="symfony">*/
/*                         <img src="/legacy/images/jobeet-mini.png" /> */
/*                         desarrollado con <a href="/">*/
/*                             <img src="/legacy/images/symfony.gif" alt="symfony framework" />*/
/*                         </a>*/
/*                     </span>*/
/*                     <ul>*/
/*                         <li><a href="">Sobre Jobeet</a></li>*/
/*                         <li class="feed"><a href="">Todos los feed</a></li>*/
/*                         <li><a href="">Jobeet API</a></li>*/
/*                         <li class="last"><a href="">Afiliados</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
