<?php
namespace Model;

use JsonSerializable;

/**
 * Description of TelemetryModel
 *
 * @author ronal
 */
class TelemetryModel implements JsonSerializable 
{
    /** @var VehicleModel */
    private $vehicleModel;

    /** @var GameModel */
    private $gameModel;

    /** @var MotionModel */
    private $motionModel;

    /** @var NavigationModel */
    private $navigationModel;

    /**
     * @return VehicleModel
     */
    public function getVehicleModel(): VehicleModel
    {
        return $this->vehicleModel;
    }

    /**
     * @param VehicleModel $vehicleModel
     * @return TelemetryModel
     */
    public function setVehicleModel(VehicleModel $vehicleModel): TelemetryModel
    {
        $this->vehicleModel = $vehicleModel;
        return $this;
    }

    /**
     * @return GameModel
     */
    public function getGameModel(): GameModel
    {
        return $this->gameModel;
    }

    /**
     * @param GameModel $gameModel
     * @return TelemetryModel
     */
    public function setGameModel(GameModel $gameModel): TelemetryModel
    {
        $this->gameModel = $gameModel;
        return $this;
    }

    /**
     * @return MotionModel
     */
    public function getMotionModel(): MotionModel
    {
        return $this->motionModel;
    }

    /**
     * @param MotionModel $motionModel
     * @return TelemetryModel
     */
    public function setMotionModel(MotionModel $motionModel): TelemetryModel
    {
        $this->motionModel = $motionModel;
        return $this;
    }

    /**
     * @return NavigationModel
     */
    public function getNavigationModel(): NavigationModel
    {
        return $this->navigationModel;
    }

    /**
     * @param NavigationModel $navigationModel
     * @return TelemetryModel
     */
    public function setNavigationModel(NavigationModel $navigationModel): TelemetryModel
    {
        $this->navigationModel = $navigationModel;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        return [
            'game' => $this->gameModel,
            'vehicle' => $this->vehicleModel,
            'motion' => $this->motionModel,
            'navigation' => $this->navigationModel
        ];
    }

}
