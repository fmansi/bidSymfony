<?php

/* base.html.twig */
class __TwigTemplate_e07766d05553064cc7273be15dd4d214c96681bb9feec8bebf19aa2c326cd5fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0141e2e8e3b3222b0ff05f1290cf5ca34c988d16552506211ff91fb57d35d3c3 = $this->env->getExtension("native_profiler");
        $__internal_0141e2e8e3b3222b0ff05f1290cf5ca34c988d16552506211ff91fb57d35d3c3->enter($__internal_0141e2e8e3b3222b0ff05f1290cf5ca34c988d16552506211ff91fb57d35d3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0\"/>
    <title>Bid Travel Brasil</title>

    <!-- CSS  -->
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

    ";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "20b8070_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_20b8070_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/20b8070_materialize_1.css");
            // line 12
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\"/>
    ";
        } else {
            // asset "20b8070"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_20b8070") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/20b8070.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "
    ";
        // line 15
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "070a079_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_070a079_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/070a079_font-awesome.min_1.css");
            // line 16
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\"/>
    ";
        } else {
            // asset "070a079"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_070a079") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/070a079.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 18
        echo "
    ";
        // line 19
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "de0221f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_de0221f_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/de0221f_style_1.css");
            // line 20
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\"/>
    ";
        } else {
            // asset "de0221f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_de0221f") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/de0221f.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 22
        echo "
    ";
        // line 23
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5bdb071_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5bdb071_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/5bdb071_project_1.css");
            // line 24
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\"/>
    ";
        } else {
            // asset "5bdb071"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5bdb071") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/5bdb071.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 26
        echo "
    ";
        // line 27
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "674e75b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_674e75b_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/674e75b_swiper.min_1.css");
            // line 28
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\"/>
    ";
        } else {
            // asset "674e75b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_674e75b") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/674e75b.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 30
        echo "
    ";
        // line 31
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b1281ba_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b1281ba_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/b1281ba_favicon_1.css");
            // line 32
            echo "    <!--[if IE]><link rel=\"shortcut icon\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"><![endif]-->
    <link rel=\"icon\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
    ";
        } else {
            // asset "b1281ba"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b1281ba") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/b1281ba.css");
            // line 32
            echo "    <!--[if IE]><link rel=\"shortcut icon\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"><![endif]-->
    <link rel=\"icon\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
    ";
        }
        unset($context["asset_url"]);
        // line 35
        echo "
    ";
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "</head>
<body class=\"grey lighten-2\">

<!-- ##### Menu ##### -->

<nav class=\"light-blue lighten-1 navbar-fixed\">
    <div class=\"nav-wrapper container\">
        <a id=\"logo-container\" href=\"#\" class=\"brand-logo center\">
            ";
        // line 45
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "017cd22_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_017cd22_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/logo-bid-travel_logo-bid-travel_1.png");
            // line 48
            echo "            <img class=\"responsive-img\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Bid Travel Brasil\" />
            ";
        } else {
            // asset "017cd22"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_017cd22") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/logo-bid-travel.png");
            echo "            <img class=\"responsive-img\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Bid Travel Brasil\" />
            ";
        }
        unset($context["asset_url"]);
        // line 50
        echo "        </a>
        <ul class=\"left hide-on-med-and-down\">
            <li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getUrl("AppBundleHome");
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getUrl("AppBundleComoFunciona");
        echo "\">Como funciona</a></li>
            <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getUrl("LeilaoBundle");
        echo "\">Leilão</a></li>
            <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getUrl("AppBundleCupons");
        echo "\">Cupons</a></li>
            <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getUrl("AppBundleSocial");
        echo "\">Social</a></li>
        </ul>

        <ul class=\"right hide-on-med-and-down\">
            ";
        // line 60
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 61
            echo "                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("AppBundleUsuarioHome");
            echo "\">
                        ";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Minha Conta", array(), "AppBundleUsuarioHome"), "html", null, true);
            echo "
                    </a></li>
                <li><a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                        ";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Sair", array(), "FOSUserBundle"), "html", null, true);
            echo "
                    </a></li>
            ";
        } else {
            // line 68
            echo "                <li><a href=\"register.html\">Cadastro</a></li>
                <li><a href=\"";
            // line 69
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Entrar", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
            ";
        }
        // line 71
        echo "            <li><a href=\"#\">06 de Abr 2016 18:52:22</a></li>
        </ul>

        <ul id=\"nav-mobile\" class=\"side-nav\">
            li><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getUrl("AppBundleHome");
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getUrl("AppBundleComoFunciona");
        echo "\">Como funciona</a></li>
            <li><a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getUrl("LeilaoBundle");
        echo "\">Leilão</a></li>
            <li><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getUrl("AppBundleCupons");
        echo "\">Cupons</a></li>
            <li><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getUrl("AppBundleSocial");
        echo "\">Social</a></li>
            <li><a href=\"register.html\">Cadastro</a></li>
            <li><a href=\"login.html\">Entrar</a></li>
        </ul>
        <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
    </div>
