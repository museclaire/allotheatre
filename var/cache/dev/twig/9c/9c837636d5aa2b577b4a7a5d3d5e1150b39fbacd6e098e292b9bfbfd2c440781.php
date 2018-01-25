<?php

/* @WebProfiler/Collector/translation.html.twig */
class __TwigTemplate_abba875b7ed9bfea7fb426c563ee87c41a463e713e6b45843f80617e977ba72c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/translation.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
            'messages' => array($this, 'block_messages'),
            'defined_messages' => array($this, 'block_defined_messages'),
            'fallback_messages' => array($this, 'block_fallback_messages'),
            'missing_messages' => array($this, 'block_missing_messages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e94955d7268f7c46d50ed714149218371e77db916d4986920d91b56926a6635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e94955d7268f7c46d50ed714149218371e77db916d4986920d91b56926a6635->enter($__internal_1e94955d7268f7c46d50ed714149218371e77db916d4986920d91b56926a6635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/translation.html.twig"));

        $__internal_2d58eb12cb61339ad2c5fb3134ee54ccebcc840fefb3200242864536a5d7b990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d58eb12cb61339ad2c5fb3134ee54ccebcc840fefb3200242864536a5d7b990->enter($__internal_2d58eb12cb61339ad2c5fb3134ee54ccebcc840fefb3200242864536a5d7b990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/translation.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e94955d7268f7c46d50ed714149218371e77db916d4986920d91b56926a6635->leave($__internal_1e94955d7268f7c46d50ed714149218371e77db916d4986920d91b56926a6635_prof);

        
        $__internal_2d58eb12cb61339ad2c5fb3134ee54ccebcc840fefb3200242864536a5d7b990->leave($__internal_2d58eb12cb61339ad2c5fb3134ee54ccebcc840fefb3200242864536a5d7b990_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b8e1e95dd3b14375d3e21c917fbc3b385450d1ff65907608a6cca8921870695b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8e1e95dd3b14375d3e21c917fbc3b385450d1ff65907608a6cca8921870695b->enter($__internal_b8e1e95dd3b14375d3e21c917fbc3b385450d1ff65907608a6cca8921870695b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_22a33659ea9eec435de23885bb133ba32a8e48460ba59f1a63cc856fd98b4d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22a33659ea9eec435de23885bb133ba32a8e48460ba59f1a63cc856fd98b4d4e->enter($__internal_22a33659ea9eec435de23885bb133ba32a8e48460ba59f1a63cc856fd98b4d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 6, $this->getSourceContext()); })()), "messages", array()))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/translation.svg");
            echo "
            ";
            // line 9
            $context["status_color"] = ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 9, $this->getSourceContext()); })()), "countMissings", array())) ? ("red") : (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 9, $this->getSourceContext()); })()), "countFallbacks", array())) ? ("yellow") : (""))));
            // line 10
            echo "            ";
            $context["error_count"] = (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 10, $this->getSourceContext()); })()), "countMissings", array()) + twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 10, $this->getSourceContext()); })()), "countFallbacks", array()));
            // line 11
            echo "            <span class=\"sf-toolbar-value\">";
            echo twig_escape_filter($this->env, (((isset($context["error_count"]) || array_key_exists("error_count", $context) ? $context["error_count"] : (function () { throw new Twig_Error_Runtime('Variable "error_count" does not exist.', 11, $this->getSourceContext()); })())) ? ((isset($context["error_count"]) || array_key_exists("error_count", $context) ? $context["error_count"] : (function () { throw new Twig_Error_Runtime('Variable "error_count" does not exist.', 11, $this->getSourceContext()); })())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 11, $this->getSourceContext()); })()), "countDefines", array()))), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 13
            echo "
        ";
            // line 14
            ob_start();
            // line 15
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Locale</b>
                <span class=\"sf-toolbar-status\">
                    ";
            // line 18
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "locale", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "locale", array()), "-")) : ("-")), "html", null, true);
            echo "
                </span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Missing messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 23
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 23, $this->getSourceContext()); })()), "countMissings", array())) ? ("red") : (""));
            echo "\">
                    ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 24, $this->getSourceContext()); })()), "countMissings", array()), "html", null, true);
            echo "
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Fallback messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 30
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 30, $this->getSourceContext()); })()), "countFallbacks", array())) ? ("yellow") : (""));
            echo "\">
                    ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 31, $this->getSourceContext()); })()), "countFallbacks", array()), "html", null, true);
            echo "
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Defined messages</b>
                <span class=\"sf-toolbar-status\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 37, $this->getSourceContext()); })()), "countDefines", array()), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 40
            echo "
        ";
            // line 41
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 41, $this->getSourceContext()); })()), "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new Twig_Error_Runtime('Variable "status_color" does not exist.', 41, $this->getSourceContext()); })())));
            echo "
    ";
        }
        
        $__internal_22a33659ea9eec435de23885bb133ba32a8e48460ba59f1a63cc856fd98b4d4e->leave($__internal_22a33659ea9eec435de23885bb133ba32a8e48460ba59f1a63cc856fd98b4d4e_prof);

        
        $__internal_b8e1e95dd3b14375d3e21c917fbc3b385450d1ff65907608a6cca8921870695b->leave($__internal_b8e1e95dd3b14375d3e21c917fbc3b385450d1ff65907608a6cca8921870695b_prof);

    }

    // line 45
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2261efbbc6d6d221192063c48ee5dd80c234529e58b8eb401d37f197c3db6d8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2261efbbc6d6d221192063c48ee5dd80c234529e58b8eb401d37f197c3db6d8d->enter($__internal_2261efbbc6d6d221192063c48ee5dd80c234529e58b8eb401d37f197c3db6d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bef7064ea6e7eee8f695855eceab0d97e67514e801a6763cfe3f030878da517d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef7064ea6e7eee8f695855eceab0d97e67514e801a6763cfe3f030878da517d->enter($__internal_bef7064ea6e7eee8f695855eceab0d97e67514e801a6763cfe3f030878da517d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 46
        echo "    <span class=\"label label-status-";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 46, $this->getSourceContext()); })()), "countMissings", array())) ? ("error") : (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 46, $this->getSourceContext()); })()), "countFallbacks", array())) ? ("warning") : (""))));
        echo " ";
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 46, $this->getSourceContext()); })()), "messages", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 47
        echo twig_include($this->env, $context, "@WebProfiler/Icon/translation.svg");
        echo "</span>
        <strong>Translation</strong>
        ";
        // line 49
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 49, $this->getSourceContext()); })()), "countMissings", array()) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 49, $this->getSourceContext()); })()), "countFallbacks", array()))) {
            // line 50
            echo "            ";
            $context["error_count"] = (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 50, $this->getSourceContext()); })()), "countMissings", array()) + twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 50, $this->getSourceContext()); })()), "countFallbacks", array()));
            // line 51
            echo "            <span class=\"count\">
                <span>";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["error_count"]) || array_key_exists("error_count", $context) ? $context["error_count"] : (function () { throw new Twig_Error_Runtime('Variable "error_count" does not exist.', 52, $this->getSourceContext()); })()), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 55
        echo "    </span>
