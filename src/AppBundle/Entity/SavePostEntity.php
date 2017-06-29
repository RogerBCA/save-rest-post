<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SavePostEntity
 *
 * @ORM\Table(name="save_post_entity")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SavePostEntityRepository")
 */
class SavePostEntity
{
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
     * @ORM\Column(name="datatext", type="text")
     */
    private $datatext;


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
     * Set datatext
     *
     * @param string $datatext
     * @return SavePostEntity
     */
    public function setDatatext($datatext)
    {
        $this->datatext = $datatext;

        return $this;
    }

    /**
     * Get datatext
     *
     * @return string
     */
    public function getDatatext()
    {
        return $this->datatext;
    }
}
