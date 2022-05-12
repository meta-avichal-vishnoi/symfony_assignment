<?php  
namespace AppBundle\Entity;  

use Doctrine\ORM\Mapping as ORM;  
/** 
   * @ORM\Entity 
   * @ORM\Table(name = "employee") 
*/ 
class Employee { 
   /** 
      * @ORM\Column(type = "integer") 
      * @ORM\Id 
      * @ORM\GeneratedValue(strategy = "AUTO") 
   */ 
   private $id;  
    
   /** 
      * @ORM\Column(type = "string", length = 50) 
   */ 
   private $first_name; 
   
   /** 
      * @ORM\Column(type = "string", length = 50) 
   */ 
  private $last_name; 

  /** 
      * @ORM\Column(type = "string", length = 50) 
   */ 
  private $email;
   
   /** 
     * @ORM\Column(type = "text") 
     */ 
   private $address; 

   

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Employee
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Employee
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set id
     *
     * @param string $id
     *
     * @return Employee
     */
    public function setid($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getid()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Employee
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Employee
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }
}
