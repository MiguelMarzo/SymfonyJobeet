<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity
 */
class Category
{
    /**
     * @var integer
     *
     * @ORM\Column(name="category_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $category_id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->affiliateAffiliate = new \Doctrine\Common\Collections\ArrayCollection();
    }

    function getCategoryId() {
        return $this->category_id;
    }

    function getName() {
        return $this->name;
    }

    function setCategoryId($categoryId) {
        $this->category_id = $categoryId;
    }

    function setName($name) {
        $this->name = $name;
    }
}

