<?php

namespace Model;

use JsonSerializable;

/**
 * Description of Car
 *
 * @author ronal
 */
class VehicleModel implements JsonSerializable
{
    /** @var integer */
    private $speed;

    /** @var integer */
    private $rpm;

    /** @var integer */
    private $rpmMaxCapacity;

    /** @var integer */
    private $fuel;

    /** @var integer */
    private $fuelMaxCapacity;

    /** @var integer */
    private $gear;

    /** @var integer */
    private $gearMaxValue;

    /** @var boolean */
    private $cruiseControl;

    /** @var boolean */
    private $parkBrake;

    /** @var boolean */
    private $eletric;

    /** @var boolean */
    private $engine;

    /** @var boolean */
    private $blinkerLeft;

    /** @var boolean */
    private $blinkerRight;

    /** @var boolean */
    private $lightBeamLow;

    /** @var boolean */
    private $lightBeamHigh;

    /** @var boolean */
    private $lightBeaconOn;

    /** @var boolean */
    private $lightAuxFront;

    /** @var boolean */
    private $lightAuxRoof;

    /** @var boolean */
    private $batteryVoltageWarning;

    /** @var boolean */
    private $airPressureWarning;

    /** @var boolean */
    private $oilPressureWarning;

    /** @var boolean */
    private $waterTemperatureWarning;

    /** @var boolean */
    private $fuelWarning;

    /** @var integer */
    private $odometer;

    /** @var integer */
    private $waterTemperature;

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     * @return VehicleModel
     */
    public function setSpeed(int $speed): VehicleModel
    {
        $this->speed = $speed;
        return $this;
    }

    /**
     * @return int
     */
    public function getRpm(): int
    {
        return $this->rpm;
    }

    /**
     * @param int $rpm
     * @return VehicleModel
     */
    public function setRpm(int $rpm): VehicleModel
    {
        $this->rpm = $rpm;
        return $this;
    }

    /**
     * @return int
     */
    public function getRpmMaxCapacity(): int
    {
        return $this->rpmMaxCapacity;
    }

    /**
     * @param int $rpmMaxCapacity
     * @return VehicleModel
     */
    public function setRpmMaxCapacity(int $rpmMaxCapacity): VehicleModel
    {
        $this->rpmMaxCapacity = $rpmMaxCapacity;
        return $this;
    }

    /**
     * @return int
     */
    public function getFuel(): int
    {
        return $this->fuel;
    }

    /**
     * @param int $fuel
     * @return VehicleModel
     */
    public function setFuel(int $fuel): VehicleModel
    {
        $this->fuel = $fuel;
        return $this;
    }

    /**
     * @return int
     */
    public function getFuelMaxCapacity(): int
    {
        return $this->fuelMaxCapacity;
    }

    /**
     * @param int $fuelMaxCapacity
     * @return VehicleModel
     */
    public function setFuelMaxCapacity(int $fuelMaxCapacity): VehicleModel
    {
        $this->fuelMaxCapacity = $fuelMaxCapacity;
        return $this;
    }

    /**
     * @return int
     */
    public function getGear(): int
    {
        return $this->gear;
    }

    /**
     * @param int $gear
     * @return VehicleModel
     */
    public function setGear(int $gear): VehicleModel
    {
        $this->gear = $gear;
        return $this;
    }

    /**
     * @return int
     */
    public function getGearMaxValue(): int
    {
        return $this->gearMaxValue;
    }

