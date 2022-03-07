<?php

namespace Eloquentcoder\DatastructuresPHP;

use Eloquentcoder\DatastructuresPHP\Utils\Node;

class Stack {
    public Node $top;

    public function __construct() {
        
    }

    public function isEmpty()
    {
        return $this->top == null;
    }

    public function peek()
    {
        if ($this->top == null) return null;
        return $this->top->data;
    }

    public function push($data)
    {
        $node = new Node($data);
        $node->next = $this->top;
        $this->top = $node;
    }

    public function pop()
    {
        $data = $this->top->data;
        $this->top = $this->top->next;
        if ($this->top == null) {
            $this->tail = null;
        }
        return $data;
    }

}
