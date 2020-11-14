<?php
// src/Controller/SorteoController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SorteoController extends AbstractController
{
    public function numero($maximo)
    {
        $numero = random_int(0, $maximo);

        return $this->render('sorteo/numero.html.twig', [
            'numero' => $numero,
        ]);
    }

    public function suma($numero1, $numero2)
    {
        return $this->render('sorteo/suma.html.twig', [
            'numero1' => $numero1,
            'numero2' => $numero2,
            'resultado' => $numero1 + $numero2,
        ]);
    }
}