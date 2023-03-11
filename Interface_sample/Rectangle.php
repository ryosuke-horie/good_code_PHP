<?
declare(strict_types=1);

require_once('Shape.php');

/**
 * 四角形
 */
class Rectangle implements Shape
{
    private readonly float $width;
    private readonly float $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * 面積
     */
    public function area(): float
    {
        return $this->width * $this->height;
    }
}