<?php

namespace Service;
use Model\CarModel;
use Model\GameModel;
use Model\MotionModel;
use Model\NavigationModel;
use Model\TelemetryModel;
use Model\VehicleModel;
use Requests;

/**
 * Description of ETS2TelemetryStrategy
 *
 * @author ronal
 */
class ETS2TelemetryStrategy implements TelemetryInterface
{
    private function createTruckData(&$json)
    {
        $vehicleModel = new VehicleModel();

        $vehicleModel->setSpeed((int)$json->truckSpeed);
        $vehicleModel->setRpm((int)$json->engineRpm);
        $vehicleModel->setRpmMaxCapacity((int)$json->engineRpmMax);
        $vehicleModel->setFuel((int)$json->fuel);
        $vehicleModel->setFuelMaxCapacity((int)$json->fuelCapacity);
        $vehicleModel->setGear((int)$json->gear);
        $vehicleModel->setGearMaxValue((int)$json->gears);
        $vehicleModel->setOdometer((int)$json->truckOdometer);
        $vehicleModel->setWaterTemperature((int)$json->waterTemperature);

        //Lights
        $vehicleModel->setCruiseControl((boolean)$json->cruiseControlOn);
        $vehicleModel->setEletric((boolean)$json->electricOn);
        $vehicleModel->setEngine((boolean)$json->engineOn);
        $vehicleModel->setBlinkerRight((boolean)$json->blinkerRightOn);
        $vehicleModel->setBlinkerLeft((boolean)$json->blinkerLeftOn);
        $vehicleModel->setLightBeaconOn((boolean)$json->lightsBeaconOn);
        $vehicleModel->setLightBeamLow((boolean)$json->lightsBeamLowOn);
        $vehicleModel->setLightBeamHigh((boolean)$json->lightsBeamHighOn);
        $vehicleModel->setLightAuxRoof((boolean)$json->lightsAuxRoofOn);
        $vehicleModel->setLightAuxFront((boolean)$json->lightsAuxFrontOn);

        //warnings
        $vehicleModel->setBatteryVoltageWarning((boolean)$json->batteryVoltageWarning);
        $vehicleModel->setAirPressureWarning((boolean)$json->airPressureWarning);
        $vehicleModel->setOilPressureWarning((boolean)$json->oilPressureWarning);
        $vehicleModel->setWaterTemperatureWarning((boolean)$json->waterTemperatureWarning);
        $vehicleModel->setFuelWarning((boolean)$json->fuelWarning);

        return $vehicleModel;
    }

    private function createGameData(&$json)
    {
        $gameModel = new GameModel();

        $gameModel->setConnected((boolean)$json->connected);
        $gameModel->setGameTime(new \DateTime($json->gameTime));
        $gameModel->setGamePaused((boolean)$json->gamePaused);
        $gameModel->setTelemetryPluginVersion($json->telemetryPluginVersion);
        $gameModel->setGameVersion($json->gameVersion);

        return $gameModel;
    }

    private function createMotionData(&$json)
    {
        $motionModel = new MotionModel();

        $motionModel->setAccelerationX($json->accelerationX);
        $motionModel->setAccelerationY($json->accelerationY);
        $motionModel->setAccelerationZ($json->accelerationZ);
        $motionModel->setCoordinateX($json->coordinateX);
        $motionModel->setCoordinateY($json->coordinateY);
        $motionModel->setCoordinateZ($json->coordinateZ);
        $motionModel->setRotationX($json->rotationX);
        $motionModel->setRotationY($json->rotationY);
        $motionModel->setRotationZ($json->rotationZ);

        return $motionModel;
    }

    private function createNavigationData(&$json)
    {
        $navigationModel = new NavigationModel();

        $navigationModel->setTrailerId($json->trailerId);
        $navigationModel->setTrailerMass($json->trailerMass);
        $navigationModel->setTrailerName($json->trailerName);
        $navigationModel->setHasJob($json->hasJob);
        $navigationModel->setJobIncome($json->jobIncome);
        $navigationModel->setJobDeadlineTime(new \DateTime($json->jobDeadlineTime));
        $navigationModel->setJobRemainingTime(new \DateTime($json->jobRemainingTime));
        $navigationModel->setSourceCity($json->sourceCity);
        $navigationModel->setDestinationCity($json->destinationCity);
        $navigationModel->setSourceCompany($json->sourceCompany);
        $navigationModel->setDestinationCompany($json->destinationCompany);

        return $navigationModel;
    }
    
    private function convertDataToModel(&$json)
    {
        $telemetryModel = new TelemetryModel();

        $vehicleModel = $this->createTruckData($json);
        $telemetryModel->setVehicleModel($vehicleModel);

        $gameModel = $this->createGameData($json);
        $telemetryModel->setGameModel($gameModel);

        $motionModel = $this->createMotionData($json);
        $telemetryModel->setMotionModel($motionModel);

        $navigationModel = $this->createNavigationData($json);
        $telemetryModel->setNavigationModel($navigationModel);
        
        return $telemetryModel;
    }
    
    
    public function getTelemetry()
    {
        $request = Requests::get(TelemetryInterface::ETS2_URL_TELEMETRY, [], []);
        if ($request->status_code != 200) {
            return [];
        }

        $data = json_decode($request->body);

        return $this->convertDataToModel($data);
    }
}
