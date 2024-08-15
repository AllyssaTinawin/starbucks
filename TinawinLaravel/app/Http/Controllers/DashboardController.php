<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index() 
    {
        $products = [
            [
                "name" => "Strawberry Truffle Cream Frappuccino",
                "image" => "https://starbuckscard.ph/sbcard-admin/storage/app/public/menu/579/A8TKvrc9d6foolFfoeVkHtQdHHpUnkXJGV4lbD4x.png",
                "description" => "Cool off this summer with the Strawberry Truffle Cream Frappuccino®, promising to invigorate and satisfy your palate with every sip."
            ],
            [
                "name" => "Strawberry Truffle Latte",
                "image" => "https://starbuckscard.ph/sbcard-admin/storage/app/public/menu/578/aM7xxzzTbvYr2nswyY7xzYbHOFszmU7q0Q9StDPK.png",
                "description" => "Treat yourself as we toast to the last of summer with the velvety smooth and deliciously lush Strawberry Truffle Latte."
            ],
            [
                "name" => "Belgium Chocolate Frappuccino",
                "image" => "https://starbuckscard.ph/sbcard-admin/storage/app/public/menu/581/0CHevBXuw4HzR8jrrgCb4L7LxyT9BDxHpycfRoVR.png",
                "description" => "Get ready for some decadent end-of-summer yum with the Belgium Chocolate Frappuccino® blended beverage."
            ],
            [
                "name" => "Golden Fusion",
                "image" => "https://starbuckscard.ph/sbcard-admin/storage/app/public/menu/580/leQTjD4G8Huv3HvyJqUkCxc6dlPXWb1xOKl8fkFg.png",
                "description" => "Get back into the rhythm with a sip of Golden Fusion, a Tango-inspired beverage innovated by our 2023 Starbucks Asia Pacific Regional Barista Champion"
            ],
            [
                "name" => "Caffe Misto",
                "image" => "https://starbucks.ph/seed_data/HESP_CaffeMisto.jpg",
                "description" => "A one-to-one combination of fresh-brewed coffee and steamed milk add up to one distinctly delicious coffee drink remarkably mixed."
            ],
            [
                "name" => "Flat White",
                "image" => "https://starbucks.ph/seed_data/HESP_FlatWhite.jpg",
                "description" => "Bold ristretto shots of espresso get the perfect amount of steamed whole milk to create a not too strong, not too creamy, just right flavor, finished with a beautiful dot."
            ],
        ];

        return view('dashboard')->with("products", json_encode($products));
    }
}
