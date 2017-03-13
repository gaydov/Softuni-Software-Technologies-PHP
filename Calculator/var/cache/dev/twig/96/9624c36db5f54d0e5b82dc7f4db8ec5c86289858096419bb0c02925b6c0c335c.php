<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4e44ef017c6b5139fbbf6a697b09f9dd726609847b7a31dbf976be1acab96d7c extends Twig_Template
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
        $__internal_281db705ba85fdd763a44d5b9360bfff785c1407cd352442f3f1a4f807c2f0dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281db705ba85fdd763a44d5b9360bfff785c1407cd352442f3f1a4f807c2f0dd->enter($__internal_281db705ba85fdd763a44d5b9360bfff785c1407cd352442f3f1a4f807c2f0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_281db705ba85fdd763a44d5b9360bfff785c1407cd352442f3f1a4f807c2f0dd->leave($__internal_281db705ba85fdd763a44d5b9360bfff785c1407cd352442f3f1a4f807c2f0dd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_43084daeddaf81ca7c34d750c2cf02c99638757a9f82fa0696e6d46dbb907575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43084daeddaf81ca7c34d750c2cf02c99638757a9f82fa0696e6d46dbb907575->enter($__internal_43084daeddaf81ca7c34d750c2cf02c99638757a9f82fa0696e6d46dbb907575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_43084daeddaf81ca7c34d750c2cf02c99638757a9f82fa0696e6d46dbb907575->leave($__internal_43084daeddaf81ca7c34d750c2cf02c99638757a9f82fa0696e6d46dbb907575_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e2142ef870dc97972942e9d7d01f4b14edac3c0e9b82fe1e2b61b392d4cf5423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2142ef870dc97972942e9d7d01f4b14edac3c0e9b82fe1e2b61b392d4cf5423->enter($__internal_e2142ef870dc97972942e9d7d01f4b14edac3c0e9b82fe1e2b61b392d4cf5423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e2142ef870dc97972942e9d7d01f4b14edac3c0e9b82fe1e2b61b392d4cf5423->leave($__internal_e2142ef870dc97972942e9d7d01f4b14edac3c0e9b82fe1e2b61b392d4cf5423_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a1e5a551283a7ff0ae2694c64fbe1636fcdfc670d9f306ec6eb8ca4e2d85204d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1e5a551283a7ff0ae2694c64fbe1636fcdfc670d9f306ec6eb8ca4e2d85204d->enter($__internal_a1e5a551283a7ff0ae2694c64fbe1636fcdfc670d9f306ec6eb8ca4e2d85204d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a1e5a551283a7ff0ae2694c64fbe1636fcdfc670d9f306ec6eb8ca4e2d85204d->leave($__internal_a1e5a551283a7ff0ae2694c64fbe1636fcdfc670d9f306ec6eb8ca4e2d85204d_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
";
    }
}