";
        
        $__internal_bef7064ea6e7eee8f695855eceab0d97e67514e801a6763cfe3f030878da517d->leave($__internal_bef7064ea6e7eee8f695855eceab0d97e67514e801a6763cfe3f030878da517d_prof);

        
        $__internal_2261efbbc6d6d221192063c48ee5dd80c234529e58b8eb401d37f197c3db6d8d->leave($__internal_2261efbbc6d6d221192063c48ee5dd80c234529e58b8eb401d37f197c3db6d8d_prof);

    }

    // line 58
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2181d8dbe2570cfe7e66fe95782d6106dc84560410249ef04f08111f6bd6e2be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2181d8dbe2570cfe7e66fe95782d6106dc84560410249ef04f08111f6bd6e2be->enter($__internal_2181d8dbe2570cfe7e66fe95782d6106dc84560410249ef04f08111f6bd6e2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7bb747569088375aaed74b48e5ef7ba47115b409df646ccc9a902045800fbf18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb747569088375aaed74b48e5ef7ba47115b409df646ccc9a902045800fbf18->enter($__internal_7bb747569088375aaed74b48e5ef7ba47115b409df646ccc9a902045800fbf18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 59
        echo "    ";
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 59, $this->getSourceContext()); })()), "messages", array()))) {
            // line 60
            echo "        <h2>Translations</h2>
        <div class=\"empty\">
            <p>No translations have been called.</p>
        </div>
    ";
        } else {
            // line 65
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_7bb747569088375aaed74b48e5ef7ba47115b409df646ccc9a902045800fbf18->leave($__internal_7bb747569088375aaed74b48e5ef7ba47115b409df646ccc9a902045800fbf18_prof);

        
        $__internal_2181d8dbe2570cfe7e66fe95782d6106dc84560410249ef04f08111f6bd6e2be->leave($__internal_2181d8dbe2570cfe7e66fe95782d6106dc84560410249ef04f08111f6bd6e2be_prof);

    }

    // line 69
    public function block_panelContent($context, array $blocks = array())
    {
        $__internal_e004c411f0ce75036f5c4cca662033c247f237bea6487ed580210b5684b533e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e004c411f0ce75036f5c4cca662033c247f237bea6487ed580210b5684b533e9->enter($__internal_e004c411f0ce75036f5c4cca662033c247f237bea6487ed580210b5684b533e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        $__internal_97ce485927637098d85bc1ee9c49d5118aa6a60d96f481679a52e512e961843f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ce485927637098d85bc1ee9c49d5118aa6a60d96f481679a52e512e961843f->enter($__internal_97ce485927637098d85bc1ee9c49d5118aa6a60d96f481679a52e512e961843f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        // line 70
        echo "
    <h2>Translation Locales</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 75
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "locale", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "locale", array()), "-")) : ("-")), "html", null, true);
        echo "</span>
            <span class=\"label\">Locale</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 79
        echo twig_escape_filter($this->env, _twig_default_filter(twig_join_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 79, $this->getSourceContext()); })()), "fallbackLocales", array()), ", "), "-"), "html", null, true);
        echo "</span>
            <span class=\"label\">Fallback locales</span>
        </div>
    </div>

    <h2>Translation Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 88, $this->getSourceContext()); })()), "countDefines", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Defined messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 93, $this->getSourceContext()); })()), "countFallbacks", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Fallback messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 98, $this->getSourceContext()); })()), "countMissings", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Missing messages</span>
        </div>
    </div>

    <h2>Translation Messages</h2>

    ";
        // line 105
        $this->displayBlock('messages', $context, $blocks);
        // line 185
        echo "
