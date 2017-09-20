<?php

/* BlogBundle:Entry:index.html.twig */
class __TwigTemplate_b121d1a9d6fcdeb6a6ef0b1fb93c9fc8b85983af2abf13f14ea7fa5b6939f90f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Entry:index.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b479b21332dd4f327cfa18d06b35808d793dc35730b8c7281e37a783b7cba0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b479b21332dd4f327cfa18d06b35808d793dc35730b8c7281e37a783b7cba0c->enter($__internal_3b479b21332dd4f327cfa18d06b35808d793dc35730b8c7281e37a783b7cba0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Entry:index.html.twig"));

        $__internal_aa68dd6b047bd18848abf80bf1bf2cbfe9bc8f89833e672d92928291061a94f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa68dd6b047bd18848abf80bf1bf2cbfe9bc8f89833e672d92928291061a94f1->enter($__internal_aa68dd6b047bd18848abf80bf1bf2cbfe9bc8f89833e672d92928291061a94f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Entry:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b479b21332dd4f327cfa18d06b35808d793dc35730b8c7281e37a783b7cba0c->leave($__internal_3b479b21332dd4f327cfa18d06b35808d793dc35730b8c7281e37a783b7cba0c_prof);

        
        $__internal_aa68dd6b047bd18848abf80bf1bf2cbfe9bc8f89833e672d92928291061a94f1->leave($__internal_aa68dd6b047bd18848abf80bf1bf2cbfe9bc8f89833e672d92928291061a94f1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8f87525672f5791ef78557319f2e42408ffa2437620b294d3ce4e33c3a10f904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f87525672f5791ef78557319f2e42408ffa2437620b294d3ce4e33c3a10f904->enter($__internal_8f87525672f5791ef78557319f2e42408ffa2437620b294d3ce4e33c3a10f904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e0f4b1d74f11a07ec003b1a8c0c18a7e6f7a728ed985b5c43b17b4ca100beb9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0f4b1d74f11a07ec003b1a8c0c18a7e6f7a728ed985b5c43b17b4ca100beb9e->enter($__internal_e0f4b1d74f11a07ec003b1a8c0c18a7e6f7a728ed985b5c43b17b4ca100beb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "
";
        // line 7
        $this->loadTemplate("BlogBundle:Category:menu.categories.html.twig", "BlogBundle:Entry:index.html.twig", 7)->display(array_merge($context, array("categories" => (isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")))));
        // line 8
        echo "
";
        
        $__internal_e0f4b1d74f11a07ec003b1a8c0c18a7e6f7a728ed985b5c43b17b4ca100beb9e->leave($__internal_e0f4b1d74f11a07ec003b1a8c0c18a7e6f7a728ed985b5c43b17b4ca100beb9e_prof);

        
        $__internal_8f87525672f5791ef78557319f2e42408ffa2437620b294d3ce4e33c3a10f904->leave($__internal_8f87525672f5791ef78557319f2e42408ffa2437620b294d3ce4e33c3a10f904_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_974a8026d8e9c919fac0e6e0063dab13799195d67cd4c8e47fac3c10d782bb88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_974a8026d8e9c919fac0e6e0063dab13799195d67cd4c8e47fac3c10d782bb88->enter($__internal_974a8026d8e9c919fac0e6e0063dab13799195d67cd4c8e47fac3c10d782bb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_33fba5739b08d33a788fb29872010a6361f3bda166e27206b31b895fb96b7055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33fba5739b08d33a788fb29872010a6361f3bda166e27206b31b895fb96b7055->enter($__internal_33fba5739b08d33a788fb29872010a6361f3bda166e27206b31b895fb96b7055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mesage"]) {
            // line 13
            echo "            <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["mesage"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mesage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "   

        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entries"]) ? $context["entries"] : $this->getContext($context, "entries")));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 17
            echo "            <div class=\"col-lg-11\">
                <p class=\"pull-left\" style=\"margin-rigth:20px\"><img width=\"100px\" class=\"pull-left img-responsive\" src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["entry"], "image", array()))), "html", null, true);
            echo "\"</p>
                <p><strong>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "title", array()), "html", null, true);
            echo "</strong></p>
                <p>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "category", array()), "name", array()), "html", null, true);
            echo "</p>
                <p>Autor: ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "name", array()), "html", null, true);
            echo "</p>
                <p>
                ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entry"], "entryTag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["et"]) {
                // line 24
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["et"], "tag", array()), "name", array()), "html", null, true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['et'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo " 
                </p>

                ";
            // line 28
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["entry"], "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())))) {
                // line 29
                echo "                <p>
                    <a class=\"btn btn-warning\" href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_edit_entry", array("id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
                echo "\">Edit</a>
                    <a class=\"btn btn-danger\" href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_delete_entry", array("id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
                echo "\">Delete</a>
                </p>
                ";
            }
            // line 34
            echo "                <hr/>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"clearfix\"></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "           

         <ul class=\"pagination\">
         ";
        // line 41
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == 1)) {
            // line 42
            echo "         ";
        } else {
            // line 43
            echo "            ";
            $context["page"] = ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1);
            // line 44
            echo "         ";
        }
        // line 45
        echo "
            <li><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_homepage", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
        echo "\">&laquo;</a></li>
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pagesCount"]) ? $context["pagesCount"] : $this->getContext($context, "pagesCount"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 48
            echo "               <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_homepage", array("page" => $context["i"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
         ";
        // line 51
        if (((isset($context["page_m"]) ? $context["page_m"] : $this->getContext($context, "page_m")) == (isset($context["pagesCount"]) ? $context["pagesCount"] : $this->getContext($context, "pagesCount")))) {
            // line 52
            echo "         ";
        } else {
            // line 53
            echo "            ";
            $context["page_m"] = ((isset($context["page_m"]) ? $context["page_m"] : $this->getContext($context, "page_m")) + 1);
            // line 54
            echo "         ";
        }
        echo "  


            <li><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_homepage", array("page" => (isset($context["page_m"]) ? $context["page_m"] : $this->getContext($context, "page_m")))), "html", null, true);
        echo "\">&raquo;</a></li>
         </ul>

";
        
        $__internal_33fba5739b08d33a788fb29872010a6361f3bda166e27206b31b895fb96b7055->leave($__internal_33fba5739b08d33a788fb29872010a6361f3bda166e27206b31b895fb96b7055_prof);

        
        $__internal_974a8026d8e9c919fac0e6e0063dab13799195d67cd4c8e47fac3c10d782bb88->leave($__internal_974a8026d8e9c919fac0e6e0063dab13799195d67cd4c8e47fac3c10d782bb88_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Entry:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 57,  209 => 54,  206 => 53,  203 => 52,  201 => 51,  198 => 50,  187 => 48,  183 => 47,  179 => 46,  176 => 45,  173 => 44,  170 => 43,  167 => 42,  165 => 41,  160 => 38,  150 => 34,  144 => 31,  140 => 30,  137 => 29,  135 => 28,  130 => 25,  121 => 24,  117 => 23,  112 => 21,  108 => 20,  104 => 19,  100 => 18,  97 => 17,  93 => 16,  89 => 14,  80 => 13,  75 => 12,  66 => 11,  55 => 8,  53 => 7,  50 => 6,  41 => 5,  11 => 1,);
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



{% block menu %}

{% include \"BlogBundle:Category:menu.categories.html.twig\" with {'categories':categories} %}

{% endblock %}

{% block content %}
        {% for mesage in app.session.flashbag().get('status') %}
            <div class=\"alert alert-success\">{{mesage}}</div>
        {% endfor %}   

        {% for entry in entries %}
            <div class=\"col-lg-11\">
                <p class=\"pull-left\" style=\"margin-rigth:20px\"><img width=\"100px\" class=\"pull-left img-responsive\" src=\"{{asset(\"uploads/\"~entry.image)}}\"</p>
                <p><strong>{{entry.title}}</strong></p>
                <p>{{entry.category.name}}</p>
                <p>Autor: {{entry.user.name}}</p>
                <p>
                {% for et in entry.entryTag %}
                    {{et.tag.name}}
                {% endfor %} 
                </p>

                {% if (app.user.id is defined) and (entry.user.id == app.user.id) %}
                <p>
                    <a class=\"btn btn-warning\" href=\"{{path(\"blog_edit_entry\",{\"id\":entry.id})}}\">Edit</a>
                    <a class=\"btn btn-danger\" href=\"{{path(\"blog_delete_entry\",{\"id\":entry.id})}}\">Delete</a>
                </p>
                {% endif %}
                <hr/>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"clearfix\"></div>
        {% endfor %}           

         <ul class=\"pagination\">
         {% if (page==1) %}
         {% else %}
            {% set page = page-1 %}
         {% endif %}

            <li><a href=\"{{path('blog_homepage', {\"page\":page})}}\">&laquo;</a></li>
            {% for i in 1..pagesCount %}
               <li><a href=\"{{path('blog_homepage', {\"page\":i})}}\">{{i}}</a></li>
            {% endfor %}

         {% if (page_m==pagesCount) %}
         {% else %}
            {% set page_m = page_m+1 %}
         {% endif %}  


            <li><a href=\"{{path('blog_homepage', {\"page\":page_m})}}\">&raquo;</a></li>
         </ul>

{% endblock %}", "BlogBundle:Entry:index.html.twig", "C:\\xampp\\htdocs\\symfony\\src\\BlogBundle/Resources/views/Entry/index.html.twig");
    }
}
