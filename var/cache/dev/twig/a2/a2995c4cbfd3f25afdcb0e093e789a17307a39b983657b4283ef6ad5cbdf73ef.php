<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6188eb5b928660d4cb50c29a095240b6ca1ec73d4b09debf15e77c730e39db98 extends Twig_Template
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
        $__internal_6d61154d2e27cf2773fb42e224784e8a534e18ba7a0d65c54245e1421a397016 = $this->env->getExtension("native_profiler");
        $__internal_6d61154d2e27cf2773fb42e224784e8a534e18ba7a0d65c54245e1421a397016->enter($__internal_6d61154d2e27cf2773fb42e224784e8a534e18ba7a0d65c54245e1421a397016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d61154d2e27cf2773fb42e224784e8a534e18ba7a0d65c54245e1421a397016->leave($__internal_6d61154d2e27cf2773fb42e224784e8a534e18ba7a0d65c54245e1421a397016_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_61e1331a6e2a7f567f7b6aa52aba00734f105e336e40d9e4d6a1093422171756 = $this->env->getExtension("native_profiler");
        $__internal_61e1331a6e2a7f567f7b6aa52aba00734f105e336e40d9e4d6a1093422171756->enter($__internal_61e1331a6e2a7f567f7b6aa52aba00734f105e336e40d9e4d6a1093422171756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_61e1331a6e2a7f567f7b6aa52aba00734f105e336e40d9e4d6a1093422171756->leave($__internal_61e1331a6e2a7f567f7b6aa52aba00734f105e336e40d9e4d6a1093422171756_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_454e14b52188e5c7173266e28884f862389d92a1f72e1fe5c974405132f477aa = $this->env->getExtension("native_profiler");
        $__internal_454e14b52188e5c7173266e28884f862389d92a1f72e1fe5c974405132f477aa->enter($__internal_454e14b52188e5c7173266e28884f862389d92a1f72e1fe5c974405132f477aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_454e14b52188e5c7173266e28884f862389d92a1f72e1fe5c974405132f477aa->leave($__internal_454e14b52188e5c7173266e28884f862389d92a1f72e1fe5c974405132f477aa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_721e184f374c895292d9a2745613318c75eb508e2afe2a56e1e3f5767b86b0d5 = $this->env->getExtension("native_profiler");
        $__internal_721e184f374c895292d9a2745613318c75eb508e2afe2a56e1e3f5767b86b0d5->enter($__internal_721e184f374c895292d9a2745613318c75eb508e2afe2a56e1e3f5767b86b0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_721e184f374c895292d9a2745613318c75eb508e2afe2a56e1e3f5767b86b0d5->leave($__internal_721e184f374c895292d9a2745613318c75eb508e2afe2a56e1e3f5767b86b0d5_prof);

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
