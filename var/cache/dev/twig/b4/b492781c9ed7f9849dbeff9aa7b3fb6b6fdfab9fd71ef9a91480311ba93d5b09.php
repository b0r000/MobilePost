<?php

/* @Twig/Exception/logs.html.twig */
class __TwigTemplate_7ae5011935c15d4a11c1c7719babb9dc0b78a9eab854dd39ebf885cd64f93353 extends Twig_Template
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
        $__internal_4a8e8dd5b4a3bfe648eeeec3bcadc5957e0e5774a8ea78a9a08a3861c96b3ca0 = $this->env->getExtension("native_profiler");
        $__internal_4a8e8dd5b4a3bfe648eeeec3bcadc5957e0e5774a8ea78a9a08a3861c96b3ca0->enter($__internal_4a8e8dd5b4a3bfe648eeeec3bcadc5957e0e5774a8ea78a9a08a3861c96b3ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($context["log"], "priority", array()) >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($context["log"], "priority", array()) >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "message", array()), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
        
        $__internal_4a8e8dd5b4a3bfe648eeeec3bcadc5957e0e5774a8ea78a9a08a3861c96b3ca0->leave($__internal_4a8e8dd5b4a3bfe648eeeec3bcadc5957e0e5774a8ea78a9a08a3861c96b3ca0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  38 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <ol class="traces logs">*/
/*     {% for log in logs %}*/
/*         <li{% if log.priority >= 400 %} class="error"{% elseif log.priority >= 300 %} class="warning"{% endif %}>*/
/*             {{ log.priorityName }} - {{ log.message }}*/
/*         </li>*/
/*     {% endfor %}*/
/* </ol>*/
/* */
