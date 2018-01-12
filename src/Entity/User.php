<?php

namespace App\Entity;

use FOS\UserBundle\Model\User as FOSUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class User
 * @package App\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends FOSUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }
}