<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function index(){
        $categories = [
            ['name'=>'Toys','image'=>'https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Events/2024/BAUOct2024/RideOn._SY232_CB545223412_.jpg'],
            ['name'=>'Home', 'image'=>'https://m.media-amazon.com/images/I/61sHXVsbXAL._AC_UL640_FMwebp_QL65_.jpg'],
            ['name'=>'Garden', 'image'=>'https://static6.depositphotos.com/1078879/589/i/450/depositphotos_5893223-stock-photo-english-garden.jpg'],
            ['name'=>'Electronics', 'image'=>'https://c8.alamy.com/comp/HKPR1N/consumer-and-home-electronicstvfridgevacuum-cleanermicrowavewasher-HKPR1N.jpg'],
            ['name'=>'Fashion', 'image'=>'https://images-na.ssl-images-amazon.com/images/G/01/AMAZON_FASHION/2022/SITE_FLIPS/SPR_22/GW/DQC/DQC_APR_TBYB_W_TOPS_2x._SY232_CB623353881_.jpg'],
            ['name'=>'Kitchen', 'image'=>'https://m.media-amazon.com/images/I/313wAT6Iy2L._SY320_.jpg'],
            ['name'=>'Sports', 'image'=>'https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Events/2024/BAU2024Sept/Running_2X._SY232_CB563192628_.jpg'],
            ['name'=>'PCs','image'=>'https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Events/2023/EBF23/Fuji_Desktop_Single_image_EBF_2x_v1._SY608_CB573698005_.jpg'],
            // ['name'=>'','image'=>''],
            ['name'=>'watches','image'=>'https://m.media-amazon.com/images/I/71-32BOYPrL._AC_UL640_FMwebp_QL65_.jpg'],
            ['name'=>'beauty products','image'=>'https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Events/2024/BAU2024Sept/Makeup_2x._SY232_CB563150139_.jpg'],
            ['name'=>'Travel','image'=>'https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Events/2024/BAU2024Aug/TravelBag_2x._SY232_CB566100767_.jpg'],
            ['name'=>'Software','image'=>'https://m.media-amazon.com/images/I/41H7q0km21L._AC_UY436_QL65_.jpg'],
            ['name'=>'Arts','image'=>'https://m.media-amazon.com/images/I/81ON4-sLO0L._AC_UL640_FMwebp_QL65_.jpg'],
        ];
        return view('home.index', compact('categories'));
    }
}
