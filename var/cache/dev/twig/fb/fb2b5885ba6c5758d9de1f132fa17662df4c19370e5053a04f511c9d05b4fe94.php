<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9e952fd1e711f62be4d0fe79e0d105d29d53ae100336ebe8daba6717c3354053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_66d20be3b37c8928acfb48cdef4028f190249b713fe30a200178a1ac3577cd4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66d20be3b37c8928acfb48cdef4028f190249b713fe30a200178a1ac3577cd4e->enter($__internal_66d20be3b37c8928acfb48cdef4028f190249b713fe30a200178a1ac3577cd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3411d7bccc1acce9c7ca3ca4179d217b99ec54f4c5c0dfb6028c74b6f88fb420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3411d7bccc1acce9c7ca3ca4179d217b99ec54f4c5c0dfb6028c74b6f88fb420->enter($__internal_3411d7bccc1acce9c7ca3ca4179d217b99ec54f4c5c0dfb6028c74b6f88fb420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66d20be3b37c8928acfb48cdef4028f190249b713fe30a200178a1ac3577cd4e->leave($__internal_66d20be3b37c8928acfb48cdef4028f190249b713fe30a200178a1ac3577cd4e_prof);

        
        $__internal_3411d7bccc1acce9c7ca3ca4179d217b99ec54f4c5c0dfb6028c74b6f88fb420->leave($__internal_3411d7bccc1acce9c7ca3ca4179d217b99ec54f4c5c0dfb6028c74b6f88fb420_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f5907a4e74338254298bc256fd218f1b81a93da7011b2becba1df2f40f767954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5907a4e74338254298bc256fd218f1b81a93da7011b2becba1df2f40f767954->enter($__internal_f5907a4e74338254298bc256fd218f1b81a93da7011b2becba1df2f40f767954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fb9b1cb02dc4665ecd0579da3017302df973e87adfa39e25b572f7d64258e674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb9b1cb02dc4665ecd0579da3017302df973e87adfa39e25b572f7d64258e674->enter($__internal_fb9b1cb02dc4665ecd0579da3017302df973e87adfa39e25b572f7d64258e674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_fb9b1cb02dc4665ecd0579da3017302df973e87adfa39e25b572f7d64258e674->leave($__internal_fb9b1cb02dc4665ecd0579da3017302df973e87adfa39e25b572f7d64258e674_prof);

        
        $__internal_f5907a4e74338254298bc256fd218f1b81a93da7011b2becba1df2f40f767954->leave($__internal_f5907a4e74338254298bc256fd218f1b81a93da7011b2becba1df2f40f767954_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4db88d8773d9fa21e7fcd51c264a37def6014dc3612b328f33d61236d8651f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4db88d8773d9fa21e7fcd51c264a37def6014dc3612b328f33d61236d8651f8e->enter($__internal_4db88d8773d9fa21e7fcd51c264a37def6014dc3612b328f33d61236d8651f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_45fe4aca5cc6607b44d514abf0fc7ddfdf76156a656a0d5e69103e107a149b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45fe4aca5cc6607b44d514abf0fc7ddfdf76156a656a0d5e69103e107a149b18->enter($__internal_45fe4aca5cc6607b44d514abf0fc7ddfdf76156a656a0d5e69103e107a149b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_45fe4aca5cc6607b44d514abf0fc7ddfdf76156a656a0d5e69103e107a149b18->leave($__internal_45fe4aca5cc6607b44d514abf0fc7ddfdf76156a656a0d5e69103e107a149b18_prof);

        
        $__internal_4db88d8773d9fa21e7fcd51c264a37def6014dc3612b328f33d61236d8651f8e->leave($__internal_4db88d8773d9fa21e7fcd51c264a37def6014dc3612b328f33d61236d8651f8e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e8406fc430fbaea4eac733d01391cde709e99030c44fc5243e14481f308ef647 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8406fc430fbaea4eac733d01391cde709e99030c44fc5243e14481f308ef647->enter($__internal_e8406fc430fbaea4eac733d01391cde709e99030c44fc5243e14481f308ef647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d0e18192767d1bc0ec7ee0adeaf3c0df6cbf8aa4d932cfc2b8b0367e1e10ca4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e18192767d1bc0ec7ee0adeaf3c0df6cbf8aa4d932cfc2b8b0367e1e10ca4b->enter($__internal_d0e18192767d1bc0ec7ee0adeaf3c0df6cbf8aa4d932cfc2b8b0367e1e10ca4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_d0e18192767d1bc0ec7ee0adeaf3c0df6cbf8aa4d932cfc2b8b0367e1e10ca4b->leave($__internal_d0e18192767d1bc0ec7ee0adeaf3c0df6cbf8aa4d932cfc2b8b0367e1e10ca4b_prof);

        
        $__internal_e8406fc430fbaea4eac733d01391cde709e99030c44fc5243e14481f308ef647->leave($__internal_e8406fc430fbaea4eac733d01391cde709e99030c44fc5243e14481f308ef647_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/Allotheatre/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