";
        
        $__internal_97ce485927637098d85bc1ee9c49d5118aa6a60d96f481679a52e512e961843f->leave($__internal_97ce485927637098d85bc1ee9c49d5118aa6a60d96f481679a52e512e961843f_prof);

        
        $__internal_e004c411f0ce75036f5c4cca662033c247f237bea6487ed580210b5684b533e9->leave($__internal_e004c411f0ce75036f5c4cca662033c247f237bea6487ed580210b5684b533e9_prof);

    }

    // line 105
    public function block_messages($context, array $blocks = array())
    {
        $__internal_261d06c8bdfef4f62664b057d802f37f531fd6eb25828d8ff1ac7baa469b8c47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_261d06c8bdfef4f62664b057d802f37f531fd6eb25828d8ff1ac7baa469b8c47->enter($__internal_261d06c8bdfef4f62664b057d802f37f531fd6eb25828d8ff1ac7baa469b8c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        $__internal_24b46ae6ae40dc1f911a38012063a6f47e721e08ecd0d863530cabb000a169e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b46ae6ae40dc1f911a38012063a6f47e721e08ecd0d863530cabb000a169e2->enter($__internal_24b46ae6ae40dc1f911a38012063a6f47e721e08ecd0d863530cabb000a169e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 106
        echo "
    ";
        // line 108
        echo "    ";
        list($context["messages_defined"], $context["messages_missing"], $context["messages_fallback"]) =         array(array(), array(), array());
        // line 109
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 109, $this->getSourceContext()); })()), "messages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 110
            echo "        ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "state", array()) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_DEFINED"))) {
                // line 111
                echo "            ";
                $context["messages_defined"] = twig_array_merge((isset($context["messages_defined"]) || array_key_exists("messages_defined", $context) ? $context["messages_defined"] : (function () { throw new Twig_Error_Runtime('Variable "messages_defined" does not exist.', 111, $this->getSourceContext()); })()), array(0 => $context["message"]));
                // line 112
                echo "        ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "state", array()) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_MISSING"))) {
                // line 113
                echo "            ";
                $context["messages_missing"] = twig_array_merge((isset($context["messages_missing"]) || array_key_exists("messages_missing", $context) ? $context["messages_missing"] : (function () { throw new Twig_Error_Runtime('Variable "messages_missing" does not exist.', 113, $this->getSourceContext()); })()), array(0 => $context["message"]));
                // line 114
                echo "        ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "state", array()) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK"))) {
                // line 115
                echo "            ";
                $context["messages_fallback"] = twig_array_merge((isset($context["messages_fallback"]) || array_key_exists("messages_fallback", $context) ? $context["messages_fallback"] : (function () { throw new Twig_Error_Runtime('Variable "messages_fallback" does not exist.', 115, $this->getSourceContext()); })()), array(0 => $context["message"]));
                // line 116
                echo "        ";
            }
            // line 117
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Defined <span class=\"badge\">";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 121, $this->getSourceContext()); })()), "countDefines", array()), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are correctly translated into the given locale.
                </p>

                ";
        // line 128
        if (twig_test_empty((isset($context["messages_defined"]) || array_key_exists("messages_defined", $context) ? $context["messages_defined"] : (function () { throw new Twig_Error_Runtime('Variable "messages_defined" does not exist.', 128, $this->getSourceContext()); })()))) {
            // line 129
            echo "                    <div class=\"empty\">
                        <p>None of the used translation messages are defined for the given locale.</p>
                    </div>
                ";
        } else {
            // line 133
            echo "                    ";
            $this->displayBlock('defined_messages', $context, $blocks);
            // line 136
            echo "                ";
        }
        // line 137
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Fallback <span class=\"badge ";
        // line 141
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 141, $this->getSourceContext()); })()), "countFallbacks", array())) ? ("status-warning") : (""));
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 141, $this->getSourceContext()); })()), "countFallbacks", array()), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale
                    but Symfony found them in the fallback locale catalog.
                </p>

                ";
        // line 149
        if (twig_test_empty((isset($context["messages_fallback"]) || array_key_exists("messages_fallback", $context) ? $context["messages_fallback"] : (function () { throw new Twig_Error_Runtime('Variable "messages_fallback" does not exist.', 149, $this->getSourceContext()); })()))) {
            // line 150
            echo "                    <div class=\"empty\">
                        <p>No fallback translation messages were used.</p>
                    </div>
                ";
        } else {
            // line 154
            echo "                    ";
            $this->displayBlock('fallback_messages', $context, $blocks);
            // line 157
            echo "                ";
        }
        // line 158
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Missing <span class=\"badge ";
        // line 162
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 162, $this->getSourceContext()); })()), "countMissings", array())) ? ("status-error") : (""));
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 162, $this->getSourceContext()); })()), "countMissings", array()), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale and cannot
                    be found in the fallback locales. Add them to the translation
                    catalogue to avoid Symfony outputting untranslated contents.
                </p>

                ";
        // line 171
        if (twig_test_empty((isset($context["messages_missing"]) || array_key_exists("messages_missing", $context) ? $context["messages_missing"] : (function () { throw new Twig_Error_Runtime('Variable "messages_missing" does not exist.', 171, $this->getSourceContext()); })()))) {
            // line 172
            echo "                    <div class=\"empty\">
                        <p>There are no messages of this category.</p>
                    </div>
                ";
        } else {
            // line 176
            echo "                    ";
            $this->displayBlock('missing_messages', $context, $blocks);
            // line 179
            echo "                ";
        }
        // line 180
        echo "            </div>
        </div>
    </div>

    ";
        
        $__internal_24b46ae6ae40dc1f911a38012063a6f47e721e08ecd0d863530cabb000a169e2->leave($__internal_24b46ae6ae40dc1f911a38012063a6f47e721e08ecd0d863530cabb000a169e2_prof);

        
        $__internal_261d06c8bdfef4f62664b057d802f37f531fd6eb25828d8ff1ac7baa469b8c47->leave($__internal_261d06c8bdfef4f62664b057d802f37f531fd6eb25828d8ff1ac7baa469b8c47_prof);

    }

    // line 133
    public function block_defined_messages($context, array $blocks = array())
    {
        $__internal_a9985acc8fb5d41d67ef21458fca1a579934fc51cd05c9df4fd7170bf665280c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9985acc8fb5d41d67ef21458fca1a579934fc51cd05c9df4fd7170bf665280c->enter($__internal_a9985acc8fb5d41d67ef21458fca1a579934fc51cd05c9df4fd7170bf665280c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "defined_messages"));

        $__internal_d2d743d89eade12e77a5785bd6d9ffecaecf413ca1a3eec73dc576ea121fb472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d743d89eade12e77a5785bd6d9ffecaecf413ca1a3eec73dc576ea121fb472->enter($__internal_d2d743d89eade12e77a5785bd6d9ffecaecf413ca1a3eec73dc576ea121fb472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "defined_messages"));

        // line 134
        echo "                        ";
        echo $context["helper"]->macro_render_table((isset($context["messages_defined"]) || array_key_exists("messages_defined", $context) ? $context["messages_defined"] : (function () { throw new Twig_Error_Runtime('Variable "messages_defined" does not exist.', 134, $this->getSourceContext()); })()));
        echo "
                    ";
        
        $__internal_d2d743d89eade12e77a5785bd6d9ffecaecf413ca1a3eec73dc576ea121fb472->leave($__internal_d2d743d89eade12e77a5785bd6d9ffecaecf413ca1a3eec73dc576ea121fb472_prof);

        
        $__internal_a9985acc8fb5d41d67ef21458fca1a579934fc51cd05c9df4fd7170bf665280c->leave($__internal_a9985acc8fb5d41d67ef21458fca1a579934fc51cd05c9df4fd7170bf665280c_prof);

    }

    // line 154
    public function block_fallback_messages($context, array $blocks = array())
    {
        $__internal_03ae1695b836031490c8cf9d754f1fe9e5a4361ad354977b2363d82eb1fa9111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03ae1695b836031490c8cf9d754f1fe9e5a4361ad354977b2363d82eb1fa9111->enter($__internal_03ae1695b836031490c8cf9d754f1fe9e5a4361ad354977b2363d82eb1fa9111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fallback_messages"));

        $__internal_a83229c77fc96da45c55eda5cf66efb90b3b48ddebd700eddafb45fa1c14ae82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a83229c77fc96da45c55eda5cf66efb90b3b48ddebd700eddafb45fa1c14ae82->enter($__internal_a83229c77fc96da45c55eda5cf66efb90b3b48ddebd700eddafb45fa1c14ae82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fallback_messages"));

        // line 155
        echo "                        ";
        echo $context["helper"]->macro_render_table((isset($context["messages_fallback"]) || array_key_exists("messages_fallback", $context) ? $context["messages_fallback"] : (function () { throw new Twig_Error_Runtime('Variable "messages_fallback" does not exist.', 155, $this->getSourceContext()); })()));
        echo "
                    ";
        
        $__internal_a83229c77fc96da45c55eda5cf66efb90b3b48ddebd700eddafb45fa1c14ae82->leave($__internal_a83229c77fc96da45c55eda5cf66efb90b3b48ddebd700eddafb45fa1c14ae82_prof);

        
        $__internal_03ae1695b836031490c8cf9d754f1fe9e5a4361ad354977b2363d82eb1fa9111->leave($__internal_03ae1695b836031490c8cf9d754f1fe9e5a4361ad354977b2363d82eb1fa9111_prof);

    }

    // line 176
    public function block_missing_messages($context, array $blocks = array())
    {
        $__internal_d0d7649d9913efd9c3bd68131bc22b60155d591f17df8d5bb41183bdd6cfdf98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0d7649d9913efd9c3bd68131bc22b60155d591f17df8d5bb41183bdd6cfdf98->enter($__internal_d0d7649d9913efd9c3bd68131bc22b60155d591f17df8d5bb41183bdd6cfdf98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "missing_messages"));

        $__internal_b66513b426fff7d685d4c4843dba55673dec46df9ad591d5973b2135a32046eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b66513b426fff7d685d4c4843dba55673dec46df9ad591d5973b2135a32046eb->enter($__internal_b66513b426fff7d685d4c4843dba55673dec46df9ad591d5973b2135a32046eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "missing_messages"));

        // line 177
        echo "                        ";
        echo $context["helper"]->macro_render_table((isset($context["messages_missing"]) || array_key_exists("messages_missing", $context) ? $context["messages_missing"] : (function () { throw new Twig_Error_Runtime('Variable "messages_missing" does not exist.', 177, $this->getSourceContext()); })()));
        echo "
                    ";
        
        $__internal_b66513b426fff7d685d4c4843dba55673dec46df9ad591d5973b2135a32046eb->leave($__internal_b66513b426fff7d685d4c4843dba55673dec46df9ad591d5973b2135a32046eb_prof);

        
        $__internal_d0d7649d9913efd9c3bd68131bc22b60155d591f17df8d5bb41183bdd6cfdf98->leave($__internal_d0d7649d9913efd9c3bd68131bc22b60155d591f17df8d5bb41183bdd6cfdf98_prof);

    }

    // line 188
    public function macro_render_table($__messages__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "messages" => $__messages__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_54844c895f1f8115370a4fbe1cf3c94358a363a5ab2b1014b518352f090a285a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_54844c895f1f8115370a4fbe1cf3c94358a363a5ab2b1014b518352f090a285a->enter($__internal_54844c895f1f8115370a4fbe1cf3c94358a363a5ab2b1014b518352f090a285a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_20e57d01970ddc2195b4808545cf755e4616dab5e8438d605966199080a4e21f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_20e57d01970ddc2195b4808545cf755e4616dab5e8438d605966199080a4e21f->enter($__internal_20e57d01970ddc2195b4808545cf755e4616dab5e8438d605966199080a4e21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 189
            echo "    <table>
        <thead>
            <tr>
                <th>Locale</th>
                <th>Domain</th>
                <th>Times used</th>
                <th>Message ID</th>
                <th>Message Preview</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 200
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 200, $this->getSourceContext()); })()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 201
                echo "            <tr>
                <td class=\"font-normal text-small\">";
                // line 202
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "locale", array()), "html", null, true);
                echo "</td>
                <td class=\"font-normal text-small text-bold nowrap\">";
                // line 203
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "domain", array()), "html", null, true);
                echo "</td>
                <td class=\"font-normal text-small\">";
                // line 204
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "count", array()), "html", null, true);
                echo "</td>
                <td>
                    <span class=\"nowrap\">";
                // line 206
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "id", array()), "html", null, true);
                echo "</span>

                    ";
                // line 208
                if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "transChoiceNumber", array()))) {
                    // line 209
                    echo "                        <small class=\"newline\">(pluralization is used)</small>
                    ";
                }
                // line 211
                echo "
                    ";
                // line 212
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "parameters", array())) > 0)) {
                    // line 213
                    echo "                        <button class=\"btn-link newline text-small sf-toggle\" data-toggle-selector=\"#parameters-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide parameters\">Show parameters</button>

                        <div id=\"parameters-";
                    // line 215
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                    echo "\" class=\"hidden\">
                            ";
                    // line 216
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "parameters", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["parameters"]) {
                        // line 217
                        echo "                                ";
                        echo $this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpData($this->env, $context["parameters"], 1);
                        echo "
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parameters'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 219
                    echo "                        </div>
                    ";
                }
                // line 221
                echo "                </td>
                <td class=\"prewrap\">";
                // line 222
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "translation", array()), "html", null, true);
                echo "</td>
            </tr>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "        </tbody>
    </table>
