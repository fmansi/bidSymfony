<?php

/* default/index.html.twig */
class __TwigTemplate_8a932271d8bce814503749ecd5068914bdc33ea4826813b07087254e08d357f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_ed3d3bf21aa14738f1f415c09802f736dd7409d1ee2c800a6deb175b10919a71 = $this->env->getExtension("native_profiler");
        $__internal_ed3d3bf21aa14738f1f415c09802f736dd7409d1ee2c800a6deb175b10919a71->enter($__internal_ed3d3bf21aa14738f1f415c09802f736dd7409d1ee2c800a6deb175b10919a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed3d3bf21aa14738f1f415c09802f736dd7409d1ee2c800a6deb175b10919a71->leave($__internal_ed3d3bf21aa14738f1f415c09802f736dd7409d1ee2c800a6deb175b10919a71_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4867eacdf093a6f6d5806e471b2e42465a1accd4b5ab9b890001a2354333692 = $this->env->getExtension("native_profiler");
        $__internal_c4867eacdf093a6f6d5806e471b2e42465a1accd4b5ab9b890001a2354333692->enter($__internal_c4867eacdf093a6f6d5806e471b2e42465a1accd4b5ab9b890001a2354333692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!-- ##### Slider Topo ##### -->
    <div class=\"slider\">
        <ul class=\"slides\">

            <li>
                <img src=\"http://localhost/www/img/rio.jpg\" alt=\"rio\"> <!-- random image -->
                <div class=\"caption center-align\">
                    <div class=\"col s12 m6\">
                        <div class=\"card\">
                            <div class=\"card-content\">
                                <span class=\"card-title\">Rio de Janeiro</span>
                                <p>Passagem São Paulo - Rio de Janeiro Voo Direto - Ida e Volta</p>
                            </div>
                            <div class=\"card-action\">
                                <a class=\"waves-effect green darken-3 btn\" href=\"auction.html\">Hoje | 20h</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <img src=\"http://localhost/www/img/toronto.jpg\" alt=\"Toronto\"> <!-- random image -->
                <div class=\"caption center-align\">
                    <div class=\"col s12 m6\">
                        <div class=\"card\">
                            <div class=\"card-content\">
                                <span class=\"card-title\">Nova York</span>
                                <p>Passagem Nova York - São Paulo Voo Direto - Ida e Volta</p>
                            </div>
                            <div class=\"card-action\">
                                <a class=\"waves-effect green darken-3 btn\" href=\"auction.html\">Hoje | 20h</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <img src=\"http://localhost/www/img/londres.jpg\" alt=\"Londres\"> <!-- random image -->
                <div class=\"caption center-align\">
                    <div class=\"col s12 m6\">
                        <div class=\"card\">
                            <div class=\"card-content\">
                                <span class=\"card-title\">Toronto</span>
                                <p>Passagem Toront - São Paulo Voo Direto - Ida e Volta</p>
                            </div>
                            <div class=\"card-action\">
                                <a class=\"waves-effect green darken-3 btn\" href=\"auction.html\">Hoje | 20h</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </div>
    <!-- ##### Slider Topo ##### -->

    <!-- ##### Modal Slider ##### -->

    <!-- Modal Structure -->
    <div id=\"modal1\" class=\"modal modal-fixed-footer\">
        <div class=\"modal-content\">
            <h4>Detalhes</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate nulla, mollitia maiores consectetur asperiores, obcaecati quaerat. Eum iste eos cum minus voluptatem repudiandae. Mollitia, et officiis neque porro rem distinctio.</p>
        </div>
        <div class=\"modal-footer\">
            <a href=\"#!\" class=\"modal-action modal-close waves-effect waves-green btn-flat \">Fechar</a>
        </div>
    </div>

    <!-- ##### Modal Slider ##### -->

    <!-- ##### Leilão ##### -->

    <div class=\"leilao-home blue-grey lighten-5\">

        <h1 class=\"header center\">Leilão</h1>

        <div class=\"box-leilao blue-grey lighten-4\">

            <!-- Add Swiper slides here! -->
            <div class=\"swiper-container\">

                <div class=\"swiper-wrapper\">

                    <div class=\"swiper-slide\">
                        <figure>
                            <img class=\"responsive-img\" src=\"http://localhost/www/img/londres.jpg\" alt=\"\">
                            <figcaption>Voos para Londres</figcaption>
                        </figure>
                        <div class=\"box-cronometro-home\">
                            <p class=\"leilao-home-txt-1\">01:04:11</p>
                            <p class=\"leilao-home-txt-2\">Início :18/02/16 - 16:00:00</p>
                        </div>
                        <div class=\"box-button-lance-home\">
                            <p class=\"leilao-home-txt-3\">Por: <span>R\$2,00</span></p>
                            <p class=\"leilao-home-txt-4\">ricazavatti</p>
                            <a class=\"waves-effect red btn\" href=\"auction.html\">Lance</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <figure>
                            <img class=\"responsive-img\" src=\"http://localhost/www/img/rio.jpg\" alt=\"\">
                            <figcaption>Voos para Rio de Janeiro</figcaption>
                        </figure>
                        <div class=\"box-cronometro-home\">
                            <p class=\"leilao-home-txt-1\">03:04:11</p>
                            <p class=\"leilao-home-txt-2\">Início :18/02/16 - 18:00:00</p>
                        </div>
                        <div class=\"box-button-lance-home\">
                            <p class=\"leilao-home-txt-3\">Por: <span>R\$0,25</span></p>
                            <p class=\"leilao-home-txt-4\">edinhapaula</p>
                            <a class=\"waves-effect red btn\" href=\"auction.html\">Lance</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <figure>
                            <img class=\"responsive-img\" src=\"http://localhost/www/img/toronto.jpg\" alt=\"\">
                            <figcaption>Voos para Toronto</figcaption>
                        </figure>
                        <div class=\"box-cronometro-home\">
                            <p class=\"leilao-home-txt-1\">05:04:06</p>
                            <p class=\"leilao-home-txt-2\">Início :18/02/16 - 20:00:00</p>
                        </div>
                        <div class=\"box-button-lance-home\">
                            <p class=\"leilao-home-txt-3\">Por: <span>R\$8,00</span></p>
                            <p class=\"leilao-home-txt-4\">priscillaps</p>
                            <a class=\"waves-effect red btn\" href=\"auction.html\">Lance</a>
                        </div>
                    </div>


                    <div class=\"swiper-slide\">
                        <figure>
                            <img class=\"responsive-img\" src=\"http://localhost/www/img/londres.jpg\" alt=\"\">
                            <figcaption>Voos para Londres</figcaption>
                        </figure>
                        <div class=\"box-cronometro-home\">
                            <p class=\"leilao-home-txt-1\">01:04:11</p>
                            <p class=\"leilao-home-txt-2\">Início :18/02/16 - 16:00:00</p>
                        </div>
                        <div class=\"box-button-lance-home\">
                            <p class=\"leilao-home-txt-3\">Por: <span>R\$2,00</span></p>
                            <p class=\"leilao-home-txt-4\">ricazavatti</p>
                            <a class=\"waves-effect red btn\" href=\"auction.html\">Lance</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <figure>
                            <img class=\"responsive-img\" src=\"http://localhost/www/img/rio.jpg\" alt=\"\">
                            <figcaption>Voos para Rio de Janeiro</figcaption>
                        </figure>
                        <div class=\"box-cronometro-home\">
                            <p class=\"leilao-home-txt-1\">03:04:11</p>
                            <p class=\"leilao-home-txt-2\">Início :18/02/16 - 18:00:00</p>
                        </div>
                        <div class=\"box-button-lance-home\">
                            <p class=\"leilao-home-txt-3\">Por: <span>R\$0,25</span></p>
                            <p class=\"leilao-home-txt-4\">edinhapaula</p>
                            <a class=\"waves-effect red btn\" href=\"auction.html\">Lance</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <figure>
                            <img class=\"responsive-img\" src=\"http://localhost/www/img/toronto.jpg\" alt=\"\">
                            <figcaption>Voos para Toronto</figcaption>
                        </figure>
                        <div class=\"box-cronometro-home\">
                            <p class=\"leilao-home-txt-1\">05:04:06</p>
                            <p class=\"leilao-home-txt-2\">Início :18/02/16 - 20:00:00</p>
                        </div>
                        <div class=\"box-button-lance-home\">
                            <p class=\"leilao-home-txt-3\">Por: <span>R\$8,00</span></p>
                            <p class=\"leilao-home-txt-4\">priscillaps</p>
                            <a class=\"waves-effect red btn\" href=\"auction.html\">Lance</a>
                        </div>
                    </div>

                </div>

                <!-- Add Pagination -->
                <div class=\"swiper-pagination\"></div>

            </div>

        </div>

    </div>

    <!-- ##### Lances ##### -->

    <!-- ##### Cias Areas ##### -->

    <div class=\"leilao-home blue-grey lighten-5\">
        <h1 class=\"header center\">Companhias Aéreas Participantes</h1>
        <div class=\"box-leilao blue-grey lighten-4\">

            <!--   image Section   -->
            <div class=\"row \">
                <div class=\"col s12 m4\">
                    <img class=\"responsive-img\" src=\"http://localhost/www/img/1.png\" alt=\"\">
                </div>

                <div class=\"col s12 m4\">
                    <img class=\"responsive-img\" src=\"http://localhost/www/img/3.png\" alt=\"\">
                </div>

                <div class=\"col s12 m4\">
                    <img class=\"responsive-img\" src=\"http://localhost/www/img/4.png\" alt=\"\">
                </div>
            </div>

        </div>
        <br><br>

        <div class=\"section\">

        </div>
    </div>
";
        
        $__internal_c4867eacdf093a6f6d5806e471b2e42465a1accd4b5ab9b890001a2354333692->leave($__internal_c4867eacdf093a6f6d5806e471b2e42465a1accd4b5ab9b890001a2354333692_prof);

    }

    // line 230
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_74a6adb0dd8bf8076666d6e1ccf70ad90cd232c278464996a671090ed1e109df = $this->env->getExtension("native_profiler");
        $__internal_74a6adb0dd8bf8076666d6e1ccf70ad90cd232c278464996a671090ed1e109df->enter($__internal_74a6adb0dd8bf8076666d6e1ccf70ad90cd232c278464996a671090ed1e109df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 231
        echo "     ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a8ff843_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a8ff843_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a8ff843_jquery-2.1.1.min_1.js");
            // line 237
            echo "     <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
     ";
            // asset "a8ff843_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a8ff843_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a8ff843_materialize_2.js");
            echo "     <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
     ";
            // asset "a8ff843_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a8ff843_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a8ff843_init_3.js");
            echo "     <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
     ";
            // asset "a8ff843_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a8ff843_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a8ff843_swiper.min_4.js");
            echo "     <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
     ";
            // asset "a8ff843_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a8ff843_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a8ff843_home_5.js");
            echo "     <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
     ";
        } else {
            // asset "a8ff843"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a8ff843") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a8ff843.js");
            echo "     <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
     ";
        }
        unset($context["asset_url"]);
        // line 239
        echo " ";
        
        $__internal_74a6adb0dd8bf8076666d6e1ccf70ad90cd232c278464996a671090ed1e109df->leave($__internal_74a6adb0dd8bf8076666d6e1ccf70ad90cd232c278464996a671090ed1e109df_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 239,  284 => 237,  279 => 231,  273 => 230,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <!-- ##### Slider Topo ##### -->*/
/*     <div class="slider">*/
/*         <ul class="slides">*/
/* */
/*             <li>*/
/*                 <img src="http://localhost/www/img/rio.jpg" alt="rio"> <!-- random image -->*/
/*                 <div class="caption center-align">*/
/*                     <div class="col s12 m6">*/
/*                         <div class="card">*/
/*                             <div class="card-content">*/
/*                                 <span class="card-title">Rio de Janeiro</span>*/
/*                                 <p>Passagem São Paulo - Rio de Janeiro Voo Direto - Ida e Volta</p>*/
/*                             </div>*/
/*                             <div class="card-action">*/
/*                                 <a class="waves-effect green darken-3 btn" href="auction.html">Hoje | 20h</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </li>*/
/* */
/*             <li>*/
/*                 <img src="http://localhost/www/img/toronto.jpg" alt="Toronto"> <!-- random image -->*/
/*                 <div class="caption center-align">*/
/*                     <div class="col s12 m6">*/
/*                         <div class="card">*/
/*                             <div class="card-content">*/
/*                                 <span class="card-title">Nova York</span>*/
/*                                 <p>Passagem Nova York - São Paulo Voo Direto - Ida e Volta</p>*/
/*                             </div>*/
/*                             <div class="card-action">*/
/*                                 <a class="waves-effect green darken-3 btn" href="auction.html">Hoje | 20h</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </li>*/
/* */
/*             <li>*/
/*                 <img src="http://localhost/www/img/londres.jpg" alt="Londres"> <!-- random image -->*/
/*                 <div class="caption center-align">*/
/*                     <div class="col s12 m6">*/
/*                         <div class="card">*/
/*                             <div class="card-content">*/
/*                                 <span class="card-title">Toronto</span>*/
/*                                 <p>Passagem Toront - São Paulo Voo Direto - Ida e Volta</p>*/
/*                             </div>*/
/*                             <div class="card-action">*/
/*                                 <a class="waves-effect green darken-3 btn" href="auction.html">Hoje | 20h</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </li>*/
/* */
/*         </ul>*/
/*     </div>*/
/*     <!-- ##### Slider Topo ##### -->*/
/* */
/*     <!-- ##### Modal Slider ##### -->*/
/* */
/*     <!-- Modal Structure -->*/
/*     <div id="modal1" class="modal modal-fixed-footer">*/
/*         <div class="modal-content">*/
/*             <h4>Detalhes</h4>*/
/*             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate nulla, mollitia maiores consectetur asperiores, obcaecati quaerat. Eum iste eos cum minus voluptatem repudiandae. Mollitia, et officiis neque porro rem distinctio.</p>*/
/*         </div>*/
/*         <div class="modal-footer">*/
/*             <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Fechar</a>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <!-- ##### Modal Slider ##### -->*/
/* */
/*     <!-- ##### Leilão ##### -->*/
/* */
/*     <div class="leilao-home blue-grey lighten-5">*/
/* */
/*         <h1 class="header center">Leilão</h1>*/
/* */
/*         <div class="box-leilao blue-grey lighten-4">*/
/* */
/*             <!-- Add Swiper slides here! -->*/
/*             <div class="swiper-container">*/
/* */
/*                 <div class="swiper-wrapper">*/
/* */
/*                     <div class="swiper-slide">*/
/*                         <figure>*/
/*                             <img class="responsive-img" src="http://localhost/www/img/londres.jpg" alt="">*/
/*                             <figcaption>Voos para Londres</figcaption>*/
/*                         </figure>*/
/*                         <div class="box-cronometro-home">*/
/*                             <p class="leilao-home-txt-1">01:04:11</p>*/
/*                             <p class="leilao-home-txt-2">Início :18/02/16 - 16:00:00</p>*/
/*                         </div>*/
/*                         <div class="box-button-lance-home">*/
/*                             <p class="leilao-home-txt-3">Por: <span>R$2,00</span></p>*/
/*                             <p class="leilao-home-txt-4">ricazavatti</p>*/
/*                             <a class="waves-effect red btn" href="auction.html">Lance</a>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="swiper-slide">*/
/*                         <figure>*/
/*                             <img class="responsive-img" src="http://localhost/www/img/rio.jpg" alt="">*/
/*                             <figcaption>Voos para Rio de Janeiro</figcaption>*/
/*                         </figure>*/
/*                         <div class="box-cronometro-home">*/
/*                             <p class="leilao-home-txt-1">03:04:11</p>*/
/*                             <p class="leilao-home-txt-2">Início :18/02/16 - 18:00:00</p>*/
/*                         </div>*/
/*                         <div class="box-button-lance-home">*/
/*                             <p class="leilao-home-txt-3">Por: <span>R$0,25</span></p>*/
/*                             <p class="leilao-home-txt-4">edinhapaula</p>*/
/*                             <a class="waves-effect red btn" href="auction.html">Lance</a>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="swiper-slide">*/
/*                         <figure>*/
/*                             <img class="responsive-img" src="http://localhost/www/img/toronto.jpg" alt="">*/
/*                             <figcaption>Voos para Toronto</figcaption>*/
/*                         </figure>*/
/*                         <div class="box-cronometro-home">*/
/*                             <p class="leilao-home-txt-1">05:04:06</p>*/
/*                             <p class="leilao-home-txt-2">Início :18/02/16 - 20:00:00</p>*/
/*                         </div>*/
/*                         <div class="box-button-lance-home">*/
/*                             <p class="leilao-home-txt-3">Por: <span>R$8,00</span></p>*/
/*                             <p class="leilao-home-txt-4">priscillaps</p>*/
/*                             <a class="waves-effect red btn" href="auction.html">Lance</a>*/
/*                         </div>*/
/*                     </div>*/
/* */
/* */
/*                     <div class="swiper-slide">*/
/*                         <figure>*/
/*                             <img class="responsive-img" src="http://localhost/www/img/londres.jpg" alt="">*/
/*                             <figcaption>Voos para Londres</figcaption>*/
/*                         </figure>*/
/*                         <div class="box-cronometro-home">*/
/*                             <p class="leilao-home-txt-1">01:04:11</p>*/
/*                             <p class="leilao-home-txt-2">Início :18/02/16 - 16:00:00</p>*/
/*                         </div>*/
/*                         <div class="box-button-lance-home">*/
/*                             <p class="leilao-home-txt-3">Por: <span>R$2,00</span></p>*/
/*                             <p class="leilao-home-txt-4">ricazavatti</p>*/
/*                             <a class="waves-effect red btn" href="auction.html">Lance</a>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="swiper-slide">*/
/*                         <figure>*/
/*                             <img class="responsive-img" src="http://localhost/www/img/rio.jpg" alt="">*/
/*                             <figcaption>Voos para Rio de Janeiro</figcaption>*/
/*                         </figure>*/
/*                         <div class="box-cronometro-home">*/
/*                             <p class="leilao-home-txt-1">03:04:11</p>*/
/*                             <p class="leilao-home-txt-2">Início :18/02/16 - 18:00:00</p>*/
/*                         </div>*/
/*                         <div class="box-button-lance-home">*/
/*                             <p class="leilao-home-txt-3">Por: <span>R$0,25</span></p>*/
/*                             <p class="leilao-home-txt-4">edinhapaula</p>*/
/*                             <a class="waves-effect red btn" href="auction.html">Lance</a>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="swiper-slide">*/
/*                         <figure>*/
/*                             <img class="responsive-img" src="http://localhost/www/img/toronto.jpg" alt="">*/
/*                             <figcaption>Voos para Toronto</figcaption>*/
/*                         </figure>*/
/*                         <div class="box-cronometro-home">*/
/*                             <p class="leilao-home-txt-1">05:04:06</p>*/
/*                             <p class="leilao-home-txt-2">Início :18/02/16 - 20:00:00</p>*/
/*                         </div>*/
/*                         <div class="box-button-lance-home">*/
/*                             <p class="leilao-home-txt-3">Por: <span>R$8,00</span></p>*/
/*                             <p class="leilao-home-txt-4">priscillaps</p>*/
/*                             <a class="waves-effect red btn" href="auction.html">Lance</a>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*                 <!-- Add Pagination -->*/
/*                 <div class="swiper-pagination"></div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <!-- ##### Lances ##### -->*/
/* */
/*     <!-- ##### Cias Areas ##### -->*/
/* */
/*     <div class="leilao-home blue-grey lighten-5">*/
/*         <h1 class="header center">Companhias Aéreas Participantes</h1>*/
/*         <div class="box-leilao blue-grey lighten-4">*/
/* */
/*             <!--   image Section   -->*/
/*             <div class="row ">*/
/*                 <div class="col s12 m4">*/
/*                     <img class="responsive-img" src="http://localhost/www/img/1.png" alt="">*/
/*                 </div>*/
/* */
/*                 <div class="col s12 m4">*/
/*                     <img class="responsive-img" src="http://localhost/www/img/3.png" alt="">*/
/*                 </div>*/
/* */
/*                 <div class="col s12 m4">*/
/*                     <img class="responsive-img" src="http://localhost/www/img/4.png" alt="">*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*         <br><br>*/
/* */
/*         <div class="section">*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/*  {% block javascripts %}*/
/*      {% javascripts*/
/*      '@AppBundle/Resources/js/jquery-2.1.1.min.js'*/
/*      '@AppBundle/Resources/js/materialize.js'*/
/*      '@AppBundle/Resources/js/init.js'*/
/*      '@AppBundle/Resources/js/swiper.min.js'*/
/*      '@AppBundle/Resources/js/home.js' %}*/
/*      <script src="{{ asset_url }}"></script>*/
/*      {% endjavascripts %}*/
/*  {% endblock %}*/
/* */
/* */
