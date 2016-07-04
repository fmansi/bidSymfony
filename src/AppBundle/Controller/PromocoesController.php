<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Promocoes;
use AppBundle\Form\PromocoesType;

/**
 * Promocoes controller.
 *
 * @Route("/admin/promocoes")
 */
class PromocoesController extends Controller
{
    /**
     * Lists all Promocoes entities.
     *
     * @Route("/", name="admin_promocoes_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $promocoes = $em->getRepository('AppBundle:Promocoes')->findAll();

        return $this->render('promocoes/index.html.twig', array(
            'promocoes' => $promocoes,
        ));
    }

    /**
     * Creates a new Promocoes entity.
     *
     * @Route("/new", name="admin_promocoes_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $promoco = new Promocoes();
        $form = $this->createForm('AppBundle\Form\PromocoesType', $promoco);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($promoco);
            $em->flush();

            return $this->redirectToRoute('admin_promocoes_show', array('id' => $promoco->getId()));
        }

        return $this->render('promocoes/new.html.twig', array(
            'promoco' => $promoco,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Promocoes entity.
     *
     * @Route("/{id}", name="admin_promocoes_show")
     * @Method("GET")
     */
    public function showAction(Promocoes $promoco)
    {
        $deleteForm = $this->createDeleteForm($promoco);

        return $this->render('promocoes/show.html.twig', array(
            'promoco' => $promoco,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Promocoes entity.
     *
     * @Route("/{id}/edit", name="admin_promocoes_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Promocoes $promoco)
    {
        $deleteForm = $this->createDeleteForm($promoco);
        $editForm = $this->createForm('AppBundle\Form\PromocoesType', $promoco);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($promoco);
            $em->flush();

            return $this->redirectToRoute('admin_promocoes_edit', array('id' => $promoco->getId()));
        }

        return $this->render('promocoes/edit.html.twig', array(
            'promoco' => $promoco,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Promocoes entity.
     *
     * @Route("/{id}", name="admin_promocoes_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Promocoes $promoco)
    {
        $form = $this->createDeleteForm($promoco);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($promoco);
            $em->flush();
        }

        return $this->redirectToRoute('admin_promocoes_index');
    }

    /**
     * Creates a form to delete a Promocoes entity.
     *
     * @param Promocoes $promoco The Promocoes entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Promocoes $promoco)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_promocoes_delete', array('id' => $promoco->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
