<?php

namespace Service;
use Model\CarModel;
use Model\TelemetryModel;
use Requests;

/**
 * Description of ETS2TelemetryStrategy
 *
 * @author ronal
 */
class ETS2TelemetryStrategy implements TelemetryInterface
{
    private function createCarModel(&$json)
    {
        $carModel = new CarModel();

        $carModel->setSpeed((int)$json->truckSpeed);
        $carModel->setRpm((int)$json->engineRpm);
        $carModel->setFuel((int)$json->fuel);
        $carModel->setFuelMaxCapacity((int)$json->fuelCapacity);
        $carModel->setGear((int)$json->gear);
        $carModel->setGearMaxValue((int)$json->gears);


        //Lights
        $carModel->setBlinkerRight((int)$json->blinkerRightOn);

        return $carModel;
    }
    
    private function convertDataToModel(&$json)
    {
        $telemetryModel = new TelemetryModel();
        $carModel = $this->createCarModel($json);
        $telemetryModel->setCarModel($carModel);
        
        return $telemetryModel;
    }
    
    
    public function getTelemetry()
    {
        $re = '{"connected":false,"gameTime":"0026-11-17T18:33:00Z","gamePaused":true,"telemetryPluginVersion":"2","gameVersion":"1.16","trailerAttached":false,"truckSpeed":2.64101909E-05,"accelerationX":5.728504E-05,"accelerationY":2.22016479E-05,"accelerationZ":-0.000175403184,"coordinateX":-39799.5742,"coordinateY":107.238281,"coordinateZ":-38512.1055,"rotationX":0.435496151,"rotationY":-7.589099E-08,"rotationZ":3.79454939E-08,"gear":0,"gears":12,"gearRanges":0,"gearRangeActive":0,"engineRpm":550.0006,"engineRpmMax":2500.0,"fuel":594.287659,"fuelCapacity":1400.0,"fuelAverageConsumption":0.37506485,"userSteer":0.0,"userThrottle":0.0,"userBrake":0.0,"userClutch":0.0,"gameSteer":-0.41304028,"gameThrottle":1.401298E-45,"gameBrake":0.0,"gameClutch":0.0,"truckMass":0.0,"truckModelLength":16,"truckModelOffset":15360,"trailerMass":0.0,"trailerId":"","trailerName":"","hasJob":false,"jobIncome":0,"jobDeadlineTime":"0001-01-01T00:00:00Z","jobRemainingTime":"0001-01-01T00:00:00Z","sourceCity":"","destinationCity":"","sourceCompany":"","destinationCompany":"","retarderBrake":0,"shifterSlot":0,"shifterToggle":0,"cruiseControlOn":false,"wipersOn":false,"parkBrakeOn":false,"motorBrakeOn":false,"electricOn":false,"engineOn":true,"blinkerLeftActive":false,"blinkerRightActive":false,"blinkerLeftOn":false,"blinkerRightOn":false,"lightsParkingOn":false,"lightsBeamLowOn":false,"lightsBeamHighOn":false,"lightsAuxFrontOn":false,"lightsAuxRoofOn":false,"lightsBeaconOn":true,"lightsBrakeOn":false,"lightsReverseOn":false,"batteryVoltageWarning":false,"airPressureWarning":false,"airPressureEmergency":false,"adblueWarning":false,"oilPressureWarning":false,"waterTemperatureWarning":false,"airPressure":119.204964,"brakeTemperature":36.2070541,"fuelWarning":0.0,"adblue":39.7143822,"adblueConsumpton":0.0,"oilPressure":37.897747,"oilTemperature":55.966774,"waterTemperature":53.1656151,"batteryVoltage":27.17818,"lightsDashboard":1.0,"wearEngine":0.01786747,"wearTransmission":0.0107212821,"wearCabin":0.0285847522,"wearChassis":0.03573094,"wearWheels":0.00537964143,"wearTrailer":0.0,"truckOdometer":2128.42944}';
        
        $json = json_decode($re);
        
        //return $this->convertDataToModel($json);
        
        $request = Requests::get(TelemetryInterface::ETS2_URL_TELEMETRY, [], []);
        if ($request->status_code != 200) {
            return [];
        }
        var_dump($request->body);
        $data = json_decode($request->body);

        return $this->convertDataToModel($data);
    }
}
