<?php
require_once 'Database.php';
class Pet
{
    private int $id;
    private string $name;
    private int $category_id;
    private string $category;
    private int $user_id;
    private string $user;

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

    public function setCategoryId(int $category_id): void
    {
        $this->category_id = $category_id;
    }

    public function setCategory(int $category_id): void
    {
        $db = new Database();
        $request = $db->getConnection()->prepare('SELECT * FROM categories WHERE id = ?');
        $request->execute([$category_id]);
        $response = $request->fetch();
        $this->category = $response['label'];
    }

    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    public function setUser(int $user_id): void
    {
        $db = new Database();
        $request = $db->getConnection()->prepare('SELECT * FROM users WHERE id = ?');
        $request->execute([$user_id]);
        $response = $request->fetch();
        $this->user = $response['lastname'].' '.$response['firstname'];
    }

    /*------------------------------------------------
     * GET FUNCTIONS
     ------------------------------------------------*/

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function getUser(): string
    {
        return $this->user;
    }

    /*------------------------------------------------
     * CRUD FUNCTIONS
     ------------------------------------------------*/
    public function index(): array
    {
        $pets = [];
        $db = new Database();
        $request = $db->getConnection()->query('SELECT * from pets');
        foreach ($request as $element)
        {
            $pet = new Pet();
            $pet->setId($element['id']);
            $pet->setName($element['name']);
            $pet->setCategory($element['category_id']);
            $pet->setUser($element['user_id']);
            array_push($pets, $pet);
        }
        return $pets;
    }

    public function store(): void
    {
        $db = new Database();
        $request = $db->getConnection()->prepare('INSERT INTO pets(`name`, `user_id`, `category_id`) VALUES (?,?,?)');
        $request->execute([$this->name, $this->user_id, $this->category_id ]);
    }

    public function show(int $id): object
    {
        $db = new Database();
        $request = $db->getConnection()->prepare('SELECT * FROM pets where id = ?');
        $request->execute([$id]);
        $response = $request->fecth();
        $pet = new Pet();
        $pet->setId($response['id']);
        $pet->setName($response['name']);
        $pet->setCategory($response['category_id']);
        $pet->setUser($response['user_id']);
        print_r($pet);
        return $pet;
    }

    public function destroy(int $id): void
    {
        $db = new Database();
        $request = $db->getConnection()->prepare('DELETE FROM pets WHERE id = ?');
        $request->execute([$id]);
    }
}