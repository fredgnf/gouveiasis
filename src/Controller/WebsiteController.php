<?php
/**
 * Created by PhpStorm.
 * User: Frederico
 * Date: 29/01/2024
 * Time: 15:26
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class WebsiteController  extends AbstractController
{
  #[Route('/')]
  public function number(): Response
  {
    $number = random_int(0, 100);

    return $this->render('website.html.twig', [
      'number' => $number,
    ]);
  }
}