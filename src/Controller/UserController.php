<?php

namespace App\Controller;

use http\Env\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/UserController.php',
        ]);
    }


    /*
     * for Register
     */

    /**
     * @Route("/register", name="register_user")
     * @param Request
     * @return JsonResponse
     */
    public function register(Request $request): JsonResponse{

        //$entityManager = $this->getDoctrine()->getManager();

        $body  = $request->getContent();
        $data = json_decode($body , true );
        $name= $data['name'];
        $firstname = $data['firstname'];
        $email = $data['email'];
        $password = $data['password'];
        $user = [
            'name' => $data['name'],
            'firstname' => $data['firstname'] ,
            'email' => $data['email'],
            'password' => $data['password']];


        if($user['name'] && $user['firstname'] && $user['email'] && $user['password'] ) {
            if (!empty($user['name']) && !empty($user['firstname']) && !empty($user['email']) && !empty($user['password'])) {
                foreach ($user as $key => $value){
                    if($user[$key] == " "){
                        $user[$key] = "";
                    }
                }
                return new JsonResponse(['reponse'=> true, $user]);
            } else {
                return new JsonResponse(['reponse'=> false]);
            }

        }
        else {
            return new JsonResponse(['reponse'=> false]);
        }



    }



}
