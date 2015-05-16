<?php
/**
 * Created by PhpStorm.
 * User: ALEXIS
 * Date: 15/05/15
 * Time: 23:17
 */
namespace OC\PlatformBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class AdvertController extends Controller {
      public function indexAction()
      {
            return $this->render('OCPlatformBundle:Advert:index.html.twig',
                    array('name' => 'ZINSOU'));
      }
} 