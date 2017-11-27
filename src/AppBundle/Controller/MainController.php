<?php
/**
 * Created by PhpStorm.
 * User: Sofyann
 * Date: 22/11/2017
 * Time: 08:44
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function homepageAction(){
        return $this->render('main/hompage.html.twig');
    }
}