<?php

namespace Eloquentcoder\DatastructuresPHP;

use Eloquentcoder\DatastructuresPHP\Utils\Node;

class LinkedList
{
    public Node $head;

    public function __construct()
    {
        
    }

    public function insert($data)
    {
        if ($this->head == null) {
            $this->head = new Node($data);
            return;
        }
        $current = $this->head;
        while ($current->next != null) {
            $current = $current->next;
        }
        $current->next = new Node($data);
    }

    public function prepend($data)
    {
        $newHead = new Node($data);
        $newHead->next = $this->head;
        $this->head = $newHead;
    }

    public function deleteData($data)
    {
        if ($this->head == null) return;
        if ($this->head->data == $data) {
            $this->head = $this->head->next;
        }

        $current = $this->head;
        while ($current->next != null) {
            if ($current->next->data == $data) {
                $current->next = $this->current->next->next;
            }
            $current = $current->next;
        }
    }
}
