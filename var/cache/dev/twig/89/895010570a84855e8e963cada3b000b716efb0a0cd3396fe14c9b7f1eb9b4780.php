<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d0ea04b0681df5be4f4372891dbf57cd265f736c45c771d50e480f083206011b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_289c10495043dffd77507b5707ebe5b95befdbf04ab3cf678138dfd1d9f2365d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_289c10495043dffd77507b5707ebe5b95befdbf04ab3cf678138dfd1d9f2365d->enter($__internal_289c10495043dffd77507b5707ebe5b95befdbf04ab3cf678138dfd1d9f2365d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c11e610dc073d3ad9ef0f6fa7f0fd4c7560ad97ba6f0884dff0edfef453f36db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c11e610dc073d3ad9ef0f6fa7f0fd4c7560ad97ba6f0884dff0edfef453f36db->enter($__internal_c11e610dc073d3ad9ef0f6fa7f0fd4c7560ad97ba6f0884dff0edfef453f36db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_289c10495043dffd77507b5707ebe5b95befdbf04ab3cf678138dfd1d9f2365d->leave($__internal_289c10495043dffd77507b5707ebe5b95befdbf04ab3cf678138dfd1d9f2365d_prof);

        
        $__internal_c11e610dc073d3ad9ef0f6fa7f0fd4c7560ad97ba6f0884dff0edfef453f36db->leave($__internal_c11e610dc073d3ad9ef0f6fa7f0fd4c7560ad97ba6f0884dff0edfef453f36db_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9798da81171738e091ec1b697cdfdcb8332114356ed504b59c42db0ec548e16d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9798da81171738e091ec1b697cdfdcb8332114356ed504b59c42db0ec548e16d->enter($__internal_9798da81171738e091ec1b697cdfdcb8332114356ed504b59c42db0ec548e16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2b8d1913d17d42d6e0133bc1463b513e6521149569fb38987bc200c45464b8d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b8d1913d17d42d6e0133bc1463b513e6521149569fb38987bc200c45464b8d0->enter($__internal_2b8d1913d17d42d6e0133bc1463b513e6521149569fb38987bc200c45464b8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2b8d1913d17d42d6e0133bc1463b513e6521149569fb38987bc200c45464b8d0->leave($__internal_2b8d1913d17d42d6e0133bc1463b513e6521149569fb38987bc200c45464b8d0_prof);

        
        $__internal_9798da81171738e091ec1b697cdfdcb8332114356ed504b59c42db0ec548e16d->leave($__internal_9798da81171738e091ec1b697cdfdcb8332114356ed504b59c42db0ec548e16d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c523c1442351a60329e9be1981e5c1641706c3a2710f1dcfeca3af96a6019f20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c523c1442351a60329e9be1981e5c1641706c3a2710f1dcfeca3af96a6019f20->enter($__internal_c523c1442351a60329e9be1981e5c1641706c3a2710f1dcfeca3af96a6019f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_215943c48d98b9d472a7688fd44c4a8779c542d6d40e7cbfa83ba41b56d5cea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_215943c48d98b9d472a7688fd44c4a8779c542d6d40e7cbfa83ba41b56d5cea8->enter($__internal_215943c48d98b9d472a7688fd44c4a8779c542d6d40e7cbfa83ba41b56d5cea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_215943c48d98b9d472a7688fd44c4a8779c542d6d40e7cbfa83ba41b56d5cea8->leave($__internal_215943c48d98b9d472a7688fd44c4a8779c542d6d40e7cbfa83ba41b56d5cea8_prof);

        
        $__internal_c523c1442351a60329e9be1981e5c1641706c3a2710f1dcfeca3af96a6019f20->leave($__internal_c523c1442351a60329e9be1981e5c1641706c3a2710f1dcfeca3af96a6019f20_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ee3dca684706743e3d1e6b19474ace1f14a658d714b0d2827f4d4a1cad62ea82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee3dca684706743e3d1e6b19474ace1f14a658d714b0d2827f4d4a1cad62ea82->enter($__internal_ee3dca684706743e3d1e6b19474ace1f14a658d714b0d2827f4d4a1cad62ea82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a4b30baa5485e41a0328f03cfcab5f676fbaaef580455b67eb765fd05457c03b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b30baa5485e41a0328f03cfcab5f676fbaaef580455b67eb765fd05457c03b->enter($__internal_a4b30baa5485e41a0328f03cfcab5f676fbaaef580455b67eb765fd05457c03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a4b30baa5485e41a0328f03cfcab5f676fbaaef580455b67eb765fd05457c03b->leave($__internal_a4b30baa5485e41a0328f03cfcab5f676fbaaef580455b67eb765fd05457c03b_prof);

        
        $__internal_ee3dca684706743e3d1e6b19474ace1f14a658d714b0d2827f4d4a1cad62ea82->leave($__internal_ee3dca684706743e3d1e6b19474ace1f14a658d714b0d2827f4d4a1cad62ea82_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
