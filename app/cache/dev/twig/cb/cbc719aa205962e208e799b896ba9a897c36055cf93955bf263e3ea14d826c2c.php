<?php

/* job/index.html.twig */
class __TwigTemplate_72c8f71e74325c28ba76a8d666bffca522b2885b57a0c307b059f3c0d2ed7078 extends Twig_Template
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
        $__internal_436d6b734e88ff25ea4735d5f796cbb08c9088a2de6ebbedd1d3707bc7f5c156 = $this->env->getExtension("native_profiler");
        $__internal_436d6b734e88ff25ea4735d5f796cbb08c9088a2de6ebbedd1d3707bc7f5c156->enter($__internal_436d6b734e88ff25ea4735d5f796cbb08c9088a2de6ebbedd1d3707bc7f5c156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_436d6b734e88ff25ea4735d5f796cbb08c9088a2de6ebbedd1d3707bc7f5c156->leave($__internal_436d6b734e88ff25ea4735d5f796cbb08c9088a2de6ebbedd1d3707bc7f5c156_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_193007f5ffec07df0520f38f69257a134f88f1a32c936bbabb6b8b5f1c5f4b8b = $this->env->getExtension("native_profiler");
        $__internal_193007f5ffec07df0520f38f69257a134f88f1a32c936bbabb6b8b5f1c5f4b8b->enter($__internal_193007f5ffec07df0520f38f69257a134f88f1a32c936bbabb6b8b5f1c5f4b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 15
            echo "                    <tr>
                        <td class=\"location\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "location", array()), "html", null, true);
            echo "</td>
                        <td class=\"position\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
            echo "</td>
                        <td class=\"company\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "company", array()), "html", null, true);
            echo "</td>

                        <td hidden=\"true\" >
                            <small>publicado ";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "expiresAt", array()), "m/d/Y"), "html", null, true);
            echo "</small>
                        </td>
                        <td>
                            <div hidden=\"true\" style=\"padding: 20px 0\">
                                <ul>
                                    <li>
                                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            // line 28
            echo "\">mostrar</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
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
        
        $__internal_193007f5ffec07df0520f38f69257a134f88f1a32c936bbabb6b8b5f1c5f4b8b->leave($__internal_193007f5ffec07df0520f38f69257a134f88f1a32c936bbabb6b8b5f1c5f4b8b_prof);

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
/*                 {% for entity in jobs %}*/
/*                     <tr>*/
/*                         <td class="location">{{ entity.location }}</td>*/
/*                         <td class="position">{{ entity.position }}</td>*/
/*                         <td class="company">{{ entity.company }}</td>*/
/* */
/*                         <td hidden="true" >*/
/*                             <small>publicado {{ entity.expiresAt|date("m/d/Y") }}</small>*/
/*                         </td>*/
/*                         <td>*/
/*                             <div hidden="true" style="padding: 20px 0">*/
/*                                 <ul>*/
/*                                     <li>*/
/*                                         <a href="{{ path('job_show', { 'id': entity.id })*/
/*                                            }}">mostrar</a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{ path('job_edit', { 'id': entity.id })*/
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
