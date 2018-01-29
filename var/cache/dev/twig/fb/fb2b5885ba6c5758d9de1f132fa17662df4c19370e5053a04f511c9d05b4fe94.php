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
        $__internal_4dd42b1c3a31de6eb1132ad33a67af87a461b3c02071d199056249929e868998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dd42b1c3a31de6eb1132ad33a67af87a461b3c02071d199056249929e868998->enter($__internal_4dd42b1c3a31de6eb1132ad33a67af87a461b3c02071d199056249929e868998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1491afd50db1dcb326601ccf98ee295ef923352795b5d105b56d8655b5577814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1491afd50db1dcb326601ccf98ee295ef923352795b5d105b56d8655b5577814->enter($__internal_1491afd50db1dcb326601ccf98ee295ef923352795b5d105b56d8655b5577814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dd42b1c3a31de6eb1132ad33a67af87a461b3c02071d199056249929e868998->leave($__internal_4dd42b1c3a31de6eb1132ad33a67af87a461b3c02071d199056249929e868998_prof);

        
        $__internal_1491afd50db1dcb326601ccf98ee295ef923352795b5d105b56d8655b5577814->leave($__internal_1491afd50db1dcb326601ccf98ee295ef923352795b5d105b56d8655b5577814_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1f5b72bed952097656fa091e057420929f8a9a78cb74c94fa5fc754bff77202e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f5b72bed952097656fa091e057420929f8a9a78cb74c94fa5fc754bff77202e->enter($__internal_1f5b72bed952097656fa091e057420929f8a9a78cb74c94fa5fc754bff77202e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1faf662566edf0702cbcd82ac08e5b7da3eacede19d836f1fdfec2878517058c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1faf662566edf0702cbcd82ac08e5b7da3eacede19d836f1fdfec2878517058c->enter($__internal_1faf662566edf0702cbcd82ac08e5b7da3eacede19d836f1fdfec2878517058c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1faf662566edf0702cbcd82ac08e5b7da3eacede19d836f1fdfec2878517058c->leave($__internal_1faf662566edf0702cbcd82ac08e5b7da3eacede19d836f1fdfec2878517058c_prof);

        
        $__internal_1f5b72bed952097656fa091e057420929f8a9a78cb74c94fa5fc754bff77202e->leave($__internal_1f5b72bed952097656fa091e057420929f8a9a78cb74c94fa5fc754bff77202e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a47f66e21e086713e0b7160d3ae056f951a21d0f279923bfee967d049881d47e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a47f66e21e086713e0b7160d3ae056f951a21d0f279923bfee967d049881d47e->enter($__internal_a47f66e21e086713e0b7160d3ae056f951a21d0f279923bfee967d049881d47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e5716cc6a510907f7c5f0ac394df000e0bce066808361ce411fa5bbc40c20f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5716cc6a510907f7c5f0ac394df000e0bce066808361ce411fa5bbc40c20f7e->enter($__internal_e5716cc6a510907f7c5f0ac394df000e0bce066808361ce411fa5bbc40c20f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e5716cc6a510907f7c5f0ac394df000e0bce066808361ce411fa5bbc40c20f7e->leave($__internal_e5716cc6a510907f7c5f0ac394df000e0bce066808361ce411fa5bbc40c20f7e_prof);

        
        $__internal_a47f66e21e086713e0b7160d3ae056f951a21d0f279923bfee967d049881d47e->leave($__internal_a47f66e21e086713e0b7160d3ae056f951a21d0f279923bfee967d049881d47e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_911c84b2e4844a6b20ffeb5f5442e95b83400c4e4d2d2ae7fddbaee9a6d7f902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_911c84b2e4844a6b20ffeb5f5442e95b83400c4e4d2d2ae7fddbaee9a6d7f902->enter($__internal_911c84b2e4844a6b20ffeb5f5442e95b83400c4e4d2d2ae7fddbaee9a6d7f902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0fb7a869f3c4a461b14a7ecb99574b01f2689a958e90b02bc62aa42c5e472076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb7a869f3c4a461b14a7ecb99574b01f2689a958e90b02bc62aa42c5e472076->enter($__internal_0fb7a869f3c4a461b14a7ecb99574b01f2689a958e90b02bc62aa42c5e472076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0fb7a869f3c4a461b14a7ecb99574b01f2689a958e90b02bc62aa42c5e472076->leave($__internal_0fb7a869f3c4a461b14a7ecb99574b01f2689a958e90b02bc62aa42c5e472076_prof);

        
        $__internal_911c84b2e4844a6b20ffeb5f5442e95b83400c4e4d2d2ae7fddbaee9a6d7f902->leave($__internal_911c84b2e4844a6b20ffeb5f5442e95b83400c4e4d2d2ae7fddbaee9a6d7f902_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/allotheatre/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
