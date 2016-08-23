<?php

namespace LeilaoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Leilao;

class LeilaoController extends Controller
{
    public function indexAction($situation)
    {
        $serviceLeilao = $this->get("leilao.Service");

        $leiloesAbertos = $serviceLeilao->getList(Leilao::ABERTO);
        $proximosLeiloes = $serviceLeilao->getList(Leilao::PROXIMOS);
        $fechadosLeiloes = $serviceLeilao->getList(Leilao::FECHADO);

        return $this->render('LeilaoBundle:leilao:index.html.twig', array(
            "leiloesAbertos" => $leiloesAbertos,
            "proximosLeiloes" => $proximosLeiloes,
            "fechadosLeiloes" => $fechadosLeiloes
        ));
    }
}
