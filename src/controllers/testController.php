<?php

namespace controllers;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class testController extends AbstractController
{
    /**
     * @Route("/foo")
     */
    public function randomNumber()
    {
        return new Response('Hello');
    }
}