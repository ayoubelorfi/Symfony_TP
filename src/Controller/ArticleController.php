<?php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
//User Deprecated: The "Sensio\Bundle\FrameworkExtraBundle\Configuration\Route" annotation is deprecated since version 5.2. Use "Symfony\Component\Routing\Annotation\Route" instead.
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
//use Twig\Environment;

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
    //public function show($name,$id ,Environment $environment)
    public function show($name,$id ){
        $comments=[
            'li content 1 ' ,
            'li content 2 ' ,
            'li content 3 '
        ];
        //$html = $environment->render("article/show.html.twig" ,[
        return $this->render("article/show.html.twig" ,[
            'title'=> ucwords(str_replace('-',' ',$name)),
            'id'=> $id,
            'name'=> $name,
            'comments'=>$comments
        ]);
        //return new Response($html);
    }
    /**
     *  @Route("/news/{name}-{id}/like ", name="article_Like" , methods={"POST"})
     */
    public function  articleLike($name ,LoggerInterface $logger){
        // TODO - like/unlike the article
        $logger->info('like clicked');
        return new JsonResponse(['likes'=> rand(5,100)]);
    }
}


?>