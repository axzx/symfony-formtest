<?php

namespace App\Controller;

use App\Entity\Premium;
use App\Form\PremiumType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PremiumController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index(Request $request)
    {
        $premium = new Premium();

        $form = $this->createForm(PremiumType::class, $premium);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

        }

        return $this->render('premium/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
