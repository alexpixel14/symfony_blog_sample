<?php

/* BlogBundle:User:login.html.twig */
class __TwigTemplate_e6a07fbfaf4c129c8a28c74c5a42f90d54a515fba5196979dc91091a8dedc618 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:User:login.html.twig", 1);
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
        $__internal_76857ddf750246a0c3df983b763c8b744b93c74345f1a4fd56f866e2b8bb669c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76857ddf750246a0c3df983b763c8b744b93c74345f1a4fd56f866e2b8bb669c->enter($__internal_76857ddf750246a0c3df983b763c8b744b93c74345f1a4fd56f866e2b8bb669c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:User:login.html.twig"));

        $__internal_d844b1e5ff527bea849892327b514f24335eed28e28f8c6564f69cca3445f2c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d844b1e5ff527bea849892327b514f24335eed28e28f8c6564f69cca3445f2c2->enter($__internal_d844b1e5ff527bea849892327b514f24335eed28e28f8c6564f69cca3445f2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:User:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76857ddf750246a0c3df983b763c8b744b93c74345f1a4fd56f866e2b8bb669c->leave($__internal_76857ddf750246a0c3df983b763c8b744b93c74345f1a4fd56f866e2b8bb669c_prof);

        
        $__internal_d844b1e5ff527bea849892327b514f24335eed28e28f8c6564f69cca3445f2c2->leave($__internal_d844b1e5ff527bea849892327b514f24335eed28e28f8c6564f69cca3445f2c2_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_8b8269c708a2adfd92f337ef89257d597e57056abe6f1b7c9649b49fe9b48f74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b8269c708a2adfd92f337ef89257d597e57056abe6f1b7c9649b49fe9b48f74->enter($__internal_8b8269c708a2adfd92f337ef89257d597e57056abe6f1b7c9649b49fe9b48f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_26e09e657caea23991202d13d168c7f8d6cdf9fb090f58777104a770928b5f1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e09e657caea23991202d13d168c7f8d6cdf9fb090f58777104a770928b5f1b->enter($__internal_26e09e657caea23991202d13d168c7f8d6cdf9fb090f58777104a770928b5f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
    ";
        // line 4
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 5
            echo "        <strong>Estas logueado como usuario normal</strong>
    ";
        }
        // line 7
        echo "
    ";
        // line 8
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 9
            echo "        <strong>Estas logueado como usuario admin</strong>
    ";
        }
        // line 11
        echo "
    <div class=\"col-lg-4\">
    <h2>Identificate</h2>
        <form action=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
            <label>Email:</label>
            <input type=\"email\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["lastUsername"]) ? $context["lastUsername"] : $this->getContext($context, "lastUsername")), "html", null, true);
        echo "\" class=\"form-control\" />
            <label>Contraseña</label>
            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" value=\"\">
            <br>
            <input type=\"submit\" class=\"btn btn-success\" value=\"Entrar\">
            <input type=\"hidden\" name=\"_target_path\" value=\"/login\">
        </form>
    </div>

    <div class=\"col-lg-4\">
    <h2>Registrate</h2>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mesage"]) {
            // line 28
            echo "            <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["mesage"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mesage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>


    <div class=\"clearfix\"></div>
";
        
        $__internal_26e09e657caea23991202d13d168c7f8d6cdf9fb090f58777104a770928b5f1b->leave($__internal_26e09e657caea23991202d13d168c7f8d6cdf9fb090f58777104a770928b5f1b_prof);

        
        $__internal_8b8269c708a2adfd92f337ef89257d597e57056abe6f1b7c9649b49fe9b48f74->leave($__internal_8b8269c708a2adfd92f337ef89257d597e57056abe6f1b7c9649b49fe9b48f74_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:User:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 31,  104 => 30,  95 => 28,  91 => 27,  77 => 16,  72 => 14,  67 => 11,  63 => 9,  61 => 8,  58 => 7,  54 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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

    {% if is_granted('ROLE_USER') %}
        <strong>Estas logueado como usuario normal</strong>
    {% endif %}

    {% if is_granted('ROLE_ADMIN') %}
        <strong>Estas logueado como usuario admin</strong>
    {% endif %}

    <div class=\"col-lg-4\">
    <h2>Identificate</h2>
        <form action=\"{{path(\"login_check\")}}\" method=\"post\">
            <label>Email:</label>
            <input type=\"email\" id=\"username\" name=\"_username\" value=\"{{ lastUsername }}\" class=\"form-control\" />
            <label>Contraseña</label>
            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" value=\"\">
            <br>
            <input type=\"submit\" class=\"btn btn-success\" value=\"Entrar\">
            <input type=\"hidden\" name=\"_target_path\" value=\"/login\">
        </form>
    </div>

    <div class=\"col-lg-4\">
    <h2>Registrate</h2>
        {% for mesage in app.session.flashbag().get('status') %}
            <div class=\"alert alert-success\">{{mesage}}</div>
        {% endfor %}
        {{form_start(form)}}
        {{form_end(form)}}
    </div>


    <div class=\"clearfix\"></div>
{% endblock %}", "BlogBundle:User:login.html.twig", "C:\\xampp\\htdocs\\symfony\\src\\BlogBundle/Resources/views/User/login.html.twig");
    }
}
