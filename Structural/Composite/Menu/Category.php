<?php

namespace DesignPatterns\Structural\Composite\Menu;


class Category implements Menu {
    private $title;
    private $menus = [];

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function add(Menu $menu){
        $this->menus[] = $menu;
    }

    public function render(): string
    {
        $response = "<ul>" . $this->title;
        foreach ($this->menus as $menu)
            $response .= $menu->render();
        $response .= "</ul>";
        return $response;
    }
}