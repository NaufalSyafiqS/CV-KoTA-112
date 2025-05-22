<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Member; // Import the Member model

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Clear existing data (optional, good for development)
        Member::truncate();

        // Insert the member data
        $members = [
            [
                'name' => 'Naufal Syafiq Somantri',
                'nim' => '221511024',
                'city' => 'Karawang',
                'birth' => '24 November 2003',
                'sd_info' => 'SD Nanjung 1 (2016)',
                'smp_info' => 'SMPN 1 Margaasih (2017 – 2019)',
                'sma_info' => 'SMK TI Pembangunan (2019 – 2022)',
                'achievements' => null, // Use null for '-'
                'photo' => 'naufal.jpg', // Assumes photo is named naufal.jpg
            ],
            [
                'name' => 'Fahrizal Mudzaqi Maulana',
                'nim' => '221511049',
                'city' => 'Bandung',
                'birth' => '07 Mei 2004',
                'sd_info' => 'SDN 1 Krida Utama & 2016',
                'smp_info' => 'SMPN 3 Padalarang & 2019',
                'sma_info' => 'SMAN 1 Cisarua & 2022',
                'achievements' => null,
                'photo' => 'fahrizal.jpg', // Assumes photo is named fahrizal.jpg
            ],
            [
                'name' => 'Faras Rama Mahadika',
                'nim' => '221511050',
                'city' => 'Garut',
                'birth' => '24 November 2003',
                'sd_info' => 'SD Kartika XIX-3 (2009 - 2015)',
                'smp_info' => 'SMPN 1 Garut (2016 - 2018)',
                'sma_info' => 'SMAN 11 Garut (2019 - 2021)',
                'achievements' => null,
                'photo' => 'faras.jpg', // Assumes photo is named faras.jpg
            ],
        ];

        foreach ($members as $memberData) {
            Member::create($memberData);
        }
    }
}