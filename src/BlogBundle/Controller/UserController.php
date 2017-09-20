<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use BlogBundle\Entity\Users;
use BlogBundle\Form\UsersType;

class UserController extends Controller
{

    private $session;

    public function __construct(){
        $this->session = new Session();
    }

    public function indexAction(){
    }
    
    public function loginAction(Request $request){
        $authenticationUtils = $this->get("security.authentication_utils");
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        $user = new Users();
        $form = $this->createForm(UsersType::class,$user);

        $form->handleRequest($request);
        
        if($form->isSubmitted()){
            if($form->isValid()){
                // verificar email en la base de datos
                $em = $this->getDoctrine()->getManager();
                $user_repo = $em->getRepository("BlogBundle:Users");
                $user = $user_repo->findOneBy(array("email"=>$form->get("email")->getData()));

                if(count($user) == 0){
                    $user = new Users();
                    $user->setName($form->get("name")->getData());
                    $user->setSurname($form->get("surname")->getData());
                    $user->setEmail($form->get("email")->getData());
    
                    // bcrypt password
                    $factory = $this->get("security.encoder_factory");
                    $encoder = $factory->getEncoder($user);
                    $password = $encoder->encodePassword($form->get("password")->getData(),$user->getSalt());
    
                    $user->setPassword($password);
                    $user->setRole("ROLE_USER");
                    $user->setImage(null);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($user);
                    $flush = $em->flush();
    
                    if($flush==null){
                        $status = "correcto";
                    }else{
                        $status = "incorrecto";
                    }
    
                    $status = "El usuario se ha registrado correctamente";
                }else{
                    $status = "El usuario ya existe!";
                }
            }else{
                $status = "No te has registrado";
            }

            $this->session->getFlashBag()->add("status",$status);

        }    

        return $this->render("BlogBundle:User:login.html.twig",array(
            "error"=>$error,
            'form'=> $form->createView(),
            "lastUsername"=>$lastUsername,
        ));
    }

}
