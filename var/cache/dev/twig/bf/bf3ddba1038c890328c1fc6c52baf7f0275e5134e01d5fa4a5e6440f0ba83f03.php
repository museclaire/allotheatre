<?php

/* @Twig/Exception/exception.html.twig */
class __TwigTemplate_8dd0d41602c85f7c3c3410470812e2ee5c67554676f7fc1266e15a26ed2aad3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_ede02b352217017951e5aa6a45c2915692725952f1e1aacb03b3397ac50b41d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ede02b352217017951e5aa6a45c2915692725952f1e1aacb03b3397ac50b41d4->enter($__internal_ede02b352217017951e5aa6a45c2915692725952f1e1aacb03b3397ac50b41d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.html.twig"));

        $__internal_fb9d3f037571e5e5c77e57937ee630f1b9c6e3778c9ced535f86c81afc5cdde2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb9d3f037571e5e5c77e57937ee630f1b9c6e3778c9ced535f86c81afc5cdde2->enter($__internal_fb9d3f037571e5e5c77e57937ee630f1b9c6e3778c9ced535f86c81afc5cdde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.html.twig"));
=======
<<<<<<< HEAD:var/cache/dev/twig/97/9780a3c310d4a829b61e2c5849b0c96d2ab6cc790785e33c7a6f3b883f416845.php
        $__internal_20a1f8e5d2efb4d9fc205183067ac8a04ed7e4e5831330ddc4357da24cae872a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a1f8e5d2efb4d9fc205183067ac8a04ed7e4e5831330ddc4357da24cae872a->enter($__internal_20a1f8e5d2efb4d9fc205183067ac8a04ed7e4e5831330ddc4357da24cae872a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.html.twig"));

        $__internal_73898b2e2b2b7a3edaf021f5764f45efc00d1853ca177dd897a039ceab020bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73898b2e2b2b7a3edaf021f5764f45efc00d1853ca177dd897a039ceab020bf3->enter($__internal_73898b2e2b2b7a3edaf021f5764f45efc00d1853ca177dd897a039ceab020bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.html.twig"));
=======
        $__internal_0de2dc5b006d2e3c073e1734c839b39cf65627e7ffa7466c34fc1daaee285660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0de2dc5b006d2e3c073e1734c839b39cf65627e7ffa7466c34fc1daaee285660->enter($__internal_0de2dc5b006d2e3c073e1734c839b39cf65627e7ffa7466c34fc1daaee285660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.html.twig"));

        $__internal_e89b2088d1cc19d32803b8491b78c6ab0ea3f6f8a55cb1320a3fa7437e3df64c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e89b2088d1cc19d32803b8491b78c6ab0ea3f6f8a55cb1320a3fa7437e3df64c->enter($__internal_e89b2088d1cc19d32803b8491b78c6ab0ea3f6f8a55cb1320a3fa7437e3df64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.html.twig"));
>>>>>>> dd750d5759c991b2aaf8e12a2c7b5ac6ae0c82ea:var/cache/dev/twig/bf/bf3ddba1038c890328c1fc6c52baf7f0275e5134e01d5fa4a5e6440f0ba83f03.php
>>>>>>> 02c4a0439f43eb84982404b0559cf4e3beb721e4

        // line 1
        echo "<div class=\"exception-summary ";
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "message", array()))) ? ("exception-without-message") : (""));
        echo "\">
    <div class=\"exception-metadata\">
        <div class=\"container\">
            <h2 class=\"exception-hierarchy\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 5, $this->getSourceContext()); })()), "allPrevious", array())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["previousException"]) {
            // line 6
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass(twig_get_attribute($this->env, $this->getSourceContext(), $context["previousException"], "class", array()));
            echo "
                    <span class=\"icon\">";
            // line 7
            echo twig_include($this->env, $context, "@Twig/images/chevron-right.svg");
            echo "</span>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['previousException'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 9, $this->getSourceContext()); })()), "class", array()));
        echo "
            </h2>
            <h2 class=\"exception-http\">
                HTTP ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
        echo "</small>
            </h2>
        </div>
    </div>

    <div class=\"exception-message-wrapper\">
        <div class=\"container\">
            <h1 class=\"break-long-words exception-message ";
        // line 19
        echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 19, $this->getSourceContext()); })()), "message", array())) > 180)) ? ("long") : (""));
        echo "\">";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFileFromText(nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 20, $this->getSourceContext()); })()), "message", array()), "html", null, true)));
        // line 21
        echo "</h1>

            <div class=\"exception-illustration hidden-xs-down\">
                ";
        // line 24
        echo twig_include($this->env, $context, "@Twig/images/symfony-ghost.svg");
        echo "
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            ";
        // line 33
        $context["exception_as_array"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 33, $this->getSourceContext()); })()), "toarray", array());
        // line 34
        echo "            ";
        $context["_exceptions_with_user_code"] = array();
        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new Twig_Error_Runtime('Variable "exception_as_array" does not exist.', 35, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 36
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "trace", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 37
                echo "                    ";
                if (((( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["trace"], "file", array())) && !twig_in_filter("/vendor/", twig_get_attribute($this->env, $this->getSourceContext(), $context["trace"], "file", array()))) && !twig_in_filter("/var/cache/", twig_get_attribute($this->env, $this->getSourceContext(), $context["trace"], "file", array()))) &&  !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array()))) {
                    // line 38
                    echo "                        ";
                    $context["_exceptions_with_user_code"] = twig_array_merge((isset($context["_exceptions_with_user_code"]) || array_key_exists("_exceptions_with_user_code", $context) ? $context["_exceptions_with_user_code"] : (function () { throw new Twig_Error_Runtime('Variable "_exceptions_with_user_code" does not exist.', 38, $this->getSourceContext()); })()), array(0 => $context["i"]));
                    // line 39
                    echo "                    ";
                }
                // line 40
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            <h3 class=\"tab-title\">
                ";
        // line 43
        if ((twig_length_filter($this->env, (isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new Twig_Error_Runtime('Variable "exception_as_array" does not exist.', 43, $this->getSourceContext()); })())) > 1)) {
            // line 44
            echo "                    Exceptions <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new Twig_Error_Runtime('Variable "exception_as_array" does not exist.', 44, $this->getSourceContext()); })())), "html", null, true);
            echo "</span>
                ";
        } else {
            // line 46
            echo "                    Exception
                ";
        }
        // line 48
        echo "            </h3>

            <div class=\"tab-content\">
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new Twig_Error_Runtime('Variable "exception_as_array" does not exist.', 51, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 52
            echo "                    ";
            echo twig_include($this->env, $context, "@Twig/Exception/traces.html.twig", array("exception" => $context["e"], "index" => twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "expand" => (twig_in_filter($context["i"], (isset($context["_exceptions_with_user_code"]) || array_key_exists("_exceptions_with_user_code", $context) ? $context["_exceptions_with_user_code"] : (function () { throw new Twig_Error_Runtime('Variable "_exceptions_with_user_code" does not exist.', 52, $this->getSourceContext()); })())) || (twig_test_empty((isset($context["_exceptions_with_user_code"]) || array_key_exists("_exceptions_with_user_code", $context) ? $context["_exceptions_with_user_code"] : (function () { throw new Twig_Error_Runtime('Variable "_exceptions_with_user_code" does not exist.', 52, $this->getSourceContext()); })())) && twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())))), false);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </div>
        </div>

        ";
        // line 57
        if ((isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new Twig_Error_Runtime('Variable "logger" does not exist.', 57, $this->getSourceContext()); })())) {
            // line 58
            echo "        <div class=\"tab ";
            echo ((twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new Twig_Error_Runtime('Variable "logger" does not exist.', 58, $this->getSourceContext()); })()), "logs", array()))) ? ("disabled") : (""));
            echo "\">
            <h3 class=\"tab-title\">
                Logs
                ";
            // line 61
            if ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["logger"] ?? null), "counterrors", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), ($context["logger"] ?? null), "counterrors", array())))) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["logger"] ?? null), "counterrors", array())) : (false))) {
                echo "<span class=\"badge status-error\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new Twig_Error_Runtime('Variable "logger" does not exist.', 61, $this->getSourceContext()); })()), "counterrors", array()), "html", null, true);
                echo "</span>";
            }
            // line 62
            echo "            </h3>

            <div class=\"tab-content\">
                ";
            // line 65
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new Twig_Error_Runtime('Variable "logger" does not exist.', 65, $this->getSourceContext()); })()), "logs", array())) {
                // line 66
                echo "                    ";
                echo twig_include($this->env, $context, "@Twig/Exception/logs.html.twig", array("logs" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new Twig_Error_Runtime('Variable "logger" does not exist.', 66, $this->getSourceContext()); })()), "logs", array())), false);
                echo "
                ";
            } else {
                // line 68
                echo "                    <div class=\"empty\">
                        <p>No log messages</p>
                    </div>
                ";
            }
            // line 72
            echo "            </div>
        </div>
        ";
        }
        // line 75
        echo "
        <div class=\"tab\">
            <h3 class=\"tab-title\">
                ";
        // line 78
        if ((twig_length_filter($this->env, (isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new Twig_Error_Runtime('Variable "exception_as_array" does not exist.', 78, $this->getSourceContext()); })())) > 1)) {
            // line 79
            echo "                    Stack Traces <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new Twig_Error_Runtime('Variable "exception_as_array" does not exist.', 79, $this->getSourceContext()); })())), "html", null, true);
            echo "</span>
                ";
        } else {
            // line 81
            echo "                    Stack Trace
                ";
        }
        // line 83
        echo "            </h3>

            <div class=\"tab-content\">
                ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new Twig_Error_Runtime('Variable "exception_as_array" does not exist.', 86, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 87
            echo "                    ";
            echo twig_include($this->env, $context, "@Twig/Exception/traces_text.html.twig", array("exception" => $context["e"], "index" => twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "num_exceptions" => twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "length", array())), false);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "            </div>
        </div>

        ";
        // line 92
        if ( !twig_test_empty((isset($context["currentContent"]) || array_key_exists("currentContent", $context) ? $context["currentContent"] : (function () { throw new Twig_Error_Runtime('Variable "currentContent" does not exist.', 92, $this->getSourceContext()); })()))) {
            // line 93
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Output content</h3>

            <div class=\"tab-content\">
                ";
            // line 97
            echo twig_escape_filter($this->env, (isset($context["currentContent"]) || array_key_exists("currentContent", $context) ? $context["currentContent"] : (function () { throw new Twig_Error_Runtime('Variable "currentContent" does not exist.', 97, $this->getSourceContext()); })()), "html", null, true);
            echo "
            </div>
        </div>
        ";
        }
        // line 101
        echo "    </div>
