<?
declare(strict_types=1);

require_once 'Rectangle.php';
require_once 'Circle.php';

$Rectangle = new Rectangle(2, 3);
$Circle = new Circle(2);

$shapes = [$Rectangle, $Circle];

foreach($shapes as $shape) {
    var_dump(showArea($shape));
}

/**
 * 面積を表示する。
 * 各図形をShape型として引数に渡すことができている。
 */
function showArea(Shape $shape) :float
{
    return $shape->area();
}