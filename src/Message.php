<?php
use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity]
#[ORM\Table(name: 'messages')]

class Message {
	#[ORM\Id]
	#[ORM\Column(type: 'integer')]
	#[ORM\GeneratedValue]
	private int $id;
	
	#[ORM\Column(type: 'integer')]
	private int $senderId;
	
	#[ORM\Column(type: 'integer')]
	private int $receiverId;
	
	#[ORM\Column(type: 'string')]
	private string $text;

	public function setSenderId(int $id): void {
		$this->senderId = $id;
	}

	public function setReceiverId(int $id): void {
		$this->receiverId = $id;
	}

	public function setText(string $text): void {
		$this->text = $text;
	}

	public function getId(): int {
		return $this->id;
	}

	public function getSenderId(): int {
		return $this->senderId;
	}

	public function getReceiverId():int {
		return $this->receiverId;
	}

	public function getText(): string {
		return $this->text;
	}
}