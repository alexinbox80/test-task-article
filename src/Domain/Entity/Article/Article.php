<?php

declare(strict_types=1);

namespace App\Domain\Entity\Article;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'article')]
class Article
{
    #[ORM\Id, ORM\Column(type: 'integer', options: ['unsigned' => true]), ORM\GeneratedValue]
    private ?int $id;

    #[ORM\Column(type: 'boolean', options: ['default' => 0])]
    private bool $isActive;

    #[ORM\Column(length: 128, nullable: false)]
    private ?string $title = null;

    #[ORM\Column(type: 'integer', nullable: false, options: ['default' => 0])]
    private ?int $readCount;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(name: 'created_at', type: 'datetime', nullable: false)]
    private DateTime $createdAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function isActive(): bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): void
    {
        $this->isActive = $isActive;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    public function getReadCount(): ?int
    {
        return $this->readCount;
    }

    public function setReadCount(?int $readCount): void
    {
        $this->readCount = $readCount;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
}
