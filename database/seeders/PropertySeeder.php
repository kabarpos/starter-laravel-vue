<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $properties = [
            [
                'name' => 'Rumah Mewah Cluster Emerald',
                'location' => 'BSD City, Tangerang Selatan',
                'price' => 3500000000,
                'type' => 'Rumah Cluster',
                'main_image' => '/img/properties/property-1.jpg',
                'land_size' => 120,
                'building_size' => 150,
                'bedrooms' => 4,
                'bathrooms' => 3,
                'description' => 'Rumah mewah 2 lantai dengan desain modern minimalis di kawasan elite BSD City. 
                                Lokasi strategis, dekat dengan pusat perbelanjaan, sekolah internasional, dan akses tol.
                                Lingkungan asri dan aman dengan sistem keamanan 24 jam.',
                'facilities' => [
                    'Smart Home System',
                    'Carport 2 Mobil',
                    'Taman Depan & Belakang',
                    'Security 24 Jam',
                    'CCTV',
                    'Solar Panel Ready',
                    'Internet Fiber Optic',
                    'Water Heater',
                    'AC',
                    'Dapur Bersih & Kotor',
                    'Ruang Keluarga',
                    'Ruang Makan',
                    'Gudang',
                    'Ruang Cuci',
                    'Balkon'
                ]
            ],
            [
                'name' => 'Apartemen The Crown',
                'location' => 'SCBD, Jakarta Selatan',
                'price' => 5000000000,
                'type' => 'Apartemen',
                'main_image' => '/img/properties/property-2.jpg',
                'land_size' => 85,
                'building_size' => 85,
                'bedrooms' => 2,
                'bathrooms' => 2,
                'description' => 'Apartemen mewah dengan pemandangan kota Jakarta yang memukau. 
                                Dilengkapi dengan fasilitas premium dan akses langsung ke pusat bisnis SCBD.',
                'facilities' => [
                    'Private Lift',
                    'Balkon',
                    'Swimming Pool',
                    'Gym',
                    'Sauna',
                    'Function Room',
                    'Business Center',
                    'Smart Home System',
                    'AC',
                    'Water Heater',
                    'Internet Fiber Optic',
                    'Security 24 Jam',
                    'CCTV',
                    'Parking Lot'
                ]
            ]
        ];

        foreach ($properties as $property) {
            Property::create($property);
        }
    }
}
