<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_2200b168ef3fbdeae393f51fd8308ab7aef1ec213195a5f3f0c1482526f9956d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4e6b00b92887098e08c2c28d9774731f1811b3984ab1cab9ef4231f892a437f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4e6b00b92887098e08c2c28d9774731f1811b3984ab1cab9ef4231f892a437f->enter($__internal_e4e6b00b92887098e08c2c28d9774731f1811b3984ab1cab9ef4231f892a437f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_1acf4fa0927b8a93a9cc39c13bd53e119d0b64ee8935a0ce979c700bc953df98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1acf4fa0927b8a93a9cc39c13bd53e119d0b64ee8935a0ce979c700bc953df98->enter($__internal_1acf4fa0927b8a93a9cc39c13bd53e119d0b64ee8935a0ce979c700bc953df98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4e6b00b92887098e08c2c28d9774731f1811b3984ab1cab9ef4231f892a437f->leave($__internal_e4e6b00b92887098e08c2c28d9774731f1811b3984ab1cab9ef4231f892a437f_prof);

        
        $__internal_1acf4fa0927b8a93a9cc39c13bd53e119d0b64ee8935a0ce979c700bc953df98->leave($__internal_1acf4fa0927b8a93a9cc39c13bd53e119d0b64ee8935a0ce979c700bc953df98_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8e9c6141077b3d9b603079f8a3d40e239921d62bb5ce5d4a759fe3a86f3edd0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e9c6141077b3d9b603079f8a3d40e239921d62bb5ce5d4a759fe3a86f3edd0c->enter($__internal_8e9c6141077b3d9b603079f8a3d40e239921d62bb5ce5d4a759fe3a86f3edd0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bebf27f665aca5046a3279aa6b60c1dfe6ecada884a4df88c75b148d5117c080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bebf27f665aca5046a3279aa6b60c1dfe6ecada884a4df88c75b148d5117c080->enter($__internal_bebf27f665aca5046a3279aa6b60c1dfe6ecada884a4df88c75b148d5117c080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_bebf27f665aca5046a3279aa6b60c1dfe6ecada884a4df88c75b148d5117c080->leave($__internal_bebf27f665aca5046a3279aa6b60c1dfe6ecada884a4df88c75b148d5117c080_prof);

        
        $__internal_8e9c6141077b3d9b603079f8a3d40e239921d62bb5ce5d4a759fe3a86f3edd0c->leave($__internal_8e9c6141077b3d9b603079f8a3d40e239921d62bb5ce5d4a759fe3a86f3edd0c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/allotheatre/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
