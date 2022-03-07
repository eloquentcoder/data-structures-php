<?php

namespace Eloquentcoder\DatastructuresPHP;

use Eloquentcoder\DatastructuresPHP\Utils\LinkedListNode;

class LinkedList
{
    public LinkedListNode $head;

    public function __construct()
    {
        
    }

    public function insert($data)
    {
        if ($this->head == null) {
            $this->head = new LinkedListNode($data);
            return;
        }
        $current = $this->head;
        while ($current->next != null) {
            $current = $current->next;
        }
        $current->next = new LinkedListNode($data);
    }

    public function prepend($data)
    {
        $newHead = new LinkedListNode($data);
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
