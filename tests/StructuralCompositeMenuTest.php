<?php

declare(strict_types=1);

use DesignPatterns\Structural\Composite\Menu\Category;
use DesignPatterns\Structural\Composite\Menu\Item;
use PHPUnit\Framework\TestCase;

class StructuralCompositeMenuTest extends TestCase{

    public function testMenuRender(){
        $menu = new Category("About us");
        $menu->add(new Item("Contact Us"));
        $menu->add(new Item("Our Vision"));

        $embed = new Category("About Company");
        $embed->add(new Item("Jobs"));
        $embed->add(new Item("Customers"));

        $menu->add($embed);

        $this->assertSame("<ul>About us<li>Contact Us</li><li>Our Vision</li><ul>About Company<li>Jobs</li><li>Customers</li></ul></ul>",
            $menu->render());

    }

}