</div>
";
        
<<<<<<< HEAD
        $__internal_ede02b352217017951e5aa6a45c2915692725952f1e1aacb03b3397ac50b41d4->leave($__internal_ede02b352217017951e5aa6a45c2915692725952f1e1aacb03b3397ac50b41d4_prof);

        
        $__internal_fb9d3f037571e5e5c77e57937ee630f1b9c6e3778c9ced535f86c81afc5cdde2->leave($__internal_fb9d3f037571e5e5c77e57937ee630f1b9c6e3778c9ced535f86c81afc5cdde2_prof);
=======
<<<<<<< HEAD:var/cache/dev/twig/97/9780a3c310d4a829b61e2c5849b0c96d2ab6cc790785e33c7a6f3b883f416845.php
        $__internal_20a1f8e5d2efb4d9fc205183067ac8a04ed7e4e5831330ddc4357da24cae872a->leave($__internal_20a1f8e5d2efb4d9fc205183067ac8a04ed7e4e5831330ddc4357da24cae872a_prof);

        
        $__internal_73898b2e2b2b7a3edaf021f5764f45efc00d1853ca177dd897a039ceab020bf3->leave($__internal_73898b2e2b2b7a3edaf021f5764f45efc00d1853ca177dd897a039ceab020bf3_prof);
