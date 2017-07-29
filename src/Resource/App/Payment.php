<?php
namespace Koriym\Restbucks\Resource\App;

use BEAR\Resource\Annotation\Link;
use BEAR\Resource\ResourceObject;

class Payment extends ResourceObject
{
    /**
     * Payment for the drink
     *
     * @param string $name drink to order
     */
    public function onPut(string $id, string $card_no, string $expires, string $members_card_numer) : ResourceObject
    {
        $this->code = 201;
        $this->headers['Location'] = '/order/?id=1';

        return $this;
    }
}
