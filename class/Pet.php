<?php

class Pet
{
    private int $id;
    private string $name;
    private int $category;
    private int $user;

    /*------------------------------------------------
     * SET FUNCTIONS
     ------------------------------------------------*/
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setCategory(int $category): void
    {
        $this->category = $category;
    }

    public function setUser(int $user): void
    {
        $this->user = $user;
    }

    /*------------------------------------------------
     * GET FUNCTIONS
     ------------------------------------------------*/

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(string $name): string
    {
        return $this->name = $name;
    }

    public function getCategory(int $category): int
    {
        return $this->category = $category;
    }

    public function getUser(int $user): int
    {
        return $this->user = $user;
    }

    /*------------------------------------------------
     * CRUD FUNCTIONS
     ------------------------------------------------*/
    public function index(): array
    {
        $pets = [];
        $db = new Database();
        $request = $db->connect()->query('SELECT * from pets');
        foreach ($request as $element)
        {
            $pet = new Pet();
            $pet->setId($element['id']);
            $pet->setName($element['name']);
            if(isset($element['category_id'])) {
                $pet->setCategory($element['category_id']);
            }
            if(isset($element['user_id']))
            {
                $pet->setUser($element['user_id']);
            }
        }
        return $pets;
    }
}