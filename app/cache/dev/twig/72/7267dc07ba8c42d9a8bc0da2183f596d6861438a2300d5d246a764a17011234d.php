<?php

/* base.html.twig */
class __TwigTemplate_deaf7974636d5f42e19bcacf50575551f5009c79acd06e3b96ae22d74c504217 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5bc721934608c19b89ca7ee05209ce72e4180bf066b4f9de3f28373f3752703 = $this->env->getExtension("native_profiler");
        $__internal_e5bc721934608c19b89ca7ee05209ce72e4180bf066b4f9de3f28373f3752703->enter($__internal_e5bc721934608c19b89ca7ee05209ce72e4180bf066b4f9de3f28373f3752703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e5bc721934608c19b89ca7ee05209ce72e4180bf066b4f9de3f28373f3752703->leave($__internal_e5bc721934608c19b89ca7ee05209ce72e4180bf066b4f9de3f28373f3752703_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_513f597566dc17807d344b707e28e4d5d2d5a20ce96ff90d6dac34d3b4fe82fa = $this->env->getExtension("native_profiler");
        $__internal_513f597566dc17807d344b707e28e4d5d2d5a20ce96ff90d6dac34d3b4fe82fa->enter($__internal_513f597566dc17807d344b707e28e4d5d2d5a20ce96ff90d6dac34d3b4fe82fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_513f597566dc17807d344b707e28e4d5d2d5a20ce96ff90d6dac34d3b4fe82fa->leave($__internal_513f597566dc17807d344b707e28e4d5d2d5a20ce96ff90d6dac34d3b4fe82fa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c05686612fc255c14666fdf7e76b95f1ebcede1ae83ab479bd83578993a58c4d = $this->env->getExtension("native_profiler");
        $__internal_c05686612fc255c14666fdf7e76b95f1ebcede1ae83ab479bd83578993a58c4d->enter($__internal_c05686612fc255c14666fdf7e76b95f1ebcede1ae83ab479bd83578993a58c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c05686612fc255c14666fdf7e76b95f1ebcede1ae83ab479bd83578993a58c4d->leave($__internal_c05686612fc255c14666fdf7e76b95f1ebcede1ae83ab479bd83578993a58c4d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_07bcca8d4dae7e4e7331ed5473f176ddebcb043f400886057c40c1e6e754641d = $this->env->getExtension("native_profiler");
        $__internal_07bcca8d4dae7e4e7331ed5473f176ddebcb043f400886057c40c1e6e754641d->enter($__internal_07bcca8d4dae7e4e7331ed5473f176ddebcb043f400886057c40c1e6e754641d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_07bcca8d4dae7e4e7331ed5473f176ddebcb043f400886057c40c1e6e754641d->leave($__internal_07bcca8d4dae7e4e7331ed5473f176ddebcb043f400886057c40c1e6e754641d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9377782bd6271a3a8580b3321d0583bbe012be08cde4886820f996e8a9872e9d = $this->env->getExtension("native_profiler");
        $__internal_9377782bd6271a3a8580b3321d0583bbe012be08cde4886820f996e8a9872e9d->enter($__internal_9377782bd6271a3a8580b3321d0583bbe012be08cde4886820f996e8a9872e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9377782bd6271a3a8580b3321d0583bbe012be08cde4886820f996e8a9872e9d->leave($__internal_9377782bd6271a3a8580b3321d0583bbe012be08cde4886820f996e8a9872e9d_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
