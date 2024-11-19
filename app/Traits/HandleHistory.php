<?php

namespace App\Traits;

use App\Models\History;

trait HandleHistory
{
    /**
     * @param string $operation
     * @param string $entity
     * @param string $information
     * 
     * @return void
     */
    public function storeHistory(
        string $operation,
        string $entity,
        string $information
    ): void {
        History::create([
            'operation'             =>  $operation,
            'entity'                =>  $entity,
            'entity_information'    =>  $information,
            'user_id'               =>  backpack_user()->id,
            'company_id'            =>  backpack_user()->company_id
        ]);
    }
}