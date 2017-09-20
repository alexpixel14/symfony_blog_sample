<?php

/* BlogBundle:Entry:edit.html.twig */
class __TwigTemplate_7a677e8854d904c2ba56600d2410b16613e413b9edf09d04397649437a1480ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Entry:edit.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d020300135f0dcf729eb57beaee4a1996be0dee16794f10f7f350f44cbb19b39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d020300135f0dcf729eb57beaee4a1996be0dee16794f10f7f350f44cbb19b39->enter($__internal_d020300135f0dcf729eb57beaee4a1996be0dee16794f10f7f350f44cbb19b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Entry:edit.html.twig"));

        $__internal_f9f79527f78d84ad02755eb21d886a89a865a86ab243bbec6db42ab08ec27540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f79527f78d84ad02755eb21d886a89a865a86ab243bbec6db42ab08ec27540->enter($__internal_f9f79527f78d84ad02755eb21d886a89a865a86ab243bbec6db42ab08ec27540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Entry:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d020300135f0dcf729eb57beaee4a1996be0dee16794f10f7f350f44cbb19b39->leave($__internal_d020300135f0dcf729eb57beaee4a1996be0dee16794f10f7f350f44cbb19b39_prof);

        
        $__internal_f9f79527f78d84ad02755eb21d886a89a865a86ab243bbec6db42ab08ec27540->leave($__internal_f9f79527f78d84ad02755eb21d886a89a865a86ab243bbec6db42ab08ec27540_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_39c43bae2bac5752513b733f8309cc606a42d18e1ecf0df29f032952cebf357b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39c43bae2bac5752513b733f8309cc606a42d18e1ecf0df29f032952cebf357b->enter($__internal_39c43bae2bac5752513b733f8309cc606a42d18e1ecf0df29f032952cebf357b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4845b33c231ee62208e2046734d1ab50ab3728de6184f3da4f3b7df07b91b849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4845b33c231ee62208e2046734d1ab50ab3728de6184f3da4f3b7df07b91b849->enter($__internal_4845b33c231ee62208e2046734d1ab50ab3728de6184f3da4f3b7df07b91b849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"col-lg-6\">
        <h2>Editar entrada <strong>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "title", array()), "html", null, true);
        echo "</strong></h2>     
        ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("enctype" => "multipart/form-data"));
        echo "
        <label>Imagen: </label>
        <img width=\"100px\" class=\"pull-left img-responsive\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "image", array()))), "html", null, true);
        echo "\">
            ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'widget');
        echo "
            <label>Etiquetas: </label>
            ";
        // line 10
        $context["tags_clean"] = twig_trim_filter((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")), ",");
        // line 11
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags", array()), 'widget', array("value" => (isset($context["tags_clean"]) ? $context["tags_clean"] : $this->getContext($context, "tags_clean"))));
        echo "
        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    <div class=\"clearfix\"></div>

";
        
        $__internal_4845b33c231ee62208e2046734d1ab50ab3728de6184f3da4f3b7df07b91b849->leave($__internal_4845b33c231ee62208e2046734d1ab50ab3728de6184f3da4f3b7df07b91b849_prof);

        
        $__internal_39c43bae2bac5752513b733f8309cc606a42d18e1ecf0df29f032952cebf357b->leave($__internal_39c43bae2bac5752513b733f8309cc606a42d18e1ecf0df29f032952cebf357b_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Entry:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 12,  72 => 11,  70 => 10,  65 => 8,  61 => 7,  56 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BlogBundle::layout.html.twig\" %}
{% block content %}
    <div class=\"col-lg-6\">
        <h2>Editar entrada <strong>{{entry.title}}</strong></h2>     
        {{form_start(form, {'enctype':'multipart/form-data'})}}
        <label>Imagen: </label>
        <img width=\"100px\" class=\"pull-left img-responsive\" src=\"{{asset(\"uploads/\"~entry.image)}}\">
            {{form_widget(form.image)}}
            <label>Etiquetas: </label>
            {% set tags_clean = tags|trim(\",\") %}
            {{form_widget(form.tags,{\"value\":tags_clean})}}
        {{form_end(form)}}
    </div>
    <div class=\"clearfix\"></div>

{% endblock %}", "BlogBundle:Entry:edit.html.twig", "C:\\xampp\\htdocs\\symfony\\src\\BlogBundle/Resources/views/Entry/edit.html.twig");
    }
}
