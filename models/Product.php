<?php

namespace App\models;

use App\core\DBModel;

class Product extends  DBModel
{
    public int $id;

    public string $name;
    public string $description;
    public string $status = '0';
    public float $price;
    public int $stock;
    public ?string $image_path;

    public ?int $category_id;
    public ?int $commande_item_id = null;
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





    public function getStock(): int
    {
        return $this->stock;
    }

    public function setStock(int $stock): void
    {
        $this->stock = $stock;
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

    public function getCommandeItemId(): ?int
    {
        return $this->commande_item_id;
    }

    public function setCommandeItemId(?int $commande_item_id): void
    {
        $this->commande_item_id = $commande_item_id;
    }

    public function getImagePath(): string
    {
        return $this->image_path;
    }

    public function setImagePath(string $image_path): void
    {
        $this->image_path = $image_path;
    }

    public function getCategoryId(): int
    {
        return $this->category_id;
    }

    public function setCategoryId(int $category_id): void
    {
        $this->category_id = $category_id;
    }
}