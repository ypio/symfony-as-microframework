<?php


namespace controllers;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MicroController extends AbstractController
{

    /**
     * @Route("/hello/{test}", name="hello", methods={"GET"})
     */
    public function randomNumber($test)
    {
        return new Response('Hello ' . $test);
    }
}