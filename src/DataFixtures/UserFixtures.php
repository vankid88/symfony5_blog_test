<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder) {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setFullName("Van Kid1");
        $user->setPhone("0931686678");
        $user->setEmail("vankid0208@gmail.com");
        $user->setRoles(['ROLE_ADMIN', 'ROLE_USER']);
        $user->setPassword($this->passwordEncoder->encodePassword(
            $user, 
            'tuyen2012'
        ));

        $manager->persist($user);
        $manager->flush();
    }
}
