<?
declare(strict_types=1);

require_once('Shape.php');

/**
 * 円
 */
class Circle implements Shape
{
    private readonly float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    /**
     * 面積
     */
    public function area(): float
    {
        return $this->radius * $this->radius * pi();
    }
}