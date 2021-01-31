<?php

namespace App\Controller;

use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/UserController.php',
        ]);
    }

    /**
     * @Route("/createUser")
     */
    public function saveUser(){
        $entityManager = $this->getDoctrine()->getManager();
        $user = new Users();
        $user->setName('Sebas');
        $entityManager->persist($user);
        $entityManager->flush();

        return new Response("Se creo un usuario");
    }
    
    /**
     * @Route("/api/getUsers")
     */

     public function getUsers(){
         $conn= $this->getDoctrine()->getManager()->getConnection();

         $query="SELECT * FROM user";
         $smtp=$conn->prepare($query);
         $smtp->execute();

         $response = $smtp->fetchAll();
         return new Response(json_encode($response));
     }

//     Just for the moment
    /**
     * @Route("/api/dashboard")
     */
     public function dashboard(){
        return new Response('<h1>Just for testing login</h1>');
     }
}
