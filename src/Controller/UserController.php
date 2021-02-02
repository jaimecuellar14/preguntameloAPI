<?php

namespace App\Controller;

use App\Entity\User;
//use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{

    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

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
     * @Route("/api/createUser", methods={"POST"}, name="addUser")
     */
    public function addUser(Request $request){
        $data = json_decode($request->getContent(), true);

        $entityManager = $this->getDoctrine()->getManager();
        $user = new User();
        $user
            ->setFirstName($data['firstname'])
            ->setLastName($data['lastname'])
            ->setPhoneNumber($data['phoneNumber'])
            ->setEmail($data['email'])
            ->setPassword($this->passwordEncoder->encodePassword($user, $data['password']));

        $entityManager->persist($user);
        $entityManager->flush();

        return new Response("Request has been successful");
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
