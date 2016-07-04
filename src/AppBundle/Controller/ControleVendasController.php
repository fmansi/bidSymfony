<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\ControleVendas;
use AppBundle\Form\ControleVendasType;

/**
 * ControleVendas controller.
 *
 * @Route("/admin/controle_vendas")
 */
class ControleVendasController extends Controller
{
    /**
     * Lists all ControleVendas entities.
     *
     * @Route("/", name="admin_controle_vendas_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $controleVendas = $em->getRepository('AppBundle:ControleVendas')->findAll();

        return $this->render('controlevendas/index.html.twig', array(
            'controleVendas' => $controleVendas,
        ));
    }

    /**
     * Creates a new ControleVendas entity.
     *
     * @Route("/new", name="admin_controle_vendas_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $controleVenda = new ControleVendas();
        $form = $this->createForm('AppBundle\Form\ControleVendasType', $controleVenda);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($controleVenda);
            $em->flush();

            return $this->redirectToRoute('admin_controle_vendas_show', array('id' => $controleVenda->getId()));
        }

        return $this->render('controlevendas/new.html.twig', array(
            'controleVenda' => $controleVenda,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ControleVendas entity.
     *
     * @Route("/{id}", name="admin_controle_vendas_show")
     * @Method("GET")
     */
    public function showAction(ControleVendas $controleVenda)
    {
        $deleteForm = $this->createDeleteForm($controleVenda);

        return $this->render('controlevendas/show.html.twig', array(
            'controleVenda' => $controleVenda,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ControleVendas entity.
     *
     * @Route("/{id}/edit", name="admin_controle_vendas_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ControleVendas $controleVenda)
    {
        $deleteForm = $this->createDeleteForm($controleVenda);
        $editForm = $this->createForm('AppBundle\Form\ControleVendasType', $controleVenda);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($controleVenda);
            $em->flush();

            return $this->redirectToRoute('admin_controle_vendas_edit', array('id' => $controleVenda->getId()));
        }

        return $this->render('controlevendas/edit.html.twig', array(
            'controleVenda' => $controleVenda,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ControleVendas entity.
     *
     * @Route("/{id}", name="admin_controle_vendas_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ControleVendas $controleVenda)
    {
        $form = $this->createDeleteForm($controleVenda);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($controleVenda);
            $em->flush();
        }

        return $this->redirectToRoute('admin_controle_vendas_index');
    }

    /**
     * Creates a form to delete a ControleVendas entity.
     *
     * @param ControleVendas $controleVenda The ControleVendas entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ControleVendas $controleVenda)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_controle_vendas_delete', array('id' => $controleVenda->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
