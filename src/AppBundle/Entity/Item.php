<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 *
 * @ORM\Table(name="item")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ItemRepository")
 */
class Item
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
     * @ORM\Column(name="tindex", type="string", length=4)
     */
    private $tindex;

    /**
     * @var string
     *
     * @ORM\Column(name="tindex_start_at", type="string", length=4)
     */
    private $tindexStartAt;

    /**
     * @var string
     *
     * @ORM\Column(name="tinteger", type="string", length=30)
     */
    private $tinteger;

    /**
     * @var string
     *
     * @ORM\Column(name="tfloat", type="string", length=10)
     */
    private $tfloat;

    /**
     * @var string
     *
     * @ORM\Column(name="tname", type="string", length=255)
     */
    private $tname;

    /**
     * @var string
     *
     * @ORM\Column(name="tsurname", type="string", length=255)
     */
    private $tsurname;

    /**
     * @var string
     *
     * @ORM\Column(name="tfullname", type="string", length=255)
     */
    private $tfullname;

    /**
     * @var string
     *
     * @ORM\Column(name="temail", type="string", length=255)
     */
    private $temail;

    /**
     * @var string
     *
     * @ORM\Column(name="tbool", type="string", length=5)
     */
    private $tbool;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tindex
     *
     * @param string $tindex
     *
     * @return Item
     */
    public function setTindex($tindex)
    {
        $this->tindex = $tindex;

        return $this;
    }

    /**
     * Get tindex
     *
     * @return string
     */
    public function getTindex()
    {
        return $this->tindex;
    }

    /**
     * Set tindexStartAt
     *
     * @param string $tindexStartAt
     *
     * @return Item
     */
    public function setTindexStartAt($tindexStartAt)
    {
        $this->tindexStartAt = $tindexStartAt;

        return $this;
    }

    /**
     * Get tindexStartAt
     *
     * @return string
     */
    public function getTindexStartAt()
    {
        return $this->tindexStartAt;
    }

    /**
     * Set tinteger
     *
     * @param string $tinteger
     *
     * @return Item
     */
    public function setTinteger($tinteger)
    {
        $this->tinteger = $tinteger;

        return $this;
    }

    /**
     * Get tinteger
     *
     * @return string
     */
    public function getTinteger()
    {
        return $this->tinteger;
    }

    /**
     * Set tfloat
     *
     * @param string $tfloat
     *
     * @return Item
     */
    public function setTfloat($tfloat)
    {
        $this->tfloat = $tfloat;

        return $this;
    }

    /**
     * Get tfloat
     *
     * @return string
     */
    public function getTfloat()
    {
        return $this->tfloat;
    }

    /**
     * Set tname
     *
     * @param string $tname
     *
     * @return Item
     */
    public function setTname($tname)
    {
        $this->tname = $tname;

        return $this;
    }

    /**
     * Get tname
     *
     * @return string
     */
    public function getTname()
    {
        return $this->tname;
    }

    /**
     * Set tsurname
     *
     * @param string $tsurname
     *
     * @return Item
     */
    public function setTsurname($tsurname)
    {
        $this->tsurname = $tsurname;

        return $this;
    }

    /**
     * Get tsurname
     *
     * @return string
     */
    public function getTsurname()
    {
        return $this->tsurname;
    }

    /**
     * Set tfullname
     *
     * @param string $tfullname
     *
     * @return Item
     */
    public function setTfullname($tfullname)
    {
        $this->tfullname = $tfullname;

        return $this;
    }

    /**
     * Get tfullname
     *
     * @return string
     */
    public function getTfullname()
    {
        return $this->tfullname;
    }

    /**
     * Set temail
     *
     * @param string $temail
     *
     * @return Item
     */
    public function setTemail($temail)
    {
        $this->temail = $temail;

        return $this;
    }

    /**
     * Get temail
     *
     * @return string
     */
    public function getTemail()
    {
        return $this->temail;
    }

    /**
     * Set tbool
     *
     * @param string $tbool
     *
     * @return Item
     */
    public function setTbool($tbool)
    {
        $this->tbool = $tbool;

        return $this;
    }

    /**
     * Get tbool
     *
     * @return string
     */
    public function getTbool()
    {
        return $this->tbool;
    }
}

