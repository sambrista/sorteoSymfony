<?php
// src/Controller/SorteoController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class SorteoController
{
    public function numero()
    {
        $numero = random_int(0, 100);

        return new Response(
            '<html><body>El resultado del sorteo es: '.$numero.'</body></html>'
        );
    }
}