</nav>
";
        // line 86
        $this->displayBlock('body', $context, $blocks);
        // line 87
        echo "
<!-- ##### Cias Areas ##### -->

<!-- ##### RODAPÉ ####  -->
<footer class=\"page-footer\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col l3 s12 m6 tt-cd-email footer-mobile\">
                <span class=\"white-text left\"><i class=\"material-icons\">markunread_mailbox</i> <b>CADASTRE O SEU E-MAIL</b></span>
                <small class=\"white-text left\">E fique por dentro das novidades!</small>
                <div class=\"input-field col s6\">
                    <input id=\"email\" type=\"email\" class=\"validate\">
                    <label class=\"color-input-cd\" for=\"email\" data-error=\"E-mail incorreto\" data-success=\"Correto\">E-mail</label>
                </div>
                <div class=\"input-field col s2\">
                    <a class=\"waves-effect black btn\">OK <i class=\"material-icons right\">send</i></a>
                </div>
            </div>

            <div class=\"col l2 s12 m3 footer-mobile\">
                <span class=\"white-text\"><b>A EMPRESA</b></span>
                <ul>
                    <li><a class=\"white-text\" href=\"terms.html\">Termos de uso</a></li>
                    <li><a class=\"white-text\" href=\"whoweare.html\">Quem somos</a></li>
                    <li><a class=\"white-text\" href=\"privacy.html\">Privacidade</a></li>
                    <li><a class=\"white-text\" href=\"works.html\">Como funciona</a></li>
                    <li><a class=\"white-text\" href=\"doubts.html\">Dúvidas</a></li>
                    <li><a class=\"white-text\" href=\"contact.html\">Fale conosco</a></li>
                </ul>
            </div>

            <div class=\"col l2 s12 m3 center footer-mobile\">
                <span class=\"white-text\"><b>SEGURANÇA</b></span>
                <figure>
                    <img class=\"responsive-img\" src=\"http://localhost/www/img/icone-ssl.png\" alt=\"ssl\">
                </figure>
            </div>


            <div class=\"col l3 s12 m6 center\">
          <span class=\"white-text \"><b>FORMA DE PAGAMENTO</b></h5>
          <figure>
            <img class=\"responsive-img\" src=\"http://localhost/www/img/icone-pagamento.png\" alt=\"pagamentos\">
          </figure>
            </div>

            <div class=\"col  l2 s12 m6 center\">
                <span class=\"white-text\"><b>REDES SOCIAIS</b></span>
                <figure class=\"white-text\">
                    <i class=\"fa fa-facebook-square fa-2x\"></i>
                    <i class=\"fa fa-twitter-square fa-2x \"></i>
                    <i class=\"fa fa-instagram fa-2x\"></i>
                </figure>


                <!--
                <h5 class=\"white-text center\">Baixe gratís o app</h5>

                <div class=\"col s4\">
                 <a class=\"white-text\" href=\"#!\"><img class=\"responsive-img icones-app\" src=\"img/app-store.png\" alt=\"App Store\"></a>
                </div>

                <div class=\"col s4\">
                 <a class=\"white-text\" href=\"#!\"><img class=\"responsive-img icones-app\" src=\"img/app-google.png\" alt=\"App Google\"></a>
                </div>

                <div class=\"col s4\">
                 <a class=\"white-text\" href=\"#!\"><img class=\"responsive-img icones-app\" src=\"img/app-windows.png\" alt=\"App Windows\"></a>
                </div>

              </div>
              -->
            </div>
        </div>
    </div>
    <!--
        <div class=\"footer-copyright\">
          <div class=\"container\">
          Made by <a class=\"white-text text-lighten-3\" href=\"www.accento.com.br\">Accento</a>
          </div>
        </div>
    -->
