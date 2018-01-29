<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_38442a74564d83394274fdaf508c02d026fc18c4e9db63280b601897ab419170 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8bfcd6b667fbd2cca1ce8c6c9fbc58f1b7c5176f47aa5f4a058b853f54bf0eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8bfcd6b667fbd2cca1ce8c6c9fbc58f1b7c5176f47aa5f4a058b853f54bf0eb->enter($__internal_c8bfcd6b667fbd2cca1ce8c6c9fbc58f1b7c5176f47aa5f4a058b853f54bf0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a95d1a120b5987ede8c41c1ff4147c47c21858c201b522a0ff4b847d800059c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a95d1a120b5987ede8c41c1ff4147c47c21858c201b522a0ff4b847d800059c1->enter($__internal_a95d1a120b5987ede8c41c1ff4147c47c21858c201b522a0ff4b847d800059c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_c8bfcd6b667fbd2cca1ce8c6c9fbc58f1b7c5176f47aa5f4a058b853f54bf0eb->leave($__internal_c8bfcd6b667fbd2cca1ce8c6c9fbc58f1b7c5176f47aa5f4a058b853f54bf0eb_prof);

        
        $__internal_a95d1a120b5987ede8c41c1ff4147c47c21858c201b522a0ff4b847d800059c1->leave($__internal_a95d1a120b5987ede8c41c1ff4147c47c21858c201b522a0ff4b847d800059c1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a4146b2810c697d30c51117dc79915957ecfb35e79679b5c602cbd258b336a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a4146b2810c697d30c51117dc79915957ecfb35e79679b5c602cbd258b336a1->enter($__internal_5a4146b2810c697d30c51117dc79915957ecfb35e79679b5c602cbd258b336a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_67bb343bc1cb5ca92f28d5d3229765d7648557176012d1fc0b1861d550b7a1d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67bb343bc1cb5ca92f28d5d3229765d7648557176012d1fc0b1861d550b7a1d9->enter($__internal_67bb343bc1cb5ca92f28d5d3229765d7648557176012d1fc0b1861d550b7a1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_67bb343bc1cb5ca92f28d5d3229765d7648557176012d1fc0b1861d550b7a1d9->leave($__internal_67bb343bc1cb5ca92f28d5d3229765d7648557176012d1fc0b1861d550b7a1d9_prof);

        
        $__internal_5a4146b2810c697d30c51117dc79915957ecfb35e79679b5c602cbd258b336a1->leave($__internal_5a4146b2810c697d30c51117dc79915957ecfb35e79679b5c602cbd258b336a1_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2970923281ab3acce6d0564d38d2893399ce7fd4b2c42307cffeeff0b787d45f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2970923281ab3acce6d0564d38d2893399ce7fd4b2c42307cffeeff0b787d45f->enter($__internal_2970923281ab3acce6d0564d38d2893399ce7fd4b2c42307cffeeff0b787d45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bf5d90d9227da404647348f1aa99cc82dac977317b4113f68244cc3d08e26836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf5d90d9227da404647348f1aa99cc82dac977317b4113f68244cc3d08e26836->enter($__internal_bf5d90d9227da404647348f1aa99cc82dac977317b4113f68244cc3d08e26836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_bf5d90d9227da404647348f1aa99cc82dac977317b4113f68244cc3d08e26836->leave($__internal_bf5d90d9227da404647348f1aa99cc82dac977317b4113f68244cc3d08e26836_prof);

        
        $__internal_2970923281ab3acce6d0564d38d2893399ce7fd4b2c42307cffeeff0b787d45f->leave($__internal_2970923281ab3acce6d0564d38d2893399ce7fd4b2c42307cffeeff0b787d45f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f19b2c807852e271a342dd60e573bfc36871470fceaa8b1e230571d4c184a8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f19b2c807852e271a342dd60e573bfc36871470fceaa8b1e230571d4c184a8f->enter($__internal_4f19b2c807852e271a342dd60e573bfc36871470fceaa8b1e230571d4c184a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_87df5ca9468e2ed2ea6519f8f4f84d3e3000c787dd2019776051af81545a43e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87df5ca9468e2ed2ea6519f8f4f84d3e3000c787dd2019776051af81545a43e3->enter($__internal_87df5ca9468e2ed2ea6519f8f4f84d3e3000c787dd2019776051af81545a43e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_87df5ca9468e2ed2ea6519f8f4f84d3e3000c787dd2019776051af81545a43e3->leave($__internal_87df5ca9468e2ed2ea6519f8f4f84d3e3000c787dd2019776051af81545a43e3_prof);

        
        $__internal_4f19b2c807852e271a342dd60e573bfc36871470fceaa8b1e230571d4c184a8f->leave($__internal_4f19b2c807852e271a342dd60e573bfc36871470fceaa8b1e230571d4c184a8f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/allotheatre/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
