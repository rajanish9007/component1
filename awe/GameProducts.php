<?php


namespace awe;

class GameProducts extends ShopProduct {
    private $PEGI;

    public function __construct(
        string $id,
        string $title,
        string $firstName,
        string $mainName,
        float $price,
        int $PEGI
    )
    {
        parent::__construct(
            $id,
            $title,
            $firstName,
            $mainName,
            $price
        );
        $this->PEGI = $PEGI;
    }

    public function getPegi() {
        return $this->PEGI;
    }
}