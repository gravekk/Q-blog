<?php
/**
 * Created by PhpStorm.
 * User: maciekgrabowski
 * Date: 2019-03-23
 * Time: 08:07
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FeedController extends AbstractController
{
    /**
     * @Route("/feed", name="feed")
     */
    public function index()
    {
        return $this->render("index.html.twig",[
            'title'=>'Feed site',
        ]);
    }
    /**
     * @Route("/feed/popular", name="popular feed")
     */
    public function popular()
    {
        return $this->render("index.html.twig",[
            "title"=>"Popular feed",
        ]);
    }

    /**
     * @Route("/feed/new", name="new feed")
     */
    public function new()
    {
        return $this->render("index.html.twig",[
            "title"=>"Popular feed",
        ]);
    }
}