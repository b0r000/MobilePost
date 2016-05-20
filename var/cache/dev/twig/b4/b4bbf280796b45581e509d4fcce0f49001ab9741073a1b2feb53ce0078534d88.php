<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c528e9b39508841572b340c5227ce69c645b5d5629f0b333f9c06093454dc62b extends Twig_Template
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
        $__internal_6a897be162d03bf09b6c842fe8066b010cf0fdfee35ca0245ca18708ec2ce34d = $this->env->getExtension("native_profiler");
        $__internal_6a897be162d03bf09b6c842fe8066b010cf0fdfee35ca0245ca18708ec2ce34d->enter($__internal_6a897be162d03bf09b6c842fe8066b010cf0fdfee35ca0245ca18708ec2ce34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a897be162d03bf09b6c842fe8066b010cf0fdfee35ca0245ca18708ec2ce34d->leave($__internal_6a897be162d03bf09b6c842fe8066b010cf0fdfee35ca0245ca18708ec2ce34d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9051c999965b2c5f9a8410dcd54054f2682908ef3d0048d7d1f96dc6c02b5c8b = $this->env->getExtension("native_profiler");
        $__internal_9051c999965b2c5f9a8410dcd54054f2682908ef3d0048d7d1f96dc6c02b5c8b->enter($__internal_9051c999965b2c5f9a8410dcd54054f2682908ef3d0048d7d1f96dc6c02b5c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9051c999965b2c5f9a8410dcd54054f2682908ef3d0048d7d1f96dc6c02b5c8b->leave($__internal_9051c999965b2c5f9a8410dcd54054f2682908ef3d0048d7d1f96dc6c02b5c8b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_20413cec350f5c8ae8b7b6a1179a9ca3d1833f0e1201aad00b305d325531b518 = $this->env->getExtension("native_profiler");
        $__internal_20413cec350f5c8ae8b7b6a1179a9ca3d1833f0e1201aad00b305d325531b518->enter($__internal_20413cec350f5c8ae8b7b6a1179a9ca3d1833f0e1201aad00b305d325531b518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_20413cec350f5c8ae8b7b6a1179a9ca3d1833f0e1201aad00b305d325531b518->leave($__internal_20413cec350f5c8ae8b7b6a1179a9ca3d1833f0e1201aad00b305d325531b518_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2ca79ba71c0fd015e7dc0d740f88120d4a8a3707a647045cce598daad918e53 = $this->env->getExtension("native_profiler");
        $__internal_f2ca79ba71c0fd015e7dc0d740f88120d4a8a3707a647045cce598daad918e53->enter($__internal_f2ca79ba71c0fd015e7dc0d740f88120d4a8a3707a647045cce598daad918e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f2ca79ba71c0fd015e7dc0d740f88120d4a8a3707a647045cce598daad918e53->leave($__internal_f2ca79ba71c0fd015e7dc0d740f88120d4a8a3707a647045cce598daad918e53_prof);

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
