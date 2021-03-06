<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
   // extends the controller from AbstractController to help us get shortcut for ailas
    // composer require annotantion liobary to add route before any function
    /**
     *@Route("/",name="homepage")
     */
    public function HomePage(){
      return $this->render('questions/homepage.html.twig');
    }

    /**
     * @Route("/newMessage/{slug}" )
     */
    public function newMessage($slug){
        return new Response(sprintf(
            'this is the second Route "$%s"!'
            ,$slug));
    }


    /**
     * @Route("/question/{slug}",name="display-question")
     */
    public function show($slug){
      $ansers =[
          'this is the first answer',
          'this is the Second answer',
          'this is the third answer'
      ];
        return $this->render('questions/show.html.twig',[
           'question' => ucwords(str_replace('-',' ',$slug)),
            'answers' => $ansers
        ]);
    }


}