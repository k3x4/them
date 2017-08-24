<?php

namespace Them\Common\Header\Layout;

interface IHeaderOrientation {
    public function getWidth();
    public function getWidthUnits();
    public function getHeight();
    public function getHeightUnits();
}
