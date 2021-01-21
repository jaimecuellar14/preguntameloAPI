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
     * @Route("/createUser",name="createUser")
     */
    public function saveUser(){
        $entityManager = $this->getDoctrine()->getManager();
        $user = new Users();
        $user->setName('ka');
        $entityManager->persist($user);
        $entityManager->flush();

        return new Response("Se creo un usuario");
    }
    
    /**
     * @Route("/getUsers",name="getUsers")
     */

     public function getUsers(){
         $conn= $this->getDoctrine()->getManager()->getConnection();

         $query="SELECT nombre FROM users";
         $smtp=$conn->prepare($query);
         $smtp->execute();

         $response = $smtp->fetchAll();
         return new Response(json_encode($response));
     }
}
