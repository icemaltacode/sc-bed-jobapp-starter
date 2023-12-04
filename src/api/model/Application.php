<?php
namespace com\icemalta\jobapp\api\model;

use \JsonSerializable;
use \PDO;
use \DateTime;
use com\icemalta\jobapp\api\model\DBConnect;

class Application implements JsonSerializable
{
    private static $db;
    private int $id;
    private ?int $userId;
    private ?int $listingId;
    private DateTime|string|null $appDate;

    public function __construct(?int $userId = 0, ?int $listingId = 0, DateTime|string $appDate = null, ?int $id = 0)
    {
        $this->userId = $userId;
        $this->listingId = $listingId;
        $this->appDate = $appDate;
        $this->id = $id;
        self::$db = DBConnect::getInstance()->getConnection();
    }

    public static function get(Application $application): Application|array
    {
        // TODO code me
    }

    public static function getAll(): array
    {
        // TODO code me
    }

    public static function save(Application $application): Application
    {
        // TODO code me
    }

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
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

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

    public function getListingId(): int
    {
        return $this->listingId;
    }

    public function setListingId(int $listingId): self
    {
        $this->listingId = $listingId;
        return $this;
    }

    public function getAppDate(): DateTime|string
    {
        return $this->appDate;
    }

    public function setAppDate(DateTime|string $appDate): self
    {
        $this->appDate = $appDate;
        return $this;
    }
}