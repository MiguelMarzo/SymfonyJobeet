<?php

/* MopaBootstrapBundle::flash.html.twig */
class __TwigTemplate_a65d19658f8ff81fabec5a72645e85692efda547ea98c15c98506b8d674e4304 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0852eeada299cda15a68d7ce4168c11aca9068c0859a9d549b829aa1c31d0b7 = $this->env->getExtension("native_profiler");
        $__internal_b0852eeada299cda15a68d7ce4168c11aca9068c0859a9d549b829aa1c31d0b7->enter($__internal_b0852eeada299cda15a68d7ce4168c11aca9068c0859a9d549b829aa1c31d0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MopaBootstrapBundle::flash.html.twig"));

        // line 13
        echo "
";
        // line 32
        echo "
";
        
        $__internal_b0852eeada299cda15a68d7ce4168c11aca9068c0859a9d549b829aa1c31d0b7->leave($__internal_b0852eeada299cda15a68d7ce4168c11aca9068c0859a9d549b829aa1c31d0b7_prof);

    }

    // line 1
    public function getflash($__type__ = null, $__message__ = null, $__close__ = null, $__use_raw__ = null, $__class__ = null, $__domain__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "message" => $__message__,
            "close" => $__close__,
            "use_raw" => $__use_raw__,
            "class" => $__class__,
            "domain" => $__domain__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c8b5ea0277591e923ee339fe72f0dd8d84fa7e3cdb2b98bfac4dc462080c8189 = $this->env->getExtension("native_profiler");
            $__internal_c8b5ea0277591e923ee339fe72f0dd8d84fa7e3cdb2b98bfac4dc462080c8189->enter($__internal_c8b5ea0277591e923ee339fe72f0dd8d84fa7e3cdb2b98bfac4dc462080c8189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "flash"));

            // line 2
            echo "    <div class=\"alert";
            echo twig_escape_filter($this->env, (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))) ? ((" alert-" . (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))) : ("")), "html", null, true);
            echo " fade in ";
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "")) : ("")), "html", null, true);
            echo " ";
            if (((array_key_exists("close", $context)) ? (_twig_default_filter((isset($context["close"]) ? $context["close"] : $this->getContext($context, "close")), false)) : (false))) {
                echo "alert-dismissible";
            }
            echo "\">
    ";
            // line 3
            if (((array_key_exists("close", $context)) ? (_twig_default_filter((isset($context["close"]) ? $context["close"] : $this->getContext($context, "close")), false)) : (false))) {
                // line 4
                echo "        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
    ";
            }
            // line 6
            echo "    ";
            if (((array_key_exists("use_raw", $context)) ? (_twig_default_filter((isset($context["use_raw"]) ? $context["use_raw"] : $this->getContext($context, "use_raw")), false)) : (false))) {
                // line 7
                echo "        ";
                echo $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "messages")) : ("messages")));
                echo "
    ";
            } else {
                // line 9
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "messages")) : ("messages"))), "html", null, true);
                echo "
    ";
            }
            // line 11
            echo "    </div>
