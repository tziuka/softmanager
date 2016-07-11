<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table(name="project")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjectRepository")
 */
class Project {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="platform", type="string", length=100)
     */
    private $platform;

    /**
     * @var string
     *
     * @ORM\Column(name="package_id", type="string", length=255, nullable=true, unique=true)
     */
    private $packageId;
    
    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=20)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255, nullable=true)
     */
    private $logo;

    /**
     * @var Datetime
     *
     * @ORM\Column(name="start_date", type="datetime")
     */
    private $startDate;

    /**
     * @var Datetime
     *
     * @ORM\Column(name="deadline_date", type="datetime")
     */
    private $deadlineDate;

    /**
     * @var Datetime
     *
     * @ORM\Column(name="end_date", type="datetime")
     */
    private $endDate;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Project
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set platform
     *
     * @param string $platform
     *
     * @return Project
     */
    public function setPlatform($platform) {
        $this->platform = $platform;

        return $this;
    }

    /**
     * Get platform
     *
     * @return string
     */
    public function getPlatform() {
        return $this->platform;
    }

    /**
     * Set packageId
     *
     * @param integer $packageId
     *
     * @return Project
     */
    public function setPackageId($packageId) {
        $this->packageId = $packageId;

        return $this;
    }

    /**
     * Get packageId
     *
     * @return int
     */
    public function getPackageId() {
        return $this->packageId;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return Project
     */
    public function setLogo($logo) {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo() {
        return $this->logo;
    }


    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return Project
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set deadlineDate
     *
     * @param \DateTime $deadlineDate
     *
     * @return Project
     */
    public function setDeadlineDate($deadlineDate)
    {
        $this->deadlineDate = $deadlineDate;

        return $this;
    }

    /**
     * Get deadlineDate
     *
     * @return \DateTime
     */
    public function getDeadlineDate()
    {
        return $this->deadlineDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return Project
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set version
     *
     * @param string $version
     *
     * @return Project
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }
}
