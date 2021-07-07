<?php

use Illuminate\Database\Seeder;

class DownloadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json =
        [
            "work" => [
                "image_url" => "img/aura_sec06_03.png",
                "win" => [
                    "url" => "https://cdn.visiondk.com/download/aura/work/aura_work_v1.2.10_win.zip",
                        "title" => "aura_work_v1.2.10_win.zip"
                    ],
                "mac" => [
                    "url" => "https://cdn.visiondk.com/download/aura/work/aura_work_v1.2.10_mac.dmg",
                    "title" => "aura_work_v1.2.10_mac.dmg"
                ],
                "version" => "2017.06.05 更新至 v1.2.10"
            ],
            "studio" => [
                "image_url" => "img/aura_sec06_04.png",
                "win" => [
                "url" => "https://cdn.visiondk.com/download/aura/studio/aura_studio_v1.1.6_win.zip",
                    "title" => "aura_studio_v1.1.6_win.zip"
                ],
                "mac" => [
                    "url" => "https://cdn.visiondk.com/download/aura/studio/aura_studio_v1.1.6_mac.dmg",
                    "title" => "aura_studio_v1.1.6_mac.dmg"
                ],
                "version" => "2017.06.05 已更新至 v1.1.6"
            ],
            "firmware" => [
                "image_url" => "img/download_sec01_03.png",
                "url" => "https://cdn.visiondk.com/download/aura/firmware/aura_firmware_v1.2.1.bin",
                "title" => "aura_firmware_v1.2.1.bin",
                "version" => "2017.04.01 已更新至 v1.2.1    大小 => 1M"
            ],
            "live" => [
                "image_url" => "",
                "url" => "",
                "title" => "",
                "version" => ""
            ]
        ];
        DB::table('downloads')->insert([
            'aura' => json_encode($json),
        ]);
    }
}
