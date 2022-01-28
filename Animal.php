<?php

class Animal
{
    public string $id;
    public string $name;
    public string $category_id;
    public string $user_id;

    public function __construct($name, $category_id)
    {
        $this->name = $name;
        $this->category_id = $category_id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param string $user_id
     */
    public function setUserId(string $user_id): void
    {
        $this->user_id = $user_id;
    }

    public function getDetails(): string
    {
        return $this->name.' => '.$this->user_id;
    }
}