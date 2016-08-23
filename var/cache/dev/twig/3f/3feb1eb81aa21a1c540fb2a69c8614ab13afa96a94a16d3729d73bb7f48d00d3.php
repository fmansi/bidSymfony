<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8fa7b9d965fc2e39d6d3ea60f3eeaeb3b693da257a78a96fb9c2901b96453bfb extends Twig_Template
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
        $__internal_12711a12e9910c006d978a682ca8cea3a47606fffe2f89a2ca402c028769f005 = $this->env->getExtension("native_profiler");
        $__internal_12711a12e9910c006d978a682ca8cea3a47606fffe2f89a2ca402c028769f005->enter($__internal_12711a12e9910c006d978a682ca8cea3a47606fffe2f89a2ca402c028769f005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12711a12e9910c006d978a682ca8cea3a47606fffe2f89a2ca402c028769f005->leave($__internal_12711a12e9910c006d978a682ca8cea3a47606fffe2f89a2ca402c028769f005_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_768d073faeb0dc7ab1b65758c008ed9f7711ff37521dc7d5c50546ddfda8256b = $this->env->getExtension("native_profiler");
        $__internal_768d073faeb0dc7ab1b65758c008ed9f7711ff37521dc7d5c50546ddfda8256b->enter($__internal_768d073faeb0dc7ab1b65758c008ed9f7711ff37521dc7d5c50546ddfda8256b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_768d073faeb0dc7ab1b65758c008ed9f7711ff37521dc7d5c50546ddfda8256b->leave($__internal_768d073faeb0dc7ab1b65758c008ed9f7711ff37521dc7d5c50546ddfda8256b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0165917fe95abcd88df0c2b5794a89dcb5dd13363be9934da76c53a0d63e407c = $this->env->getExtension("native_profiler");
        $__internal_0165917fe95abcd88df0c2b5794a89dcb5dd13363be9934da76c53a0d63e407c->enter($__internal_0165917fe95abcd88df0c2b5794a89dcb5dd13363be9934da76c53a0d63e407c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0165917fe95abcd88df0c2b5794a89dcb5dd13363be9934da76c53a0d63e407c->leave($__internal_0165917fe95abcd88df0c2b5794a89dcb5dd13363be9934da76c53a0d63e407c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0edc2348c31494d7da8d02c15125694b540fec6d03f920adced9f642261856c9 = $this->env->getExtension("native_profiler");
        $__internal_0edc2348c31494d7da8d02c15125694b540fec6d03f920adced9f642261856c9->enter($__internal_0edc2348c31494d7da8d02c15125694b540fec6d03f920adced9f642261856c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0edc2348c31494d7da8d02c15125694b540fec6d03f920adced9f642261856c9->leave($__internal_0edc2348c31494d7da8d02c15125694b540fec6d03f920adced9f642261856c9_prof);

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
