<?php
abstract class Shape
{
    public abstract function boundingBox();

    /**
     * @returns Manipulator
     */
    public abstract function createManipulator();
}