<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//User Deprecated: The "Sensio\Bundle\FrameworkExtraBundle\Configuration\Route" annotation is deprecated since version 5.2. Use "Symfony\Component\Routing\Annotation\Route" instead.
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     *  @Route("/" , name="home")
     */
    public function homepage(){
        return $this->render('article/homepage.html.twig');
    }

    /**
     *  @Route("/news/{name}-{id}", name="show")
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