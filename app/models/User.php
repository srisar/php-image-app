<?php

namespace ImageApp\Models;

use ImageApp\Core\Database;
use PDO;

class User implements AbstractModel
{

    /** @var int */
    private $id;
    /** @var string */
    private $username;
    /** @var string */
    private $first_name;
    /** @var string */
    private $last_name;
    /** @var string */
    private $password_string;
    /** @var string */
    private $password;
    /** @var string */
    private $created_at;
    /** @var string */
    private $updated_at;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return User
     */
    public function setId(int $id): User
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return User
     */
    public function setUsername(string $username): User
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    /**
     * @param string $first_name
     * @return User
     */
    public function setFirstName(string $first_name): User
    {
        $this->first_name = $first_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->last_name;
    }

    /**
     * @param string $last_name
     * @return User
     */
    public function setLastName(string $last_name): User
    {
        $this->last_name = $last_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getPasswordString(): string
    {
        return $this->password_string;
    }

    /**
     * @param string $password_string
     * @return User
     */
    public function setPasswordString(string $password_string): User
    {
        $this->password_string = $password_string;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return User
     */
    public function setPassword(string $password): User
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->created_at;
    }


    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }

    /**
     * @param string $updated_at
     * @return User
     */
    public function setUpdatedAt(string $updated_at): User
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    public function getFullName(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public static function find(int $id): User
    {

        $db = Database::get_instance();
        $statement = $db->prepare("SELECT * FROM users WHERE id=?");
        $statement->execute([$id]);

        return $statement->fetchObject(User::class);

    }

    /**
     * @return User[]
     */
    public static function all(): array
    {
        $db = Database::get_instance();
        $statement = $db->prepare("SELECT * FROM users");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, User::class);
    }


    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function save()
    {
        // TODO: Implement save() method.
    }
}