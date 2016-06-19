<?php

namespace Fos_UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="tuto_user")
*/

class Fos_UserBundle extends Bundle
{
	/**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
   protected $id;

    public function __construct()
   {
       //parent::__construct();
       // your own logic
   }
}
