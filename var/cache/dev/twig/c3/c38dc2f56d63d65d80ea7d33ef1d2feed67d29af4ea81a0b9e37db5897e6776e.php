<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_75d082011f71bda63a2cdd6e385917207e963ab455bfd69b8eea8ef64e95ee1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_e52b0177580c0fe1b5c9779a4638b1734e1f67a9cd96dc0785788130b63bd6de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e52b0177580c0fe1b5c9779a4638b1734e1f67a9cd96dc0785788130b63bd6de->enter($__internal_e52b0177580c0fe1b5c9779a4638b1734e1f67a9cd96dc0785788130b63bd6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d714760056bd4ccacccb861de545511eab3a157e0333e811061d929811922184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d714760056bd4ccacccb861de545511eab3a157e0333e811061d929811922184->enter($__internal_d714760056bd4ccacccb861de545511eab3a157e0333e811061d929811922184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e52b0177580c0fe1b5c9779a4638b1734e1f67a9cd96dc0785788130b63bd6de->leave($__internal_e52b0177580c0fe1b5c9779a4638b1734e1f67a9cd96dc0785788130b63bd6de_prof);

        
        $__internal_d714760056bd4ccacccb861de545511eab3a157e0333e811061d929811922184->leave($__internal_d714760056bd4ccacccb861de545511eab3a157e0333e811061d929811922184_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b555e0c45c45f15e1cdbc7849e264922259125fc0019c5a2204713d9592d066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b555e0c45c45f15e1cdbc7849e264922259125fc0019c5a2204713d9592d066->enter($__internal_3b555e0c45c45f15e1cdbc7849e264922259125fc0019c5a2204713d9592d066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_91cfb50455360996504cb3acd7a924e938b907c06971aa2bf15357d828a5dbea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91cfb50455360996504cb3acd7a924e938b907c06971aa2bf15357d828a5dbea->enter($__internal_91cfb50455360996504cb3acd7a924e938b907c06971aa2bf15357d828a5dbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_91cfb50455360996504cb3acd7a924e938b907c06971aa2bf15357d828a5dbea->leave($__internal_91cfb50455360996504cb3acd7a924e938b907c06971aa2bf15357d828a5dbea_prof);

        
        $__internal_3b555e0c45c45f15e1cdbc7849e264922259125fc0019c5a2204713d9592d066->leave($__internal_3b555e0c45c45f15e1cdbc7849e264922259125fc0019c5a2204713d9592d066_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3011dbcbddde21133aaafe63622598b6178753b374c0e2c603c58a10b1385803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3011dbcbddde21133aaafe63622598b6178753b374c0e2c603c58a10b1385803->enter($__internal_3011dbcbddde21133aaafe63622598b6178753b374c0e2c603c58a10b1385803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a7899edbedc023dc57c26b3455b9554c5153017ee6e3e3b3912f9fdc09f5ff84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7899edbedc023dc57c26b3455b9554c5153017ee6e3e3b3912f9fdc09f5ff84->enter($__internal_a7899edbedc023dc57c26b3455b9554c5153017ee6e3e3b3912f9fdc09f5ff84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a7899edbedc023dc57c26b3455b9554c5153017ee6e3e3b3912f9fdc09f5ff84->leave($__internal_a7899edbedc023dc57c26b3455b9554c5153017ee6e3e3b3912f9fdc09f5ff84_prof);

        
        $__internal_3011dbcbddde21133aaafe63622598b6178753b374c0e2c603c58a10b1385803->leave($__internal_3011dbcbddde21133aaafe63622598b6178753b374c0e2c603c58a10b1385803_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_376998461eaffb284a66ed0bf62d35e97654e8f161bb26b36cb3e8c1913c61dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_376998461eaffb284a66ed0bf62d35e97654e8f161bb26b36cb3e8c1913c61dd->enter($__internal_376998461eaffb284a66ed0bf62d35e97654e8f161bb26b36cb3e8c1913c61dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6c77a0f4dfbf60e7a59cd4f8750d78519870f4131aa9eb621325bb5c5b6cea25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c77a0f4dfbf60e7a59cd4f8750d78519870f4131aa9eb621325bb5c5b6cea25->enter($__internal_6c77a0f4dfbf60e7a59cd4f8750d78519870f4131aa9eb621325bb5c5b6cea25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_6c77a0f4dfbf60e7a59cd4f8750d78519870f4131aa9eb621325bb5c5b6cea25->leave($__internal_6c77a0f4dfbf60e7a59cd4f8750d78519870f4131aa9eb621325bb5c5b6cea25_prof);

        
        $__internal_376998461eaffb284a66ed0bf62d35e97654e8f161bb26b36cb3e8c1913c61dd->leave($__internal_376998461eaffb284a66ed0bf62d35e97654e8f161bb26b36cb3e8c1913c61dd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/allotheatre/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
