<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Subham\FilamentDynamicSettings\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'key' => "company_name",
                'label' => "resource.setting.company_name",
                'value' => null,
                'type' => 'text',
                'module' => "general"
            ],
            [
                'key' => "header_menu",
                'label' => "resource.setting.header_menu",
                'value' => null,
                'type' => 'text',
                'module' => "menu"
            ],
            [
                'key' => "footer_menu",
                'label' => "resource.setting.footer_menu",
                'value' => null,
                'type' => 'text',
                'module' => "menu"
            ],
        ];

        foreach ($settings  as $setting) {
            Setting::updateOrCreate([
                'key' => $setting['key']
            ], [
                'label'  => $setting['label'],
                'type'   => $setting['type'],
                'module' => $setting['module']
            ]);
        }
    }
}
