<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Job
 *
 * @ORM\Table(name="job", indexes={@ORM\Index(name="fk_job_category_idx", columns={"category_category_id"})})
 * @ORM\Entity
 */
class Job {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=255, nullable=false)
     */
    private $company;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255, nullable=false)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=255, nullable=false)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=false)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=4000, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="how_to_apply", type="string", length=4000, nullable=false)
     */
    private $howToApply;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255, nullable=false)
     */
    private $token;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_public", type="boolean", nullable=false)
     */
    private $isPublic;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_activated", type="boolean", nullable=false)
     */
    private $isActivated;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expires_at", type="datetime", nullable=false)
     */
    private $expiresAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var \Category
     *
     * @ORM\ManyToOne(targetEntity="Category", cascade={"persist"})
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="category_category_id", referencedColumnName="category_id")
     * })
     */
    private $category;

    /**
     * Set category
     *
     * @param \FrontendBundle\Entity\Category $category
     * @return Job
     */
    public function setCategory(\FrontendBundle\Entity\Category $category = null) {
        $this->category = $category;
        return $this;
    }

    /**
     * Get category
     *
     * @return \FrontendBundle\Entity\Category
     */
    public function getCategory() {
        return $this->category;
    }

    function getJobId() {
        return $this->id;
    }

    function getType() {
        return $this->type;
    }

    function getCompany() {
        return $this->company;
    }

    function getLogo() {
        return $this->logo;
    }

    function getUrl() {
        return $this->url;
    }

    function getPosition() {
        return $this->position;
    }

    function getLocation() {
        return $this->location;
    }

    function getDescription() {
        return $this->description;
    }

    function getHowToApply() {
        return $this->howToApply;
    }

    function getToken() {
        return $this->token;
    }

    function getIsPublic() {
        return $this->isPublic;
    }

    function getIsActivated() {
        return $this->isActivated;
    }

    function getEmail() {
        return $this->email;
    }

    function getExpiresAt() {
        return $this->expiresAt;
    }

    function getCreatedAt() {
        return $this->createdAt;
    }

    function getUpdatedAt() {
        return $this->updatedAt;
    }

    function setJobId($id) {
        $this->id = $id;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setCompany($company) {
        $this->company = $company;
    }

    function setLogo($logo) {
        $this->logo = $logo;
    }

    function setUrl($url) {
        $this->url = $url;
    }

    function setPosition($position) {
        $this->position = $position;
    }

    function setLocation($location) {
        $this->location = $location;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setHowToApply($howToApply) {
        $this->howToApply = $howToApply;
    }

    function setToken($token) {
        $this->token = $token;
    }

    function setIsPublic($isPublic) {
        $this->isPublic = $isPublic;
    }

    function setIsActivated($isActivated) {
        $this->isActivated = $isActivated;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setExpiresAt(\DateTime $expiresAt) {
        $this->expiresAt = $expiresAt;
    }

    function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
    }

    function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

}