";
            
            $__internal_c8b5ea0277591e923ee339fe72f0dd8d84fa7e3cdb2b98bfac4dc462080c8189->leave($__internal_c8b5ea0277591e923ee339fe72f0dd8d84fa7e3cdb2b98bfac4dc462080c8189_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 14
    public function getadvanced_flash($__type__ = null, $__heading__ = null, $__message__ = null, $__close_tag__ = null, $__use_raw__ = null, $__class__ = null, $__domain__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "heading" => $__heading__,
            "message" => $__message__,
            "close_tag" => $__close_tag__,
            "use_raw" => $__use_raw__,
            "class" => $__class__,
            "domain" => $__domain__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_067c7e0c2b1f4a11f0cf750c45a9a68c064a5a806c979c3c6b228c6376e1569f = $this->env->getExtension("native_profiler");
            $__internal_067c7e0c2b1f4a11f0cf750c45a9a68c064a5a806c979c3c6b228c6376e1569f->enter($__internal_067c7e0c2b1f4a11f0cf750c45a9a68c064a5a806c979c3c6b228c6376e1569f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "advanced_flash"));

            // line 15
            echo "    <div class=\"alert";
            echo twig_escape_filter($this->env, (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))) ? ((" alert-" . (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))) : ("")), "html", null, true);
            echo " fade in ";
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "")) : ("")), "html", null, true);
            echo " ";
            if (((array_key_exists("close_tag", $context)) ? (_twig_default_filter((isset($context["close_tag"]) ? $context["close_tag"] : $this->getContext($context, "close_tag")), false)) : (false))) {
                echo "alert-dismissible";
            }
            echo "\">
    ";
            // line 16
            if (((array_key_exists("close_tag", $context)) ? (_twig_default_filter((isset($context["close_tag"]) ? $context["close_tag"] : $this->getContext($context, "close_tag")), false)) : (false))) {
                // line 17
                echo "        ";
                if (((isset($context["close_tag"]) ? $context["close_tag"] : $this->getContext($context, "close_tag")) == true)) {
                    // line 18
                    echo "            ";
                    $context["close_tag"] = "a";
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "        <";
                echo twig_escape_filter($this->env, (isset($context["close_tag"]) ? $context["close_tag"] : $this->getContext($context, "close_tag")), "html", null, true);
                echo " class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\" ";
                if (((isset($context["close_tag"]) ? $context["close_tag"] : $this->getContext($context, "close_tag")) == "a")) {
                    echo "href=\"#\"";
                } elseif (((isset($context["close_tag"]) ? $context["close_tag"] : $this->getContext($context, "close_tag")) == "button")) {
                    echo "type=\"button\"";
                }
                echo ">&times;</";
                echo twig_escape_filter($this->env, (isset($context["close_tag"]) ? $context["close_tag"] : $this->getContext($context, "close_tag")), "html", null, true);
                echo ">
    ";
            }
            // line 22
            echo "    ";
            if (((array_key_exists("heading", $context)) ? (_twig_default_filter((isset($context["heading"]) ? $context["heading"] : $this->getContext($context, "heading")), false)) : (false))) {
                // line 23
                echo "    <h4 class=\"alert-heading\">";
                echo twig_escape_filter($this->env, (isset($context["heading"]) ? $context["heading"] : $this->getContext($context, "heading")), "html", null, true);
                echo "</h4>
    ";
            }
            // line 25
            echo "    ";
            if (((array_key_exists("use_raw", $context)) ? (_twig_default_filter((isset($context["use_raw"]) ? $context["use_raw"] : $this->getContext($context, "use_raw")), false)) : (false))) {
                // line 26
                echo "        ";
                echo $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "messages")) : ("messages")));
                echo "
    ";
            } else {
                // line 28
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "messages")) : ("messages"))), "html", null, true);
                echo "
    ";
            }
            // line 30
            echo "    </div>