";
            
            $__internal_20e57d01970ddc2195b4808545cf755e4616dab5e8438d605966199080a4e21f->leave($__internal_20e57d01970ddc2195b4808545cf755e4616dab5e8438d605966199080a4e21f_prof);

            
            $__internal_54844c895f1f8115370a4fbe1cf3c94358a363a5ab2b1014b518352f090a285a->leave($__internal_54844c895f1f8115370a4fbe1cf3c94358a363a5ab2b1014b518352f090a285a_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/translation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  650 => 225,  633 => 222,  630 => 221,  626 => 219,  617 => 217,  613 => 216,  609 => 215,  603 => 213,  601 => 212,  598 => 211,  594 => 209,  592 => 208,  587 => 206,  582 => 204,  578 => 203,  574 => 202,  571 => 201,  554 => 200,  541 => 189,  523 => 188,  510 => 177,  501 => 176,  488 => 155,  479 => 154,  466 => 134,  457 => 133,  443 => 180,  440 => 179,  437 => 176,  431 => 172,  429 => 171,  415 => 162,  409 => 158,  406 => 157,  403 => 154,  397 => 150,  395 => 149,  382 => 141,  376 => 137,  373 => 136,  370 => 133,  364 => 129,  362 => 128,  352 => 121,  347 => 118,  341 => 117,  338 => 116,  335 => 115,  332 => 114,  329 => 113,  326 => 112,  323 => 111,  320 => 110,  315 => 109,  312 => 108,  309 => 106,  300 => 105,  289 => 185,  287 => 105,  277 => 98,  269 => 93,  261 => 88,  249 => 79,  242 => 75,  235 => 70,  226 => 69,  212 => 65,  205 => 60,  202 => 59,  193 => 58,  182 => 55,  176 => 52,  173 => 51,  170 => 50,  168 => 49,  163 => 47,  156 => 46,  147 => 45,  134 => 41,  131 => 40,  125 => 37,  116 => 31,  112 => 30,  103 => 24,  99 => 23,  91 => 18,  86 => 15,  84 => 14,  81 => 13,  75 => 11,  72 => 10,  70 => 9,  65 => 8,  62 => 7,  59 => 6,  50 => 5,  40 => 1,  38 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% if collector.messages|length %}
        {% set icon %}
            {{ include('@WebProfiler/Icon/translation.svg') }}
            {% set status_color = collector.countMissings ? 'red' : collector.countFallbacks ? 'yellow' %}
            {% set error_count = collector.countMissings + collector.countFallbacks %}
            <span class=\"sf-toolbar-value\">{{ error_count ?: collector.countDefines }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Locale</b>
                <span class=\"sf-toolbar-status\">
                    {{ collector.locale|default('-') }}
                </span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Missing messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countMissings ? 'red' }}\">
                    {{ collector.countMissings }}
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Fallback messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countFallbacks ? 'yellow' }}\">
                    {{ collector.countFallbacks }}
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Defined messages</b>
                <span class=\"sf-toolbar-status\">{{ collector.countDefines }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.countMissings ? 'error' : collector.countFallbacks ? 'warning' }} {{ collector.messages is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/translation.svg') }}</span>
        <strong>Translation</strong>
        {% if collector.countMissings or collector.countFallbacks %}
            {% set error_count = collector.countMissings + collector.countFallbacks %}
            <span class=\"count\">
                <span>{{ error_count }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    {% if collector.messages is empty %}
        <h2>Translations</h2>
        <div class=\"empty\">
            <p>No translations have been called.</p>
        </div>
    {% else %}
        {{ block('panelContent') }}
    {% endif %}
{% endblock %}

{% block panelContent %}

    <h2>Translation Locales</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.locale|default('-') }}</span>
            <span class=\"label\">Locale</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ collector.fallbackLocales|join(', ')|default('-') }}</span>
            <span class=\"label\">Fallback locales</span>
        </div>
    </div>

    <h2>Translation Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.countDefines }}</span>
            <span class=\"label\">Defined messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.countFallbacks }}</span>
            <span class=\"label\">Fallback messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.countMissings }}</span>
            <span class=\"label\">Missing messages</span>
        </div>
    </div>

    <h2>Translation Messages</h2>

    {% block messages %}

    {# sort translation messages in groups #}
    {% set messages_defined, messages_missing, messages_fallback = [], [], [] %}
    {% for message in collector.messages %}
        {% if message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_DEFINED') %}
            {% set messages_defined = messages_defined|merge([message]) %}
        {% elseif message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_MISSING') %}
            {% set messages_missing = messages_missing|merge([message]) %}
        {% elseif message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK') %}
            {% set messages_fallback = messages_fallback|merge([message]) %}
        {% endif %}
    {% endfor %}

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Defined <span class=\"badge\">{{ collector.countDefines }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are correctly translated into the given locale.
                </p>

                {% if messages_defined is empty %}
                    <div class=\"empty\">
                        <p>None of the used translation messages are defined for the given locale.</p>
                    </div>
                {% else %}
                    {% block defined_messages %}
                        {{ helper.render_table(messages_defined) }}
                    {% endblock %}
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Fallback <span class=\"badge {{ collector.countFallbacks ? 'status-warning' }}\">{{ collector.countFallbacks }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale
                    but Symfony found them in the fallback locale catalog.
                </p>

                {% if messages_fallback is empty %}
                    <div class=\"empty\">
                        <p>No fallback translation messages were used.</p>
                    </div>
                {% else %}
                    {% block fallback_messages %}
                        {{ helper.render_table(messages_fallback) }}
                    {% endblock %}
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Missing <span class=\"badge {{ collector.countMissings ? 'status-error' }}\">{{ collector.countMissings }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale and cannot
                    be found in the fallback locales. Add them to the translation
                    catalogue to avoid Symfony outputting untranslated contents.
                </p>

                {% if messages_missing is empty %}
                    <div class=\"empty\">
                        <p>There are no messages of this category.</p>
                    </div>
                {% else %}
                    {% block missing_messages %}
                        {{ helper.render_table(messages_missing) }}
                    {% endblock %}
                {% endif %}
            </div>
        </div>
    </div>

    {% endblock messages %}

{% endblock %}

{% macro render_table(messages) %}
    <table>
        <thead>
            <tr>
                <th>Locale</th>
                <th>Domain</th>
                <th>Times used</th>
                <th>Message ID</th>
                <th>Message Preview</th>
            </tr>
        </thead>
        <tbody>
        {% for message in messages %}
            <tr>
                <td class=\"font-normal text-small\">{{ message.locale }}</td>
                <td class=\"font-normal text-small text-bold nowrap\">{{ message.domain }}</td>
                <td class=\"font-normal text-small\">{{ message.count }}</td>
                <td>
                    <span class=\"nowrap\">{{ message.id }}</span>

                    {% if message.transChoiceNumber is not null %}
                        <small class=\"newline\">(pluralization is used)</small>
                    {% endif %}

                    {% if message.parameters|length > 0 %}
                        <button class=\"btn-link newline text-small sf-toggle\" data-toggle-selector=\"#parameters-{{ loop.index }}\" data-toggle-alt-content=\"Hide parameters\">Show parameters</button>

                        <div id=\"parameters-{{ loop.index }}\" class=\"hidden\">
                            {% for parameters in message.parameters %}
                                {{ profiler_dump(parameters, maxDepth=1) }}
                            {% endfor %}
                        </div>
                    {% endif %}
                </td>
                <td class=\"prewrap\">{{ message.translation }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}
", "@WebProfiler/Collector/translation.html.twig", "D:\\Programmes\\Xampp\\htdocs\\allotheatre\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\translation.html.twig");
    }
}
