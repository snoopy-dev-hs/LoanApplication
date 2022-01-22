<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Province;

class InsertProvince extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::truncate();

        $provinces = [
            ["province_name" => "Banteay Meanchey", "slug" => "banteay_meanchey"],
            ["province_name" => "Battambong", "slug" => "battambong"],
            ["province_name" => "Kampong Chan", "slug" => "kampong_chan"],
            ["province_name" => "Kampong Chhnang", "slug" => "kampong_chhnang"],
            ["province_name" => "Kampong Speu", "slug" => "kampong_speu"],
            ["province_name" => "Kampong Thom", "slug" => "kampong_thom"],
            ["province_name" => "Kampot", "slug" => "kampot"],
            ["province_name" => "Kandal", "slug" => "kandal"],
            ["province_name" => "Koh Kong", "slug" => "koh_kong"],
            ["province_name" => "Kratie", "slug" => "kratie"],
            ["province_name" => "Mondulkiri", "slug" => "mondulkiri"],
            ["province_name" => "Phnom Penh", "slug" => "phnom_penh"],
            ["province_name" => "Preah Vihear", "slug" => "preah_vihear"],
            ["province_name" => "Prey Veng", "slug" => "prey_veng"],
            ["province_name" => "Pursat", "slug" => "pursat"],
            ["province_name" => "Ratanakiri", "slug" => "ratanakiri"],
            ["province_name" => "Siem Reap", "slug" => "siem_reap"],
            ["province_name" => "Preah Sihanouk", "slug" => "preah_sihanouk"],
            ["province_name" => "Stung Treng", "slug" => "stung_treng"],
            ["province_name" => "Svay Rieng", "slug" => "svay_rieng"],
            ["province_name" => "Takeo", "slug" => "takeo"],
            ["province_name" => "Oddar Meanchey", "slug" => "oddar_meanchey"],
            ["province_name" => "Kep", "slug" => "kep"],
            ["province_name" => "Pailin", "slug" => "palilin"],
            ["province_name" => "Tboung Khmum", "slug" => "tboung_khmum"]

        ];

        Province::insert($provinces);
    }
}
