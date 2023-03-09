<?php

class Ambiente
{
    /**
     * load
     *
     * @return void
     */
    public function load()
    {
        $configAmbiente = parse_ini_file('.env', true);

        foreach ($configAmbiente AS $key => $value) {
            if (gettype($configAmbiente[$key]) != "array") {
                $_ENV[$key] = $value;
            }
        }

        $_ENV['ENVIRONMENT'] = $configAmbiente['ENVIRONMENT'];

        foreach ($configAmbiente[$configAmbiente['ENVIRONMENT']] as $key => $value) {
            $_ENV[$key] = $value;
        }

        return null;
    }
}