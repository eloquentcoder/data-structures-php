<?php 

namespace Eloquentcoder\DatastructuresPHP;

use Eloquentcoder\DatastructuresPHP\Utils\Node;

class Queue {
    public Node $tail;
    public Node $head;

    public function isEmpty()
    {
        return $this->head == null;
    }

    public function peek()
    {
        if ($this->head == null) return null;
        return $this->head->data;
    }

    public function insert($data)
    {
        $node = new Node($data);

        if ($this->tail != null) {
            return $this->tail->next = $node;
        }

        if ($this->head == null) {
            return $this->head = new $node;
        }
        $this->tail = $node;
    }

    public function remove()
    {
        $data = $this->head->data;
        $this->head = $this->head->next;
        if ($this->head == null) {
            $this->tail = null;
        }
        return $data;
    }

}