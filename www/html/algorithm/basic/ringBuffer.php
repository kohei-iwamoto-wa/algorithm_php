<?php
class ringBuffer {
    private $buf = [];
    private $top;
    private $bottom;
    private $size;

    public function __construct($size) 
    {
        $this->size = $size;
        $this->buf = array_fill(0, $size, null);
        $this->top = 0;
        $this->bottom = -1;
    }

    public function get($index) 
    {
        $i = ($this->top + $index) % $this->size;
        return $this->buf[$i];
    }

    public function set($index, $v)
    {
        $i = ($this->top + $index) % $this->size;
        $this->buf[$i] = $v;
    }

    public function append($v)
    {
        $this->button = ($this->bottom + 1) % $this->size;
        $this->buf[$this->bottom] = $v;
        if ($this->top >= $this->bottom) {
            $this->top = $this->bottom + 1;
        }
    }
}