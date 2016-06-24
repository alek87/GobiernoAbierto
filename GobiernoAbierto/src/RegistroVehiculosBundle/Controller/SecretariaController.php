<?php

namespace RegistroVehiculosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use RegistroVehiculosBundle\Entity\Secretaria;
use RegistroVehiculosBundle\Form\SecretariaType;

/**
 * Secretaria controller.
 *
 */
class SecretariaController extends Controller
{
    /**
     * Lists all Secretaria entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $secretarias = $em->getRepository('RegistroVehiculosBundle:Secretaria')->findAll();

        return $this->render('secretaria/index.html.twig', array(
            'secretarias' => $secretarias,
        ));
    }

    /**
     * Creates a new Secretaria entity.
     *
     */
    public function newAction(Request $request)
    {
        $secretarium = new Secretaria();
        $form = $this->createForm('RegistroVehiculosBundle\Form\SecretariaType', $secretarium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($secretarium);
            $em->flush();

            return $this->redirectToRoute('secretaria_show', array('id' => $secretarium->getId()));
        }

        return $this->render('secretaria/new.html.twig', array(
            'secretarium' => $secretarium,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Secretaria entity.
     *
     */
    public function showAction(Secretaria $secretarium)
    {
        $deleteForm = $this->createDeleteForm($secretarium);

        return $this->render('secretaria/show.html.twig', array(
            'secretarium' => $secretarium,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Secretaria entity.
     *
     */
    public function editAction(Request $request, Secretaria $secretarium)
    {
        $deleteForm = $this->createDeleteForm($secretarium);
        $editForm = $this->createForm('RegistroVehiculosBundle\Form\SecretariaType', $secretarium);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($secretarium);
            $em->flush();

            return $this->redirectToRoute('secretaria_edit', array('id' => $secretarium->getId()));
        }

        return $this->render('secretaria/edit.html.twig', array(
            'secretarium' => $secretarium,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Secretaria entity.
     *
     */
    public function deleteAction(Request $request, Secretaria $secretarium)
    {
        $form = $this->createDeleteForm($secretarium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($secretarium);
            $em->flush();
        }

        return $this->redirectToRoute('secretaria_index');
    }

    /**
     * Creates a form to delete a Secretaria entity.
     *
     * @param Secretaria $secretarium The Secretaria entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Secretaria $secretarium)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('secretaria_delete', array('id' => $secretarium->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