    /**
     * @param int $gearMaxValue
     * @return VehicleModel
     */
    public function setGearMaxValue(int $gearMaxValue): VehicleModel
    {
        $this->gearMaxValue = $gearMaxValue;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCruiseControl(): bool
    {
        return $this->cruiseControl;
    }

    /**
     * @param bool $cruiseControl
     * @return VehicleModel
     */
    public function setCruiseControl(bool $cruiseControl): VehicleModel
    {
        $this->cruiseControl = $cruiseControl;
        return $this;
    }

    /**
     * @return bool
     */
    public function isParkBrake(): bool
    {
        return $this->parkBrake;
    }

    /**
     * @param bool $parkBrake
     * @return VehicleModel
     */
    public function setParkBrake(bool $parkBrake): VehicleModel
    {
        $this->parkBrake = $parkBrake;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEletric(): bool
    {
        return $this->eletric;
    }

    /**
     * @param bool $eletric
     * @return VehicleModel
     */
    public function setEletric(bool $eletric): VehicleModel
    {
        $this->eletric = $eletric;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEngine(): bool
    {
        return $this->engine;
    }

    /**
     * @param bool $engine
     * @return VehicleModel
     */
    public function setEngine(bool $engine): VehicleModel
    {
        $this->engine = $engine;
        return $this;
    }

    /**
     * @return bool
     */
    public function isBlinkerLeft(): bool
    {
        return $this->blinkerLeft;
    }

    /**
     * @param bool $blinkerLeft
     * @return VehicleModel
     */
    public function setBlinkerLeft(bool $blinkerLeft): VehicleModel
    {
        $this->blinkerLeft = $blinkerLeft;
        return $this;
    }

    /**
     * @return bool
     */
    public function isBlinkerRight(): bool
    {
        return $this->blinkerRight;
    }

    /**
     * @param bool $blinkerRight
     * @return VehicleModel
     */
    public function setBlinkerRight(bool $blinkerRight): VehicleModel
    {
        $this->blinkerRight = $blinkerRight;
        return $this;
    }

    /**
     * @return bool
     */
    public function isLightBeamLow(): bool
    {
        return $this->lightBeamLow;
    }

    /**
     * @param bool $lightBeamLow
     * @return VehicleModel
     */
    public function setLightBeamLow(bool $lightBeamLow): VehicleModel
    {
        $this->lightBeamLow = $lightBeamLow;
        return $this;
    }

    /**
     * @return bool
     */
    public function isLightBeamHigh(): bool
    {
        return $this->lightBeamHigh;
    }

    /**
     * @param bool $lightBeamHigh
     * @return VehicleModel
     */
    public function setLightBeamHigh(bool $lightBeamHigh): VehicleModel
    {
        $this->lightBeamHigh = $lightBeamHigh;
        return $this;
    }

    /**
     * @return bool
     */
    public function isLightBeaconOn(): bool
    {
        return $this->lightBeaconOn;
    }

    /**
     * @param bool $lightBeaconOn
     * @return VehicleModel
     */
    public function setLightBeaconOn(bool $lightBeaconOn): VehicleModel
    {
        $this->lightBeaconOn = $lightBeaconOn;
        return $this;
    }

    /**
     * @return bool
     */
    public function isLightAuxFront(): bool
    {
        return $this->lightAuxFront;
    }

    /**
     * @param bool $lightAuxFront
     * @return VehicleModel
     */
    public function setLightAuxFront(bool $lightAuxFront): VehicleModel
    {
        $this->lightAuxFront = $lightAuxFront;
        return $this;
    }

    /**
     * @return bool
     */
    public function isLightAuxRoof(): bool
    {
        return $this->lightAuxRoof;
    }

    /**
     * @param bool $lightAuxRoof
     * @return VehicleModel
     */
    public function setLightAuxRoof(bool $lightAuxRoof): VehicleModel
    {
        $this->lightAuxRoof = $lightAuxRoof;
        return $this;
    }

    /**
     * @return bool
     */
    public function isBatteryVoltageWarning(): bool
    {
        return $this->batteryVoltageWarning;
    }

    /**
     * @param bool $batteryVoltageWarning
     * @return VehicleModel
     */
    public function setBatteryVoltageWarning(bool $batteryVoltageWarning): VehicleModel
    {
        $this->batteryVoltageWarning = $batteryVoltageWarning;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAirPressureWarning(): bool
    {
        return $this->airPressureWarning;
    }

    /**
     * @param bool $airPressureWarning
     * @return VehicleModel
     */
    public function setAirPressureWarning(bool $airPressureWarning): VehicleModel
    {
        $this->airPressureWarning = $airPressureWarning;
        return $this;
    }

    /**
     * @return bool
     */
    public function isOilPressureWarning(): bool
    {
        return $this->oilPressureWarning;
    }

    /**
     * @param bool $oilPressureWarning
     * @return VehicleModel
     */
    public function setOilPressureWarning(bool $oilPressureWarning): VehicleModel
    {
        $this->oilPressureWarning = $oilPressureWarning;
        return $this;
    }

    /**
     * @return bool
     */
    public function isWaterTemperatureWarning(): bool
    {
        return $this->waterTemperatureWarning;
    }

    /**
     * @param bool $waterTemperatureWarning
     * @return VehicleModel
     */
    public function setWaterTemperatureWarning(bool $waterTemperatureWarning): VehicleModel
    {
        $this->waterTemperatureWarning = $waterTemperatureWarning;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFuelWarning(): bool
    {
        return $this->fuelWarning;
    }

    /**
     * @param bool $fuelWarning
     * @return VehicleModel
     */
    public function setFuelWarning(bool $fuelWarning): VehicleModel
    {
        $this->fuelWarning = $fuelWarning;
        return $this;
    }

    /**
     * @return int
     */
    public function getOdometer(): int
    {
        return $this->odometer;
    }

    /**
     * @param int $odometer
     * @return VehicleModel
     */
    public function setOdometer(int $odometer): VehicleModel
    {
        $this->odometer = $odometer;
        return $this;
    }

    /**
     * @return int
     */
    public function getWaterTemperature(): int
    {
        return $this->waterTemperature;
    }

    /**
     * @param int $waterTemperature
     * @return VehicleModel
     */
    public function setWaterTemperature(int $waterTemperature): VehicleModel
    {
        $this->waterTemperature = $waterTemperature;
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
