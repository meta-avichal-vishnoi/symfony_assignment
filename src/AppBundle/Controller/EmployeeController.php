<?php  
namespace AppBundle\Controller;  

use AppBundle\Entity\EmployeeForm; 
use AppBundle\Entity\Employee; 
use AppBundle\Form\FormValidationType; 

use Symfony\Bundle\FrameworkBundle\Controller\Controller; 
use Symfony\Component\HttpFoundation\Request; 
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route; 

use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\Form\Extension\Core\Type\TextType; 
use Symfony\Component\Form\Extension\Core\Type\SubmitType; 
use Symfony\Component\Form\Extension\Core\Type\ChoiceType; 
use Symfony\Component\Form\Extension\Core\Type\EmailType; 
use Symfony\Component\Form\Extension\Core\Type\ButtonType; 
use Symfony\Component\Form\Extension\Core\Type\TextareaType; 
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;  

class EmployeeController extends Controller {    
   /** 
      * @Route("/Employee/index") 
   */ 
   public function newAction(Request $request) 
   {  
      $emp = new Employee(); 
      $form = $this->createFormBuilder($emp) 
         ->add('first_name', TextType::class)
         ->add('last_name', TextType::class)
         ->add('id', TextType::class)  
         ->add('address', TextareaType::class) 
         ->add('email', EmailType::class) 
         ->add('save', SubmitType::class, array('label' => 'Submit')) 
         ->getForm();  

         
      $emp->setFirstName('Avichal'); 
      $emp->setLastName('Vishnoi'); 
      $emp->setAddress('12 north street');
         $doct = $this->getDoctrine()->getManager();
      
      // tells Doctrine you want to save the Product 
      // $doct->persist($stud);
      
      //executes the queries (i.e. the INSERT query) 
      $doct->flush();
         return $this->render('Employee/index.html.twig', array( 
            'form' => $form->createView(), 
         )); 
   } 

   /** 
   * @Route("/Employee/display") 
   */ 
   public function displayAction() 
   { 
      $emp = $this->getDoctrine() 
      ->getRepository('AppBundle:Employee') 
      ->findAll();
      return $this->render('employee/display.html.twig', array('data' => $emp)); 
   }
}