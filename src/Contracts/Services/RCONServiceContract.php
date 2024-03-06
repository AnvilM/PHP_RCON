<?php

namespace AnvilM\RCON\Contracts\Services;

interface RCONServiceContract
{
    public function sendCommand(string $command): bool;

    public function authorize();
}
