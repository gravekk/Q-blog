<?php
/**
 * Created by PhpStorm.
 * User: maciekgrabowski
 * Date: 2019-03-23
 * Time: 08:07
 */

namespace App\Controller;


use App\Entity\Feed;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;


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
    public function new(Request $request)
    {

        $feed = new Feed();
        $form = $this->createFormBuilder($feed)
            ->add('name',TextType::class)
            ->add('text', TextType::class)
            ->add('photo', FileType::class)
            ->getForm();
        $form->handleRequest($request);

        return $this->render("feed/feed.html.twig",[
            "FeedForm"=> $form->createView(),
            "title"=>"New feed",
        ]);
    }
}