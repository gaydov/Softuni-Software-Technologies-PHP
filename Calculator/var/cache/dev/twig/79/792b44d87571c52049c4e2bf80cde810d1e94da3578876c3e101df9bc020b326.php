<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_69ffe7a45c08736f623cd4da2024f8db57471067ff3b5dadf76d77707467c223 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1df9e308494fc0a3b3c591b0ec3a3719d437cea8f69a72a1f1e0cc9678b9fed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df9e308494fc0a3b3c591b0ec3a3719d437cea8f69a72a1f1e0cc9678b9fed3->enter($__internal_1df9e308494fc0a3b3c591b0ec3a3719d437cea8f69a72a1f1e0cc9678b9fed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1df9e308494fc0a3b3c591b0ec3a3719d437cea8f69a72a1f1e0cc9678b9fed3->leave($__internal_1df9e308494fc0a3b3c591b0ec3a3719d437cea8f69a72a1f1e0cc9678b9fed3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_07a4ffc9b8c93a3c22b4c41fcd18d1f0e9ab5a8d12d5a26e57357acc30ba18c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07a4ffc9b8c93a3c22b4c41fcd18d1f0e9ab5a8d12d5a26e57357acc30ba18c0->enter($__internal_07a4ffc9b8c93a3c22b4c41fcd18d1f0e9ab5a8d12d5a26e57357acc30ba18c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_07a4ffc9b8c93a3c22b4c41fcd18d1f0e9ab5a8d12d5a26e57357acc30ba18c0->leave($__internal_07a4ffc9b8c93a3c22b4c41fcd18d1f0e9ab5a8d12d5a26e57357acc30ba18c0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac3bbb76c9702016d50f1c0446863e94fe82d77806f7672125481a956ea0fbe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac3bbb76c9702016d50f1c0446863e94fe82d77806f7672125481a956ea0fbe9->enter($__internal_ac3bbb76c9702016d50f1c0446863e94fe82d77806f7672125481a956ea0fbe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ac3bbb76c9702016d50f1c0446863e94fe82d77806f7672125481a956ea0fbe9->leave($__internal_ac3bbb76c9702016d50f1c0446863e94fe82d77806f7672125481a956ea0fbe9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f661ce04a99c9bfe5e5e9e2f50067f4900f67fd1abe5ddea599c0b1e17528da2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f661ce04a99c9bfe5e5e9e2f50067f4900f67fd1abe5ddea599c0b1e17528da2->enter($__internal_f661ce04a99c9bfe5e5e9e2f50067f4900f67fd1abe5ddea599c0b1e17528da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f661ce04a99c9bfe5e5e9e2f50067f4900f67fd1abe5ddea599c0b1e17528da2->leave($__internal_f661ce04a99c9bfe5e5e9e2f50067f4900f67fd1abe5ddea599c0b1e17528da2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
