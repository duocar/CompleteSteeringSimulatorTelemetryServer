<?php

namespace Model;

use JsonSerializable;

class MotionModel implements JsonSerializable
{
    /** @var float */
    private $accelerationX;
    /** @var float */
    private $accelerationY;
    /** @var float */
    private $accelerationZ;
    /** @var float */
    private $rotationX;
    /** @var float */
    private $rotationY;
    /** @var float */
    private $rotationZ;
    /** @var float */
    private $coordinateX;
    /** @var float */
    private $coordinateY;
    /** @var float */
    private $coordinateZ;

    /**
     * @return float
     */
    public function getAccelerationX()
    {
        return $this->accelerationX;
    }

    /**
     * @param float $accelerationX
     * @return MotionModel
     */
    public function setAccelerationX($accelerationX)
    {
        $this->accelerationX = $accelerationX;
        return $this;
    }

    /**
     * @return float
     */
    public function getAccelerationY()
    {
        return $this->accelerationY;
    }

    /**
     * @param float $accelerationY
     * @return MotionModel
     */
    public function setAccelerationY($accelerationY)
    {
        $this->accelerationY = $accelerationY;
        return $this;
    }

    /**
     * @return float
     */
    public function getAccelerationZ()
    {
        return $this->accelerationZ;
    }

    /**
     * @param float $accelerationZ
     * @return MotionModel
     */
    public function setAccelerationZ($accelerationZ)
    {
        $this->accelerationZ = $accelerationZ;
        return $this;
    }

    /**
     * @return float
     */
    public function getRotationX()
    {
        return $this->rotationX;
    }

    /**
     * @param float $rotationX
     * @return MotionModel
     */
    public function setRotationX($rotationX)
    {
        $this->rotationX = $rotationX;
        return $this;
    }

    /**
     * @return float
     */
    public function getRotationY()
    {
        return $this->rotationY;
    }

    /**
     * @param float $rotationY
     * @return MotionModel
     */
    public function setRotationY($rotationY)
    {
        $this->rotationY = $rotationY;
        return $this;
    }

    /**
     * @return float
     */
    public function getRotationZ()
    {
        return $this->rotationZ;
    }

    /**
     * @param float $rotationZ
     * @return MotionModel
     */
    public function setRotationZ($rotationZ)
    {
        $this->rotationZ = $rotationZ;
        return $this;
    }

    /**
     * @return float
     */
    public function getCoordinateX()
    {
        return $this->coordinateX;
    }

    /**
     * @param float $coordinateX
     * @return MotionModel
     */
    public function setCoordinateX($coordinateX)
    {
        $this->coordinateX = $coordinateX;
        return $this;
    }

    /**
     * @return float
     */
    public function getCoordinateY()
    {
        return $this->coordinateY;
    }

    /**
     * @param float $coordinateY
     * @return MotionModel
     */
    public function setCoordinateY($coordinateY)
    {
        $this->coordinateY = $coordinateY;
        return $this;
    }

    /**
     * @return float
     */
    public function getCoordinateZ()
    {
        return $this->coordinateZ;
    }

    /**
     * @param float $coordinateZ
     * @return MotionModel
     */
    public function setCoordinateZ($coordinateZ)
    {
        $this->coordinateZ = $coordinateZ;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        $array = get_object_vars($this);

        return $array;
    }
}