<?php

namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;

trait MainMenuTrait
{
    public function mainMenu(
        FactoryInterface $factory,
        array            $options
    ) {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', ['route' => 'default']);
        $menu->addChild('Person', ['route' => 'person_list']);

        return $menu;
    }
}
