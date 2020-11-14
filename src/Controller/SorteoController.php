<?php
// src/Controller/SorteoController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SorteoController extends AbstractController
{
    public function index()
    {
        return $this->render('sorteo/index.html.twig');
    }

    public function numero($maximo)
    {
        if ((string)(int) $maximo != $maximo) {
            return $this->redirectToRoute('app_numero_sorteo', array('maximo' => 0));
        }

        $numero = random_int(0, $maximo);

        return $this->render('sorteo/numero.html.twig', [
            'numero' => $numero,
            'maximo' => $maximo,
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

    public function euromillones()
    {
        $numeros = array();
        $estrellas = array();
        $i = 0;
        while ($i < 5) {
            $numero = random_int(1,50);
            if (!in_array($numero, $numeros)) {
                $numeros[] = $numero;
                $i++;
            }
        }
        sort($numeros);

        $i = 0;
        while ($i < 2) {
            $estrella = random_int(1,12);
            if (!in_array($estrella, $estrellas)) {
                $estrellas[] = $estrella;
                $i++;
            }
        }
        sort($estrellas);

        return $this->render('sorteo/euromillones.html.twig', [
            'estrellas' => $estrellas,
            'numeros' => $numeros
        ]);
    }
}
