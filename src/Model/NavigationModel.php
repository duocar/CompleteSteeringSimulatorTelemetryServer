<?php

namespace Model;

use JsonSerializable;

class NavigationModel implements JsonSerializable
{
    /** @var string */
    private $trailerId;
    /** @var integer */
    private $trailerMass;
    /** @var string */
    private $trailerName;
    /** @var boolean */
    private $hasJob;
    /** @var int */
    private $jobIncome;
    /** @var \DateTime */
    private $jobDeadlineTime;
    /** @var \DateTime */
    private $jobRemainingTime;
    /** @var string */
    private $sourceCity;
    /** @var string */
    private $destinationCity;
    /** @var string */
    private $sourceCompany;
    /** @var string */
    private $destinationCompany;

    /**
     * @return string
     */
    public function getTrailerId(): string
    {
        return $this->trailerId;
    }

    /**
     * @param string $trailerId
     * @return NavigationModel
     */
    public function setTrailerId(string $trailerId): NavigationModel
    {
        $this->trailerId = $trailerId;
        return $this;
    }

    /**
     * @return int
     */
    public function getTrailerMass(): int
    {
        return $this->trailerMass;
    }

    /**
     * @param int $trailerMass
     * @return NavigationModel
     */
    public function setTrailerMass(int $trailerMass): NavigationModel
    {
        $this->trailerMass = $trailerMass;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrailerName(): string
    {
        return $this->trailerName;
    }

    /**
     * @param string $trailerName
     * @return NavigationModel
     */
    public function setTrailerName(string $trailerName): NavigationModel
    {
        $this->trailerName = $trailerName;
        return $this;
    }

    /**
     * @return bool
     */
    public function isHasJob(): bool
    {
        return $this->hasJob;
    }

    /**
     * @param bool $hasJob
     * @return NavigationModel
     */
    public function setHasJob(bool $hasJob): NavigationModel
    {
        $this->hasJob = $hasJob;
        return $this;
    }

    /**
     * @return int
     */
    public function getJobIncome(): int
    {
        return $this->jobIncome;
    }

    /**
     * @param int $jobIncome
     * @return NavigationModel
     */
    public function setJobIncome(int $jobIncome): NavigationModel
    {
        $this->jobIncome = $jobIncome;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getJobDeadlineTime(): \DateTime
    {
        return $this->jobDeadlineTime;
    }

    /**
     * @param \DateTime $jobDeadlineTime
     * @return NavigationModel
     */
    public function setJobDeadlineTime(\DateTime $jobDeadlineTime): NavigationModel
    {
        $this->jobDeadlineTime = $jobDeadlineTime;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getJobRemainingTime(): \DateTime
    {
        return $this->jobRemainingTime;
    }

    /**
     * @param \DateTime $jobRemainingTime
     * @return NavigationModel
     */
    public function setJobRemainingTime(\DateTime $jobRemainingTime): NavigationModel
    {
        $this->jobRemainingTime = $jobRemainingTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getSourceCity(): string
    {
        return $this->sourceCity;
    }

    /**
     * @param string $sourceCity
     * @return NavigationModel
     */
    public function setSourceCity(string $sourceCity): NavigationModel
    {
        $this->sourceCity = $sourceCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getDestinationCity(): string
    {
        return $this->destinationCity;
    }

    /**
     * @param string $destinationCity
     * @return NavigationModel
     */
    public function setDestinationCity(string $destinationCity): NavigationModel
    {
        $this->destinationCity = $destinationCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getSourceCompany(): string
    {
        return $this->sourceCompany;
    }

    /**
     * @param string $sourceCompany
     * @return NavigationModel
     */
    public function setSourceCompany(string $sourceCompany): NavigationModel
    {
        $this->sourceCompany = $sourceCompany;
        return $this;
    }

    /**
     * @return string
     */
    public function getDestinationCompany(): string
    {
        return $this->destinationCompany;
    }

    /**
     * @param string $destinationCompany
     * @return NavigationModel
     */
    public function setDestinationCompany(string $destinationCompany): NavigationModel
    {
        $this->destinationCompany = $destinationCompany;
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