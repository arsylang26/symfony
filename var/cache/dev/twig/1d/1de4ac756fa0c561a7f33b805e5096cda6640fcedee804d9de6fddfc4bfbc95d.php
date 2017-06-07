<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_80c84f3d6064961974d68c5db7df668fa3b19616039e572c10a2527e685b6058 extends Twig_Template
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
        $__internal_ccd7eff6197b3d0cb19345db615aa3e55d79144983e8d09eeeb3323d59587857 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccd7eff6197b3d0cb19345db615aa3e55d79144983e8d09eeeb3323d59587857->enter($__internal_ccd7eff6197b3d0cb19345db615aa3e55d79144983e8d09eeeb3323d59587857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_315fa1bd1f8be6da07b2eb6b8b84d7fba6d5f3bf48eeebb6f8b30e39b574c1df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_315fa1bd1f8be6da07b2eb6b8b84d7fba6d5f3bf48eeebb6f8b30e39b574c1df->enter($__internal_315fa1bd1f8be6da07b2eb6b8b84d7fba6d5f3bf48eeebb6f8b30e39b574c1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_ccd7eff6197b3d0cb19345db615aa3e55d79144983e8d09eeeb3323d59587857->leave($__internal_ccd7eff6197b3d0cb19345db615aa3e55d79144983e8d09eeeb3323d59587857_prof);

        
        $__internal_315fa1bd1f8be6da07b2eb6b8b84d7fba6d5f3bf48eeebb6f8b30e39b574c1df->leave($__internal_315fa1bd1f8be6da07b2eb6b8b84d7fba6d5f3bf48eeebb6f8b30e39b574c1df_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "D:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
