<?php

class todo
{
    public $id = null;
    public $description = '';
    public $createdAt = 0;
    public $completed = false;

    function __construct ( $id, string $description, int $createdAt, bool $completed = false )
    {
        $this->id = $id;
        $this->description = $description;
        $this->createdAt = $createdAt;
        $this->completed = $completed;
    }
}