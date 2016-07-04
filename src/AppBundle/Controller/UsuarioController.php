<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UsuarioController extends Controller
{
    /**
     * @Route("/usuario", name="AppBundleUsuarioHome")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:Usuario:index.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/usuario/editar_cadastro", name="AppBundleUsuarioEditar")
     */
    public function editarAction()
    {
        return $this->render('AppBundle:Usuario:editar.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/usuario/comprar_lances", name="AppBundleUsuarioComprarLances")
     */
    public function compraLancesAction()
    {
        return $this->render('AppBundle:Usuario:comprar_lances.html.twig', array(
            // ...
        ));
    }
}
