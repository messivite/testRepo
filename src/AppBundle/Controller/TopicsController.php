<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Topics;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Console\Event\ConsoleTerminateEvent;
use Symfony\Component\Console\ConsoleEvents;



class TopicsController extends Controller
{


  /**
   * @Route("/", name="topic_list")
   */
  public function listAction(Request $request)
  {
      $getTodayTopics = $this->getDoctrine()
               ->getRepository( 'AppBundle:Topics' )
               ->findAll();


      $studentList = $this->getDoctrine()
               ->getRepository( 'AppBundle:Students' )
               ->findAll();
      return $this->render('topics/index.html.twig', array('todayTopics' => $getTodayTopics, 'studentList' => $studentList ));
  }

  /**
   * Matches /student/*
   *
   * @Route("/student/{id}", name="student_show")
   */
  public function showAction($id)
  {
    // real time islemler icin ogrenci id 1 olarak aldim.

    if($id > 0 ) {

      $studentData = $this->getDoctrine()
               ->getRepository( 'AppBundle:Students' )
               ->find($id);

      return $this->render('topics/student.html.twig',array('studentData' => $studentData));
    }else{
      return $this->render('topics/error.html.twig'); //error page goster log at
    }


  }


}
