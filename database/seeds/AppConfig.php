<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\AppConfig as AppConfigModel;

class AppConfig extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = date('Y-m-d H:i:s');
        $configs = AppConfigModel::$initialConfigs;

        foreach ($configs as & $config) {
            $config['created_at'] = $timestamp;
            $config['updated_at'] = $timestamp;
        }

        DB::table('app_configs')->insert($configs);
    }
}
