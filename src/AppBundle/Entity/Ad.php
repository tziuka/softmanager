<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ad
 *
 * @ORM\Table(name="ad")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AdRepository")
 */
class Ad {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_account", type="integer")
     */
    private $idAccount;

    /**
     * @var int
     *
     * @ORM\Column(name="id_project", type="integer")
     */
    private $idProject;

    /**
     * @var int
     *
     * @ORM\Column(name="original_project", type="integer")
     */
    private $originalProject;

    /**
     * @var string
     *
     * @ORM\Column(name="banner", type="string", length=255)
     */
    private $banner;

    /**
     * @var string
     *
     * @ORM\Column(name="interstitial", type="string", length=255, nullable=true)
     */
    private $interstitial;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetime")
     */
    private $creationDate;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set idProject
     *
     * @param integer $idProject
     *
     * @return Ad
     */
    public function setIdProject($idProject) {
        $this->idProject = $idProject;

        return $this;
    }

    /**
     * Get idProject
     *
     * @return int
     */
    public function getIdProject() {
        return $this->idProject;
    }

    /**
     * Set idAccount
     *
     * @param integer $idAccount
     *
     * @return Ad
     */
    public function setIdAccount($idAccount) {
        $this->idAccount = $idAccount;

        return $this;
    }

    /**
     * Get idAccount
     *
     * @return int
     */
    public function getIdAccount() {
        return $this->idAccount;
    }

    /**
     * Set banner
     *
     * @param string $banner
     *
     * @return Ad
     */
    public function setBanner($banner) {
        $this->banner = $banner;

        return $this;
    }

    /**
     * Get banner
     *
     * @return string
     */
    public function getBanner() {
        return $this->banner;
    }

    /**
     * Set interstitial
     *
     * @param string $interstitial
     *
     * @return Ad
     */
    public function setInterstitial($interstitial) {
        $this->interstitial = $interstitial;

        return $this;
    }

    /**
     * Get interstitial
     *
     * @return string
     */
    public function getInterstitial() {
        return $this->interstitial;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return Ad
     */
    public function setCreationDate($creationDate) {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate() {
        return $this->creationDate;
    }

    /**
     * Set originalProject
     *
     * @param integer $originalProject
     *
     * @return Ad
     */
    public function setOriginalProject($originalProject) {
        $this->originalProject = $originalProject;

        return $this;
    }

    /**
     * Get originalProject
     *
     * @return integer
     */
    public function getOriginalProject() {
        return $this->originalProject;
    }

}
