<?php

namespace App\Traits;

trait CrudFieldsTrait {
    /**
     * processJsonString
     *
     * @param mixed $data
     *
     * @return array
     */
    public function processJsonString(mixed $data): array
    {
        return is_string($data)
            ? json_decode($data, true) ?? []
            : (is_array($data) ? $data : []);
    }
}