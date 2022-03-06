<?php

namespace Eloquentcoder\DatastructuresPHP;

use Eloquentcoder\DatastructuresPHP\Utils\SinglyLinkedListNode;

class SinglyLinkedList {
    public SinglyLinkedListNode $head;

    public function __construct($data) {
        $this->data = $data;
    }

    public function insert($data)
    {
        if ($this->head == null) {
            $this->head = new SinglyLinkedListNode($data);
            return;
        }
        $current = $this->head;
        while ($current->next != null) {
            $current = $current->next;
        }
        $current->next = new SinglyLinkedListNode($data);
    }

    public function prepend($data)
    {
        $newHead = new SinglyLinkedListNode($data);
        $newHead->next = $this->head;
        $this->head = $newHead;
    }

    public function deleteData($data)
    {
        if ($this->head == null) return;
        if($this->head->data == $data) {
            $this->head = $this->head->next;
        } 

        $current = $this->head;
        while($current->next != null) {
            if ($current->next->data == $data) {
                $current->next = $this->current->next->next;
            }
            $current = $current->next;
        }
    }

}