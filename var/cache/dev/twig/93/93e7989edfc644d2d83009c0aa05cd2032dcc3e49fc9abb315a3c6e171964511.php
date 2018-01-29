<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_aa153a588c38f00292e73a0ea85ab003170326f68ffc78ec0901f3679a44e3ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb4330621b9990101317e5e15b9e21bb596be7e1488df89f5d66d41abbf06f1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb4330621b9990101317e5e15b9e21bb596be7e1488df89f5d66d41abbf06f1c->enter($__internal_eb4330621b9990101317e5e15b9e21bb596be7e1488df89f5d66d41abbf06f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ef75a5f1e8bd39bb87d45b5b97a375fa2af6631d15e1cee03675f7ac7e60b145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef75a5f1e8bd39bb87d45b5b97a375fa2af6631d15e1cee03675f7ac7e60b145->enter($__internal_ef75a5f1e8bd39bb87d45b5b97a375fa2af6631d15e1cee03675f7ac7e60b145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb4330621b9990101317e5e15b9e21bb596be7e1488df89f5d66d41abbf06f1c->leave($__internal_eb4330621b9990101317e5e15b9e21bb596be7e1488df89f5d66d41abbf06f1c_prof);

        
        $__internal_ef75a5f1e8bd39bb87d45b5b97a375fa2af6631d15e1cee03675f7ac7e60b145->leave($__internal_ef75a5f1e8bd39bb87d45b5b97a375fa2af6631d15e1cee03675f7ac7e60b145_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_75f5ab37223aff102b62dcb982b29cbd6c497d552e30fae4e031b8ddf2d434ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75f5ab37223aff102b62dcb982b29cbd6c497d552e30fae4e031b8ddf2d434ca->enter($__internal_75f5ab37223aff102b62dcb982b29cbd6c497d552e30fae4e031b8ddf2d434ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e41f4671e0220126b2cfa96c023dff677e5d580b21567cc213ac1684ccedad59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e41f4671e0220126b2cfa96c023dff677e5d580b21567cc213ac1684ccedad59->enter($__internal_e41f4671e0220126b2cfa96c023dff677e5d580b21567cc213ac1684ccedad59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_e41f4671e0220126b2cfa96c023dff677e5d580b21567cc213ac1684ccedad59->leave($__internal_e41f4671e0220126b2cfa96c023dff677e5d580b21567cc213ac1684ccedad59_prof);

        
        $__internal_75f5ab37223aff102b62dcb982b29cbd6c497d552e30fae4e031b8ddf2d434ca->leave($__internal_75f5ab37223aff102b62dcb982b29cbd6c497d552e30fae4e031b8ddf2d434ca_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_74d9808954e9016dc81b9d9c6fed6dd71ceb8a4cc578f62c4bdc21e8a7f2d25e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74d9808954e9016dc81b9d9c6fed6dd71ceb8a4cc578f62c4bdc21e8a7f2d25e->enter($__internal_74d9808954e9016dc81b9d9c6fed6dd71ceb8a4cc578f62c4bdc21e8a7f2d25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c9ad345fb53a5c7e09a5e73cacccceeaeeb424f051c5b1a7ec04b7cfe40923e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9ad345fb53a5c7e09a5e73cacccceeaeeb424f051c5b1a7ec04b7cfe40923e2->enter($__internal_c9ad345fb53a5c7e09a5e73cacccceeaeeb424f051c5b1a7ec04b7cfe40923e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_c9ad345fb53a5c7e09a5e73cacccceeaeeb424f051c5b1a7ec04b7cfe40923e2->leave($__internal_c9ad345fb53a5c7e09a5e73cacccceeaeeb424f051c5b1a7ec04b7cfe40923e2_prof);

        
        $__internal_74d9808954e9016dc81b9d9c6fed6dd71ceb8a4cc578f62c4bdc21e8a7f2d25e->leave($__internal_74d9808954e9016dc81b9d9c6fed6dd71ceb8a4cc578f62c4bdc21e8a7f2d25e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ceb5489467c4bd138b688ef879e6baadf6bec37069ec5568dfbdf618a3e5b4a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceb5489467c4bd138b688ef879e6baadf6bec37069ec5568dfbdf618a3e5b4a1->enter($__internal_ceb5489467c4bd138b688ef879e6baadf6bec37069ec5568dfbdf618a3e5b4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_29727c1af74517980b32deb0d11b504f78239c2bc1890798e10eb6f5437399f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29727c1af74517980b32deb0d11b504f78239c2bc1890798e10eb6f5437399f8->enter($__internal_29727c1af74517980b32deb0d11b504f78239c2bc1890798e10eb6f5437399f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_29727c1af74517980b32deb0d11b504f78239c2bc1890798e10eb6f5437399f8->leave($__internal_29727c1af74517980b32deb0d11b504f78239c2bc1890798e10eb6f5437399f8_prof);

        
        $__internal_ceb5489467c4bd138b688ef879e6baadf6bec37069ec5568dfbdf618a3e5b4a1->leave($__internal_ceb5489467c4bd138b688ef879e6baadf6bec37069ec5568dfbdf618a3e5b4a1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/allotheatre/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
