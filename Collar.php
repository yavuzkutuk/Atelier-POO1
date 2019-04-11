<?php
namespace Animals;

class Collar
{
    /**
     * La taille du collier
     * @var Integer
     */
    private $size;

    /**
     * La couleur du collier
     * @var String
     */
    private $color;

    /**
     * Collar constructor.
     * @param $size
     * @param $color
     */
    public function __construct($size, $color)
    {
        $this->size = $size;
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @return Collar
     */
    public function setSize(int $size): Collar
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @return String
     */
    public function getColor(): String
    {
        return $this->color;
    }

    /**
     * @param String $color
     * @return Collar
     */
    public function setColor(String $color): Collar
    {
        $this->color = $color;
        return $this;
    }

    public function __toString()
    {
        $str = 'Mon collier "'.get_class($this).'" est : '.$this->getColor().' de taille '.$this->getSize();
        return $str;
    }
}