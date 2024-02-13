<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class TestController extends AbstractController
{
    #[Route("/test/{num}")]
    public function test(int $num): \Symfony\Component\HttpFoundation\Response
    {
        $num += 1;
        return $this->render("test/test.html.twig", [
            "number" => $num
        ]);
    }
}