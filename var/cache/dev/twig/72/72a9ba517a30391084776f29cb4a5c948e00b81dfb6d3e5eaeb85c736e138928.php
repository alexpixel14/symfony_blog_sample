<?php

/* BlogBundle:Category:menu.categories.html.twig */
class __TwigTemplate_e7dc9c20f83afec17a8f0e73ac4307650ea12dfdf1122eb157c10ad696bb63cd extends Twig_Template
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
        $__internal_652b7cfbc1ee3ad67c2c2a944adb1e5dffb2832d31b42f159f0029f4123afced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_652b7cfbc1ee3ad67c2c2a944adb1e5dffb2832d31b42f159f0029f4123afced->enter($__internal_652b7cfbc1ee3ad67c2c2a944adb1e5dffb2832d31b42f159f0029f4123afced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Category:menu.categories.html.twig"));

        $__internal_6b5427f2799d4a7718b9aa6bbce1c29dadbd816a21c693f565eb6acba45e866d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b5427f2799d4a7718b9aa6bbce1c29dadbd816a21c693f565eb6acba45e866d->enter($__internal_6b5427f2799d4a7718b9aa6bbce1c29dadbd816a21c693f565eb6acba45e866d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Category:menu.categories.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 2
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_read_category", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_652b7cfbc1ee3ad67c2c2a944adb1e5dffb2832d31b42f159f0029f4123afced->leave($__internal_652b7cfbc1ee3ad67c2c2a944adb1e5dffb2832d31b42f159f0029f4123afced_prof);

        
        $__internal_6b5427f2799d4a7718b9aa6bbce1c29dadbd816a21c693f565eb6acba45e866d->leave($__internal_6b5427f2799d4a7718b9aa6bbce1c29dadbd816a21c693f565eb6acba45e866d_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Category:menu.categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for category in categories %}
    <li><a href=\"{{path(\"blog_read_category\",{id:category.id})}}\">{{category.name}}</a>
{% endfor %}", "BlogBundle:Category:menu.categories.html.twig", "C:\\xampp\\htdocs\\symfony\\src\\BlogBundle/Resources/views/Category/menu.categories.html.twig");
    }
}
