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
    /** @var CarModel Description */
    private $carModel;
    
    public function getCarModel(): CarModel
    {
        return $this->carModel;
    }

    public function setCarModel(CarModel $carModel)
    {
        $this->carModel = $carModel;
        return $this;
    }

    public function jsonSerialize()
    {
        return [
            'speed' => $this->carModel->getSpeed()
        ];
    }

}
