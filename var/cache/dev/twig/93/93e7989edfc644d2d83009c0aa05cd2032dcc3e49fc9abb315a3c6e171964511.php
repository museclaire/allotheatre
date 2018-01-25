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
        $__internal_37403946b78956eab9777d550380cddf4074d1fba6e196c2746d42cca6c90330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37403946b78956eab9777d550380cddf4074d1fba6e196c2746d42cca6c90330->enter($__internal_37403946b78956eab9777d550380cddf4074d1fba6e196c2746d42cca6c90330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9ce1ab3454d892dc3b549f9826d8db0f24d28eb6c2560ab345df2c2c972fd560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ce1ab3454d892dc3b549f9826d8db0f24d28eb6c2560ab345df2c2c972fd560->enter($__internal_9ce1ab3454d892dc3b549f9826d8db0f24d28eb6c2560ab345df2c2c972fd560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37403946b78956eab9777d550380cddf4074d1fba6e196c2746d42cca6c90330->leave($__internal_37403946b78956eab9777d550380cddf4074d1fba6e196c2746d42cca6c90330_prof);

        
        $__internal_9ce1ab3454d892dc3b549f9826d8db0f24d28eb6c2560ab345df2c2c972fd560->leave($__internal_9ce1ab3454d892dc3b549f9826d8db0f24d28eb6c2560ab345df2c2c972fd560_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9c7a8fe8a441e61d245a883e26fe86188f92fcd944d8fee0063f8df9adb88367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c7a8fe8a441e61d245a883e26fe86188f92fcd944d8fee0063f8df9adb88367->enter($__internal_9c7a8fe8a441e61d245a883e26fe86188f92fcd944d8fee0063f8df9adb88367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_73c236b9127853707df33d3195f77a088d413c2c579b0ffe5446d5343b6d6bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c236b9127853707df33d3195f77a088d413c2c579b0ffe5446d5343b6d6bfc->enter($__internal_73c236b9127853707df33d3195f77a088d413c2c579b0ffe5446d5343b6d6bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_73c236b9127853707df33d3195f77a088d413c2c579b0ffe5446d5343b6d6bfc->leave($__internal_73c236b9127853707df33d3195f77a088d413c2c579b0ffe5446d5343b6d6bfc_prof);

        
        $__internal_9c7a8fe8a441e61d245a883e26fe86188f92fcd944d8fee0063f8df9adb88367->leave($__internal_9c7a8fe8a441e61d245a883e26fe86188f92fcd944d8fee0063f8df9adb88367_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6241db3a5d902352e6ef3693f6e6107d39aea78425b6f6d9c68856758b0c7c5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6241db3a5d902352e6ef3693f6e6107d39aea78425b6f6d9c68856758b0c7c5d->enter($__internal_6241db3a5d902352e6ef3693f6e6107d39aea78425b6f6d9c68856758b0c7c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8361ec24b713b33e994e8c68d0267ce475fab8be6be6611b647da74e77de281f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8361ec24b713b33e994e8c68d0267ce475fab8be6be6611b647da74e77de281f->enter($__internal_8361ec24b713b33e994e8c68d0267ce475fab8be6be6611b647da74e77de281f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_8361ec24b713b33e994e8c68d0267ce475fab8be6be6611b647da74e77de281f->leave($__internal_8361ec24b713b33e994e8c68d0267ce475fab8be6be6611b647da74e77de281f_prof);

        
        $__internal_6241db3a5d902352e6ef3693f6e6107d39aea78425b6f6d9c68856758b0c7c5d->leave($__internal_6241db3a5d902352e6ef3693f6e6107d39aea78425b6f6d9c68856758b0c7c5d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_21077eeae5ff5337293cc02a6a443390a7c8b859fd20a95627628b9ffa097ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21077eeae5ff5337293cc02a6a443390a7c8b859fd20a95627628b9ffa097ddf->enter($__internal_21077eeae5ff5337293cc02a6a443390a7c8b859fd20a95627628b9ffa097ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_53e0e2fbed1ef27e44be6448e69f058a354bac6fc6b4f495b129a8686075c5f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53e0e2fbed1ef27e44be6448e69f058a354bac6fc6b4f495b129a8686075c5f5->enter($__internal_53e0e2fbed1ef27e44be6448e69f058a354bac6fc6b4f495b129a8686075c5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_53e0e2fbed1ef27e44be6448e69f058a354bac6fc6b4f495b129a8686075c5f5->leave($__internal_53e0e2fbed1ef27e44be6448e69f058a354bac6fc6b4f495b129a8686075c5f5_prof);

        
        $__internal_21077eeae5ff5337293cc02a6a443390a7c8b859fd20a95627628b9ffa097ddf->leave($__internal_21077eeae5ff5337293cc02a6a443390a7c8b859fd20a95627628b9ffa097ddf_prof);

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