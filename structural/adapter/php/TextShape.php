<?php
class TextShape extends Shape
{
    private $textView;

    public function __construct(TextView $textView)
    {
        $this->textView = $textView;
    }

    public function boundingBox()
    {
        $bottom = new Coord;
        $left   = new Coord;
        $this->textView->getOrigin($bottom, $left);

        $width  = new Coord;
        $height = new Coord;
        $this->textView->getExtent($width, $height);

        $bottomLeft = new Point($bottom, $left);
        $topRight   = new Point($bottom->sum($height), $left->sum($width));

        return [$bottomLeft, $topRight];
    }

    public function isEmpty()
    {
        return $this->textView->isEmpty();
    }

    public function createManipulator()
    {
        return new TextManipulator($this);
    }
}