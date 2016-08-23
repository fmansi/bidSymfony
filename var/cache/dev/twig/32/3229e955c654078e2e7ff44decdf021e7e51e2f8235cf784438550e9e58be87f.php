<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_8ff00de7790ee73020b26160a039af3df19706d5f49cef9ebc1b1352e18f1563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d640cc296c0cadd13d04de0eccb57b9642989fb73e192d4a703cfe1df80a1864 = $this->env->getExtension("native_profiler");
        $__internal_d640cc296c0cadd13d04de0eccb57b9642989fb73e192d4a703cfe1df80a1864->enter($__internal_d640cc296c0cadd13d04de0eccb57b9642989fb73e192d4a703cfe1df80a1864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d640cc296c0cadd13d04de0eccb57b9642989fb73e192d4a703cfe1df80a1864->leave($__internal_d640cc296c0cadd13d04de0eccb57b9642989fb73e192d4a703cfe1df80a1864_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_09012b4989f2a3d445644b949c3592841f706635a51f1fadc67d6f8f9ea343de = $this->env->getExtension("native_profiler");
        $__internal_09012b4989f2a3d445644b949c3592841f706635a51f1fadc67d6f8f9ea343de->enter($__internal_09012b4989f2a3d445644b949c3592841f706635a51f1fadc67d6f8f9ea343de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!-- ##### Menu ##### -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col s12 m6\">
                <div class =\"titles-box\" >
                    <h2 class = \"titles-top\">Entrar</h2>
                </div>

                <div class=\"card-panel\">
                    <div class=\"card-content\">
                        <p>Para participar das vantagens do leilão da Bid Travel é necessario fazer login.</p>
                        <form action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                            <div class=\"row margin\">
                                <div class=\"input-field col s12\">
                                    <i class=\"material-icons prefix\">perm_identity</i>
                                    <input type=\"text\" class=\"validate\" id=\"login\" name=\"_username\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                                    <label for=\"login\">Apelido, E-mail ou CPF</label>
                                </div>
                            </div>
                            <div class=\"row margin\">
                                <div class=\"input-field col s12\">
                                    <i class=\"material-icons prefix\">lock_outline</i>
                                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                                    <label for=\"password\">Senha</label>
                                </div>
                            </div>
                            <div class=\"row margin\">
                                <div class=\"input-field col s6 m6 l6\">
                                    <input type=\"submit\" id=\"_submit\" class=\"btn waves-effect waves-light green darken-3\" name=\"_submit\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Entrar", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                                </div>
                                <div class=\"input-field col s3 m3 l3  login-text\">
                                    <input type=\"checkbox\" id=\"remember-me\" name=\"_remember_me\" value=\"on\" />
                                    <label for=\"remember-me\">Lembrar</label>
                                </div>
                                <div class=\"input-field col s6 m6 l6\">
                                    <a class=\"right\" href=\"forgot-password.html\">Esqueceu sua senha?</a>
                                </div>
                            </div>
                            ";
        // line 45
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 46
            echo "                                <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                            ";
        }
        // line 48
        echo "                    </div>

                    <!--<div class = \"divider\"></div>
                      <h4 class=\"center grey-text text-lighten-1\">ou</h4>
                      <a class=\"btn blue darken-4 btn-block\" href=\"myaccount.html\">
                        <i class=\"fa fa-facebook margin-right-5\"></i> Entrar com o facebook
                      </a>-->
                </div>
                </form>
            </div>
            <div class=\"col s12 m6\">
                <div class =\"titles-box\" >
                    <h1 class = \"titles-top\">Não</h1>
                    <h3 class = \"titles-bottom right\">é cadastrado?</h3>
                </div>
                <div class=\"card-panel\">
                    <div class=\"card-content\">
                        <p>Entre para o nosso clube de viagens.</p>
                        <form class=\"register-form\">
                            <div class=\"row margin\">
                                <div class=\"input-field col s8\">
                                    <a href=\"register.html\" class=\"btn waves-effect waves-light green darken-3\">Cadastre-se</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


";
        
        $__internal_09012b4989f2a3d445644b949c3592841f706635a51f1fadc67d6f8f9ea343de->leave($__internal_09012b4989f2a3d445644b949c3592841f706635a51f1fadc67d6f8f9ea343de_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 48,  95 => 46,  93 => 45,  80 => 35,  64 => 22,  57 => 18,  53 => 17,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block body %}*/
/*     <!-- ##### Menu ##### -->*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col s12 m6">*/
/*                 <div class ="titles-box" >*/
/*                     <h2 class = "titles-top">Entrar</h2>*/
/*                 </div>*/
/* */
/*                 <div class="card-panel">*/
/*                     <div class="card-content">*/
/*                         <p>Para participar das vantagens do leilão da Bid Travel é necessario fazer login.</p>*/
/*                         <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                             <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                             <div class="row margin">*/
/*                                 <div class="input-field col s12">*/
/*                                     <i class="material-icons prefix">perm_identity</i>*/
/*                                     <input type="text" class="validate" id="login" name="_username" value="{{ last_username }}" required="required" />*/
/*                                     <label for="login">Apelido, E-mail ou CPF</label>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row margin">*/
/*                                 <div class="input-field col s12">*/
/*                                     <i class="material-icons prefix">lock_outline</i>*/
/*                                     <input type="password" id="password" name="_password" required="required" />*/
/*                                     <label for="password">Senha</label>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row margin">*/
/*                                 <div class="input-field col s6 m6 l6">*/
/*                                     <input type="submit" id="_submit" class="btn waves-effect waves-light green darken-3" name="_submit" value="{{ 'Entrar'|trans }}" />*/
/*                                 </div>*/
/*                                 <div class="input-field col s3 m3 l3  login-text">*/
/*                                     <input type="checkbox" id="remember-me" name="_remember_me" value="on" />*/
/*                                     <label for="remember-me">Lembrar</label>*/
/*                                 </div>*/
/*                                 <div class="input-field col s6 m6 l6">*/
/*                                     <a class="right" href="forgot-password.html">Esqueceu sua senha?</a>*/
/*                                 </div>*/
/*                             </div>*/
/*                             {% if error %}*/
/*                                 <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*                             {% endif %}*/
/*                     </div>*/
/* */
/*                     <!--<div class = "divider"></div>*/
/*                       <h4 class="center grey-text text-lighten-1">ou</h4>*/
/*                       <a class="btn blue darken-4 btn-block" href="myaccount.html">*/
/*                         <i class="fa fa-facebook margin-right-5"></i> Entrar com o facebook*/
/*                       </a>-->*/
/*                 </div>*/
/*                 </form>*/
/*             </div>*/
/*             <div class="col s12 m6">*/
/*                 <div class ="titles-box" >*/
/*                     <h1 class = "titles-top">Não</h1>*/
/*                     <h3 class = "titles-bottom right">é cadastrado?</h3>*/
/*                 </div>*/
/*                 <div class="card-panel">*/
/*                     <div class="card-content">*/
/*                         <p>Entre para o nosso clube de viagens.</p>*/
/*                         <form class="register-form">*/
/*                             <div class="row margin">*/
/*                                 <div class="input-field col s8">*/
/*                                     <a href="register.html" class="btn waves-effect waves-light green darken-3">Cadastre-se</a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock body %}*/
/* */
