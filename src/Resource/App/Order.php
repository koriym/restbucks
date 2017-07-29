<?php
namespace Koriym\Restbucks\Resource\App;

use BEAR\Resource\Annotation\Link;
use BEAR\Resource\ResourceObject;

class Order extends ResourceObject
{
    /**
     * Get order information
     *
     * @param string $id
     *
     * @Link(rel="payment", href="/payment{?order_id}")
     *
     * @param string $id order id
     */
    public function onGet(string $id)
    {
        $this->body = [
            'order_id' => $id,
            'item' => 'coffee',       // by id
            'extra' => 'shot',
        ];

        return $this;
    }

    /**
     * Create order
     *
     * @param string $name item to order
     */
    public function onPost(string $name) : ResourceObject
    {
        $this->code = 201;
        $this->headers['Location'] = '/order/?id=123';

        return $this;
    }

    /**
     * Add extra stuff
     *
     * @param string $id    orider id to modifey
     * @param string $extra item to add
     *
     * @return $this
     */
    public function onPut(string $id, string $extra)
    {
        $this->code = 100;

        return $this;
    }
}
