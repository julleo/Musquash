<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e017b22bd839be365451216c713a6ce3d377cc73489f7da1668294a9ab2ad2f6 extends Twig_Template
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
        $__internal_3c07ca702a8727c4e02eb693c0ee2bfc0c0bf9b5e2e197e48085d5683fdeda97 = $this->env->getExtension("native_profiler");
        $__internal_3c07ca702a8727c4e02eb693c0ee2bfc0c0bf9b5e2e197e48085d5683fdeda97->enter($__internal_3c07ca702a8727c4e02eb693c0ee2bfc0c0bf9b5e2e197e48085d5683fdeda97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c07ca702a8727c4e02eb693c0ee2bfc0c0bf9b5e2e197e48085d5683fdeda97->leave($__internal_3c07ca702a8727c4e02eb693c0ee2bfc0c0bf9b5e2e197e48085d5683fdeda97_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dbd255d6e1a6e4920426600b96036ea0ad535faa4c7eb2b0ef8533639dc4cadc = $this->env->getExtension("native_profiler");
        $__internal_dbd255d6e1a6e4920426600b96036ea0ad535faa4c7eb2b0ef8533639dc4cadc->enter($__internal_dbd255d6e1a6e4920426600b96036ea0ad535faa4c7eb2b0ef8533639dc4cadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dbd255d6e1a6e4920426600b96036ea0ad535faa4c7eb2b0ef8533639dc4cadc->leave($__internal_dbd255d6e1a6e4920426600b96036ea0ad535faa4c7eb2b0ef8533639dc4cadc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_18bd775bc220a2537c1dcf65678e7439094db7f05448136014adebd028556a21 = $this->env->getExtension("native_profiler");
        $__internal_18bd775bc220a2537c1dcf65678e7439094db7f05448136014adebd028556a21->enter($__internal_18bd775bc220a2537c1dcf65678e7439094db7f05448136014adebd028556a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_18bd775bc220a2537c1dcf65678e7439094db7f05448136014adebd028556a21->leave($__internal_18bd775bc220a2537c1dcf65678e7439094db7f05448136014adebd028556a21_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b04f0bc1b9fd66af53286abf9563484af0ce69d75aafd07edb60c4e2405633f = $this->env->getExtension("native_profiler");
        $__internal_8b04f0bc1b9fd66af53286abf9563484af0ce69d75aafd07edb60c4e2405633f->enter($__internal_8b04f0bc1b9fd66af53286abf9563484af0ce69d75aafd07edb60c4e2405633f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8b04f0bc1b9fd66af53286abf9563484af0ce69d75aafd07edb60c4e2405633f->leave($__internal_8b04f0bc1b9fd66af53286abf9563484af0ce69d75aafd07edb60c4e2405633f_prof);

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
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
