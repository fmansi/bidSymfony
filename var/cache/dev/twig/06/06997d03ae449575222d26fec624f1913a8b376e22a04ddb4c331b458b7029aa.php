<?php

/* default/como_funciona.html.twig */
class __TwigTemplate_e2628fb6257b5ffd8d88e78670f09b09adfb72b02b758cdd71a3e98c9fc5af7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/como_funciona.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2db9121d7f297ee07c7451388c15d66e56fceaec499d887316ddb8819c6e1341 = $this->env->getExtension("native_profiler");
        $__internal_2db9121d7f297ee07c7451388c15d66e56fceaec499d887316ddb8819c6e1341->enter($__internal_2db9121d7f297ee07c7451388c15d66e56fceaec499d887316ddb8819c6e1341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/como_funciona.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2db9121d7f297ee07c7451388c15d66e56fceaec499d887316ddb8819c6e1341->leave($__internal_2db9121d7f297ee07c7451388c15d66e56fceaec499d887316ddb8819c6e1341_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_34934245ef4501f42a59b56e9bac744a79edf34f7f10c0e3ccdae2ee5bb23604 = $this->env->getExtension("native_profiler");
        $__internal_34934245ef4501f42a59b56e9bac744a79edf34f7f10c0e3ccdae2ee5bb23604->enter($__internal_34934245ef4501f42a59b56e9bac744a79edf34f7f10c0e3ccdae2ee5bb23604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!-- ##### Menu ##### -->
    <div class=\"row\">
        <div class =\"titles-box\" >
            <h1 class = \"titles-top\">Como Funciona</h2>
                <h3 class = \"titles-bottom\"></h3>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"row white\">
            <h5 class=\"grey-text lighten-2\">Posicione o cursor do mouse nas áreas destacadas para ver as informações.</h5>
            <div class=\"col l4 s12 m6\">
                <div class=\"card\">
                    <div id = \"highlight_0\" style = \"border: none; cursor: pointer; cursor: hand;\">
                        <div class=\"card-image waves-effect waves-block waves-light\">
                            <div class=\"materialboxed\">
                                <img class=\"responsive-img\" src=\"http://localhost/www/img/rio.jpg\">
                                <figcaption>Voos para Rio de Janeiro</figcaption>
                            </div>
                        </div>
                    </div>
                    <div class= \"row\">
                        <div class=\"col s12\">
                            <div class=\"box-cronometro-home\">
                                <div class=\"box-cronometro-home grey lighten-2 center\">
                                    <div id=\"highlight_1\" style = \"border: none;cursor: pointer; cursor: hand;\">
                                        <p class=\"leilao-home-txt-1\">01:04:11</p>
                                        <p class=\"leilao-home-txt-2\">Início: 18/02/16 - 15:00:37</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id = \"highlight_2\" style = \"border: none; cursor: pointer; cursor: hand; \">
                        <h6 class=\"red-text center\"> <span class=\"grey-text\"> Por:</span> R\$ 13,80 </b></h5>
                    </div>
                    <div id = \"highlight_3\" style = \"border: none; cursor: pointer; cursor: hand;\">
                        <h6 class=\"grey-text center\">  acabanozero </h6>
                    </div>
                    <div id = \"highlight_4\" style = \"border: none; cursor: pointer; cursor: hand;\" class=\"center\" >
                        <a class=\"waves-effect red btn\">Lance</a>
                    </div>

                    <div class=\"card-content grey-text\">
                        <i class=\"fa fa-facebook-square fa-2x\"></i>
                        <i class=\"fa fa-google-plus-square fa-2x \"></i>
                        <i class=\"fa fa-twitter-square fa-2x \"></i>
                        <i class=\"fa fa-instagram fa-2x \"></i>

                        <button class=\"btn-floating waves-effect waves-light grey right\" type=\"submit\" ><i class=\"material-icons left\">grade</i>Acompanhe</button>
                    </div>
                </div>
            </div>
            <div class=\"col l8 s12 m6\" id=\"box-info\">
                <div id=\"idInfo_0_detail\" class=\"box-info\">
                    <h5>Passagem Aérea</h5>
                    <p>
                        Esta TAG indica a passagem aérea que será leiloada. O voo sempre será ida e volta e sem conexão
                    </p>
                </div>
                <div id=\"idInfo_1_detail\" class=\"box-info\">
                    <h5>Dia e Horário</h5>
                    <p>
                        Todos os leilões terão um dia e horário para começar.Você poderá dar lances assim que esta data e horário chegar. A contagem regressiva iniciará no momento em que a quantidade de lances atingir o preço minimo da passagem.
                    </p>
                </div>
                <div id=\"idInfo_2_detail\" class=\"box-info\">
                    <h5>Preço</h5>
                    <p>
                        Cada lance dado será descontado do seu saldo de lances e o valor do produto irá aumentar. Após o cronômetro zerar, o último participante que deu lance será o ganhador da passagem.
                    </p>
                </div>
                <div id=\"idInfo_3_detail\" class=\"box-info\">
                    <h5>Apelido do usuário</h5>
                    <p>
                        Apelido da última pessoa que deu lance.
                    </p>
                </div>
                <div id=\"idInfo_4_detail\" class=\"box-info\">
                    <h5>Botão</h5>
                    <p>
                        Você deve clicar nesse botão para dar seu lance. Cada lance será descontada do seu saldo.
                    </p>
                </div>
            </div>
        </div>

        <div class=\"row grey lighten-4\">

            <div class=\"col s12 center\">
                <p class=\"flow-text\"><b>Viu como é fácil? </b>Na BidTravel você tem muitas chances de se dar bem.<p class=\"flow-text\">
                    Confira o passo a passo e transfira <b> suas milhas </b> para cá agora mesmo!</p>
            </div>
        </div>
        <div class=\"row grey lighten-4\">
            <div class=\"col s3\">
                <figure>
                    <img class=\"responsive-img\" src=\"img/works2.png\" alt=\"\">
                </figure>
            </div>
            <div class=\"col s9\">
                <h4>Escolha a passagem aérea</h4>
                <p class=\"flow-text\">Verifique a hora de início e já dê seu primeiro lance para habilitar a participar do leilão, antes de iniciar a contagem regressiva, depois dê quantos lances você desejar.</p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col s9\">
                <h4>Contagem regressiva</h4>
                <p class=\"flow-text\">Se você der o lance final assim que o cronômetro zerar, você será o ganhador do leilão. Após o inicio da contagem regressiva, não será mais possível habilitar-se para participar do leilão.</p>
            </div>
            <div class=\"col s3\">
                <figure class>
                    <img class=\"responsive-img\" src=\"http://localhost/www/img/works3.png\" alt=\"\">
                </figure>
            </div>
        </div>
        <div class=\"row grey lighten-4\">
            <div class=\"col s3\">
                <figure>
                    <img class=\"responsive-img\" src=\"http://localhost/www/img/works1.png\" alt=\"\">
                </figure>
            </div>
            <div class=\"col s9\">
                <h4>Transfira suas milhas para o site da Bidtravel.com.br</h4>
                <p class=\"flow-text\">Adquira lances para participar de todos os leilões, além de ter acesso à cupons de descontos ilimitados.Caso você não seja o ganhador, os usuários que mais lances deram, poderão adquirir as passagens com descontos incríveis.  </p>
            </div>
        </div>

    </div>
    </div>
";
        
        $__internal_34934245ef4501f42a59b56e9bac744a79edf34f7f10c0e3ccdae2ee5bb23604->leave($__internal_34934245ef4501f42a59b56e9bac744a79edf34f7f10c0e3ccdae2ee5bb23604_prof);

    }

    // line 135
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_16d69afa0ddf346469442ef7cde5ccfbf442aa2d311db1ff9c2825ec4da67ced = $this->env->getExtension("native_profiler");
        $__internal_16d69afa0ddf346469442ef7cde5ccfbf442aa2d311db1ff9c2825ec4da67ced->enter($__internal_16d69afa0ddf346469442ef7cde5ccfbf442aa2d311db1ff9c2825ec4da67ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 136
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c9ecc77_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c9ecc77_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/c9ecc77_jquery-2.1.1.min_1.js");
            // line 142
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "c9ecc77_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c9ecc77_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/c9ecc77_materialize_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "c9ecc77_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c9ecc77_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/c9ecc77_init_3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "c9ecc77_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c9ecc77_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/c9ecc77_swiper.min_4.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "c9ecc77_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c9ecc77_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/c9ecc77_como-funciona_5.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "c9ecc77"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c9ecc77") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/c9ecc77.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_16d69afa0ddf346469442ef7cde5ccfbf442aa2d311db1ff9c2825ec4da67ced->leave($__internal_16d69afa0ddf346469442ef7cde5ccfbf442aa2d311db1ff9c2825ec4da67ced_prof);

    }

    public function getTemplateName()
    {
        return "default/como_funciona.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 142,  184 => 136,  178 => 135,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <!-- ##### Menu ##### -->*/
/*     <div class="row">*/
/*         <div class ="titles-box" >*/
/*             <h1 class = "titles-top">Como Funciona</h2>*/
/*                 <h3 class = "titles-bottom"></h3>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="container">*/
/*         <div class="row white">*/
/*             <h5 class="grey-text lighten-2">Posicione o cursor do mouse nas áreas destacadas para ver as informações.</h5>*/
/*             <div class="col l4 s12 m6">*/
/*                 <div class="card">*/
/*                     <div id = "highlight_0" style = "border: none; cursor: pointer; cursor: hand;">*/
/*                         <div class="card-image waves-effect waves-block waves-light">*/
/*                             <div class="materialboxed">*/
/*                                 <img class="responsive-img" src="http://localhost/www/img/rio.jpg">*/
/*                                 <figcaption>Voos para Rio de Janeiro</figcaption>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class= "row">*/
/*                         <div class="col s12">*/
/*                             <div class="box-cronometro-home">*/
/*                                 <div class="box-cronometro-home grey lighten-2 center">*/
/*                                     <div id="highlight_1" style = "border: none;cursor: pointer; cursor: hand;">*/
/*                                         <p class="leilao-home-txt-1">01:04:11</p>*/
/*                                         <p class="leilao-home-txt-2">Início: 18/02/16 - 15:00:37</p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div id = "highlight_2" style = "border: none; cursor: pointer; cursor: hand; ">*/
/*                         <h6 class="red-text center"> <span class="grey-text"> Por:</span> R$ 13,80 </b></h5>*/
/*                     </div>*/
/*                     <div id = "highlight_3" style = "border: none; cursor: pointer; cursor: hand;">*/
/*                         <h6 class="grey-text center">  acabanozero </h6>*/
/*                     </div>*/
/*                     <div id = "highlight_4" style = "border: none; cursor: pointer; cursor: hand;" class="center" >*/
/*                         <a class="waves-effect red btn">Lance</a>*/
/*                     </div>*/
/* */
/*                     <div class="card-content grey-text">*/
/*                         <i class="fa fa-facebook-square fa-2x"></i>*/
/*                         <i class="fa fa-google-plus-square fa-2x "></i>*/
/*                         <i class="fa fa-twitter-square fa-2x "></i>*/
/*                         <i class="fa fa-instagram fa-2x "></i>*/
/* */
/*                         <button class="btn-floating waves-effect waves-light grey right" type="submit" ><i class="material-icons left">grade</i>Acompanhe</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col l8 s12 m6" id="box-info">*/
/*                 <div id="idInfo_0_detail" class="box-info">*/
/*                     <h5>Passagem Aérea</h5>*/
/*                     <p>*/
/*                         Esta TAG indica a passagem aérea que será leiloada. O voo sempre será ida e volta e sem conexão*/
/*                     </p>*/
/*                 </div>*/
/*                 <div id="idInfo_1_detail" class="box-info">*/
/*                     <h5>Dia e Horário</h5>*/
/*                     <p>*/
/*                         Todos os leilões terão um dia e horário para começar.Você poderá dar lances assim que esta data e horário chegar. A contagem regressiva iniciará no momento em que a quantidade de lances atingir o preço minimo da passagem.*/
/*                     </p>*/
/*                 </div>*/
/*                 <div id="idInfo_2_detail" class="box-info">*/
/*                     <h5>Preço</h5>*/
/*                     <p>*/
/*                         Cada lance dado será descontado do seu saldo de lances e o valor do produto irá aumentar. Após o cronômetro zerar, o último participante que deu lance será o ganhador da passagem.*/
/*                     </p>*/
/*                 </div>*/
/*                 <div id="idInfo_3_detail" class="box-info">*/
/*                     <h5>Apelido do usuário</h5>*/
/*                     <p>*/
/*                         Apelido da última pessoa que deu lance.*/
/*                     </p>*/
/*                 </div>*/
/*                 <div id="idInfo_4_detail" class="box-info">*/
/*                     <h5>Botão</h5>*/
/*                     <p>*/
/*                         Você deve clicar nesse botão para dar seu lance. Cada lance será descontada do seu saldo.*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row grey lighten-4">*/
/* */
/*             <div class="col s12 center">*/
/*                 <p class="flow-text"><b>Viu como é fácil? </b>Na BidTravel você tem muitas chances de se dar bem.<p class="flow-text">*/
/*                     Confira o passo a passo e transfira <b> suas milhas </b> para cá agora mesmo!</p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row grey lighten-4">*/
/*             <div class="col s3">*/
/*                 <figure>*/
/*                     <img class="responsive-img" src="img/works2.png" alt="">*/
/*                 </figure>*/
/*             </div>*/
/*             <div class="col s9">*/
/*                 <h4>Escolha a passagem aérea</h4>*/
/*                 <p class="flow-text">Verifique a hora de início e já dê seu primeiro lance para habilitar a participar do leilão, antes de iniciar a contagem regressiva, depois dê quantos lances você desejar.</p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col s9">*/
/*                 <h4>Contagem regressiva</h4>*/
/*                 <p class="flow-text">Se você der o lance final assim que o cronômetro zerar, você será o ganhador do leilão. Após o inicio da contagem regressiva, não será mais possível habilitar-se para participar do leilão.</p>*/
/*             </div>*/
/*             <div class="col s3">*/
/*                 <figure class>*/
/*                     <img class="responsive-img" src="http://localhost/www/img/works3.png" alt="">*/
/*                 </figure>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row grey lighten-4">*/
/*             <div class="col s3">*/
/*                 <figure>*/
/*                     <img class="responsive-img" src="http://localhost/www/img/works1.png" alt="">*/
/*                 </figure>*/
/*             </div>*/
/*             <div class="col s9">*/
/*                 <h4>Transfira suas milhas para o site da Bidtravel.com.br</h4>*/
/*                 <p class="flow-text">Adquira lances para participar de todos os leilões, além de ter acesso à cupons de descontos ilimitados.Caso você não seja o ganhador, os usuários que mais lances deram, poderão adquirir as passagens com descontos incríveis.  </p>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/*     </div>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {% javascripts*/
/*     '@AppBundle/Resources/js/jquery-2.1.1.min.js'*/
/*     '@AppBundle/Resources/js/materialize.js'*/
/*     '@AppBundle/Resources/js/init.js'*/
/*     '@AppBundle/Resources/js/swiper.min.js'*/
/*     '@AppBundle/Resources/js/como-funciona.js' %}*/
/*     <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* {% endblock %}*/
