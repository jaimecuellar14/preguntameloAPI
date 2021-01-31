<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $user = new User();
        $user->setFirstName('Luis');
        $user->setLastName('Villanueva');
        $user->setPhoneNumber(24407069);
        $user->setEmail('random@gmail.com');
        $user->setPassword($this->passwordEncoder->encodePassword($user, '123'));

        $manager->persist($user);

        $manager->flush();
    }
}
