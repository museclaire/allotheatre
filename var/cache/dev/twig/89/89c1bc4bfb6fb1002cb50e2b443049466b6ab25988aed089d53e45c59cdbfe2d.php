<?php

/* index.html.twig */
class __TwigTemplate_199c2ea997a883093d33677de3df5559014e1ff9b595ff6f4890715089c03681 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4901950ed60a5c0069e55c80b9ded42e3168b534e748c2c7b1d3212743df1b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4901950ed60a5c0069e55c80b9ded42e3168b534e748c2c7b1d3212743df1b5->enter($__internal_f4901950ed60a5c0069e55c80b9ded42e3168b534e748c2c7b1d3212743df1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_401d00498fe3612b07c328cd0700c7312743a7f48d81d118a6c612945c1e4c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_401d00498fe3612b07c328cd0700c7312743a7f48d81d118a6c612945c1e4c0f->enter($__internal_401d00498fe3612b07c328cd0700c7312743a7f48d81d118a6c612945c1e4c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4901950ed60a5c0069e55c80b9ded42e3168b534e748c2c7b1d3212743df1b5->leave($__internal_f4901950ed60a5c0069e55c80b9ded42e3168b534e748c2c7b1d3212743df1b5_prof);

        
        $__internal_401d00498fe3612b07c328cd0700c7312743a7f48d81d118a6c612945c1e4c0f->leave($__internal_401d00498fe3612b07c328cd0700c7312743a7f48d81d118a6c612945c1e4c0f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_80a4b3fc49270d4a2bae3ee83f50420a2db18dc59858a191a3de64a7964ffe98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80a4b3fc49270d4a2bae3ee83f50420a2db18dc59858a191a3de64a7964ffe98->enter($__internal_80a4b3fc49270d4a2bae3ee83f50420a2db18dc59858a191a3de64a7964ffe98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2402397487879c820f9b5f8868cc942ef9094a940adb5cfe29cf3282e3435ba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2402397487879c820f9b5f8868cc942ef9094a940adb5cfe29cf3282e3435ba9->enter($__internal_2402397487879c820f9b5f8868cc942ef9094a940adb5cfe29cf3282e3435ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "   
    <div class=\"vignette\">
        <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/affiche.jpg"), "html", null, true);
        echo "\" class=\"vignette__img\" alt=\"affiche\">
        <div class=\"vignette__txt\">
            <p> !</p>
            <button>Par ici</button>
        </div>
    </div>
";
        
        $__internal_2402397487879c820f9b5f8868cc942ef9094a940adb5cfe29cf3282e3435ba9->leave($__internal_2402397487879c820f9b5f8868cc942ef9094a940adb5cfe29cf3282e3435ba9_prof);

        
        $__internal_80a4b3fc49270d4a2bae3ee83f50420a2db18dc59858a191a3de64a7964ffe98->leave($__internal_80a4b3fc49270d4a2bae3ee83f50420a2db18dc59858a191a3de64a7964ffe98_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block content %}
   
    <div class=\"vignette\">
        <img src=\"{{ asset('images/affiche.jpg') }}\" class=\"vignette__img\" alt=\"affiche\">
        <div class=\"vignette__txt\">
            <p> !</p>
            <button>Par ici</button>
        </div>
    </div>
{% endblock %}", "index.html.twig", "/Applications/MAMP/htdocs/allotheatre/templates/index.html.twig");
    }
}
