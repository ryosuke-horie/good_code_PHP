<?
require_once('Shape.php');

/**
 * 四角形
 */
class Rectangle implements Shape
{
    private readonly int $width;
    private readonly int $height;

    /**
     * 面積
     */
    public function area(): int
    {
        return $this->width * $this->height;
    }
}