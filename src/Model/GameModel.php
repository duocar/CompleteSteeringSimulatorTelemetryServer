<?php

namespace Model;

use JsonSerializable;

class GameModel implements JsonSerializable
{
    /** @var boolean */
    private $connected;
    /** @var \DateTime */
    private $gameTime;
    /** @var boolean */
    private $gamePaused;
    /** @var string */
    private $telemetryPluginVersion;
    /** @var string */
    private $gameVersion;

    /**
     * @return bool
     */
    public function isConnected()
    {
        return $this->connected;
    }

    /**
     * @param bool $connected
     * @return GameModel
     */
    public function setConnected($connected)
    {
        $this->connected = $connected;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getGameTime()
    {
        return $this->gameTime;
    }

    /**
     * @param \DateTime $gameTime
     * @return GameModel
     */
    public function setGameTime($gameTime)
    {
        $this->gameTime = $gameTime;
        return $this;
    }

    /**
     * @return bool
     */
    public function isGamePaused()
    {
        return $this->gamePaused;
    }

    /**
     * @param bool $gamePaused
     * @return GameModel
     */
    public function setGamePaused($gamePaused)
    {
        $this->gamePaused = $gamePaused;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelemetryPluginVersion()
    {
        return $this->telemetryPluginVersion;
    }

    /**
     * @param string $telemetryPluginVersion
     * @return GameModel
     */
    public function setTelemetryPluginVersion($telemetryPluginVersion)
    {
        $this->telemetryPluginVersion = $telemetryPluginVersion;
        return $this;
    }

    /**
     * @return string
     */
    public function getGameVersion()
    {
        return $this->gameVersion;
    }

    /**
     * @param string $gameVersion
     * @return GameModel
     */
    public function setGameVersion($gameVersion)
    {
        $this->gameVersion = $gameVersion;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        $a = get_object_vars($this);

        return $a;
    }
}