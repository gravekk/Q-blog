<?php
/**
 * Created by PhpStorm.
 * User: maciekgrabowski
 * Date: 2019-03-22
 * Time: 23:06
 */

namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function index()
    {
        return $this->render("index.html.twig",[
            "title"=>"Index site",
        ]);
    }
}