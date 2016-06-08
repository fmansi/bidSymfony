<?php

namespace LeilaoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class LeilaoController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('LeilaoBundle:leilao:index.html.twig');
    }
}