";
            
            $__internal_067c7e0c2b1f4a11f0cf750c45a9a68c064a5a806c979c3c6b228c6376e1569f->leave($__internal_067c7e0c2b1f4a11f0cf750c45a9a68c064a5a806c979c3c6b228c6376e1569f_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function getsession_flash($__close__ = null, $__use_raw__ = null, $__class__ = null, $__domain__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "close" => $__close__,
            "use_raw" => $__use_raw__,
            "class" => $__class__,
            "domain" => $__domain__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_63789f5755a2011bcb883d8f3c9ef2c397dde75e13b712ef8d0e9f6927284be5 = $this->env->getExtension("native_profiler");
            $__internal_63789f5755a2011bcb883d8f3c9ef2c397dde75e13b712ef8d0e9f6927284be5->enter($__internal_63789f5755a2011bcb883d8f3c9ef2c397dde75e13b712ef8d0e9f6927284be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "session_flash"));

            // line 34
            echo "    ";
            $context["flash_messages"] = $this;
            // line 35
            echo "
    ";
            // line 36
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "peekAll", array())) > 0)) {
                // line 37
                echo "        ";
                $context["mapping"] = twig_array_merge($this->env->getExtension('mopa_bootstrap_flash')->getMapping(), array("fos_user_success" => "success"));
                // line 38
                echo "        ";
                $context["flashes"] = array();
                // line 39
                echo "
        ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["mapping"]) ? $context["mapping"] : $this->getContext($context, "mapping"))));
                foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                    // line 41
                    echo "            ";
                    $context["flashes"] = twig_array_merge((isset($context["flashes"]) ? $context["flashes"] : $this->getContext($context, "flashes")), array($context["type"] => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => $context["type"]), "method")));
                    // line 42
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "
        ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["flashes"]) ? $context["flashes"] : $this->getContext($context, "flashes")));
                foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                    // line 45
                    echo "            ";
                    if (($context["type"] == "fos_user_success")) {
                        // line 46
                        echo "                ";
                        $context["domain"] = "FOSUserBundle";
                        // line 47
                        echo "            ";
                    }
                    // line 48
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["messages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 49
                        echo "                ";
                        echo $context["flash_messages"]->getflash($this->getAttribute((isset($context["mapping"]) ? $context["mapping"] : $this->getContext($context, "mapping")), $context["type"], array(), "array"), $context["message"], (isset($context["close"]) ? $context["close"] : $this->getContext($context, "close")), (isset($context["use_raw"]) ? $context["use_raw"] : $this->getContext($context, "use_raw")), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), (isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")));
                        echo "
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "    ";
            }
            
            $__internal_63789f5755a2011bcb883d8f3c9ef2c397dde75e13b712ef8d0e9f6927284be5->leave($__internal_63789f5755a2011bcb883d8f3c9ef2c397dde75e13b712ef8d0e9f6927284be5_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle::flash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 52,  274 => 51,  265 => 49,  260 => 48,  257 => 47,  254 => 46,  251 => 45,  247 => 44,  244 => 43,  238 => 42,  235 => 41,  231 => 40,  228 => 39,  225 => 38,  222 => 37,  220 => 36,  217 => 35,  214 => 34,  196 => 33,  181 => 30,  175 => 28,  169 => 26,  166 => 25,  160 => 23,  157 => 22,  143 => 20,  140 => 19,  137 => 18,  134 => 17,  132 => 16,  121 => 15,  100 => 14,  85 => 11,  79 => 9,  73 => 7,  70 => 6,  66 => 4,  64 => 3,  53 => 2,  33 => 1,  25 => 32,  22 => 13,);
    }
}
/* {% macro flash(type, message, close, use_raw, class, domain) %}*/
/*     <div class="alert{{ type ? ' alert-'~type : '' }} fade in {{ class|default('') }} {% if close|default(false) %}alert-dismissible{% endif %}">*/
/*     {% if close|default(false) %}*/
/*         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>*/
/*     {% endif %}*/
/*     {% if use_raw|default(false) %}*/
/*         {{ message|trans({}, domain|default('messages'))|raw }}*/
/*     {% else %}*/
/*         {{ message|trans({}, domain|default('messages')) }}*/
/*     {% endif %}*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {% macro advanced_flash(type, heading, message, close_tag, use_raw, class, domain) %}*/
/*     <div class="alert{{ type ? ' alert-'~type : '' }} fade in {{ class|default('') }} {% if close_tag|default(false) %}alert-dismissible{% endif %}">*/
/*     {% if close_tag|default(false) %}*/
/*         {% if close_tag == true %}*/
/*             {% set close_tag = 'a' %}*/
/*         {% endif %}*/
/*         <{{ close_tag }} class="close" data-dismiss="alert" aria-hidden="true" {% if close_tag == 'a' %}href="#"{% elseif close_tag =='button' %}type="button"{% endif %}>&times;</{{ close_tag }}>*/
/*     {% endif %}*/
/*     {% if heading|default(false) %}*/
/*     <h4 class="alert-heading">{{ heading }}</h4>*/
/*     {% endif %}*/
/*     {% if use_raw|default(false) %}*/
/*         {{ message|trans({}, domain|default('messages'))|raw }}*/
/*     {% else %}*/
/*         {{ message|trans({}, domain|default('messages')) }}*/
/*     {% endif %}*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {% macro session_flash(close, use_raw, class, domain) %}*/
/*     {% import _self as flash_messages %}*/
/* */
/*     {% if app.session.flashbag.peekAll|length > 0 %}*/
/*         {% set mapping = mopa_bootstrap_flash_mapping()|merge({'fos_user_success':'success'}) %}*/
/*         {% set flashes = {} %}*/
/* */
/*         {% for type in mapping|keys %}*/
/*             {% set flashes = flashes | merge({ (type) : app.session.flashbag.get(type) }) %}*/
/*         {% endfor %}*/
/* */
/*         {% for type, messages in flashes %}*/
/*             {% if type == 'fos_user_success' %}*/
/*                 {% set domain = 'FOSUserBundle' %}*/
/*             {% endif %}*/
/*             {% for message in messages %}*/
/*                 {{ flash_messages.flash(mapping[type], message, close, use_raw, class, domain) }}*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
