<?php

class ListNode {
    
    public $data;
    public $next;
    public $previous;
    
    function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
        $this->previous = NULL;
    }

    function readNode()
    {
        return $this->data;
    }
}
