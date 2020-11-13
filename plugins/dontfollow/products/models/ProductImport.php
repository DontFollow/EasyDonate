<?php namespace DontFollow\Products\Models;

use Backend\Models\ImportModel;
use DontFollow\Servers\Models\Server;

class ProductImport extends ImportModel
{
    public $table = 'products';

    public $rules = [];

    public function importData($results, $sessionKey = null)
    {
        $firstRow = reset($results);
        $server = Server::first();
        foreach ($results as $row => $data) {
            try {
                $item = Product::make();
                $except = ['id'];
                foreach (array_except($data, $except) as $attribute => $value) {
                    if ($this->is_json($item->{$attribute})) {
                        $item->{$attribute} = json_decode($item->{$attribute}, true);
                    }
                    $item->{$attribute} = $value ?: 0;
                }

                $item->forceSave();
                $this->logCreated();
            }
            catch (\Exception $ex) {
                $this->logError($row, $ex);
            }

        }
    }

    private function is_json($value)
    {
        json_decode($value);
        return (json_last_error() == JSON_ERROR_NONE);
    }
}
