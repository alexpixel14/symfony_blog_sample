<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cc0c065568fc1411a35a68b2a680fd73cc87077119f0cfedb0853a69c8691a5f extends Twig_Template
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
        $__internal_5db70366b0f757dedc4c25de5290632c654e47851a1001e443df8fdd30c6fc22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5db70366b0f757dedc4c25de5290632c654e47851a1001e443df8fdd30c6fc22->enter($__internal_5db70366b0f757dedc4c25de5290632c654e47851a1001e443df8fdd30c6fc22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8b01131dcc9c9520ab1b32675afd203bfb91e20229cbee52e7246ae4ae23568a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b01131dcc9c9520ab1b32675afd203bfb91e20229cbee52e7246ae4ae23568a->enter($__internal_8b01131dcc9c9520ab1b32675afd203bfb91e20229cbee52e7246ae4ae23568a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5db70366b0f757dedc4c25de5290632c654e47851a1001e443df8fdd30c6fc22->leave($__internal_5db70366b0f757dedc4c25de5290632c654e47851a1001e443df8fdd30c6fc22_prof);

        
        $__internal_8b01131dcc9c9520ab1b32675afd203bfb91e20229cbee52e7246ae4ae23568a->leave($__internal_8b01131dcc9c9520ab1b32675afd203bfb91e20229cbee52e7246ae4ae23568a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_56de15198711b8029ebe74b686534bc1ed3b223e44514fb0c2484b1087d23904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56de15198711b8029ebe74b686534bc1ed3b223e44514fb0c2484b1087d23904->enter($__internal_56de15198711b8029ebe74b686534bc1ed3b223e44514fb0c2484b1087d23904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1a30d3fdb968e1542f0a98d2e5e14f5f8aa21745fe8314ab620fc6c44d4a5f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a30d3fdb968e1542f0a98d2e5e14f5f8aa21745fe8314ab620fc6c44d4a5f32->enter($__internal_1a30d3fdb968e1542f0a98d2e5e14f5f8aa21745fe8314ab620fc6c44d4a5f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1a30d3fdb968e1542f0a98d2e5e14f5f8aa21745fe8314ab620fc6c44d4a5f32->leave($__internal_1a30d3fdb968e1542f0a98d2e5e14f5f8aa21745fe8314ab620fc6c44d4a5f32_prof);

        
        $__internal_56de15198711b8029ebe74b686534bc1ed3b223e44514fb0c2484b1087d23904->leave($__internal_56de15198711b8029ebe74b686534bc1ed3b223e44514fb0c2484b1087d23904_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2ef49a414b5e78c66556262832b5f22609f6d1d9590f2076013febe0baffff24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ef49a414b5e78c66556262832b5f22609f6d1d9590f2076013febe0baffff24->enter($__internal_2ef49a414b5e78c66556262832b5f22609f6d1d9590f2076013febe0baffff24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ebc65cff4f44809bd506ff987b52dfb6ac8064d41e75b58d18598c1ec1d06447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebc65cff4f44809bd506ff987b52dfb6ac8064d41e75b58d18598c1ec1d06447->enter($__internal_ebc65cff4f44809bd506ff987b52dfb6ac8064d41e75b58d18598c1ec1d06447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ebc65cff4f44809bd506ff987b52dfb6ac8064d41e75b58d18598c1ec1d06447->leave($__internal_ebc65cff4f44809bd506ff987b52dfb6ac8064d41e75b58d18598c1ec1d06447_prof);

        
        $__internal_2ef49a414b5e78c66556262832b5f22609f6d1d9590f2076013febe0baffff24->leave($__internal_2ef49a414b5e78c66556262832b5f22609f6d1d9590f2076013febe0baffff24_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ba75ddb5ec25def47f9ad45690c7eda097e3bb2c703c33611d1fda62e810e194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba75ddb5ec25def47f9ad45690c7eda097e3bb2c703c33611d1fda62e810e194->enter($__internal_ba75ddb5ec25def47f9ad45690c7eda097e3bb2c703c33611d1fda62e810e194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ac6c5e936ef1add16d95ae77d361a7fc823b4b46cb1f7d2668ca38a6ad616caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac6c5e936ef1add16d95ae77d361a7fc823b4b46cb1f7d2668ca38a6ad616caa->enter($__internal_ac6c5e936ef1add16d95ae77d361a7fc823b4b46cb1f7d2668ca38a6ad616caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ac6c5e936ef1add16d95ae77d361a7fc823b4b46cb1f7d2668ca38a6ad616caa->leave($__internal_ac6c5e936ef1add16d95ae77d361a7fc823b4b46cb1f7d2668ca38a6ad616caa_prof);

        
        $__internal_ba75ddb5ec25def47f9ad45690c7eda097e3bb2c703c33611d1fda62e810e194->leave($__internal_ba75ddb5ec25def47f9ad45690c7eda097e3bb2c703c33611d1fda62e810e194_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
