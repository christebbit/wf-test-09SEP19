<?php

class LinkedList {

    private $start;
    private $end;
    private $count;

    function __construct() {
        $this->start = NULL;
        $this->end = NULL;
        $this->count = 0;
    }

    public function add(string $data): LinkedList {
        $newnode = new ListNode($data);

        if (null == $this->start) {
            $this->start = $newnode;
            $this->end = $newnode;
        } else {
            $last = $this->end;
            $last->next = $newnode;
            $newnode->previous = $last;
            $this->end = $newnode;
        }
        $this->count++;
        return $this;
    }

    public function readList() {
        $listData = array();
        $current = $this->start;
        while ($current != NULL) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        foreach ($listData as $v) {
            echo $v . " ";
        }
        echo PHP_EOL;
    }

    public function readListBackwards() {
        $listData = array();
        $current = $this->end;
        while ($current != NULL) {
            array_push($listData, $current->readNode());
            $current = $current->previous;
        }
        foreach ($listData as $v) {
            echo $v . " ";
        }
        echo PHP_EOL;
    }

    public function deleteNode(string $key): bool {
        $current = $this->start;
        while ($current != null) {
            if ($current->data == $key) {
                $this->removeFoundNode($current);
                return true;
            }    
        }
        
        $current = $current->next;
        
        return false;
    }

    private function removeFoundNode(ListNode $n) {
        $previous = $n->previous;
        $next = $n->next;

        if (null == $previous) {
            $previous->next = $next;
        }

        if (null == $next) {
            $next->previous = $previous;
        }
    }

}
