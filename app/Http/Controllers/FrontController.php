<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homes;
use App\Models\Images;
use App\Models\Corosels;
use App\Models\Texts;
use App\Models\Cards;
use App\Models\Prices;
use App\Models\Galeris;
use App\Models\Testimonis;
use App\Models\Contacts;
use App\Models\Abouts;
use App\Models\Files;
class FrontController extends Controller
{
    
    public function LogoShow()
    {   
        $carousel= Corosels::all()->take(3);
        $logo= Homes::with(['images','texts'])->where('kategori', 'logo')->take(1)->get();
        $header= Homes::with(['images','texts'])->where('kategori', 'header')->take(1)->get();
        $about = Abouts::all();
        $service = Cards::all()->where('kategori', 'Layanan')->take(3);
        $price = Prices::all()->take(3);
        $gallery = Galeris::with(['images','texts'])->take(3)->get();
        $team = Cards::all()->where('kategori', 'Pegawai')->take(4);
        $testimoni = Testimonis::all()->take(3);
        $contact = Contacts::all();
        return view('home', compact(
            'logo',
            'carousel', 
            'about',
            'service',
            'price',
            'gallery',
            'testimoni',
            'team',
            'header',
            'contact',
        ));
        
    }
    public function ServiceShow()
    {   
        $service = Cards::all()->where('kategori', 'Layanan');
        $price = Prices::all();
        $contact = Contacts::all();
        $logo= Homes::with(['images','texts'])->where('kategori', 'logo')->take(1)->get();
        $header= Homes::with(['images','texts'])->where('kategori', 'header')->take(1)->get();

        return view('service',compact(
            'service',
            'price',
            'contact',
            'logo',
            'header',
        ));
    }

    public function AboutShow()
    {   
        $about = Abouts::all();
        $contact = Contacts::all();
        $logo= Homes::with(['images','texts'])->where('kategori', 'logo')->take(1)->get();
        $header= Homes::with(['images','texts'])->where('kategori', 'header')->take(1)->get();
        return view('about',compact(
            'about',
            'contact',
            'logo',
            'header',
        ));
    }

    public function GalleryShow()
    {   
        $gallery = Galeris::with(['images','texts'])->get();
        $contact = Contacts::all();
        $logo= Homes::with(['images','texts'])->where('kategori', 'logo')->take(1)->get();
        $header= Homes::with(['images','texts'])->where('kategori', 'header')->take(1)->get();
        return view('gallery',compact(
            'gallery',
            'contact',
            'logo',
            'header',
        ));
    }

    public function PortfolioShow()
    {   
        $portofolio = Cards::all()->where('kategori', 'Portofolio');
        $contact = Contacts::all();
        $logo= Homes::with(['images','texts'])->where('kategori', 'logo')->take(1)->get();
        $header= Homes::with(['images','texts'])->where('kategori', 'header')->take(1)->get();
        return view('portfolio',compact(
            'portofolio',
            'contact',
            'logo',
            'header',
        ));
    }

    public function BlogShow()
    {   
        $logo= Homes::with(['images','texts'])->where('kategori', 'logo')->take(1)->get();
        $header= Homes::with(['images','texts'])->where('kategori', 'header')->take(1)->get();
        $contact = Contacts::all();
        

        return view('blog',compact(

            'contact',
            'logo',
            'header',
        ));
    }

    public function ContactShow()
    {   
        $logo= Homes::with(['images','texts'])->where('kategori', 'logo')->take(1)->get();
        $header= Homes::with(['images','texts'])->where('kategori', 'header')->take(1)->get();
        $contact = Contacts::all();
        

        return view('contact',compact(
            'header',
            'contact',
            'logo',
        ));
    }
    public function FileBrosurShow()
    {   
        $file_brosur = Files::all()->where('kategori', 'Brosur');
        $file_price = Files::all()->where('kategori', 'Pricelist');
        $file_portfolio = Files::all()->where('kategori', 'Portofolio');
        $contact = Contacts::all();
        $logo= Homes::with(['images','texts'])->where('kategori', 'logo')->take(1)->get();
        $header= Homes::with(['images','texts'])->where('kategori', 'header')->take(1)->get();

        return view('files_brosur',compact(
            'file_brosur',
            'file_price',
            'file_portfolio',
            'contact',
            'logo',
            'header',
        ));
    }
    public function FilePriceShow()
    {   
        $file_price = Files::all()->where('kategori', 'Pricelist');
        $contact = Contacts::all();
        $logo= Homes::with(['images','texts'])->where('kategori', 'logo')->take(1)->get();
        $header= Homes::with(['images','texts'])->where('kategori', 'header')->take(1)->get();

        return view('files_price',compact(
            'file_price',
            'contact',
            'logo',
            'header',
        ));
    }
    public function FilePortofolioShow()
    {   
        $file_portfolio = Files::all()->where('kategori', 'Portofolio');
        $contact = Contacts::all();
        $logo= Homes::with(['images','texts'])->where('kategori', 'logo')->take(1)->get();
        $header= Homes::with(['images','texts'])->where('kategori', 'header')->take(1)->get();

        return view('files_portfolio',compact(
            'file_portfolio',
            'contact',
            'logo',
            'header',
        ));
    }
    
}
