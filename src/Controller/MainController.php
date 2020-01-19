<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{

    /**
     * @Route("/", name="index")
     */
    public function index()
    {

        $response = $this->render('main/home.html.twig');
                return $response;
    }
    /**
     * @Route("mihistoria", name="mihistoria")
     */
    public function portafolio()
    {

        $response = $this->render('main/mihistoria.html.twig');
                return $response;
    }
    /**
     * @Route("crearcv", name="crearcv")
     */
    public function crearcv()
    {

        $response = $this->render('utilidades/crearcv.html.twig');
        return $response;
    }
//    /**
//     * @Route("mihistoria", name="mihistoria")
//     */
//    public function miHistoria()
//    {
//
//        $response = $this->render('historia/mihistoria.html.twig');
//        return $response;
//    }
}