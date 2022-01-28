<?php

class Database
{
    private PDO $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO('mysql:host=localhost;dbname=spa', 'root', '');
        }
        catch (Exception $error) {
            die ("Error :".$error->getMessage());
        }
    }

    public function saveUser(User $user) : void
    {
        $request = $this->connection->prepare('INSERT INTO users(`firstname`, `lastname`, `email`, `password`) VALUE (?,?,?,?)');
        $request->execute([$user->firstname, $user->lastname, $user->email, password_hash($user->password, PASSWORD_BCRYPT)]);
    }

    public function getUsers() : array
    {
        $users = [];
        $request = $this->connection->query('SELECT * FROM users');
        foreach ($request as $element) {
            $user = new User($element['firstname'], $element['lastname'], $element['email'], $element['password']);
            $user->setId($element['id']);
            $user->setIsAdmin($element['is_admin']);
            array_push($users, $user);
        }
        return $users;
    }

    public function getUserbyEmail($email, $password) : object|string
    {
        $request = $this->connection->prepare('SELECT * FROM users WHERE email = ?');
        $request->execute([$email]);
        $response = $request->fetch();
        if ($response !== false)
        {
            if(password_verify($password, $response['password']) == true)
            {
                $user = new User($response['email'], $response['password'], $response['firstname'], $response['lastname']);
                $user->setId($response['id']);
                $user->setIsAdmin($response['is_admin']);
                return $user;
            }
            else
            {
                return 'Wrong password!';
            }
        }
        else
        {
            return 'Wrong email!';
        }
    }

    public function getAnimals() : array
    {
        $animals = [];
        $request = $this->connection->query('SELECT * FROM animals');
        foreach ($request as $element) {
            $animal = new Animal($element['name'], $element['category_id']);
            $animal->setId($element['id']);
            $animal->setUserId($element['user_id']);
            array_push($animals, $animal);
        }
        return $animals;
    }
}