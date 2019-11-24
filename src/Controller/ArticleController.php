<?php
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     *  @Route("/")
     */
    public function homepage(){
        return new Response('OMG my first page already ! ');
    }

    /**
     *  @Route("/news/{name}-{id}")
     */
    public function show($name,$id){
        $comments=[
            'li content 1 ' ,
            'li content 2 ' ,
            'li content 3 '
        ];
        //dump($name,$this);
        return $this->render("article/show.html.twig" ,[
            'title'=> ucwords(str_replace('-',' ',$name)),
            'id'=> $id,
            'comments'=>$comments
        ]);
    }
}


?>