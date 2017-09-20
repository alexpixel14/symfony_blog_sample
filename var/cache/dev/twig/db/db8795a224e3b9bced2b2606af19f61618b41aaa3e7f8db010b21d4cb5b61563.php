<?php

/* BlogBundle::layout.html.twig */
class __TwigTemplate_b21cf41fd940231530e1435443494cc0d25d427b8d4ce82a010ba20d98489405 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f269507a4769b2c082e9ded7158d2d2e272a14c45c6435b67cba16ff137d22b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f269507a4769b2c082e9ded7158d2d2e272a14c45c6435b67cba16ff137d22b->enter($__internal_8f269507a4769b2c082e9ded7158d2d2e272a14c45c6435b67cba16ff137d22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle::layout.html.twig"));

        $__internal_740f2b5cf33dc4c6250176c61a2d6656e82758b7be7cfbb0ae0ce2e4c97b914c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_740f2b5cf33dc4c6250176c61a2d6656e82758b7be7cfbb0ae0ce2e4c97b914c->enter($__internal_740f2b5cf33dc4c6250176c61a2d6656e82758b7be7cfbb0ae0ce2e4c97b914c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=\"utf8\">
        <title>
            ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "        </title>
        ";
        // line 11
        echo "        ";
        echo " 
        <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" >
        
        ";
        // line 15
        echo "        ";
        // line 16
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>       
        ";
        // line 18
        echo "        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    </head>
    <body>
        <header>
            <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_homepage");
        echo "\">Symfony3</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    ";
        // line 38
        $this->displayBlock('menu', $context, $blocks);
        // line 40
        echo "                </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        ";
        // line 43
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 44
            echo "                            Bienvenido, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "surname", array()), "html", null, true);
            echo "
                        ";
        }
        // line 46
        echo "                    </li>
                    <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-cog\"><span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        ";
        // line 50
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 51
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Entrar</a></li>
                        ";
        } else {
            // line 53
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_add_entry");
            echo "\">Añadir entrada</a></li>
                            <li><a href=\"";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index_category");
            echo "\">Categorias</a></li>
                            <li><a href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index_tag");
            echo "\">Etiquetas</a></li>
                            <li><a href=\"";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Salir</a></li>
                        ";
        }
        // line 58
        echo "                        <li role=\"separator\" class=\"divider\"></li>
                        <li><a href=\"#\">Ayuda</a></li>                        
                    </ul>
                    </li>
                </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
            </nav>       
        </header>
        <section id=\"content\">
            ";
        // line 68
        $this->displayBlock('content', $context, $blocks);
        // line 71
        echo "        </section>
        <footer>
            Curso de Symfony 3 - Alejandro Maroto Romero &copy
        </footer>
    </body>
</html>

