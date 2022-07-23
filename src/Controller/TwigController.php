<?php
namespace App\Controller;

use App\Service\Service2;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TwigController extends AbstractController
{
    /**
     * @Route("/serviceapp",name="app_service")
     */
    public function new(Service2 $service2): Response
    {
        //servis2 den tüm mesajı çektiğimiz yer
        $message = $service2->service2function();
        //mesajı twig templateye gönderdiğimiz yer
            return $this->render('base.html.twig',[
                'message' => $message,
            ]);
    }
}