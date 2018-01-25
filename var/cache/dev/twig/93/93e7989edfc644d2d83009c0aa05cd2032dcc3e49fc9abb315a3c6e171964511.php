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
        $__internal_7fae94d36935c12ede57bceef5cb2e1e226f8e97a68ffd1b847bddb706dd40ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fae94d36935c12ede57bceef5cb2e1e226f8e97a68ffd1b847bddb706dd40ee->enter($__internal_7fae94d36935c12ede57bceef5cb2e1e226f8e97a68ffd1b847bddb706dd40ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_578696166110c152c0a3aeca19c58cd69ef4fb18d48690cf0d4ca5494d22914d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_578696166110c152c0a3aeca19c58cd69ef4fb18d48690cf0d4ca5494d22914d->enter($__internal_578696166110c152c0a3aeca19c58cd69ef4fb18d48690cf0d4ca5494d22914d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fae94d36935c12ede57bceef5cb2e1e226f8e97a68ffd1b847bddb706dd40ee->leave($__internal_7fae94d36935c12ede57bceef5cb2e1e226f8e97a68ffd1b847bddb706dd40ee_prof);

        
        $__internal_578696166110c152c0a3aeca19c58cd69ef4fb18d48690cf0d4ca5494d22914d->leave($__internal_578696166110c152c0a3aeca19c58cd69ef4fb18d48690cf0d4ca5494d22914d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2c8dfd5b4221c538b69f3b84d4758ef6a3c48da45577671b497c81ac02035357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c8dfd5b4221c538b69f3b84d4758ef6a3c48da45577671b497c81ac02035357->enter($__internal_2c8dfd5b4221c538b69f3b84d4758ef6a3c48da45577671b497c81ac02035357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b3ba644a8b9cdfcb93bed9b8bcdecdcc8198b3189ab6b6cfb5f9fffd63f6fcb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ba644a8b9cdfcb93bed9b8bcdecdcc8198b3189ab6b6cfb5f9fffd63f6fcb6->enter($__internal_b3ba644a8b9cdfcb93bed9b8bcdecdcc8198b3189ab6b6cfb5f9fffd63f6fcb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b3ba644a8b9cdfcb93bed9b8bcdecdcc8198b3189ab6b6cfb5f9fffd63f6fcb6->leave($__internal_b3ba644a8b9cdfcb93bed9b8bcdecdcc8198b3189ab6b6cfb5f9fffd63f6fcb6_prof);

        
        $__internal_2c8dfd5b4221c538b69f3b84d4758ef6a3c48da45577671b497c81ac02035357->leave($__internal_2c8dfd5b4221c538b69f3b84d4758ef6a3c48da45577671b497c81ac02035357_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a2289751f14ea4aa582e0bf43024caa06b099f5cac69426b1d0cb215930b5a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a2289751f14ea4aa582e0bf43024caa06b099f5cac69426b1d0cb215930b5a0->enter($__internal_0a2289751f14ea4aa582e0bf43024caa06b099f5cac69426b1d0cb215930b5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_33e3e875024dd153e689ad9f4fd023f95c71b6dd5491c1b1265cdd27f84206ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e3e875024dd153e689ad9f4fd023f95c71b6dd5491c1b1265cdd27f84206ba->enter($__internal_33e3e875024dd153e689ad9f4fd023f95c71b6dd5491c1b1265cdd27f84206ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_33e3e875024dd153e689ad9f4fd023f95c71b6dd5491c1b1265cdd27f84206ba->leave($__internal_33e3e875024dd153e689ad9f4fd023f95c71b6dd5491c1b1265cdd27f84206ba_prof);

        
        $__internal_0a2289751f14ea4aa582e0bf43024caa06b099f5cac69426b1d0cb215930b5a0->leave($__internal_0a2289751f14ea4aa582e0bf43024caa06b099f5cac69426b1d0cb215930b5a0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5615a4b08f1b487d469c3628abe0e8285d73f6bf51633418ec6ca1cf6ccf623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5615a4b08f1b487d469c3628abe0e8285d73f6bf51633418ec6ca1cf6ccf623->enter($__internal_f5615a4b08f1b487d469c3628abe0e8285d73f6bf51633418ec6ca1cf6ccf623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c6aa503aaf072012f24b93b60a73ba91113320ece4d207049931ce1cb23da64a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6aa503aaf072012f24b93b60a73ba91113320ece4d207049931ce1cb23da64a->enter($__internal_c6aa503aaf072012f24b93b60a73ba91113320ece4d207049931ce1cb23da64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c6aa503aaf072012f24b93b60a73ba91113320ece4d207049931ce1cb23da64a->leave($__internal_c6aa503aaf072012f24b93b60a73ba91113320ece4d207049931ce1cb23da64a_prof);

        
        $__internal_f5615a4b08f1b487d469c3628abe0e8285d73f6bf51633418ec6ca1cf6ccf623->leave($__internal_f5615a4b08f1b487d469c3628abe0e8285d73f6bf51633418ec6ca1cf6ccf623_prof);

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
