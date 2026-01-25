<?php

namespace App\models;

use App\core\DBModel;

class Product extends  DBModel
{
    public int $id;
    public string $name;
    public string $description;
    public string $status;
    public float $price;
    public string $imagePath;
    public int $stock;
    public array $commandeItem = [];
    public ?Category $category = null;
    public ?Admin $createdBy = null;
    public array $pannierItem = [];

    public function __construct()
    {
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getImagePath(): string
    {
        return $this->imagePath;
    }

    public function setImagePath(string $imagePath): void
    {
        $this->imagePath = $imagePath;
    }

    public function getStock(): int
    {
        return $this->stock;
    }

    public function setStock(int $stock): void
    {
        $this->stock = $stock;
    }

    public function getCommandeItem(): array
    {
        return $this->commandeItem;
    }

    public function setCommandeItem(array $commandeItem): void
    {
        $this->commandeItem = $commandeItem;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function setCategory(Category $category): void
    {
        $this->category = $category;
    }

    public function getCreatedBy(): Admin
    {
        return $this->createdBy;
    }

    public function setCreatedBy(Admin $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    public function getPannierItem(): array
    {
        return $this->pannierItem;
    }

    public function setPannierItem(array $pannierItem): void
    {
        $this->pannierItem = $pannierItem;
    }

    public static function tableName(): string
    {
        return 'products';
    }

    public function attributes(): array
    {
        return [
            'name','description', 'status', 'price', 'image_path', 'stock', 'category_id'
        ];
    }

    public static function primaryKey(): string
    {
        return 'id';
    }

    public function rules(): array
    {
        return [
            'name' => [self::RULE_REQUIRED],
            'description' => [self::RULE_REQUIRED],
            /*'image_path' => [self::RULE_REQUIRED],*/
            'price' => [self::RULE_REQUIRED],
            'stock' => [self::RULE_REQUIRED],
        ];
    }
}