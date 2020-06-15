<?php
namespace Service;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TelemetryStrategy
 *
 * @author ronal
 */
class TelemetryContext
{
    
    private $strategy;
    
    public function setStrategy($strategy)
    {
        $this->strategy = $strategy;
        return $this;
    }
    
    public function makeTelemetry()
    {
        return $this->strategy->getTelemetry();
    }
}
