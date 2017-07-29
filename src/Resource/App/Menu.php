<?php
namespace Koriym\Restbucks\Resource\App;

use BEAR\Resource\Annotation\Link;
use BEAR\Resource\ResourceObject;

class Menu extends ResourceObject
{
    public $body = [
        ['name' => 'coffee', 'price' => 300],
        ['name' => 'latte', 'price' => 350],
        ['name' => 'espresso', 'price' => 200],
    ];

    /**
     * Restbucks Menu
     *
     * @Link(rel="order", href="/order", method="post")
     */
    public function onGet() : ResourceObject
    {
        return $this;
    }
}
