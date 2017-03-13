<?php

/* form/fields.html.twig */
class __TwigTemplate_56ecb88f40f2e665eb1afddb5562e8d3289fb546a8de409007a064a446da0afe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fed52718d8c6a17c063dd47f27a2266dda5e3dda92a88d286a6ee67bab6ac7ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed52718d8c6a17c063dd47f27a2266dda5e3dda92a88d286a6ee67bab6ac7ff->enter($__internal_fed52718d8c6a17c063dd47f27a2266dda5e3dda92a88d286a6ee67bab6ac7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_fed52718d8c6a17c063dd47f27a2266dda5e3dda92a88d286a6ee67bab6ac7ff->leave($__internal_fed52718d8c6a17c063dd47f27a2266dda5e3dda92a88d286a6ee67bab6ac7ff_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_0c55ca7e228c08d71f843a51fe03fb8f49be1dc9fb99046403f9207d25fa3218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c55ca7e228c08d71f843a51fe03fb8f49be1dc9fb99046403f9207d25fa3218->enter($__internal_0c55ca7e228c08d71f843a51fe03fb8f49be1dc9fb99046403f9207d25fa3218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 13
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            ";
        // line 15
        echo "                ";
        // line 16
        echo "            ";
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0c55ca7e228c08d71f843a51fe03fb8f49be1dc9fb99046403f9207d25fa3218->leave($__internal_0c55ca7e228c08d71f843a51fe03fb8f49be1dc9fb99046403f9207d25fa3218_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  50 => 16,  48 => 15,  44 => 13,  41 => 12,  38 => 11,  26 => 10,  23 => 9,);
    }

    public function getSource()
    {
        return "{#
   Each field type is rendered by a template fragment, which is determined
   by the name of your form type class (DateTimePickerType -> date_time_picker)
   and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
   in DateTimePickerType.

   See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field
#}

{% block date_time_picker_widget %}
    {% spaceless %}
        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            {{ block('datetime_widget') }}
            {#<span class=\"input-group-addon\">#}
                {#<span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>#}
            {#</span>#}
        </div>
    {% endspaceless %}
{% endblock %}
";
    }
}
