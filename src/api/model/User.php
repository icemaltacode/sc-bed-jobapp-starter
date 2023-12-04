<?php
namespace com\icemalta\jobapp\api\model;

use \JsonSerializable;
use \PDO;
use com\icemalta\jobapp\api\model\{DBConnect, Application};

class User implements JsonSerializable
{
    private static $db;
    private int $id;
    private ?string $email;
    private ?string $password;
    private $accessLevel = 'user';

    public function __construct(?string $email = null, ?string $password = null, ?string $accessLevel = 'user', ?int $id = 0)
    {
        $this->email = $email;
        $this->password = $password;
        $this->accessLevel = $accessLevel;
        $this->id = $id;
        self::$db = DBConnect::getInstance()->getConnection();
    }

    public static function save(User $user): User
    {
        // TODO code me
    }

    public static function authenticate(User $user): ?User
    {
        // TODO code me
    }

    public static function delete(User $user): bool
    {
        // TODO code me
    }

    public static function getApplications(User $user): array
    {
        // TODO code me
    }

    public static function getInfo(User $user): object
    {
        // TODO code me
    }

    public function jsonSerialize(): array
    {
        // TODO code me
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function getAccessLevel(): string
    {
        return $this->accessLevel;
    }

    public function setAccessLevel(string $accessLevel): self
    {
        $this->accessLevel = $accessLevel;
        return $this;
    }
}