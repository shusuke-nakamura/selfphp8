<?php
class TriangleFigure
{
    private float $base;
    private float $height;

    public function __construct()
    {
        $this->setBase(1);
        $this->setHeight(1);
    }

    public function getBase(): float
    {
        return $this->base;
    }

    public function setBase($base): void
    {
        if ($base <= 0) {
            throw new Exception('baseは整数で指定します。');
        }
        $this->base = $base;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function setHeight($height): void
    {
        if ($height <= 0) {
            throw new Exception('heightは整数で指定します。');
        }
        $this->height = $height;
    }

    public function getArea(): float
    {
        return $this->getBase() * $this->getHeight() / 2;
    }
}
