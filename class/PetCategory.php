<?php
require_once 'Database.php';
class PetCategory
{
    private int $id;
    private string $label;

    /*------------------------------------------------
     * SET FUNCTIONS
     ------------------------------------------------*/
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /*------------------------------------------------
     * GET FUNCTIONS
     ------------------------------------------------*/
    public function getId(): int
    {
        return $this->id;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    /*------------------------------------------------
     * CRUD FUNCTIONS
     ------------------------------------------------*/
    public function index(): array
    {
        $categories = [];
        $db = new Database();
        $request = $db->getConnection()->query('SELECT * FROM categories');
        foreach ($request as $category)
        {
            $petCategory = new PetCategory();
            $petCategory->setId($category['id']);
            $petCategory->setLabel($category['label']);
            array_push($categories, $petCategory);
        }
        return $categories;
    }

    public function store(): void
    {
        $db = new Database();
        $request = $db->getConnection()->prepare('INSERT INTO categories (label) VALUE(?)');
        $request->execute([$this->label]);
    }
}