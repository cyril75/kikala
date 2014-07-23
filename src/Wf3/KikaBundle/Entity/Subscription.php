<?php

namespace Wf3\KikaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subscription
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Wf3\KikaBundle\Entity\SubscriptionRepository")
 */
class Subscription
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateSubscription", type="datetime")
     */
    private $dateSubscription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCancellation", type="datetime")
     */
    private $dateCancellation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isCancelled", type="boolean")
     */
    private $isCancelled;


    /********** RELATIONS **********/
    /**** VERS USER *****/
    /**
     * @var \Wf3\KikaBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="subscriptions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**** VERS TRAINING *****/
    /**
     * @var \Wf3\KikaBundle\Entity\Training
     *
     * @ORM\ManyToOne(targetEntity="Training", inversedBy="subscriptions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $training;



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
     * Set dateSubscription
     *
     * @param \DateTime $dateSubscription
     * @return Subscription
     */
    public function setDateSubscription($dateSubscription)
    {
        $this->dateSubscription = $dateSubscription;

        return $this;
    }

    /**
     * Get dateSubscription
     *
     * @return \DateTime 
     */
    public function getDateSubscription()
    {
        return $this->dateSubscription;
    }

    /**
     * Set dateCancellation
     *
     * @param \DateTime $dateCancellation
     * @return Subscription
     */
    public function setDateCancellation($dateCancellation)
    {
        $this->dateCancellation = $dateCancellation;

        return $this;
    }

    /**
     * Get dateCancellation
     *
     * @return \DateTime 
     */
    public function getDateCancellation()
    {
        return $this->dateCancellation;
    }

    /**
     * Set isCancelled
     *
     * @param boolean $isCancelled
     * @return Subscription
     */
    public function setIsCancelled($isCancelled)
    {
        $this->isCancelled = $isCancelled;

        return $this;
    }

    /**
     * Get isCancelled
     *
     * @return boolean 
     */
    public function getIsCancelled()
    {
        return $this->isCancelled;
    }

    /**
     * Set user
     *
     * @param \Wf3\KikaBundle\Entity\User $user
     * @return Subscription
     */
    public function setUser(\Wf3\KikaBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Wf3\KikaBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set training
     *
     * @param \Wf3\KikaBundle\Entity\Training $training
     * @return Subscription
     */
    public function setTraining(\Wf3\KikaBundle\Entity\Training $training)
    {
        $this->training = $training;

        return $this;
    }

    /**
     * Get training
     *
     * @return \Wf3\KikaBundle\Entity\Training 
     */
    public function getTraining()
    {
        return $this->training;
    }
}
