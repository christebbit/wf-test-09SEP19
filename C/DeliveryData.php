<?php

class DeliveryData {

    public $source;
    public $destination;
    public $number;

    public function __construct(string $source, string $destination, int $number) {
        $this->source = $source;
        $this->destination = $destination;
        $this->number = $number;
    }

}
