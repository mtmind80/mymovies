<?php


namespace App\Traits;


trait HashData
{

    /**
     * Function data_hash
     * Params: $data
     * Returns a hashed string
     */
    public function data_hash($data)
    {
        return $this->_data_hash($data);

    }

    private function _data_hash($data)
    {
        return \Hash::make($data);
    }
}