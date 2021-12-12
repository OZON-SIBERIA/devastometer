<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController
{
    /**
     * @Route("/main/`", name="main", methods={"POST", "GET"})
     * @param Request $request
     * @return Response
     */
    public function main(Request $request): Response
    {
        return new Response();
    }
}
