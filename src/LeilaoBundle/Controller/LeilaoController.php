<?php

namespace LeilaoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class LeilaoController extends Controller
{
    public function indexAction($situation)
    {
        $serviceLeilao = $this->get("leilao.Service");

        $todosLeiloes = $serviceLeilao->getList($situation);

        return $this->render('LeilaoBundle:leilao:index.html.twig', array(
            "listaLeilao" => $todosLeiloes
        ));
    }
}
