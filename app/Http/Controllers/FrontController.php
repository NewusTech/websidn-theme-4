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
use App\Models\Blogconsole;
use App\Models\Blogkategoris;
use App\Models\Blogs;
use App\Models\Blogtags;
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
        $about = Abouts::all();
        $logo= Homes::with(['images','texts'])->where('kategori', 'logo')->take(1)->get();
        $header= Homes::with(['images','texts'])->where('kategori', 'header')->take(1)->get();

        return view('service',compact(
            'about',
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
        $about = Abouts::all();
        return view('gallery',compact(
            'gallery',
            'contact',
            'about',
            'logo',
            'header',
        ));
    }

    public function PortfolioShow()
    {   
        $about = Abouts::all();
        $portofolio = Cards::all()->where('kategori', 'Portofolio');
        $contact = Contacts::all();
        $logo= Homes::with(['images','texts'])->where('kategori', 'logo')->take(1)->get();
        $header= Homes::with(['images','texts'])->where('kategori', 'header')->take(1)->get();
        return view('portfolio',compact(
            'portofolio',
            'contact',
            'about',
            'logo',
            'header',
        ));
    }

    public function BlogDetailShow($slug)
    {
        $carousel= Corosels::all()->take(1);
        $about = Abouts::all();
        $logo= Homes::with(['images','texts'])->where('kategori', 'logo')->take(1)->get();
        $header= Homes::with(['images','texts'])->where('kategori', 'header')->take(1)->get();
        $contact = Contacts::all();
        $blog = Blogs::where('slug', $slug)->firstOrFail();

        return view('blog-details', compact(
            'blog',
            'carousel',
            'contact',
            'about',
            'logo',
            'header',
        ));
    }
    public function BlogShow()
    {   
        $blog = Blogs::with(['kategoris'])->get();
        

        $about = Abouts::all();
        $logo= Homes::with(['images','texts'])->where('kategori', 'logo')->take(1)->get();
        $header= Homes::with(['images','texts'])->where('kategori', 'header')->take(1)->get();
        $contact = Contacts::all();

        return view('blog',compact(
            
            'blog',
            'contact',
            'about',
            'logo',
            'header',
        ));
    }

    public function ContactShow()
    {   
        $about = Abouts::all();
        $logo= Homes::with(['images','texts'])->where('kategori', 'logo')->take(1)->get();
        $header= Homes::with(['images','texts'])->where('kategori', 'header')->take(1)->get();
        $contact = Contacts::all();
        

        return view('contact',compact(
            'header',
            'contact',
            'logo',
            'about',
        ));
    }
    public function FileBrosurShow()
    {   
        $about = Abouts::all();
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
            'about',
            'contact',
            'logo',
            'header',
        ));
    }
    public function FilePriceShow()
    {   
        $about = Abouts::all();
        $file_price = Files::all()->where('kategori', 'Pricelist');
        $contact = Contacts::all();
        $logo= Homes::with(['images','texts'])->where('kategori', 'logo')->take(1)->get();
        $header= Homes::with(['images','texts'])->where('kategori', 'header')->take(1)->get();

        return view('files_price',compact(
            'file_price',
            'contact',
            'logo',
            'about',
            'header',
        ));
    }
    public function FilePortofolioShow()
    {   
        $about = Abouts::all();
        $file_portfolio = Files::all()->where('kategori', 'Portofolio');
        $contact = Contacts::all();
        $logo= Homes::with(['images','texts'])->where('kategori', 'logo')->take(1)->get();
        $header= Homes::with(['images','texts'])->where('kategori', 'header')->take(1)->get();

        return view('files_portfolio',compact(
            'file_portfolio',
            'contact',
            'logo',
            'about',
            'header',
        ));
    }
    
}
