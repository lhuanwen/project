<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 2018/7/15
 * Time: 18:50
 */

namespace CommonBundle\Command;


use CommonBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class CreateUserCommand
 * @package CommonBundle\Command
 */
class CreateUserCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('app:create:user')
            ->setDescription('create new user')
            ->addArgument('username', InputArgument::REQUIRED)
            ->addArgument('password', InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $username = $input->getArgument('username');
        $password = $input->getArgument('password');
        $container = $this->getContainer();

        $user = new User();
        $user->setUsername($username);
        $user->setPassword($container->get('security.password_encoder')
            ->encodePassword($user, $password));

        $em = $container->get('doctrine.orm.default_entity_manager');
        $em->persist($user);
        $em->flush();

    }

}