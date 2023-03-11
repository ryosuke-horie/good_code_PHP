<?
declare(strict_types=1);

require_once('Shape.php');

/**
 * 四角形
 */
class Rectangle implements Shape
{
    private readonly int $width;
    private readonly int $height;

    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * 面積
     */
    public function area(): int
    {
        return $this->width * $this->height;
    }
}