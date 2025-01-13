<?php

namespace FilamentTiptapEditor\Data;

class MentionItem
{
    public ?int $id = null;

    public string $label;

    public ?string $href = null;

    public array $data = [];

    public function __construct(?int $id, string $label, ?string $href = null, array $data = [])
    {
        $this->id = $id;
        $this->label = $label;
        $this->href = $href;
        $this->data = $data;
    }

    /**
     * Converts the object properties to an associative array.
     */
    public function toArray(): array
    {
        return [
            'label' => $this->label,
            'id' => $this->id,
            'href' => $this->href,
            'data' => $this->data,
        ];
    }

    /**
     * Converts the object properties to a JSON string.
     */
    public function toJson(): string
    {
        return json_encode($this->toArray());
    }
}