<?php

namespace Model;

/**
 * Description of Car
 *
 * @author ronal
 */
class CarModel 
{
    private $speed;
    private $rpm;
    private $fuel;
    private $fuelMaxCapacity;
    private $gear;
    private $gearMaxValue;
    private $cruiseControl;
    private $parkBrake;
    private $eletric;
    private $engine;
    private $blinkerLeft;
    private $blinkerRight;
    private $lightBeamLow;
    private $lightBeamHigh;
    private $batteryVoltageWarning;
    private $airPressureWarning;
    private $oilPressureWarning;
    private $waterTemperatureWarning;
    private $fuelWarning;
    private $odometer;
    private $waterTemperature;
    
    public function getSpeed() {
        return $this->speed;
    }

    public function getRpm() {
        return $this->rpm;
    }

    public function getFuel() {
        return $this->fuel;
    }

    public function getFuelMaxCapacity() {
        return $this->fuelMaxCapacity;
    }

    public function getGear() {
        return $this->gear;
    }

    public function getGearMaxValue() {
        return $this->gearMaxValue;
    }

    public function getCruiseControl() {
        return $this->cruiseControl;
    }

    public function getParkBrake() {
        return $this->parkBrake;
    }

    public function getEletric() {
        return $this->eletric;
    }

    public function getEngine() {
        return $this->engine;
    }

    public function getBlinkerLeft() {
        return $this->blinkerLeft;
    }

    public function getBlinkerRight() {
        return $this->blinkerRight;
    }

    public function getLightBeamLow() {
        return $this->lightBeamLow;
    }

    public function getLightBeamHigh() {
        return $this->lightBeamHigh;
    }

    public function getBatteryVoltageWarning() {
        return $this->batteryVoltageWarning;
    }

    public function getAirPressureWarning() {
        return $this->airPressureWarning;
    }

    public function getOilPressureWarning() {
        return $this->oilPressureWarning;
    }

    public function getWaterTemperatureWarning() {
        return $this->waterTemperatureWarning;
    }

    public function getFuelWarning() {
        return $this->fuelWarning;
    }

    public function getOdometer() {
        return $this->odometer;
    }

    public function getWaterTemperature() {
        return $this->waterTemperature;
    }

    public function setSpeed($speed) {
        $this->speed = $speed;
        return $this;
    }

    public function setRpm($rpm) {
        $this->rpm = $rpm;
        return $this;
    }

    public function setFuel($fuel) {
        $this->fuel = $fuel;
        return $this;
    }

    public function setFuelMaxCapacity($fuelMaxCapacity) {
        $this->fuelMaxCapacity = $fuelMaxCapacity;
        return $this;
    }

    public function setGear($gear) {
        $this->gear = $gear;
        return $this;
    }

    public function setGearMaxValue($gearMaxValue) {
        $this->gearMaxValue = $gearMaxValue;
        return $this;
    }

    public function setCruiseControl($cruiseControl) {
        $this->cruiseControl = $cruiseControl;
        return $this;
    }

    public function setParkBrake($parkBrake) {
        $this->parkBrake = $parkBrake;
        return $this;
    }

    public function setEletric($eletric) {
        $this->eletric = $eletric;
        return $this;
    }

    public function setEngine($engine) {
        $this->engine = $engine;
        return $this;
    }

    public function setBlinkerLeft($blinkerLeft) {
        $this->blinkerLeft = $blinkerLeft;
        return $this;
    }

    public function setBlinkerRight($blinkerRight) {
        $this->blinkerRight = $blinkerRight;
        return $this;
    }

    public function setLightBeamLow($lightBeamLow) {
        $this->lightBeamLow = $lightBeamLow;
        return $this;
    }

    public function setLightBeamHigh($lightBeamHigh) {
        $this->lightBeamHigh = $lightBeamHigh;
        return $this;
    }

    public function setBatteryVoltageWarning($batteryVoltageWarning) {
        $this->batteryVoltageWarning = $batteryVoltageWarning;
        return $this;
    }

    public function setAirPressureWarning($airPressureWarning) {
        $this->airPressureWarning = $airPressureWarning;
        return $this;
    }

    public function setOilPressureWarning($oilPressureWarning) {
        $this->oilPressureWarning = $oilPressureWarning;
        return $this;
    }

    public function setWaterTemperatureWarning($waterTemperatureWarning) {
        $this->waterTemperatureWarning = $waterTemperatureWarning;
        return $this;
    }

    public function setFuelWarning($fuelWarning) {
        $this->fuelWarning = $fuelWarning;
        return $this;
    }

    public function setOdometer($odometer) {
        $this->odometer = $odometer;
        return $this;
    }

    public function setWaterTemperature($waterTemperature) {
        $this->waterTemperature = $waterTemperature;
        return $this;
    }
}
