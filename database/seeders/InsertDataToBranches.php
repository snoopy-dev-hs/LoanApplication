<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Branch;

class InsertDataToBranches extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Branch::truncate();

        $provinces = [
            ["branch_name" => "Banteay Meanchey", "slug" => "banteay_meanchey"],
            ["branch_name" => "Battambong", "slug" => "battambong"],
            ["branch_name" => "Kampong Chan", "slug" => "kampong_chan"],
            ["branch_name" => "Kampong Chhnang", "slug" => "kampong_chhnang"],
            ["branch_name" => "Kampong Speu", "slug" => "kampong_speu"],
            ["branch_name" => "Kampong Thom", "slug" => "kampong_thom"],
            ["branch_name" => "Kampot", "slug" => "kampot"],
            ["branch_name" => "Kandal", "slug" => "kandal"],
            ["branch_name" => "Koh Kong", "slug" => "koh_kong"],
            ["branch_name" => "Kratie", "slug" => "kratie"],
            ["branch_name" => "Mondulkiri", "slug" => "mondulkiri"],
            ["branch_name" => "Phnom Penh", "slug" => "phnom_penh"],
            ["branch_name" => "Preah Vihear", "slug" => "preah_vihear"],
            ["branch_name" => "Prey Veng", "slug" => "prey_veng"],
            ["branch_name" => "Pursat", "slug" => "pursat"],
            ["branch_name" => "Ratanakiri", "slug" => "ratanakiri"],
            ["branch_name" => "Siem Reap", "slug" => "siem_reap"],
            ["branch_name" => "Preah Sihanouk", "slug" => "preah_sihanouk"],
            ["branch_name" => "Stung Treng", "slug" => "stung_treng"],
            ["branch_name" => "Svay Rieng", "slug" => "svay_rieng"],
            ["branch_name" => "Takeo", "slug" => "takeo"],
            ["branch_name" => "Oddar Meanchey", "slug" => "oddar_meanchey"],
            ["branch_name" => "Kep", "slug" => "kep"],
            ["branch_name" => "Pailin", "slug" => "palilin"],
            ["branch_name" => "Tboung Khmum", "slug" => "tboung_khmum"]

        ];

        Branch::insert($provinces);
    }
}
