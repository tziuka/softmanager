<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Ad;
use AppBundle\Form\AdType;

/**
 * Ad controller.
 *
 * @Route("/ad")
 */
class AdController extends Controller
{
    /**
     * Lists all Ad entities.
     *
     * @Route("/", name="ad_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ads = $em->getRepository('AppBundle:Ad')->findAll();

        return $this->render('ad/index.html.twig', array(
            'ads' => $ads,
        ));
    }

    /**
     * Creates a new Ad entity.
     *
     * @Route("/new", name="ad_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $ad = new Ad();
        $form = $this->createForm('AppBundle\Form\AdType', $ad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ad);
            $em->flush();

            return $this->redirectToRoute('ad_show', array('id' => $ad->getId()));
        }

        return $this->render('ad/new.html.twig', array(
            'ad' => $ad,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Ad entity.
     *
     * @Route("/{id}", name="ad_show")
     * @Method("GET")
     */
    public function showAction(Ad $ad)
    {
        $deleteForm = $this->createDeleteForm($ad);

        return $this->render('ad/show.html.twig', array(
            'ad' => $ad,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Ad entity.
     *
     * @Route("/{id}/edit", name="ad_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Ad $ad)
    {
        $deleteForm = $this->createDeleteForm($ad);
        $editForm = $this->createForm('AppBundle\Form\AdType', $ad);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ad);
            $em->flush();

            return $this->redirectToRoute('ad_edit', array('id' => $ad->getId()));
        }

        return $this->render('ad/edit.html.twig', array(
            'ad' => $ad,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Ad entity.
     *
     * @Route("/{id}", name="ad_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Ad $ad)
    {
        $form = $this->createDeleteForm($ad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ad);
            $em->flush();
        }

        return $this->redirectToRoute('ad_index');
    }

    /**
     * Creates a form to delete a Ad entity.
     *
     * @param Ad $ad The Ad entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ad $ad)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ad_delete', array('id' => $ad->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
