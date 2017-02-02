<?php

/* job/index.html.twig */
class __TwigTemplate_a3a5f71526b65c687bcf71221e8664849a24b3adbe75c713c0a6bfef5d7c398e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "job/index.html.twig", 1);
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
        $__internal_7d11e8ad490986e8107f3355e514eec490b8c90e605e1837b5e291e1a12bfb4e = $this->env->getExtension("native_profiler");
        $__internal_7d11e8ad490986e8107f3355e514eec490b8c90e605e1837b5e291e1a12bfb4e->enter($__internal_7d11e8ad490986e8107f3355e514eec490b8c90e605e1837b5e291e1a12bfb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d11e8ad490986e8107f3355e514eec490b8c90e605e1837b5e291e1a12bfb4e->leave($__internal_7d11e8ad490986e8107f3355e514eec490b8c90e605e1837b5e291e1a12bfb4e_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_9c286e42b0786747b10d3ee18a007ac386f8313db81b56eb77e8be4583ab0244 = $this->env->getExtension("native_profiler");
        $__internal_9c286e42b0786747b10d3ee18a007ac386f8313db81b56eb77e8be4583ab0244->enter($__internal_9c286e42b0786747b10d3ee18a007ac386f8313db81b56eb77e8be4583ab0244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<div id=\"content\" class=\"jobs\">
        <table>
            <thead>
                <tr>
                    <th hidden=\"true\" >Localización</th>
                    <th hidden=\"true\" >Cargo</th>
                    <th hidden=\"true\" >Empresa</th>
                    <th hidden=\"true\" >Fecha creación</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : $this->getContext($context, "jobs")));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 15
            echo "                    <tr>
                        <td class=\"location\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "location", array()), "html", null, true);
            echo "</td>
                        <td class=\"position\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "position", array()), "html", null, true);
            echo "</td>
                        <td class=\"company\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "company", array()), "html", null, true);
            echo "</td>

                        <td hidden=\"true\" >
                            <small>publicado ";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["job"], "expiresAt", array()), "m/d/Y"), "html", null, true);
            echo "</small>
                        </td>
                        <td>
                            <div hidden=\"true\" style=\"padding: 20px 0\">
                                <ul>
                                    <li>
                                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_show", array("id" => $this->getAttribute($context["job"], "getJobId", array(), "method"))), "html", null, true);
            // line 28
            echo "\">mostrar</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_edit", array("id" => $this->getAttribute($context["job"], "getJobId", array(), "method"))), "html", null, true);
            // line 32
            echo "\">editar</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </tbody>
        </table>
        <ul>
            <li>
                <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("job_new");
        echo "\">
                    Publicar nuevo empleo
                </a>
            </li>
        </ul>
    </div>
";
        
        $__internal_9c286e42b0786747b10d3ee18a007ac386f8313db81b56eb77e8be4583ab0244->leave($__internal_9c286e42b0786747b10d3ee18a007ac386f8313db81b56eb77e8be4583ab0244_prof);

    }

    public function getTemplateName()
    {
        return "job/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 43,  104 => 39,  92 => 32,  90 => 31,  85 => 28,  83 => 27,  74 => 21,  68 => 18,  64 => 17,  60 => 16,  57 => 15,  53 => 14,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block content -%}*/
/*     <div id="content" class="jobs">*/
/*         <table>*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th hidden="true" >Localización</th>*/
/*                     <th hidden="true" >Cargo</th>*/
/*                     <th hidden="true" >Empresa</th>*/
/*                     <th hidden="true" >Fecha creación</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% for job in jobs %}*/
/*                     <tr>*/
/*                         <td class="location">{{ job.location }}</td>*/
/*                         <td class="position">{{ job.position }}</td>*/
/*                         <td class="company">{{ job.company }}</td>*/
/* */
/*                         <td hidden="true" >*/
/*                             <small>publicado {{ job.expiresAt|date("m/d/Y") }}</small>*/
/*                         </td>*/
/*                         <td>*/
/*                             <div hidden="true" style="padding: 20px 0">*/
/*                                 <ul>*/
/*                                     <li>*/
/*                                         <a href="{{ path('job_show', { 'id': job.getJobId() })*/
/*                                            }}">mostrar</a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{ path('job_edit', { 'id': job.getJobId() })*/
/*                                            }}">editar</a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*         <ul>*/
/*             <li>*/
/*                 <a href="{{ path('job_new') }}">*/
/*                     Publicar nuevo empleo*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* {% endblock %} */
