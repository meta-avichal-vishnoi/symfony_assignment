<?php 
namespace AppBundle\Entity;  

class EmployeeForm 
{    
   private $empFirstName;
   private $empLastName; 
   private $empId; 
   private $address; 
   public $gender; 
   private $email; 
   
   public function getEmpFirstName() 
   { 
      return $this->empFirstName; 
   }  
   public function setEmpFirstName($empFirstName) 
   { 
      $this->empFirstName = $empFirstName; 
   }  

   public function getEmpLastName() 
   { 
      return $this->empLastName; 
   }  
   public function setEmpLastName($empLastName) 
   { 
      $this->empLastName = $empLastName; 
   } 
   
   public function getEmpId() 
   { 
      return $this->empId; 
   }  
   public function setStudentId($empId) 
   { 
      $this->empId = $empId; 
   }

   public function getAddress() 
   { 
      return $this->address; 
   }  
   public function setAddress($address) 
   { 
      $this->address = $address; 
   }  

   public function getEmail() 
   { 
      return $this->email; 
   }  
   public function setEmail($email) 
   { 
      $this->email = $email; 
   }  
}