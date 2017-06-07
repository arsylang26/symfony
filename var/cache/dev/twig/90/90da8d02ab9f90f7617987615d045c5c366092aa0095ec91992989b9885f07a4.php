<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0fd258d5cd90e6569d1ab61f7a8b5064101977573920a7e0c68993aed9a371c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_b2cc5aceec58e91a9354ac035d71ea026b7cb646c5f5a2a02568d6cffbeb2186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2cc5aceec58e91a9354ac035d71ea026b7cb646c5f5a2a02568d6cffbeb2186->enter($__internal_b2cc5aceec58e91a9354ac035d71ea026b7cb646c5f5a2a02568d6cffbeb2186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ee784dd1a2486f2d9ecd322ff8c84dd925cc2a50ccfddd57901a856e9144f151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee784dd1a2486f2d9ecd322ff8c84dd925cc2a50ccfddd57901a856e9144f151->enter($__internal_ee784dd1a2486f2d9ecd322ff8c84dd925cc2a50ccfddd57901a856e9144f151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2cc5aceec58e91a9354ac035d71ea026b7cb646c5f5a2a02568d6cffbeb2186->leave($__internal_b2cc5aceec58e91a9354ac035d71ea026b7cb646c5f5a2a02568d6cffbeb2186_prof);

        
        $__internal_ee784dd1a2486f2d9ecd322ff8c84dd925cc2a50ccfddd57901a856e9144f151->leave($__internal_ee784dd1a2486f2d9ecd322ff8c84dd925cc2a50ccfddd57901a856e9144f151_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_31a86d77ad5e58580b1374c2adb6bd988e6cf9463bb5d6ff2c9c330aa9f3801d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31a86d77ad5e58580b1374c2adb6bd988e6cf9463bb5d6ff2c9c330aa9f3801d->enter($__internal_31a86d77ad5e58580b1374c2adb6bd988e6cf9463bb5d6ff2c9c330aa9f3801d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fe7f1bf26c361d3ad979dae2fbce3f9221d9a35815db930af07fdbe2d0dd9dee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe7f1bf26c361d3ad979dae2fbce3f9221d9a35815db930af07fdbe2d0dd9dee->enter($__internal_fe7f1bf26c361d3ad979dae2fbce3f9221d9a35815db930af07fdbe2d0dd9dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fe7f1bf26c361d3ad979dae2fbce3f9221d9a35815db930af07fdbe2d0dd9dee->leave($__internal_fe7f1bf26c361d3ad979dae2fbce3f9221d9a35815db930af07fdbe2d0dd9dee_prof);

        
        $__internal_31a86d77ad5e58580b1374c2adb6bd988e6cf9463bb5d6ff2c9c330aa9f3801d->leave($__internal_31a86d77ad5e58580b1374c2adb6bd988e6cf9463bb5d6ff2c9c330aa9f3801d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d9f468de3f96318f1c1bda2d744a2032043aa9ead685bc4434e9fbdd0f62dc06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9f468de3f96318f1c1bda2d744a2032043aa9ead685bc4434e9fbdd0f62dc06->enter($__internal_d9f468de3f96318f1c1bda2d744a2032043aa9ead685bc4434e9fbdd0f62dc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_19f19e230aeda391189f268b6b6976871760ec6adda474e255ad9bf43f7f82b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f19e230aeda391189f268b6b6976871760ec6adda474e255ad9bf43f7f82b5->enter($__internal_19f19e230aeda391189f268b6b6976871760ec6adda474e255ad9bf43f7f82b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_19f19e230aeda391189f268b6b6976871760ec6adda474e255ad9bf43f7f82b5->leave($__internal_19f19e230aeda391189f268b6b6976871760ec6adda474e255ad9bf43f7f82b5_prof);

        
        $__internal_d9f468de3f96318f1c1bda2d744a2032043aa9ead685bc4434e9fbdd0f62dc06->leave($__internal_d9f468de3f96318f1c1bda2d744a2032043aa9ead685bc4434e9fbdd0f62dc06_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bde93e7fe84d5340ef21fde482dbb899b657c937cf0296ba2e151a98af45fb28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bde93e7fe84d5340ef21fde482dbb899b657c937cf0296ba2e151a98af45fb28->enter($__internal_bde93e7fe84d5340ef21fde482dbb899b657c937cf0296ba2e151a98af45fb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3c757cfaf2301d68dc9d68d1b60e2e458385582bf8fcf9ca62b834e421d3f5d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c757cfaf2301d68dc9d68d1b60e2e458385582bf8fcf9ca62b834e421d3f5d0->enter($__internal_3c757cfaf2301d68dc9d68d1b60e2e458385582bf8fcf9ca62b834e421d3f5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3c757cfaf2301d68dc9d68d1b60e2e458385582bf8fcf9ca62b834e421d3f5d0->leave($__internal_3c757cfaf2301d68dc9d68d1b60e2e458385582bf8fcf9ca62b834e421d3f5d0_prof);

        
        $__internal_bde93e7fe84d5340ef21fde482dbb899b657c937cf0296ba2e151a98af45fb28->leave($__internal_bde93e7fe84d5340ef21fde482dbb899b657c937cf0296ba2e151a98af45fb28_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
