<?
declare(strict_types=1);

require_once('Shape.php');

/**
 * 円
 */
class Circle implements Shape
{
    public const PI = 3.14;
    private readonly int $radius;

    public function __construct(int $radius)
    {
        $this->radius = $radius;
    }

    /**
     * 面積
     */
    public function area(): int
    {
        return $this->radius * $this->radius * self::PI;
    }
}