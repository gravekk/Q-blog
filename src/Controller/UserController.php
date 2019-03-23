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

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
public function index()
{
    return $this->render("index.html.twig", [
        'title'=>'User site',
    ]);
}

    /**
     * @Route("/user/login", name="login")
     */
public function login()
{
    return $this->render("index.html.twig", [
    'title'=>'Login site',
]);
}

    /**
     * @Route("/user/register", name="register")
     */
public function register()
{
    return $this->render("index.html.twig",[
        'title'=>"Register site",
    ]);
}

    /**
     * @Route("/user/change-password", name="changePassowrd")
     */
public function changepass()
{
    return $this->render("index.html.twig",[
        'title'=>'Change Password',
    ]);
}
    /**
     * @Route("/user/logout", name="logout")
     */
    public function logout()
    {
        return $this->render("index.html.twig",[
            'title'=>'Logout',
        ]);
    }

}