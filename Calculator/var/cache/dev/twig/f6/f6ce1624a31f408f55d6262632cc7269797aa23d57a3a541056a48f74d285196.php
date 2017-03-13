<?php

/* base.html.twig */
class __TwigTemplate_da4cd8faee1f941e7cf8c0fae723f3e0516c48252d9144e4147b6d6513aff3d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fd11b6d7bed8597d57cbad4e037fad3cf22c8651a21854a11260e5c83e6595b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd11b6d7bed8597d57cbad4e037fad3cf22c8651a21854a11260e5c83e6595b->enter($__internal_4fd11b6d7bed8597d57cbad4e037fad3cf22c8651a21854a11260e5c83e6595b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_4fd11b6d7bed8597d57cbad4e037fad3cf22c8651a21854a11260e5c83e6595b->leave($__internal_4fd11b6d7bed8597d57cbad4e037fad3cf22c8651a21854a11260e5c83e6595b_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_acbd393ab7a15154b8b11ffb4aeb3d773b84acd8ef49a720bcf76d798c1e0e59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acbd393ab7a15154b8b11ffb4aeb3d773b84acd8ef49a720bcf76d798c1e0e59->enter($__internal_acbd393ab7a15154b8b11ffb4aeb3d773b84acd8ef49a720bcf76d798c1e0e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_acbd393ab7a15154b8b11ffb4aeb3d773b84acd8ef49a720bcf76d798c1e0e59->leave($__internal_acbd393ab7a15154b8b11ffb4aeb3d773b84acd8ef49a720bcf76d798c1e0e59_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cfa78d628c4492f845a399808f1b96aec28fec74828001c34be451e64247486f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfa78d628c4492f845a399808f1b96aec28fec74828001c34be451e64247486f->enter($__internal_cfa78d628c4492f845a399808f1b96aec28fec74828001c34be451e64247486f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_cfa78d628c4492f845a399808f1b96aec28fec74828001c34be451e64247486f->leave($__internal_cfa78d628c4492f845a399808f1b96aec28fec74828001c34be451e64247486f_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_abd5cbcd78288cfeb22d12fb79379402ddc00d2540109608286fdcf0abaea5ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abd5cbcd78288cfeb22d12fb79379402ddc00d2540109608286fdcf0abaea5ff->enter($__internal_abd5cbcd78288cfeb22d12fb79379402ddc00d2540109608286fdcf0abaea5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_abd5cbcd78288cfeb22d12fb79379402ddc00d2540109608286fdcf0abaea5ff->leave($__internal_abd5cbcd78288cfeb22d12fb79379402ddc00d2540109608286fdcf0abaea5ff_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_70ed3b5929fc1b0f59cc37347e060cafd7f38e7f209f5304451a4deb6acb4bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ed3b5929fc1b0f59cc37347e060cafd7f38e7f209f5304451a4deb6acb4bc9->enter($__internal_70ed3b5929fc1b0f59cc37347e060cafd7f38e7f209f5304451a4deb6acb4bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_70ed3b5929fc1b0f59cc37347e060cafd7f38e7f209f5304451a4deb6acb4bc9->leave($__internal_70ed3b5929fc1b0f59cc37347e060cafd7f38e7f209f5304451a4deb6acb4bc9_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_b58fb6c988306bb2cc185eeeb6c463b99cc8bb8937122b9010631962691a64e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b58fb6c988306bb2cc185eeeb6c463b99cc8bb8937122b9010631962691a64e4->enter($__internal_b58fb6c988306bb2cc185eeeb6c463b99cc8bb8937122b9010631962691a64e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_b58fb6c988306bb2cc185eeeb6c463b99cc8bb8937122b9010631962691a64e4->leave($__internal_b58fb6c988306bb2cc185eeeb6c463b99cc8bb8937122b9010631962691a64e4_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_f1437f88f867eb9728b9e02128b31570d67cfec583070c6c4ef98bd5ad534f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1437f88f867eb9728b9e02128b31570d67cfec583070c6c4ef98bd5ad534f95->enter($__internal_f1437f88f867eb9728b9e02128b31570d67cfec583070c6c4ef98bd5ad534f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_f1437f88f867eb9728b9e02128b31570d67cfec583070c6c4ef98bd5ad534f95->leave($__internal_f1437f88f867eb9728b9e02128b31570d67cfec583070c6c4ef98bd5ad534f95_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_28739430a040bd4f6c69ebdcac06973bc29740dace758f5cdedb6d14d0e3f13d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28739430a040bd4f6c69ebdcac06973bc29740dace758f5cdedb6d14d0e3f13d->enter($__internal_28739430a040bd4f6c69ebdcac06973bc29740dace758f5cdedb6d14d0e3f13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_28739430a040bd4f6c69ebdcac06973bc29740dace758f5cdedb6d14d0e3f13d->leave($__internal_28739430a040bd4f6c69ebdcac06973bc29740dace758f5cdedb6d14d0e3f13d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
