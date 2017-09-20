<?php

/* BlogBundle:Tag:index.html.twig */
class __TwigTemplate_6528f30c25f39eb8ebb37fe68cf0a154acee3029d47dd6892704b4d578c90ccd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Tag:index.html.twig", 1);
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
        $__internal_2e1f2778bd79cf037837e746f90656c522a57a95e6dca3159b76042fdcd4c8df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e1f2778bd79cf037837e746f90656c522a57a95e6dca3159b76042fdcd4c8df->enter($__internal_2e1f2778bd79cf037837e746f90656c522a57a95e6dca3159b76042fdcd4c8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Tag:index.html.twig"));

        $__internal_2f2b5b25eff71dec6cf1ed9d58232d9f8a70980eb72e86f38f1a8790bddc3727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f2b5b25eff71dec6cf1ed9d58232d9f8a70980eb72e86f38f1a8790bddc3727->enter($__internal_2f2b5b25eff71dec6cf1ed9d58232d9f8a70980eb72e86f38f1a8790bddc3727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Tag:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e1f2778bd79cf037837e746f90656c522a57a95e6dca3159b76042fdcd4c8df->leave($__internal_2e1f2778bd79cf037837e746f90656c522a57a95e6dca3159b76042fdcd4c8df_prof);

        
        $__internal_2f2b5b25eff71dec6cf1ed9d58232d9f8a70980eb72e86f38f1a8790bddc3727->leave($__internal_2f2b5b25eff71dec6cf1ed9d58232d9f8a70980eb72e86f38f1a8790bddc3727_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_095c91d9f33779f1813997ea38c0517798628b2ea430ab164d6b180966960daf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_095c91d9f33779f1813997ea38c0517798628b2ea430ab164d6b180966960daf->enter($__internal_095c91d9f33779f1813997ea38c0517798628b2ea430ab164d6b180966960daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6b7ede53c00961e3330802bc3c643663ab7870f2e6472860441535de85425b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7ede53c00961e3330802bc3c643663ab7870f2e6472860441535de85425b6b->enter($__internal_6b7ede53c00961e3330802bc3c643663ab7870f2e6472860441535de85425b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"col-lg-6\">
        <h2>Listado de etiquetas</h2>
        <a  class=\"btn btn-success\" href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_add_tag");
        echo "\">Añadir etiqueta</a>
        <hr/>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mesage"]) {
            // line 8
            echo "            <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["mesage"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mesage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "           
        <table class=\"table table-bordered\">
            <tr>
                <th>Nombre</th>
                <th>Decripcion</th>
                <th>Delete</th>
            </tr>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 17
            echo "            <tr>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "description", array()), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 21
            if ((twig_length_filter($this->env, $this->getAttribute($context["tag"], "entryTag", array())) == 0)) {
                // line 22
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_delete_tag", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">Eliminar</a>
                    ";
            } else {
                // line 24
                echo "                        <span class=\"btn btn-info\">Etiqueta en uso</span>
                    ";
            }
            // line 26
            echo "                </td> 
            </tr>    
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "   
        </table>     
    </div>
    <div class=\"clearfix\"></div>

";
        
        $__internal_6b7ede53c00961e3330802bc3c643663ab7870f2e6472860441535de85425b6b->leave($__internal_6b7ede53c00961e3330802bc3c643663ab7870f2e6472860441535de85425b6b_prof);

        
        $__internal_095c91d9f33779f1813997ea38c0517798628b2ea430ab164d6b180966960daf->leave($__internal_095c91d9f33779f1813997ea38c0517798628b2ea430ab164d6b180966960daf_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Tag:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 28,  108 => 26,  104 => 24,  98 => 22,  96 => 21,  91 => 19,  87 => 18,  84 => 17,  80 => 16,  71 => 9,  62 => 8,  58 => 7,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
        <h2>Listado de etiquetas</h2>
        <a  class=\"btn btn-success\" href=\"{{path(\"blog_add_tag\")}}\">Añadir etiqueta</a>
        <hr/>
        {% for mesage in app.session.flashbag().get('status') %}
            <div class=\"alert alert-success\">{{mesage}}</div>
        {% endfor %}           
        <table class=\"table table-bordered\">
            <tr>
                <th>Nombre</th>
                <th>Decripcion</th>
                <th>Delete</th>
            </tr>
            {% for tag in tags %}
            <tr>
                <td>{{tag.name}}</td>
                <td>{{tag.description}}</td>
                <td>
                    {% if tag.entryTag|length == 0 %}
                        <a href=\"{{ path( \"blog_delete_tag\" , {\"id\":tag.id} ) }}\" class=\"btn btn-danger\">Eliminar</a>
                    {% else %}
                        <span class=\"btn btn-info\">Etiqueta en uso</span>
                    {% endif %}
                </td> 
            </tr>    
            {% endfor %}   
        </table>     
    </div>
    <div class=\"clearfix\"></div>

{% endblock %}", "BlogBundle:Tag:index.html.twig", "C:\\xampp\\htdocs\\symfony\\src\\BlogBundle/Resources/views/Tag/index.html.twig");
    }
}
