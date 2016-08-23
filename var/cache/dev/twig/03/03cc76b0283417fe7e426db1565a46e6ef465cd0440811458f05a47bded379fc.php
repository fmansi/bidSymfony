<?php

/* LeilaoBundle:leilao:index.html.twig */
class __TwigTemplate_cf73c5839688c62de66c7885f292a5f36a96572432e6bbc8e7036791c7ed1699 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "LeilaoBundle:leilao:index.html.twig", 1);
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
        $__internal_fc89d467f1e788c1020d919da0d5e2a255c9662584f9f52e831855623dd5e4d9 = $this->env->getExtension("native_profiler");
        $__internal_fc89d467f1e788c1020d919da0d5e2a255c9662584f9f52e831855623dd5e4d9->enter($__internal_fc89d467f1e788c1020d919da0d5e2a255c9662584f9f52e831855623dd5e4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LeilaoBundle:leilao:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc89d467f1e788c1020d919da0d5e2a255c9662584f9f52e831855623dd5e4d9->leave($__internal_fc89d467f1e788c1020d919da0d5e2a255c9662584f9f52e831855623dd5e4d9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e9ef94f8b5d24ca8b9016df0e1ea363621ebc9f39a09367ef90e499c3eb20ab = $this->env->getExtension("native_profiler");
        $__internal_5e9ef94f8b5d24ca8b9016df0e1ea363621ebc9f39a09367ef90e499c3eb20ab->enter($__internal_5e9ef94f8b5d24ca8b9016df0e1ea363621ebc9f39a09367ef90e499c3eb20ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class =\"titles-box\" >
            <h1 class = \"titles-top\">Leilão</h1>
            <h3 class = \"titles-bottom\"></h3>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col s12\">
                <ul class=\"tabs\">
                    <li class=\"tab col s3\"><a class=\"active grey-text\" href=\"#open\">Abertos</a></li>
                    <li class=\"tab col s3\"><a class=\"grey-text\" href=\"#next\">Proxímos</a></li>
                    <li class=\"tab col s3\"><a class=\"grey-text\" href=\"#close\">Encerrados</a></li>
                </ul>
            </div>

            <div id=\"open\" class=\"col s12 \">
                <!--Leilões Abertos -->
                <div class=\"row\">

                    <div class=\"col s12 m6\">
                        <div class=\"input-field col s12\">
                            <select>
                                <option value=\"\" disabled selected>Selecione a cidade de origem</option>
                                <option value=\"1\">Option 1</option>
                                <option value=\"2\">Option 2</option>
                                <option value=\"3\">Option 3</option>
                            </select>
                            <label>Origem</label>
                        </div>
                    </div>

                    <div class=\"col s12 m6\">
                        <div class=\"input-field col s12\">
                            <select>
                                <option value=\"\" disabled selected>Selecione a cidade de destino</option>
                                <option value=\"1\">Option 1</option>
                                <option value=\"2\">Option 2</option>
                                <option value=\"3\">Option 3</option>
                            </select>
                            <label>Destino</label>
                        </div>
                    </div>

                </div>

                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leiloesAbertos"]) ? $context["leiloesAbertos"] : $this->getContext($context, "leiloesAbertos")));
        foreach ($context['_seq'] as $context["_key"] => $context["passagem"]) {
            // line 51
            echo "
                <div class=\"row\">
                    <div class=\"col l4 s12 m6\">
                        <div class=\"card small\">
                            <div class=\"card-image waves-effect waves-block waves-light\">
                                <div class=\"materialboxed\">
                                    <img width=\"250\" src=\"img/rio.jpg\">
                                    <figcaption>Voos para Rio de Janeiro</figcaption>
                                </div>
                            </div>
                            <div class=\"card-content grey-text\">
                                <p class=\"col s12 m12 grey-text\"> Ida e Volta</p>
                                <i class=\"fa fa-facebook-square fa-2x\"></i>
                                <i class=\"fa fa-google-plus-square fa-2x \"></i>
                                <i class=\"fa fa-twitter-square fa-2x \"></i>
                                <i class=\"fa fa-instagram fa-2x \"></i>
                                <button class=\"btn-floating waves-effect waves-light grey right\" type=\"submit\" ><i class=\"material-icons left\">grade</i>Acompanhe</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col l4 s12 m6\">
                        <div class=\"card small\">
                            <div class=\"row\">
                                <div class=\"col s8\">
                                    <span class=\"grey-text\"> De R\$ 658,00 </span>
                                    <br>
                                    <span class=\"leilao-home-txt-1 green-text\"> Por R\$ 208,80 </span>
                                    <br>
                                    <span class=\"grey-text\"> Economia de </span><span class=\"green-text\"><b> R\$ 450,20 </b></span>
                                </div>
                                <div class=\"col s2\">
                                    <p></p>
                                    <span class=\"discount-txt green-text\"> <b>68% </b></span>
                                    <span class=\"leilao-home-txt-2 green-text center\"> <b>DESCONTO </b></span>
                                </div>
                            </div>
                            <div class=\"col s12\">
                                <ul class=\"collapsible\">
                                    <li class=\"active\">
                                        <div class=\"collapsible-header grey-text grey lighten-2 center\">Usuário: edinnap</div>
                                    </li>
                                    <li>
                                        <div class=\"collapsible-header center\">
                                            <p class=\"leilao-home-txt-1\"> ";
            // line 94
            if ( !(null === $this->getAttribute($this->getAttribute($context["passagem"], "leilao", array()), "tempoleilao", array()))) {
                // line 95
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["passagem"], "leilao", array()), "tempoleilao", array()), "html", null, true);
                echo "

                                                    <a href=\"\"><input type=\"button\" value=\"Dê Seu lançe\"/> </a>
                                                ";
            } else {
                // line 99
                echo "                                                    <b>Leilão terminado</b>
                                                ";
            }
            // line 100
            echo " </p>
                                            <p class=\"leilao-home-txt-2\">Início: 20/07/2016 - 02:30:00</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class=\"col s6\">
                                    <span class=\"grey-text\"> Dê seu lance </span>
                                </div>
                                <div class=\"col s6\">
                                    <a class=\"waves-effect red btn\">Lance</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col l4 s12 m12\">
                        <div class=\"card small\">
                            <div class=\"col s12 grey lighten-2 center\"><h5 class=\"grey-text\">ÚLTIMOS LANCES</h5></div>
                            <div class=\"card-content grey-text lighten-2 center\">
                                <p> R\$ 100,80 - edinnap <p>
                                <p> R\$ 99,80 - edinnap <p>
                                <p> R\$ 98,80 - edinnap <p>
                                <p> R\$ 97,80 - edinnap <p>
                                <p> R\$ 96,80 - edinnap <p>
                                <p> R\$ 50,80 - edinnap <p>
                                <p> R\$ 40,80 - edinnap <p>
                                <p> R\$ 35,80 - edinnap <p>
                                <p> R\$ 20,80 - edinnap <p>
                                <p> R\$ 2,80 - edinnap <p>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['passagem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "            </div>
            <div id=\"next\" class=\"col s12\">
                <!--Proxímos Leilões-->
                <div class=\"row\">
                    <div class=\"col l4 s12\">
                        <div class=\"card\">
                            <div class=\"card-image waves-effect waves-block waves-light\">
                                <div class=\"materialboxed\">
                                    <img width=\"250\" src=\"img/rio.jpg\">
                                    <figcaption>Voos para Rio de Janeiro</figcaption>
                                </div>
                            </div>
                            <div class= \"row\">
                                <div class=\"col s12\">
                                    <div class=\"box-cronometro-home grey lighten-2 center\">
                                        <p class=\"leilao-home-txt-1\">02:00</p>
                                        <p class=\"leilao-home-txt-2\">Previsão início: 30/12/16</p>
                                    </div>
                                </div>
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
                    <div class=\"col l4 s12\">
                        <div class=\"card\">
                            <div class=\"card-image waves-effect waves-block waves-light\">
                                <div class=\"materialboxed\">
                                    <img width=\"250\" src=\"img/londres.jpg\">
                                    <figcaption>Voos para Londres</figcaption>
                                </div>
                            </div>
                            <div class= \"row\">
                                <div class=\"col s12\">
                                    <div class=\"box-cronometro-home grey lighten-2 center\">
                                        <p class=\"leilao-home-txt-1\">02:00</p>
                                        <p class=\"leilao-home-txt-2\">Previsão início: 18/02/16</p>
                                    </div>
                                </div>
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
                    <div class=\"col l4 s12\">
                        <div class=\"card\">
                            <div class=\"card-image waves-effect waves-block waves-light\">
                                <div class=\"materialboxed\">
                                    <img width=\"300\" src=\"img/hotel-02.jpg\">
                                    <figcaption>Voos para Singapura</figcaption>
                                </div>
                            </div>
                            <div class= \"row\">
                                <div class=\"col s12\">
                                    <div class=\"box-cronometro-home grey lighten-2 center\">
                                        <p class=\"leilao-home-txt-1\">02:00</p>
                                        <p class=\"leilao-home-txt-2\">Previsão início: 18/02/16</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-content grey-text\">
                                <i class=\"fa fa-facebook-square fa-2x\"></i>
                                <i class=\"fa fa-google-plus-square fa-2x \"></i>
                                <i class=\"fa fa-twitter-square fa-2x \"></i>
                                <i class=\"fa fa-instagram fa-2x \"></i>
                                <button class=\"btn-floating waves-effect waves-light grey right\" type=\"submit\" ><i class=\"material-icons left yellow-text\">grade</i>Acompanhe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"close\" class=\"col s12\">
                <!--Leilões Encerrados-->
                <div class=\"row\">
                    <div class=\"col l4 s12\">
                        <div class=\"card\">
                            <div class=\"card-image waves-effect waves-block waves-light\">
                                <div class=\"materialboxed\">
                                    <img width=\"250\" src=\"img/rio.jpg\">
                                    <figcaption>Voos para Rio de Janeiro</figcaption>
                                </div>
                            </div>
                            <div class= \"row\">
                                <div class=\"col s12\">
                                    <div class=\"box-cronometro-home grey lighten-2 center\">
                                        <p class=\"leilao-home-txt-1\">99% OFF</p>
                                        <p class=\"leilao-home-txt-2\">Término: 18/02/16 - 15:00:37</p>
                                    </div>
                                </div>
                            </div>

                            <h5 class=\"red-text center\"> <b> Por: R\$ 13,80 </b></h5>
                            <h6 class=\"grey-text center\">  acabanozero </h6>
                            <h6 class=\"grey-text center\"> Arrematado com 74 lances</h6>

                            <div class=\"card-content grey-text\">
                                <i class=\"fa fa-facebook-square fa-2x\"></i>
                                <i class=\"fa fa-google-plus-square fa-2x \"></i>
                                <i class=\"fa fa-twitter-square fa-2x \"></i>
                                <i class=\"fa fa-instagram fa-2x \"></i>
                                <button class=\"btn-floating waves-effect waves-light grey right\" type=\"submit\" ><i class=\"material-icons left\">grade</i>Acompanhe</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col l4 s12\">
                        <div class=\"card\">
                            <div class=\"card-image waves-effect waves-block waves-light\">
                                <div class=\"materialboxed\">
                                    <img width=\"250\" src=\"img/londres.jpg\">
                                    <figcaption>Voos para Londres</figcaption>
                                </div>
                            </div>
                            <div class= \"row\">
                                <div class=\"col s12\">
                                    <div class=\"box-cronometro-home grey lighten-2 center\">
                                        <p class=\"leilao-home-txt-1\">97% OFF</p>
                                        <p class=\"leilao-home-txt-2\">Término: 18/02/16 - 15:00:37</p>
                                    </div>
                                </div>
                            </div>

                            <h5 class=\"red-text center\"> <b> Por: R\$ 13,80 </b></h5>
                            <h6 class=\"grey-text center\">  acabanozero </h6>
                            <h6 class=\"grey-text center\"> Arrematado com 74 lances</h6>

                            <div class=\"card-content grey-text\">
                                <i class=\"fa fa-facebook-square fa-2x\"></i>
                                <i class=\"fa fa-google-plus-square fa-2x \"></i>
                                <i class=\"fa fa-twitter-square fa-2x \"></i>
                                <i class=\"fa fa-instagram fa-2x \"></i>
                                <button class=\"btn-floating waves-effect waves-light grey right\" type=\"submit\" ><i class=\"material-icons left\">grade</i>Acompanhe</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col l4 s12\">
                        <div class=\"card\">
                            <div class=\"card-image waves-effect waves-block waves-light\">
                                <div class=\"materialboxed\">
                                    <img width=\"250\" src=\"img/hotel-02.jpg\">
                                    <figcaption>Voos para Singapura</figcaption>
                                </div>
                            </div>
                            <div class= \"row\">
                                <div class=\"col s12\">
                                    <div class=\"box-cronometro-home grey lighten-2 center\">
                                        <p class=\"leilao-home-txt-1\">89% OFF</p>
                                        <p class=\"leilao-home-txt-2\">Término: 18/02/16 - 15:00:37</p>
                                    </div>
                                </div>
                            </div>

                            <h5 class=\"red-text center\"> <b> Por: R\$ 13,80 </b></h5>
                            <h6 class=\"grey-text center\">  acabanozero </h6>
                            <h6 class=\"grey-text center\"> Arrematado com 74 lances</h6>

                            <div class=\"card-content grey-text\">
                                <i class=\"fa fa-facebook-square fa-2x\"></i>
                                <i class=\"fa fa-google-plus-square fa-2x \"></i>
                                <i class=\"fa fa-twitter-square fa-2x \"></i>
                                <i class=\"fa fa-instagram fa-2x \"></i>
                                <button class=\"btn-floating waves-effect waves-light grey right\" type=\"submit\" ><i class=\"material-icons left\">grade</i>Acompanhe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_5e9ef94f8b5d24ca8b9016df0e1ea363621ebc9f39a09367ef90e499c3eb20ab->leave($__internal_5e9ef94f8b5d24ca8b9016df0e1ea363621ebc9f39a09367ef90e499c3eb20ab_prof);

    }

    public function getTemplateName()
    {
        return "LeilaoBundle:leilao:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 133,  151 => 100,  147 => 99,  139 => 95,  137 => 94,  92 => 51,  88 => 50,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class ="titles-box" >*/
/*             <h1 class = "titles-top">Leilão</h1>*/
/*             <h3 class = "titles-bottom"></h3>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col s12">*/
/*                 <ul class="tabs">*/
/*                     <li class="tab col s3"><a class="active grey-text" href="#open">Abertos</a></li>*/
/*                     <li class="tab col s3"><a class="grey-text" href="#next">Proxímos</a></li>*/
/*                     <li class="tab col s3"><a class="grey-text" href="#close">Encerrados</a></li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <div id="open" class="col s12 ">*/
/*                 <!--Leilões Abertos -->*/
/*                 <div class="row">*/
/* */
/*                     <div class="col s12 m6">*/
/*                         <div class="input-field col s12">*/
/*                             <select>*/
/*                                 <option value="" disabled selected>Selecione a cidade de origem</option>*/
/*                                 <option value="1">Option 1</option>*/
/*                                 <option value="2">Option 2</option>*/
/*                                 <option value="3">Option 3</option>*/
/*                             </select>*/
/*                             <label>Origem</label>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="col s12 m6">*/
/*                         <div class="input-field col s12">*/
/*                             <select>*/
/*                                 <option value="" disabled selected>Selecione a cidade de destino</option>*/
/*                                 <option value="1">Option 1</option>*/
/*                                 <option value="2">Option 2</option>*/
/*                                 <option value="3">Option 3</option>*/
/*                             </select>*/
/*                             <label>Destino</label>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*                 {% for passagem in leiloesAbertos %}*/
/* */
/*                 <div class="row">*/
/*                     <div class="col l4 s12 m6">*/
/*                         <div class="card small">*/
/*                             <div class="card-image waves-effect waves-block waves-light">*/
/*                                 <div class="materialboxed">*/
/*                                     <img width="250" src="img/rio.jpg">*/
/*                                     <figcaption>Voos para Rio de Janeiro</figcaption>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="card-content grey-text">*/
/*                                 <p class="col s12 m12 grey-text"> Ida e Volta</p>*/
/*                                 <i class="fa fa-facebook-square fa-2x"></i>*/
/*                                 <i class="fa fa-google-plus-square fa-2x "></i>*/
/*                                 <i class="fa fa-twitter-square fa-2x "></i>*/
/*                                 <i class="fa fa-instagram fa-2x "></i>*/
/*                                 <button class="btn-floating waves-effect waves-light grey right" type="submit" ><i class="material-icons left">grade</i>Acompanhe</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col l4 s12 m6">*/
/*                         <div class="card small">*/
/*                             <div class="row">*/
/*                                 <div class="col s8">*/
/*                                     <span class="grey-text"> De R$ 658,00 </span>*/
/*                                     <br>*/
/*                                     <span class="leilao-home-txt-1 green-text"> Por R$ 208,80 </span>*/
/*                                     <br>*/
/*                                     <span class="grey-text"> Economia de </span><span class="green-text"><b> R$ 450,20 </b></span>*/
/*                                 </div>*/
/*                                 <div class="col s2">*/
/*                                     <p></p>*/
/*                                     <span class="discount-txt green-text"> <b>68% </b></span>*/
/*                                     <span class="leilao-home-txt-2 green-text center"> <b>DESCONTO </b></span>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col s12">*/
/*                                 <ul class="collapsible">*/
/*                                     <li class="active">*/
/*                                         <div class="collapsible-header grey-text grey lighten-2 center">Usuário: edinnap</div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <div class="collapsible-header center">*/
/*                                             <p class="leilao-home-txt-1"> {% if passagem.leilao.tempoleilao is not null %}*/
/*                                                     {{ passagem.leilao.tempoleilao }}*/
/* */
/*                                                     <a href=""><input type="button" value="Dê Seu lançe"/> </a>*/
/*                                                 {% else %}*/
/*                                                     <b>Leilão terminado</b>*/
/*                                                 {% endif %} </p>*/
/*                                             <p class="leilao-home-txt-2">Início: 20/07/2016 - 02:30:00</p>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                                 <div class="col s6">*/
/*                                     <span class="grey-text"> Dê seu lance </span>*/
/*                                 </div>*/
/*                                 <div class="col s6">*/
/*                                     <a class="waves-effect red btn">Lance</a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col l4 s12 m12">*/
/*                         <div class="card small">*/
/*                             <div class="col s12 grey lighten-2 center"><h5 class="grey-text">ÚLTIMOS LANCES</h5></div>*/
/*                             <div class="card-content grey-text lighten-2 center">*/
/*                                 <p> R$ 100,80 - edinnap <p>*/
/*                                 <p> R$ 99,80 - edinnap <p>*/
/*                                 <p> R$ 98,80 - edinnap <p>*/
/*                                 <p> R$ 97,80 - edinnap <p>*/
/*                                 <p> R$ 96,80 - edinnap <p>*/
/*                                 <p> R$ 50,80 - edinnap <p>*/
/*                                 <p> R$ 40,80 - edinnap <p>*/
/*                                 <p> R$ 35,80 - edinnap <p>*/
/*                                 <p> R$ 20,80 - edinnap <p>*/
/*                                 <p> R$ 2,80 - edinnap <p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <div id="next" class="col s12">*/
/*                 <!--Proxímos Leilões-->*/
/*                 <div class="row">*/
/*                     <div class="col l4 s12">*/
/*                         <div class="card">*/
/*                             <div class="card-image waves-effect waves-block waves-light">*/
/*                                 <div class="materialboxed">*/
/*                                     <img width="250" src="img/rio.jpg">*/
/*                                     <figcaption>Voos para Rio de Janeiro</figcaption>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class= "row">*/
/*                                 <div class="col s12">*/
/*                                     <div class="box-cronometro-home grey lighten-2 center">*/
/*                                         <p class="leilao-home-txt-1">02:00</p>*/
/*                                         <p class="leilao-home-txt-2">Previsão início: 30/12/16</p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="card-content grey-text">*/
/*                                 <i class="fa fa-facebook-square fa-2x"></i>*/
/*                                 <i class="fa fa-google-plus-square fa-2x "></i>*/
/*                                 <i class="fa fa-twitter-square fa-2x "></i>*/
/*                                 <i class="fa fa-instagram fa-2x "></i>*/
/*                                 <button class="btn-floating waves-effect waves-light grey right" type="submit" ><i class="material-icons left">grade</i>Acompanhe</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col l4 s12">*/
/*                         <div class="card">*/
/*                             <div class="card-image waves-effect waves-block waves-light">*/
/*                                 <div class="materialboxed">*/
/*                                     <img width="250" src="img/londres.jpg">*/
/*                                     <figcaption>Voos para Londres</figcaption>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class= "row">*/
/*                                 <div class="col s12">*/
/*                                     <div class="box-cronometro-home grey lighten-2 center">*/
/*                                         <p class="leilao-home-txt-1">02:00</p>*/
/*                                         <p class="leilao-home-txt-2">Previsão início: 18/02/16</p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="card-content grey-text">*/
/*                                 <i class="fa fa-facebook-square fa-2x"></i>*/
/*                                 <i class="fa fa-google-plus-square fa-2x "></i>*/
/*                                 <i class="fa fa-twitter-square fa-2x "></i>*/
/*                                 <i class="fa fa-instagram fa-2x "></i>*/
/*                                 <button class="btn-floating waves-effect waves-light grey right" type="submit" ><i class="material-icons left">grade</i>Acompanhe</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col l4 s12">*/
/*                         <div class="card">*/
/*                             <div class="card-image waves-effect waves-block waves-light">*/
/*                                 <div class="materialboxed">*/
/*                                     <img width="300" src="img/hotel-02.jpg">*/
/*                                     <figcaption>Voos para Singapura</figcaption>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class= "row">*/
/*                                 <div class="col s12">*/
/*                                     <div class="box-cronometro-home grey lighten-2 center">*/
/*                                         <p class="leilao-home-txt-1">02:00</p>*/
/*                                         <p class="leilao-home-txt-2">Previsão início: 18/02/16</p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="card-content grey-text">*/
/*                                 <i class="fa fa-facebook-square fa-2x"></i>*/
/*                                 <i class="fa fa-google-plus-square fa-2x "></i>*/
/*                                 <i class="fa fa-twitter-square fa-2x "></i>*/
/*                                 <i class="fa fa-instagram fa-2x "></i>*/
/*                                 <button class="btn-floating waves-effect waves-light grey right" type="submit" ><i class="material-icons left yellow-text">grade</i>Acompanhe</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="close" class="col s12">*/
/*                 <!--Leilões Encerrados-->*/
/*                 <div class="row">*/
/*                     <div class="col l4 s12">*/
/*                         <div class="card">*/
/*                             <div class="card-image waves-effect waves-block waves-light">*/
/*                                 <div class="materialboxed">*/
/*                                     <img width="250" src="img/rio.jpg">*/
/*                                     <figcaption>Voos para Rio de Janeiro</figcaption>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class= "row">*/
/*                                 <div class="col s12">*/
/*                                     <div class="box-cronometro-home grey lighten-2 center">*/
/*                                         <p class="leilao-home-txt-1">99% OFF</p>*/
/*                                         <p class="leilao-home-txt-2">Término: 18/02/16 - 15:00:37</p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <h5 class="red-text center"> <b> Por: R$ 13,80 </b></h5>*/
/*                             <h6 class="grey-text center">  acabanozero </h6>*/
/*                             <h6 class="grey-text center"> Arrematado com 74 lances</h6>*/
/* */
/*                             <div class="card-content grey-text">*/
/*                                 <i class="fa fa-facebook-square fa-2x"></i>*/
/*                                 <i class="fa fa-google-plus-square fa-2x "></i>*/
/*                                 <i class="fa fa-twitter-square fa-2x "></i>*/
/*                                 <i class="fa fa-instagram fa-2x "></i>*/
/*                                 <button class="btn-floating waves-effect waves-light grey right" type="submit" ><i class="material-icons left">grade</i>Acompanhe</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col l4 s12">*/
/*                         <div class="card">*/
/*                             <div class="card-image waves-effect waves-block waves-light">*/
/*                                 <div class="materialboxed">*/
/*                                     <img width="250" src="img/londres.jpg">*/
/*                                     <figcaption>Voos para Londres</figcaption>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class= "row">*/
/*                                 <div class="col s12">*/
/*                                     <div class="box-cronometro-home grey lighten-2 center">*/
/*                                         <p class="leilao-home-txt-1">97% OFF</p>*/
/*                                         <p class="leilao-home-txt-2">Término: 18/02/16 - 15:00:37</p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <h5 class="red-text center"> <b> Por: R$ 13,80 </b></h5>*/
/*                             <h6 class="grey-text center">  acabanozero </h6>*/
/*                             <h6 class="grey-text center"> Arrematado com 74 lances</h6>*/
/* */
/*                             <div class="card-content grey-text">*/
/*                                 <i class="fa fa-facebook-square fa-2x"></i>*/
/*                                 <i class="fa fa-google-plus-square fa-2x "></i>*/
/*                                 <i class="fa fa-twitter-square fa-2x "></i>*/
/*                                 <i class="fa fa-instagram fa-2x "></i>*/
/*                                 <button class="btn-floating waves-effect waves-light grey right" type="submit" ><i class="material-icons left">grade</i>Acompanhe</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col l4 s12">*/
/*                         <div class="card">*/
/*                             <div class="card-image waves-effect waves-block waves-light">*/
/*                                 <div class="materialboxed">*/
/*                                     <img width="250" src="img/hotel-02.jpg">*/
/*                                     <figcaption>Voos para Singapura</figcaption>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class= "row">*/
/*                                 <div class="col s12">*/
/*                                     <div class="box-cronometro-home grey lighten-2 center">*/
/*                                         <p class="leilao-home-txt-1">89% OFF</p>*/
/*                                         <p class="leilao-home-txt-2">Término: 18/02/16 - 15:00:37</p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <h5 class="red-text center"> <b> Por: R$ 13,80 </b></h5>*/
/*                             <h6 class="grey-text center">  acabanozero </h6>*/
/*                             <h6 class="grey-text center"> Arrematado com 74 lances</h6>*/
/* */
/*                             <div class="card-content grey-text">*/
/*                                 <i class="fa fa-facebook-square fa-2x"></i>*/
/*                                 <i class="fa fa-google-plus-square fa-2x "></i>*/
/*                                 <i class="fa fa-twitter-square fa-2x "></i>*/
/*                                 <i class="fa fa-instagram fa-2x "></i>*/
/*                                 <button class="btn-floating waves-effect waves-light grey right" type="submit" ><i class="material-icons left">grade</i>Acompanhe</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
