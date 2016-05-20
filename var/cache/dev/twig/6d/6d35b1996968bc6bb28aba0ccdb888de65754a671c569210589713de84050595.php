<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f82ff1eeadc179db9a510f51d393bcb7cf37e14ad7dbbbee11e31f2d0b49b170 extends Twig_Template
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
        $__internal_d09434cd0d31beccfd41e7978d611c9397cfac4c226c4a5cfeea7b6394b6337f = $this->env->getExtension("native_profiler");
        $__internal_d09434cd0d31beccfd41e7978d611c9397cfac4c226c4a5cfeea7b6394b6337f->enter($__internal_d09434cd0d31beccfd41e7978d611c9397cfac4c226c4a5cfeea7b6394b6337f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d09434cd0d31beccfd41e7978d611c9397cfac4c226c4a5cfeea7b6394b6337f->leave($__internal_d09434cd0d31beccfd41e7978d611c9397cfac4c226c4a5cfeea7b6394b6337f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bf44ded3bb69169e371b7c9affcc56f07d7b42b9aa47ece2569eb6278646805c = $this->env->getExtension("native_profiler");
        $__internal_bf44ded3bb69169e371b7c9affcc56f07d7b42b9aa47ece2569eb6278646805c->enter($__internal_bf44ded3bb69169e371b7c9affcc56f07d7b42b9aa47ece2569eb6278646805c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bf44ded3bb69169e371b7c9affcc56f07d7b42b9aa47ece2569eb6278646805c->leave($__internal_bf44ded3bb69169e371b7c9affcc56f07d7b42b9aa47ece2569eb6278646805c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d405f689227c4134260fe46ec1b110d5ab08943e05106b6b82f99e22cf328990 = $this->env->getExtension("native_profiler");
        $__internal_d405f689227c4134260fe46ec1b110d5ab08943e05106b6b82f99e22cf328990->enter($__internal_d405f689227c4134260fe46ec1b110d5ab08943e05106b6b82f99e22cf328990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d405f689227c4134260fe46ec1b110d5ab08943e05106b6b82f99e22cf328990->leave($__internal_d405f689227c4134260fe46ec1b110d5ab08943e05106b6b82f99e22cf328990_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_691048e8acb3b10654f6858071ed2a20520da1b5e0fa2adc70ee3e712556e9a6 = $this->env->getExtension("native_profiler");
        $__internal_691048e8acb3b10654f6858071ed2a20520da1b5e0fa2adc70ee3e712556e9a6->enter($__internal_691048e8acb3b10654f6858071ed2a20520da1b5e0fa2adc70ee3e712556e9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_691048e8acb3b10654f6858071ed2a20520da1b5e0fa2adc70ee3e712556e9a6->leave($__internal_691048e8acb3b10654f6858071ed2a20520da1b5e0fa2adc70ee3e712556e9a6_prof);

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
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
