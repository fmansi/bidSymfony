<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Leilao;
use AppBundle\Form\LeilaoType;

/**
 * Leilao controller.
 *
 * @Route("/admin/leilao")
 */
class LeilaoController extends Controller
{
    /**
     * Lists all Leilao entities.
     *
     * @Route("/", name="admin_leilao_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $leilaos = $em->getRepository('AppBundle:Leilao')->findAll();

        return $this->render('leilao/index.html.twig', array(
            'leilaos' => $leilaos,
        ));
    }

    /**
     * Creates a new Leilao entity.
     *
     * @Route("/new", name="admin_leilao_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $leilao = new Leilao();
        $form = $this->createForm('AppBundle\Form\LeilaoType', $leilao);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($leilao);
            $em->flush();

            return $this->redirectToRoute('admin_leilao_show', array('id' => $leilao->getId()));
        }

        return $this->render('leilao/new.html.twig', array(
            'leilao' => $leilao,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Leilao entity.
     *
     * @Route("/{id}", name="admin_leilao_show")
     * @Method("GET")
     */
    public function showAction(Leilao $leilao)
    {
        $deleteForm = $this->createDeleteForm($leilao);

        return $this->render('leilao/show.html.twig', array(
            'leilao' => $leilao,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Leilao entity.
     *
     * @Route("/{id}/edit", name="admin_leilao_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Leilao $leilao)
    {
        $deleteForm = $this->createDeleteForm($leilao);
        $editForm = $this->createForm('AppBundle\Form\LeilaoType', $leilao);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($leilao);
            $em->flush();

            return $this->redirectToRoute('admin_leilao_edit', array('id' => $leilao->getId()));
        }

        return $this->render('leilao/edit.html.twig', array(
            'leilao' => $leilao,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Leilao entity.
     *
     * @Route("/{id}", name="admin_leilao_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Leilao $leilao)
    {
        $form = $this->createDeleteForm($leilao);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($leilao);
            $em->flush();
        }

        return $this->redirectToRoute('admin_leilao_index');
    }

    /**
     * Creates a form to delete a Leilao entity.
     *
     * @param Leilao $leilao The Leilao entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Leilao $leilao)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_leilao_delete', array('id' => $leilao->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
