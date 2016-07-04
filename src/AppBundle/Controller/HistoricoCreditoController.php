<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\HistoricoCredito;
use AppBundle\Form\HistoricoCreditoType;

/**
 * HistoricoCredito controller.
 *
 * @Route("/admin/historico_credito")
 */
class HistoricoCreditoController extends Controller
{
    /**
     * Lists all HistoricoCredito entities.
     *
     * @Route("/", name="admin_historico_credito_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $historicoCreditos = $em->getRepository('AppBundle:HistoricoCredito')->findAll();

        return $this->render('historicocredito/index.html.twig', array(
            'historicoCreditos' => $historicoCreditos,
        ));
    }

    /**
     * Creates a new HistoricoCredito entity.
     *
     * @Route("/new", name="admin_historico_credito_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $historicoCredito = new HistoricoCredito();
        $form = $this->createForm('AppBundle\Form\HistoricoCreditoType', $historicoCredito);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($historicoCredito);
            $em->flush();

            return $this->redirectToRoute('admin_historico_credito_show', array('id' => $historicoCredito->getId()));
        }

        return $this->render('historicocredito/new.html.twig', array(
            'historicoCredito' => $historicoCredito,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a HistoricoCredito entity.
     *
     * @Route("/{id}", name="admin_historico_credito_show")
     * @Method("GET")
     */
    public function showAction(HistoricoCredito $historicoCredito)
    {
        $deleteForm = $this->createDeleteForm($historicoCredito);

        return $this->render('historicocredito/show.html.twig', array(
            'historicoCredito' => $historicoCredito,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing HistoricoCredito entity.
     *
     * @Route("/{id}/edit", name="admin_historico_credito_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, HistoricoCredito $historicoCredito)
    {
        $deleteForm = $this->createDeleteForm($historicoCredito);
        $editForm = $this->createForm('AppBundle\Form\HistoricoCreditoType', $historicoCredito);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($historicoCredito);
            $em->flush();

            return $this->redirectToRoute('admin_historico_credito_edit', array('id' => $historicoCredito->getId()));
        }

        return $this->render('historicocredito/edit.html.twig', array(
            'historicoCredito' => $historicoCredito,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a HistoricoCredito entity.
     *
     * @Route("/{id}", name="admin_historico_credito_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, HistoricoCredito $historicoCredito)
    {
        $form = $this->createDeleteForm($historicoCredito);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($historicoCredito);
            $em->flush();
        }

        return $this->redirectToRoute('admin_historico_credito_index');
    }

    /**
     * Creates a form to delete a HistoricoCredito entity.
     *
     * @param HistoricoCredito $historicoCredito The HistoricoCredito entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(HistoricoCredito $historicoCredito)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_historico_credito_delete', array('id' => $historicoCredito->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