=======
        $__internal_0de2dc5b006d2e3c073e1734c839b39cf65627e7ffa7466c34fc1daaee285660->leave($__internal_0de2dc5b006d2e3c073e1734c839b39cf65627e7ffa7466c34fc1daaee285660_prof);

        
        $__internal_e89b2088d1cc19d32803b8491b78c6ab0ea3f6f8a55cb1320a3fa7437e3df64c->leave($__internal_e89b2088d1cc19d32803b8491b78c6ab0ea3f6f8a55cb1320a3fa7437e3df64c_prof);
>>>>>>> dd750d5759c991b2aaf8e12a2c7b5ac6ae0c82ea:var/cache/dev/twig/bf/bf3ddba1038c890328c1fc6c52baf7f0275e5134e01d5fa4a5e6440f0ba83f03.php
>>>>>>> 02c4a0439f43eb84982404b0559cf4e3beb721e4

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 101,  336 => 97,  330 => 93,  328 => 92,  323 => 89,  306 => 87,  289 => 86,  284 => 83,  280 => 81,  274 => 79,  272 => 78,  267 => 75,  262 => 72,  256 => 68,  250 => 66,  248 => 65,  243 => 62,  237 => 61,  230 => 58,  228 => 57,  223 => 54,  206 => 52,  189 => 51,  184 => 48,  180 => 46,  174 => 44,  172 => 43,  169 => 42,  163 => 41,  149 => 40,  146 => 39,  143 => 38,  140 => 37,  122 => 36,  117 => 35,  114 => 34,  112 => 33,  100 => 24,  95 => 21,  93 => 20,  90 => 19,  78 => 12,  71 => 9,  55 => 7,  50 => 6,  33 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"exception-summary {{ exception.message is empty ? 'exception-without-message' }}\">
    <div class=\"exception-metadata\">
        <div class=\"container\">
            <h2 class=\"exception-hierarchy\">
                {% for previousException in exception.allPrevious|reverse %}
                    {{ previousException.class|abbr_class }}
                    <span class=\"icon\">{{ include('@Twig/images/chevron-right.svg') }}</span>
                {% endfor %}
                {{ exception.class|abbr_class }}
            </h2>
            <h2 class=\"exception-http\">
                HTTP {{ status_code }} <small>{{ status_text }}</small>
            </h2>
        </div>
    </div>

    <div class=\"exception-message-wrapper\">
        <div class=\"container\">
            <h1 class=\"break-long-words exception-message {{ exception.message|length > 180 ? 'long' }}\">
                {{- exception.message|nl2br|format_file_from_text -}}
            </h1>

            <div class=\"exception-illustration hidden-xs-down\">
                {{ include('@Twig/images/symfony-ghost.svg') }}
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            {% set exception_as_array = exception.toarray %}
            {% set _exceptions_with_user_code = [] %}
            {% for i, e in exception_as_array %}
                {% for trace in e.trace %}
                    {% if (trace.file is not empty) and ('/vendor/' not in trace.file) and ('/var/cache/' not in trace.file) and not loop.last %}
                        {% set _exceptions_with_user_code = _exceptions_with_user_code|merge([i]) %}
                    {% endif %}
                {% endfor %}
            {% endfor %}
            <h3 class=\"tab-title\">
                {% if exception_as_array|length > 1 %}
                    Exceptions <span class=\"badge\">{{ exception_as_array|length }}</span>
                {% else %}
                    Exception
                {% endif %}
            </h3>

            <div class=\"tab-content\">
                {% for i, e in exception_as_array %}
                    {{ include('@Twig/Exception/traces.html.twig', { exception: e, index: loop.index, expand: i in _exceptions_with_user_code or (_exceptions_with_user_code is empty and loop.first) }, with_context = false) }}
                {% endfor %}
            </div>
        </div>

        {% if logger %}
        <div class=\"tab {{ logger.logs is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">
                Logs
                {% if logger.counterrors ?? false %}<span class=\"badge status-error\">{{ logger.counterrors }}</span>{% endif %}
            </h3>

            <div class=\"tab-content\">
                {% if logger.logs %}
                    {{ include('@Twig/Exception/logs.html.twig', { logs: logger.logs }, with_context = false)  }}
                {% else %}
                    <div class=\"empty\">
                        <p>No log messages</p>
                    </div>
                {% endif %}
            </div>
        </div>
        {% endif %}

        <div class=\"tab\">
            <h3 class=\"tab-title\">
                {% if exception_as_array|length > 1 %}
                    Stack Traces <span class=\"badge\">{{ exception_as_array|length }}</span>
                {% else %}
                    Stack Trace
                {% endif %}
            </h3>

            <div class=\"tab-content\">
                {% for e in exception_as_array %}
                    {{ include('@Twig/Exception/traces_text.html.twig', { exception: e, index: loop.index, num_exceptions: loop.length }, with_context = false) }}
                {% endfor %}
            </div>
        </div>

        {% if currentContent is not empty %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">Output content</h3>

            <div class=\"tab-content\">
                {{ currentContent }}
            </div>
        </div>
        {% endif %}
    </div>
</div>
", "@Twig/Exception/exception.html.twig", "D:\\Programmes\\Xampp\\htdocs\\allotheatre\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.html.twig");
    }
}