<?php

/* SitePublic/index.html.twig */
class __TwigTemplate_05e8e9801779fea8b54ce918fa1693cb49969319d8988c6d05d630ac16e650b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SitePublic/index.html.twig", 1);
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
        $__internal_05f288488822f5b4b1fc0ca9d833ab4585952a7d8a42e0589d3e52ecbc477a3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05f288488822f5b4b1fc0ca9d833ab4585952a7d8a42e0589d3e52ecbc477a3f->enter($__internal_05f288488822f5b4b1fc0ca9d833ab4585952a7d8a42e0589d3e52ecbc477a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePublic/index.html.twig"));

        $__internal_2b1d5b4042f1c1e2475bca0b4b3d658b99350b7a5c52e87576d1528e0bbbe963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b1d5b4042f1c1e2475bca0b4b3d658b99350b7a5c52e87576d1528e0bbbe963->enter($__internal_2b1d5b4042f1c1e2475bca0b4b3d658b99350b7a5c52e87576d1528e0bbbe963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePublic/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05f288488822f5b4b1fc0ca9d833ab4585952a7d8a42e0589d3e52ecbc477a3f->leave($__internal_05f288488822f5b4b1fc0ca9d833ab4585952a7d8a42e0589d3e52ecbc477a3f_prof);

        
        $__internal_2b1d5b4042f1c1e2475bca0b4b3d658b99350b7a5c52e87576d1528e0bbbe963->leave($__internal_2b1d5b4042f1c1e2475bca0b4b3d658b99350b7a5c52e87576d1528e0bbbe963_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_08d15f7269eb4c07ce6ccfb8b8dbdb953cc9f1b3bc69d694197d6fa3ca5a233d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08d15f7269eb4c07ce6ccfb8b8dbdb953cc9f1b3bc69d694197d6fa3ca5a233d->enter($__internal_08d15f7269eb4c07ce6ccfb8b8dbdb953cc9f1b3bc69d694197d6fa3ca5a233d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_47e3d60db8ad0e78c5f6bc4e543a2edecb43a23a4c6fa938d9d7565d0306574a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e3d60db8ad0e78c5f6bc4e543a2edecb43a23a4c6fa938d9d7565d0306574a->enter($__internal_47e3d60db8ad0e78c5f6bc4e543a2edecb43a23a4c6fa938d9d7565d0306574a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_47e3d60db8ad0e78c5f6bc4e543a2edecb43a23a4c6fa938d9d7565d0306574a->leave($__internal_47e3d60db8ad0e78c5f6bc4e543a2edecb43a23a4c6fa938d9d7565d0306574a_prof);

        
        $__internal_08d15f7269eb4c07ce6ccfb8b8dbdb953cc9f1b3bc69d694197d6fa3ca5a233d->leave($__internal_08d15f7269eb4c07ce6ccfb8b8dbdb953cc9f1b3bc69d694197d6fa3ca5a233d_prof);

    }

    public function getTemplateName()
    {
        return "SitePublic/index.html.twig";
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
{% endblock %}", "SitePublic/index.html.twig", "C:\\xampp\\htdocs\\allotheatre\\templates\\SitePublic\\index.html.twig");
    }
}