</footer>

<!-- ##### RODAPÉ ####  -->
</body>
</html>
";
        
        $__internal_0141e2e8e3b3222b0ff05f1290cf5ca34c988d16552506211ff91fb57d35d3c3->leave($__internal_0141e2e8e3b3222b0ff05f1290cf5ca34c988d16552506211ff91fb57d35d3c3_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_39eb220ac837ea8596d5ce18e1e701d373e026c8fc12a864e507f356f34b662b = $this->env->getExtension("native_profiler");
        $__internal_39eb220ac837ea8596d5ce18e1e701d373e026c8fc12a864e507f356f34b662b->enter($__internal_39eb220ac837ea8596d5ce18e1e701d373e026c8fc12a864e507f356f34b662b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_39eb220ac837ea8596d5ce18e1e701d373e026c8fc12a864e507f356f34b662b->leave($__internal_39eb220ac837ea8596d5ce18e1e701d373e026c8fc12a864e507f356f34b662b_prof);

    }

    // line 86
    public function block_body($context, array $blocks = array())
    {
        $__internal_69c6bf47d391b983ac4977e4a545272c849ad35912f59aaa3da9d024f95b0512 = $this->env->getExtension("native_profiler");
        $__internal_69c6bf47d391b983ac4977e4a545272c849ad35912f59aaa3da9d024f95b0512->enter($__internal_69c6bf47d391b983ac4977e4a545272c849ad35912f59aaa3da9d024f95b0512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_69c6bf47d391b983ac4977e4a545272c849ad35912f59aaa3da9d024f95b0512->leave($__internal_69c6bf47d391b983ac4977e4a545272c849ad35912f59aaa3da9d024f95b0512_prof);

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
        return array (  400 => 86,  389 => 36,  294 => 87,  292 => 86,  282 => 79,  278 => 78,  274 => 77,  270 => 76,  266 => 75,  260 => 71,  253 => 69,  250 => 68,  244 => 65,  240 => 64,  235 => 62,  230 => 61,  228 => 60,  221 => 56,  217 => 55,  213 => 54,  209 => 53,  205 => 52,  201 => 50,  187 => 48,  183 => 45,  173 => 37,  171 => 36,  168 => 35,  162 => 33,  157 => 32,  150 => 33,  145 => 32,  141 => 31,  138 => 30,  124 => 28,  120 => 27,  117 => 26,  103 => 24,  99 => 23,  96 => 22,  82 => 20,  78 => 19,  75 => 18,  61 => 16,  57 => 15,  54 => 14,  40 => 12,  36 => 11,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="pt">*/
/* <head>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>*/
/*     <title>Bid Travel Brasil</title>*/
/* */
/*     <!-- CSS  -->*/
/*     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/* */
/*     {% stylesheets '@AppBundle/Resources/css/materialize.css' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" rel="stylesheet" media="screen"/>*/
/*     {% endstylesheets %}*/
/* */
/*     {% stylesheets '@AppBundle/Resources/css/font-awesome.min.css' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" rel="stylesheet" media="screen"/>*/
/*     {% endstylesheets %}*/
/* */
/*     {% stylesheets '@AppBundle/Resources/css/style.css' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" rel="stylesheet" media="screen"/>*/
/*     {% endstylesheets %}*/
/* */
/*     {% stylesheets '@AppBundle/Resources/css/project.css' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" rel="stylesheet" media="screen"/>*/
/*     {% endstylesheets %}*/
/* */
/*     {% stylesheets '@AppBundle/Resources/css/swiper.min.css' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" rel="stylesheet" media="screen"/>*/
/*     {% endstylesheets %}*/
/* */
/*     {% stylesheets '@AppBundle/Resources/css/favicon.ico' %}*/
/*     <!--[if IE]><link rel="shortcut icon" href="{{ asset_url }}"><![endif]-->*/
/*     <link rel="icon" href="{{ asset_url }}">*/
/*     {% endstylesheets %}*/
/* */
/*     {% block javascripts %}{% endblock %}*/
/* </head>*/
/* <body class="grey lighten-2">*/
/* */
/* <!-- ##### Menu ##### -->*/
/* */
/* <nav class="light-blue lighten-1 navbar-fixed">*/
/*     <div class="nav-wrapper container">*/
/*         <a id="logo-container" href="#" class="brand-logo center">*/
/*             {% image output="images/logo-bid-travel.png"*/
/*             '@AppBundle/Resources/images/logo-bid-travel.png'*/
/*             %}*/
/*             <img class="responsive-img" src="{{ asset_url }}" alt="Bid Travel Brasil" />*/
/*             {% endimage %}*/
/*         </a>*/
/*         <ul class="left hide-on-med-and-down">*/
/*             <li><a href="{{ url('AppBundleHome') }}">Home</a></li>*/
/*             <li><a href="{{ url('AppBundleComoFunciona') }}">Como funciona</a></li>*/
/*             <li><a href="{{ url('LeilaoBundle') }}">Leilão</a></li>*/
/*             <li><a href="{{ url('AppBundleCupons') }}">Cupons</a></li>*/
/*             <li><a href="{{ url('AppBundleSocial') }}">Social</a></li>*/
/*         </ul>*/
/* */
/*         <ul class="right hide-on-med-and-down">*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 <li><a href="{{ path('AppBundleUsuarioHome') }}">*/
/*                         {{ 'Minha Conta'|trans({}, 'AppBundleUsuarioHome') }}*/
/*                     </a></li>*/
/*                 <li><a href="{{ path('fos_user_security_logout') }}">*/
/*                         {{ 'Sair'|trans({}, 'FOSUserBundle') }}*/
/*                     </a></li>*/
/*             {% else %}*/
/*                 <li><a href="register.html">Cadastro</a></li>*/
/*                 <li><a href="{{ path('fos_user_security_login') }}">{{ 'Entrar'|trans({}, 'FOSUserBundle') }}</a></li>*/
/*             {% endif %}*/
/*             <li><a href="#">06 de Abr 2016 18:52:22</a></li>*/
/*         </ul>*/
/* */
/*         <ul id="nav-mobile" class="side-nav">*/
/*             li><a href="{{ url('AppBundleHome') }}">Home</a></li>*/
/*             <li><a href="{{ url('AppBundleComoFunciona') }}">Como funciona</a></li>*/
/*             <li><a href="{{ url('LeilaoBundle') }}">Leilão</a></li>*/
/*             <li><a href="{{ url('AppBundleCupons') }}">Cupons</a></li>*/
/*             <li><a href="{{ url('AppBundleSocial') }}">Social</a></li>*/
/*             <li><a href="register.html">Cadastro</a></li>*/
/*             <li><a href="login.html">Entrar</a></li>*/
/*         </ul>*/
/*         <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>*/
/*     </div>*/
/* </nav>*/
/* {% block body %}{% endblock %}*/
/* */
/* <!-- ##### Cias Areas ##### -->*/
/* */
/* <!-- ##### RODAPÉ ####  -->*/
/* <footer class="page-footer">*/
/*     <div class="container">*/
/*         <div class="row">*/
/* */
/*             <div class="col l3 s12 m6 tt-cd-email footer-mobile">*/
/*                 <span class="white-text left"><i class="material-icons">markunread_mailbox</i> <b>CADASTRE O SEU E-MAIL</b></span>*/
/*                 <small class="white-text left">E fique por dentro das novidades!</small>*/
/*                 <div class="input-field col s6">*/
/*                     <input id="email" type="email" class="validate">*/
/*                     <label class="color-input-cd" for="email" data-error="E-mail incorreto" data-success="Correto">E-mail</label>*/
/*                 </div>*/
/*                 <div class="input-field col s2">*/
/*                     <a class="waves-effect black btn">OK <i class="material-icons right">send</i></a>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col l2 s12 m3 footer-mobile">*/
/*                 <span class="white-text"><b>A EMPRESA</b></span>*/
/*                 <ul>*/
/*                     <li><a class="white-text" href="terms.html">Termos de uso</a></li>*/
/*                     <li><a class="white-text" href="whoweare.html">Quem somos</a></li>*/
/*                     <li><a class="white-text" href="privacy.html">Privacidade</a></li>*/
/*                     <li><a class="white-text" href="works.html">Como funciona</a></li>*/
/*                     <li><a class="white-text" href="doubts.html">Dúvidas</a></li>*/
/*                     <li><a class="white-text" href="contact.html">Fale conosco</a></li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <div class="col l2 s12 m3 center footer-mobile">*/
/*                 <span class="white-text"><b>SEGURANÇA</b></span>*/
/*                 <figure>*/
/*                     <img class="responsive-img" src="http://localhost/www/img/icone-ssl.png" alt="ssl">*/
/*                 </figure>*/
/*             </div>*/
/* */
/* */
/*             <div class="col l3 s12 m6 center">*/
/*           <span class="white-text "><b>FORMA DE PAGAMENTO</b></h5>*/
/*           <figure>*/
/*             <img class="responsive-img" src="http://localhost/www/img/icone-pagamento.png" alt="pagamentos">*/
/*           </figure>*/
/*             </div>*/
/* */
/*             <div class="col  l2 s12 m6 center">*/
/*                 <span class="white-text"><b>REDES SOCIAIS</b></span>*/
/*                 <figure class="white-text">*/
/*                     <i class="fa fa-facebook-square fa-2x"></i>*/
/*                     <i class="fa fa-twitter-square fa-2x "></i>*/
/*                     <i class="fa fa-instagram fa-2x"></i>*/
/*                 </figure>*/
/* */
/* */
/*                 <!--*/
/*                 <h5 class="white-text center">Baixe gratís o app</h5>*/
/* */
/*                 <div class="col s4">*/
/*                  <a class="white-text" href="#!"><img class="responsive-img icones-app" src="img/app-store.png" alt="App Store"></a>*/
/*                 </div>*/
/* */
/*                 <div class="col s4">*/
/*                  <a class="white-text" href="#!"><img class="responsive-img icones-app" src="img/app-google.png" alt="App Google"></a>*/
/*                 </div>*/
/* */
/*                 <div class="col s4">*/
/*                  <a class="white-text" href="#!"><img class="responsive-img icones-app" src="img/app-windows.png" alt="App Windows"></a>*/
/*                 </div>*/
/* */
/*               </div>*/
/*               -->*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!--*/
/*         <div class="footer-copyright">*/
/*           <div class="container">*/
/*           Made by <a class="white-text text-lighten-3" href="www.accento.com.br">Accento</a>*/
/*           </div>*/
/*         </div>*/
/*     -->*/
/* </footer>*/
/* */
/* <!-- ##### RODAPÉ ####  -->*/
/* </body>*/
/* </html>*/
/* */
