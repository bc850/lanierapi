<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            "size" => '5/8',
            "unit_of_measure" => "inch",
            "name" => "Perpetual Positive Displacement Water Meter",
            "type" => "Perpetual Positive Displacement",
            "manufacturer" => "RG3",
            "blurb" => "Meters for the measurement of potable cold water in residential,
                commercial, and industrial services.",
            "description" => "",
            "quantity" => 100,
            "status" => Product::AVAILABLE_PRODUCT,
            "image" => "https://lmsc.s3.amazonaws.com/products/RG3/tesla4_thumb.png",
            "sku" => "MTRRG3PPD518",
            "vendor_sku" => "RG3TEST",
            "original_price" => 0.00,
            "current_price" => 0.00,
            "featured" => true
        ]);

        Product::create([
            "size" => "3-1/2",
            "unit_of_measure" => "feet",
            "name" => "Series 2780: Nostalgic Style Dry Barrel Fire Hydrant",
            "type" => "Series 2780: Nostalgic Style Dry Barrel",
            "manufacturer" => "American AVK",
            "blurb" => "Expert designed dry barrel fire hydrant that meets and exceeds
                AWWA C502 standards",
            "description" => "",
            "quantity" => 25,
            "status" => Product::AVAILABLE_PRODUCT,
            "image" => "https://lmsc.s3.amazonaws.com/products/AVK/avk_nostalgic_thumb.png",
            "sku" => "HYDAVK27NOSTDRY05",
            "vendor_sku" => "27N/PHH-05",
            "original_price" => 0.00,
            "current_price" => 0.00,
            "featured" => true
        ]);

        Product::create([
            "size" => "",
            "unit_of_measure" => "",
            "name" => "Pipe Cruiser Inspection Camera",
            "type" => "",
            "manufacturer" => "ECA Robotics",
            "blurb" => "Pipe inspection camera systems allowing inspection of any pipe from
                150 to 2500 mm in diameter",
            "description" => "",
            "quantity" => 2,
            "status" => Product::AVAILABLE_PRODUCT,
            "image" => "https://lmsc.s3.amazonaws.com/products/ECA/pipe_cruiser_thumb.jpg",
            "sku" => "CAMECAPIPECRZ",
            "vendor_sku" => "CAMTEST",
            "original_price" => 0.00,
            "current_price" => 0.00,
            "featured" => true
        ]);

        Product::create([
            "size" => "",
            "unit_of_measure" => "",
            "name" => "Long Range Full-Duplex Wireless Intercom Radio",
            "type" => "",
            "manufacturer" => "APPI-COM",
            "blurb" => "Long Range Wireless Intercom (around 2000m) for professionals, for the
                whole team: from 2 to 10 people… or more!",
            "description" => "",
            "quantity" => "10",
            "status" => Product::AVAILABLE_PRODUCT,
            "image" => "https://lmsc.s3.amazonaws.com/products/APPI-COM/appi-com_thumbnail.png",
            "sku" => "APPIRADIO",
            "vendor_sku" => "APPIRADIO",
            "original_price" => 0.00,
            "current_price" => 0.00,
            "featured" => true
        ]);

        Product::create([
            "size" => "",
            "unit_of_measure" => "",
            "name" => "Dura-Line Polyethylene Pipe for Gas Distribution",
            "type" => "",
            "manufacturer" => "Dura-Line",
            "blurb" => "Polyethylene pipe for gas distribution, bimodal PE2708 PolyTough1 manufactured from Dow® Continuum™ DGDA 2420.",
            "description" => "",
            "quantity" => "1000",
            "status" => Product::AVAILABLE_PRODUCT,
            "image" => "https://lmsc.s3.amazonaws.com/products/Dura-Line/duraline_gas_pipe_thumbnail.jpg",
            "sku" => "DURAGASPOLYPIPE",
            "vendor_sku" => "DURAGASPOLYPIPE",
            "original_price" => 0.00,
            "current_price" => 0.00,
            "featured" => true
        ]);

        Product::create([
            "size" => "12",
            "unit_of_measure" => "inch",
            "name" => "Smooth Jaw Pipe Wrench",
            "type" => "",
            "manufacturer" => "Milwaukee",
            "blurb" => "",
            "description" => "",
            "quantity" => "12",
            "status" => Product::AVAILABLE_PRODUCT,
            "image" => "https://lmsc.s3.amazonaws.com/products/Milwaukee/smooth_jaw_pipe_wrench_thumbnail.png",
            "sku" => "TOOLMILWRENCH12",
            "vendor_sku" => "48-22-7186",
            "original_price" => 0.00,
            "current_price" => 0.00,
            "featured" => true
        ]);

        Product::create([
            "size" => "2-3/8",
            "unit_of_measure" => "inch",
            "name" => "Ratcheting Pipe Cutter",
            "type" => "",
            "manufacturer" => "Milwaukee",
            "blurb" => "",
            "description" => "",
            "quantity" => "12",
            "status" => Product::AVAILABLE_PRODUCT,
            "image" => "https://lmsc.s3.amazonaws.com/products/Milwaukee/ratcheting_pipe_cutter_thumbnail.png",
            "sku" => "TOOLMILPIPECUT238",
            "vendor_sku" => "48-22-4215",
            "original_price" => 0.00,
            "current_price" => 0.00,
            "featured" => true
        ]);

        Product::create([
            "size" => "",
            "unit_of_measure" => "",
            "name" => "Tubing Cutter",
            "type" => "",
            "manufacturer" => "Milwaukee",
            "blurb" => "",
            "description" => "",
            "quantity" => "12",
            "status" => Product::AVAILABLE_PRODUCT,
            "image" => "https://lmsc.s3.amazonaws.com/products/Milwaukee/tubing_cutter_thumbnail.png",
            "sku" => "TOOLMILTUBECUT",
            "vendor_sku" => "48-22-4202",
            "original_price" => 0.00,
            "current_price" => 0.00,
            "featured" => true
        ]);
    }
}
