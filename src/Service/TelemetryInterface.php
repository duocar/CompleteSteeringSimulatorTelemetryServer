<?php

namespace Service;

/**
 *
 * @author ronal
 */
interface TelemetryInterface {
    const ETS2_URL_TELEMETRY = 'http://192.168.0.107:25555/api/ets2/telemetry';
    public function getTelemetry();
}
