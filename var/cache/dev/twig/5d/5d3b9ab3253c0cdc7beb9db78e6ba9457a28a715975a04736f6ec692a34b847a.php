<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d882d9203e9b91520a5df1846f10602ba692afb814d7af23c7bd40a69fa8feee extends Twig_Template
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
        $__internal_8cc6d0cb76586ccbbcb312da28a418c0970bdf1a58cf4a0046da2bdf646468e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cc6d0cb76586ccbbcb312da28a418c0970bdf1a58cf4a0046da2bdf646468e0->enter($__internal_8cc6d0cb76586ccbbcb312da28a418c0970bdf1a58cf4a0046da2bdf646468e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_bb5ed291d610ee5782c911197b2e5b97a667439e439a84ad6c745909a91bb795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb5ed291d610ee5782c911197b2e5b97a667439e439a84ad6c745909a91bb795->enter($__internal_bb5ed291d610ee5782c911197b2e5b97a667439e439a84ad6c745909a91bb795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cc6d0cb76586ccbbcb312da28a418c0970bdf1a58cf4a0046da2bdf646468e0->leave($__internal_8cc6d0cb76586ccbbcb312da28a418c0970bdf1a58cf4a0046da2bdf646468e0_prof);

        
        $__internal_bb5ed291d610ee5782c911197b2e5b97a667439e439a84ad6c745909a91bb795->leave($__internal_bb5ed291d610ee5782c911197b2e5b97a667439e439a84ad6c745909a91bb795_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b3bddc153bdc521dd43c872966cb1089274b2c8aab8d897279a7760a71a3d6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b3bddc153bdc521dd43c872966cb1089274b2c8aab8d897279a7760a71a3d6f->enter($__internal_3b3bddc153bdc521dd43c872966cb1089274b2c8aab8d897279a7760a71a3d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a28ea339458df4b704318ba37a3620983cab314fe470a9913f5b77369ac50ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a28ea339458df4b704318ba37a3620983cab314fe470a9913f5b77369ac50ef1->enter($__internal_a28ea339458df4b704318ba37a3620983cab314fe470a9913f5b77369ac50ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_a28ea339458df4b704318ba37a3620983cab314fe470a9913f5b77369ac50ef1->leave($__internal_a28ea339458df4b704318ba37a3620983cab314fe470a9913f5b77369ac50ef1_prof);

        
        $__internal_3b3bddc153bdc521dd43c872966cb1089274b2c8aab8d897279a7760a71a3d6f->leave($__internal_3b3bddc153bdc521dd43c872966cb1089274b2c8aab8d897279a7760a71a3d6f_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