";
        
        $__internal_8f269507a4769b2c082e9ded7158d2d2e272a14c45c6435b67cba16ff137d22b->leave($__internal_8f269507a4769b2c082e9ded7158d2d2e272a14c45c6435b67cba16ff137d22b_prof);

        
        $__internal_740f2b5cf33dc4c6250176c61a2d6656e82758b7be7cfbb0ae0ce2e4c97b914c->leave($__internal_740f2b5cf33dc4c6250176c61a2d6656e82758b7be7cfbb0ae0ce2e4c97b914c_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_248c8088f0fbe02218757c0e8615f509dd85bede85407c6f5968c49b6aafe286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248c8088f0fbe02218757c0e8615f509dd85bede85407c6f5968c49b6aafe286->enter($__internal_248c8088f0fbe02218757c0e8615f509dd85bede85407c6f5968c49b6aafe286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e25ea3e8703b9a77be2261ccd501aebef020774e51e4f4cb7d602d112ce851a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e25ea3e8703b9a77be2261ccd501aebef020774e51e4f4cb7d602d112ce851a0->enter($__internal_e25ea3e8703b9a77be2261ccd501aebef020774e51e4f4cb7d602d112ce851a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " 
                Blog con Symfony 3 
            ";
        
        $__internal_e25ea3e8703b9a77be2261ccd501aebef020774e51e4f4cb7d602d112ce851a0->leave($__internal_e25ea3e8703b9a77be2261ccd501aebef020774e51e4f4cb7d602d112ce851a0_prof);

        
        $__internal_248c8088f0fbe02218757c0e8615f509dd85bede85407c6f5968c49b6aafe286->leave($__internal_248c8088f0fbe02218757c0e8615f509dd85bede85407c6f5968c49b6aafe286_prof);

    }

    // line 38
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ae63108194848ce88dedf180cff29f5501dfd941e62f81b3445ac36058dadb7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae63108194848ce88dedf180cff29f5501dfd941e62f81b3445ac36058dadb7f->enter($__internal_ae63108194848ce88dedf180cff29f5501dfd941e62f81b3445ac36058dadb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dc1706ad9b9857831348c66b724a19331937b1fc0d56fd1e1429967c4bfcf95f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1706ad9b9857831348c66b724a19331937b1fc0d56fd1e1429967c4bfcf95f->enter($__internal_dc1706ad9b9857831348c66b724a19331937b1fc0d56fd1e1429967c4bfcf95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 39
        echo "                    ";
        
        $__internal_dc1706ad9b9857831348c66b724a19331937b1fc0d56fd1e1429967c4bfcf95f->leave($__internal_dc1706ad9b9857831348c66b724a19331937b1fc0d56fd1e1429967c4bfcf95f_prof);

        
        $__internal_ae63108194848ce88dedf180cff29f5501dfd941e62f81b3445ac36058dadb7f->leave($__internal_ae63108194848ce88dedf180cff29f5501dfd941e62f81b3445ac36058dadb7f_prof);

    }

    // line 68
    public function block_content($context, array $blocks = array())
    {
        $__internal_ec88019e3152a61fdd35796065c6409daf35b5d35ec19a72a53926a4b57828c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec88019e3152a61fdd35796065c6409daf35b5d35ec19a72a53926a4b57828c4->enter($__internal_ec88019e3152a61fdd35796065c6409daf35b5d35ec19a72a53926a4b57828c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_616645f8575635f82fd569ddc6690f48072d832e06d981e86cf8bf83c6492126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_616645f8575635f82fd569ddc6690f48072d832e06d981e86cf8bf83c6492126->enter($__internal_616645f8575635f82fd569ddc6690f48072d832e06d981e86cf8bf83c6492126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " 
                Content default 
            ";
        
        $__internal_616645f8575635f82fd569ddc6690f48072d832e06d981e86cf8bf83c6492126->leave($__internal_616645f8575635f82fd569ddc6690f48072d832e06d981e86cf8bf83c6492126_prof);

        
        $__internal_ec88019e3152a61fdd35796065c6409daf35b5d35ec19a72a53926a4b57828c4->leave($__internal_ec88019e3152a61fdd35796065c6409daf35b5d35ec19a72a53926a4b57828c4_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 68,  185 => 39,  176 => 38,  156 => 6,  139 => 71,  137 => 68,  125 => 58,  120 => 56,  116 => 55,  112 => 54,  107 => 53,  101 => 51,  99 => 50,  93 => 46,  85 => 44,  83 => 43,  78 => 40,  76 => 38,  67 => 32,  51 => 18,  48 => 16,  46 => 15,  40 => 11,  37 => 9,  35 => 6,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=\"utf8\">
        <title>
            {% block title %} 
                Blog con Symfony 3 
            {% endblock %}
        </title>
        {# css #}
        {# bootstrap #} 
        <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" >
        
        {# js #}
        {# jquery #}
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>       
        {# bootstrap #}
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    </head>
    <body>
        <header>
            <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"{{path(\"blog_homepage\")}}\">Symfony3</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    {% block menu %}
                    {% endblock %}
                </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        {% if app.user != null %}
                            Bienvenido, {{app.user.name}} {{app.user.surname}}
                        {% endif %}
                    </li>
                    <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-cog\"><span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        {% if app.user == null %}
                            <li><a href=\"{{path(\"login\")}}\">Entrar</a></li>
                        {% else %}
                            <li><a href=\"{{path(\"blog_add_entry\")}}\">Añadir entrada</a></li>
                            <li><a href=\"{{path(\"blog_index_category\")}}\">Categorias</a></li>
                            <li><a href=\"{{path(\"blog_index_tag\")}}\">Etiquetas</a></li>
                            <li><a href=\"{{path(\"logout\")}}\">Salir</a></li>
                        {% endif %}
                        <li role=\"separator\" class=\"divider\"></li>
                        <li><a href=\"#\">Ayuda</a></li>                        
                    </ul>
                    </li>
                </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
            </nav>       
        </header>
        <section id=\"content\">
            {% block content %} 
                Content default 
            {% endblock %}
        </section>
        <footer>
            Curso de Symfony 3 - Alejandro Maroto Romero &copy
        </footer>
    </body>
</html>

", "BlogBundle::layout.html.twig", "C:\\xampp\\htdocs\\symfony\\src\\BlogBundle/Resources/views/layout.html.twig");
    }
}
