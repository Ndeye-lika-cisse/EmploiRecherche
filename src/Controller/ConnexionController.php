<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConnexionController extends AbstractController
{
    #[Route('/connexion', name: 'connexion')]
    public function connexion(): Response
    {
        return $this->render('connexion/connexion.html.twig', [
            'controller_name' => 'ConnexionController',
        ]);
    }
   
}
/*
session_start();
if(isset($_POST['bntConnecter'])){
    extract($_POST);
    $user = veriferConnexion($login,$password);
     
    if($user != NULL){
        $_SESSION['id'] = $user['id'];
        $_SESSION['login'] = $user['login'];
        $_SESSION['password'] = $user['password'];
        header("location:/emploirecherche/accueil.html.twig");
    }
}
*/