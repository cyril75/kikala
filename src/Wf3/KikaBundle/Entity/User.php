<?php

namespace Wf3\KikaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table("kika_user")
 * @ORM\Entity(repositoryClass="Wf3\KikaBundle\Entity\UserRepository")
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="Veuillez indiquer votre nom !")
     *
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string", length=255)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255, nullable=true)
     */
    private $img;

    /**
     * @var \Date
     *
     * @ORM\Column(name="yearOfBirth", type="date")
     */
    private $yearOfBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255)
     */
    private $token;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=1)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="job", type="string", length=255)
     */
    private $job;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptAsTrainer", type="text")
     */
    private $descriptAsTrainer;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptAsStudent", type="text")
     */
    private $descriptAsStudent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreated", type="datetime")
     */
    private $dateCreated;

    /**
     * @var integer
     *
     * @ORM\Column(name="kikos", type="integer")
     */
    private $kikos;



    /********** RELATIONS **********/
    /**** VERS ROLE *****/
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Role")
     */
    private $roles;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->roles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**** VERS SUBSCRIPTION *****/
    /**
     * @var \Wf3\KikaBundle\Entity\Subscription
     *
     * @ORM\OneToMany(targetEntity="Subscription", mappedBy="user")
     */
    private $subscriptions;
    

    /**** VERS TRAINING *****/
    /**
     * @var \Wf3\KikaBundle\Entity\Training
     *
     * @ORM\OneToMany(targetEntity="Training", mappedBy="coach")
     */
    private $teachedTraining;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     * @return User
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string 
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set img
     *
     * @param string $img
     * @return User
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string 
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set yearOfBirth
     *
     * @param \Date $yearOfBirth
     * @return User
     */
    public function setYearOfBirth($yearOfBirth)
    {
        $this->yearOfBirth = $yearOfBirth;

        return $this;
    }

    /**
     * Get yearOfBirth
     *
     * @return \Date 
     */
    public function getYearOfBirth()
    {
        return $this->yearOfBirth;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
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
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return User
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string 
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set job
     *
     * @param string $job
     * @return User
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return string 
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set descriptAsTrainer
     *
     * @param string $descriptAsTrainer
     * @return User
     */
    public function setDescriptAsTrainer($descriptAsTrainer)
    {
        $this->descriptAsTrainer = $descriptAsTrainer;

        return $this;
    }

    /**
     * Get descriptAsTrainer
     *
     * @return string 
     */
    public function getDescriptAsTrainer()
    {
        return $this->descriptAsTrainer;
    }

    /**
     * Set descriptAsStudent
     *
     * @param string $descriptAsStudent
     * @return User
     */
    public function setDescriptAsStudent($descriptAsStudent)
    {
        $this->descriptAsStudent = $descriptAsStudent;

        return $this;
    }

    /**
     * Get descriptAsStudent
     *
     * @return string 
     */
    public function getDescriptAsStudent()
    {
        return $this->descriptAsStudent;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     * @return User
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime 
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set kikos
     *
     * @param integer $kikos
     * @return User
     */
    public function setKikos($kikos)
    {
        $this->kikos = $kikos;

        return $this;
    }

    /**
     * Get kikos
     *
     * @return integer 
     */
    public function getKikos()
    {
        return $this->kikos;
    }


    /**
     * Add roles
     *
     * @param \Wf3\KikaBundle\Entity\Role $roles
     * @return User
     */
    public function addRole(\Wf3\KikaBundle\Entity\Role $roles)
    {
        $this->roles[] = $roles;

        return $this;
    }

    /**
     * Remove roles
     *
     * @param \Wf3\KikaBundle\Entity\Role $roles
     */
    public function removeRole(\Wf3\KikaBundle\Entity\Role $roles)
    {
        $this->roles->removeElement($roles);
    }

    /**
     * Get roles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Add subscriptions
     *
     * @param \Wf3\KikaBundle\Entity\Subscription $subscriptions
     * @return User
     */
    public function addSubscription(\Wf3\KikaBundle\Entity\Subscription $subscriptions)
    {
        $this->subscriptions[] = $subscriptions;

        return $this;
    }

    /**
     * Remove subscriptions
     *
     * @param \Wf3\KikaBundle\Entity\Subscription $subscriptions
     */
    public function removeSubscription(\Wf3\KikaBundle\Entity\Subscription $subscriptions)
    {
        $this->subscriptions->removeElement($subscriptions);
    }

    /**
     * Get subscriptions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }

    /**
     * Add teachedTraining
     *
     * @param \Wf3\KikaBundle\Entity\Training $teachedTraining
     * @return User
     */
    public function addTeachedTraining(\Wf3\KikaBundle\Entity\Training $teachedTraining)
    {
        $this->teachedTraining[] = $teachedTraining;

        return $this;
    }

    /**
     * Remove teachedTraining
     *
     * @param \Wf3\KikaBundle\Entity\Training $teachedTraining
     */
    public function removeTeachedTraining(\Wf3\KikaBundle\Entity\Training $teachedTraining)
    {
        $this->teachedTraining->removeElement($teachedTraining);
    }

    /**
     * Get teachedTraining
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTeachedTraining()
    {
        return $this->teachedTraining;
    }
}
