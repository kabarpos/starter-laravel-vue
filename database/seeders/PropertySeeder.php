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
                'name' => 'Villa Serenity Heights',
                'location' => 'Jl. Raya Uluwatu, Bali',
                'type' => 'Villa',
                'price' => 12500000000, // 12.5M
                'description' => 'Perched on the cliffs of Uluwatu, this stunning villa offers panoramic ocean views and the ultimate in luxury living. Features include an infinity pool, private spa, and smart home automation throughout.',
                'bedrooms' => 5,
                'bathrooms' => 6,
                'land_size' => 1200,
                'building_size' => 800,
                'main_image' => 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?ixlib=rb-4.0.1&auto=format&fit=crop&w=2070&q=80',
                'facilities' => json_encode([
                    'Infinity Pool',
                    'Private Spa',
                    'Smart Home System',
                    'Home Theater',
                    'Wine Cellar',
                    'Staff Quarters'
                ])
            ],
            [
                'name' => 'The Crown Penthouse',
                'location' => 'SCBD, Jakarta',
                'type' => 'Apartment',
                'price' => 25000000000, // 25M
                'description' => 'A masterpiece of modern luxury in Jakarta\'s prestigious SCBD area. This penthouse offers unparalleled city views, private elevator access, and world-class amenities.',
                'bedrooms' => 4,
                'bathrooms' => 5,
                'land_size' => 0,
                'building_size' => 500,
                'main_image' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-4.0.1&auto=format&fit=crop&w=2070&q=80',
                'facilities' => json_encode([
                    'Private Elevator',
                    'Sky Garden',
                    'Private Pool',
                    'Concierge Service',
                    'Smart Home Features',
                    'Wine Room'
                ])
            ],
            [
                'name' => 'Luxury Estate Sentul',
                'location' => 'Sentul City, Bogor',
                'type' => 'House',
                'price' => 15000000000, // 15M
                'description' => 'Set within the exclusive Sentul City, this magnificent estate combines modern architecture with natural surroundings. Perfect for those seeking luxury in a serene environment.',
                'bedrooms' => 6,
                'bathrooms' => 7,
                'land_size' => 2000,
                'building_size' => 1200,
                'main_image' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.1&auto=format&fit=crop&w=2070&q=80',
                'facilities' => json_encode([
                    'Swimming Pool',
                    'Tennis Court',
                    'Garden Pavilion',
                    'Security System',
                    'Maid\'s Quarters',
                    'Garage for 6 Cars'
                ])
            ],
            [
                'name' => 'Riverside Manor',
                'location' => 'Kemang, Jakarta Selatan',
                'type' => 'House',
                'price' => 18000000000, // 18M
                'description' => 'An architectural masterpiece in Kemang\'s most prestigious area. This riverside property offers the perfect blend of luxury and comfort with stunning water views.',
                'bedrooms' => 5,
                'bathrooms' => 6,
                'land_size' => 1500,
                'building_size' => 1000,
                'main_image' => 'https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?ixlib=rb-4.0.1&auto=format&fit=crop&w=2070&q=80',
                'facilities' => json_encode([
                    'Riverside Deck',
                    'Swimming Pool',
                    'Home Theater',
                    'Wine Cellar',
                    'Smart Home System',
                    'Generator Backup'
                ])
            ],
            [
                'name' => 'Sky Villa Dago',
                'location' => 'Dago, Bandung',
                'type' => 'Villa',
                'price' => 9500000000, // 9.5M
                'description' => 'Experience luxury living at its finest in this modern villa with breathtaking views of Bandung city. Features contemporary design and premium finishes throughout.',
                'bedrooms' => 4,
                'bathrooms' => 5,
                'land_size' => 800,
                'building_size' => 600,
                'main_image' => 'https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?ixlib=rb-4.0.1&auto=format&fit=crop&w=2070&q=80',
                'facilities' => json_encode([
                    'Infinity Pool',
                    'City View Terrace',
                    'BBQ Area',
                    'Garden',
                    'Security System',
                    'Parking for 4 Cars'
                ])
            ],
            [
                'name' => 'The Residence at Menteng',
                'location' => 'Menteng, Jakarta Pusat',
                'type' => 'Apartment',
                'price' => 20000000000, // 20M
                'description' => 'Located in Jakarta\'s most prestigious neighborhood, this luxury apartment offers classic elegance with modern amenities. Walking distance to premium dining and shopping.',
                'bedrooms' => 3,
                'bathrooms' => 4,
                'land_size' => 0,
                'building_size' => 350,
                'main_image' => 'https://images.unsplash.com/photo-1600573472592-401b489a3cdc?ixlib=rb-4.0.1&auto=format&fit=crop&w=2070&q=80',
                'facilities' => json_encode([
                    'Private Lift Lobby',
                    'Concierge Service',
                    'Fitness Center',
                    'Swimming Pool',
                    'Meeting Rooms',
                    'Wine Cellar'
                ])
            ]
        ];

        foreach ($properties as $property) {
            Property::create($property);
        }
    }
}
