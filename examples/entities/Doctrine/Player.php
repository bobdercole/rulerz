<?php

namespace Entity\Doctrine;

/**
 * @Entity
 * @Table(name="players")
 */
class Player
{
    /**
     * @Id
     * @Column(type="text")
     */
    public $pseudo;

    /**
     * @Column(type="text")
     */
    public $fullname;

    /**
     * @Column(type="text")
     */
    public $gender;

    /**
     * @Column(type="integer")
     */
    public $age;

    /**
     * @Column(type="integer")
     */
    public $points;

    /**
     * @ManyToOne(targetEntity="Group", inversedBy="players")
     * @JoinColumn(name="group_id", referencedColumnName="id")
     */
    public $club;

    /**
     * @Embedded(class = "Address")
     */
    public $address;

    public function __construct($pseudo, $fullname, $gender, $age, $points)
    {
        $this->pseudo   = $pseudo;
        $this->fullname = $fullname;
        $this->gender   = $gender;
        $this->age      = $age;
        $this->points   = $points;
    }
}
