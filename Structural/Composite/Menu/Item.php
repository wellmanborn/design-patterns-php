<?php

namespace DesignPatterns\Structural\Composite\Menu;


class Item implements Menu {
    private $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function render(): string
    {
        return "<li>{$this->title}</li>";
    }
}