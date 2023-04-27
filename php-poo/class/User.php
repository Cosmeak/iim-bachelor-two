<?php
require_once 'Database.php';
class User
{
    private int $id;
    private string $email;
    private string $password;
    private string $firstname;
    private string $lastname;
    private bool $admin;
    private array $pets;

    /*------------------------------------------------
     * SET FUNCTIONS
     ------------------------------------------------*/
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    public function setPassword(string $password): void
    {
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }

    public function setAdmin(int $admin): void
    {
        $this->admin = $admin;
    }

    /*------------------------------------------------
     * GET FUNCTIONS
     ------------------------------------------------*/
    public function getId(): int
    {
        return $this->id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function getAdmin(): int
    {
        return $this->admin;
    }

    /*------------------------------------------------
     * CRUD FUNCTIONS
     ------------------------------------------------*/
    public function index(): array
    {
        $users = [];
        $db = new Database();
        $request = $db->getConnection()->query('SELECT * FROM users');
        foreach ($request as $element)
        {
            $user = new User();
            $user->setId($element['id']);
            $user->setEmail($element['email']);
            $user->setPassword($element['password']);
            $user->setFirstname($element['firstname']);
            $user->setLastname($element['lastname']);
            array_push($users, $user);
        }
        return $users;
    }

    public function store(): void
    {
        $db = new Database();
        $request = $db->getConnection()->prepare('INSERT INTO users(`firstname`, `lastname`, `email`, `password`) VALUES (?,?,?,?)');
        $request->execute([$this->firstname, $this->lastname, $this->email, $this->password]);
    }

    public function show(int $id): object
    {
        $db = new Database();
        $request = $db->getConnection()->prepare('SELECT * FROM users WHERE id = ?');
        $request->execute([$id]);
        $response = $request->fetch();
        $user = new User();
        $user->setId($response['id']);
        $user->setEmail($response['email']);
        $user->setPassword($response['password']);
        $user->setFirstname($response['firstname']);
        $user->setLastname($response['lastname']);
        return $user;
    }

    public function update(object $user): void
    {
        $db = new Database();
    }

    public function destroy(int $id): void
    {
        $db = new Database();
        $request = $db->getConnection()->prepare('DELETE FROM users WHERE id = ?');
        $request->execute([$id]);
    }

    /*------------------------------------------------
     * OTHERS FUNCTIONS
     ------------------------------------------------*/
    public function login(string $email, string $password) : object
    {
        $user = new User();
        $db = new Database();
        $request = $db->getConnection()->prepare('SELECT * FROM users WHERE email = ?');
        $request->execute([$email]);
        $response = $request->fetch();
        if(password_verify($password, $response['password']) == true)
        {
            $user->setId($response['id']);
            $user->setEmail($response['email']);
            $user->setPassword($response['password']);
            $user->setFirstname($response['firstname']);
            $user->setLastname($response['lastname']);
            $user->setAdmin($response['is_admin']);
        }
        return $user;
    }

    public function getUserPets() : array
    {
        $pets = [];
        $db = new Database();
        $request = $db->getConnection()->prepare('SELECT * FROM pets WHERE user_id = ?');
        $request->execute([$this->id]);
       foreach ($request->fetchAll() as $element)
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

    public function getCompleteName(): string
    {
        return $this->lastname.' '.$this->firstname;
    }
}