<?php

namespace Wf3\KikaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Training
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Wf3\KikaBundle\Entity\TrainingRepository")
 */
class Training
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255)
     */
    private $img;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="beginDate", type="date")
     */
    private $beginDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="beginHours", type="time")
     */
    private $beginHours;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreated", type="datetime")
     */
    private $dateCreated;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=255)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var integer
     *
     * @ORM\Column(name="postalCd", type="integer")
     */
    private $postalCd;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;

    /**
     * @var integer
     *
     * @ORM\Column(name="trainingTime", type="integer")
     */
    private $trainingTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="numberPlaces", type="integer")
     */
    private $numberPlaces;

    /**
     * @var integer
     *
     * @ORM\Column(name="numberStudent", type="integer")
     */
    private $numberStudent;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;



    /********** RELATIONS **********/
    /**** VERS USER *****/
    /**
     * @var \Wf3\KikaBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="teachedTraining")
     * @ORM\JoinColumn(nullable=false)
     */
    private $coach;

    /**** VERS SUBSCRIPTION *****/
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Subscription", mappedBy="training")
     */
    private $subscriptions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->subscriptions = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**** VERS CATEGORY *****/
    /**
     * @var \Wf3\KikaBundle\Entity\Category
     *
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="training")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;


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
     * Set title
     *
     * @param string $title
     * @return Training
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set img
     *
     * @param string $img
     * @return Training
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
     * Set beginDate
     *
     * @param \DateTime $beginDate
     * @return Training
     */
    public function setBeginDate($beginDate)
    {
        $this->beginDate = $beginDate;

        return $this;
    }

    /**
     * Get beginDate
     *
     * @return \DateTime 
     */
    public function getBeginDate()
    {
        return $this->beginDate;
    }

    /**
     * Set beginHours
     *
     * @param \DateTime $beginHours
     * @return Training
     */
    public function setBeginHours($beginHours)
    {
        $this->beginHours = $beginHours;

        return $this;
    }

    /**
     * Get beginHours
     *
     * @return \DateTime 
     */
    public function getBeginHours()
    {
        return $this->beginHours;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     * @return Training
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
     * Set description
     *
     * @param string $description
     * @return Training
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return Training
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Training
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set postalCd
     *
     * @param integer $postalCd
     * @return Training
     */
    public function setPostalCd($postalCd)
    {
        $this->postalCd = $postalCd;

        return $this;
    }

    /**
     * Get postalCd
     *
     * @return integer 
     */
    public function getPostalCd()
    {
        return $this->postalCd;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Training
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set trainingTime
     *
     * @param integer $trainingTime
     * @return Training
     */
    public function setTrainingTime($trainingTime)
    {
        $this->trainingTime = $trainingTime;

        return $this;
    }

    /**
     * Get trainingTime
     *
     * @return integer 
     */
    public function getTrainingTime()
    {
        return $this->trainingTime;
    }

    /**
     * Set numberPlaces
     *
     * @param integer $numberPlaces
     * @return Training
     */
    public function setNumberPlaces($numberPlaces)
    {
        $this->numberPlaces = $numberPlaces;

        return $this;
    }

    /**
     * Get numberPlaces
     *
     * @return integer 
     */
    public function getNumberPlaces()
    {
        return $this->numberPlaces;
    }

    /**
     * Set numberStudent
     *
     * @param integer $numberStudent
     * @return Training
     */
    public function setNumberStudent($numberStudent)
    {
        $this->numberStudent = $numberStudent;

        return $this;
    }

    /**
     * Get numberStudent
     *
     * @return integer 
     */
    public function getNumberStudent()
    {
        return $this->numberStudent;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Training
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set coach
     *
     * @param \Wf3\KikaBundle\Entity\User $coach
     * @return Training
     */
    public function setCoach(\Wf3\KikaBundle\Entity\User $coach = null)
    {
        $this->coach = $coach;

        return $this;
    }

    /**
     * Get coach
     *
     * @return \Wf3\KikaBundle\Entity\User 
     */
    public function getCoach()
    {
        return $this->coach;
    }


    /**
     * Add subscriptions
     *
     * @param \Wf3\KikaBundle\Entity\Subscription $subscriptions
     * @return Training
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
     * Set category
     *
     * @param \Wf3\KikaBundle\Entity\Category $category
     * @return Training
     */
    public function setCategory(\Wf3\KikaBundle\Entity\Category $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Wf3\KikaBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
}
