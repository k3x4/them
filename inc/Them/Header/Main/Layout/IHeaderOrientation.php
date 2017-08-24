<?php

namespace Them\Header\Main\Layout;

interface IHeaderOrientation {
    public function getWidth();
    public function getWidthUnits();
    public function getHeight();
    public function getHeightUnits();
}
