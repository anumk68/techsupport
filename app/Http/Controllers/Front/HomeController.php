<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\HeaderMenu;
use App\Models\Issue;

class HomeController extends Controller
{
    //

    public function services_details($slug)
    {
        $data = HeaderMenu::where('slug', $slug)->first();

        $category  = HeaderMenu::get();
        $laptopheader  = HeaderMenu::where('navbar', 'Laptop')->get();
        $printerHeader = HeaderMenu::where('navbar', 'Printer')->get();
        $scannerHeader = HeaderMenu::where('navbar', 'Scanner')->get();
        $tabletHeader  = HeaderMenu::where('navbar', 'Tablet')->get();
        $appleHeader   = HeaderMenu::where('navbar', 'Apple Devices')->get();
        $routerHeader  = HeaderMenu::where('navbar', 'Router')->get();
        return view('frontend.allDynamicPages', compact('data','laptopheader','printerHeader','scannerHeader','tabletHeader','appleHeader','routerHeader','category'));
    }
    public function laptop($slug)
    {
        $data            = HeaderMenu::where('slug', $slug)->get();
        $header          = HeaderMenu::where('navbar', 'Laptop')->get();
        $printerHeader   = HeaderMenu::where('navbar', 'Printer')->get();
        $emailHeader     = HeaderMenu::where('navbar', 'Email Services')->get();
        $visibleDropdown = 'tech';
        return view('frontend.allDynamicPages', compact('data', 'header', 'printerHeader', 'emailHeader', 'visibleDropdown'));
    }
    public function printer($slug)
    {
        $data            = HeaderMenu::where('slug', $slug)->get();
        $header          = HeaderMenu::where('navbar', 'Laptop')->get();
        $printerHeader   = HeaderMenu::where('navbar', 'Printer')->get();
        $emailHeader     = HeaderMenu::where('navbar', 'Email Services')->get();
        $visibleDropdown = 'it';
        return view('frontend.allDynamicPages', compact('data', 'header', 'printerHeader', 'emailHeader', 'visibleDropdown'));
    }
    public function email($slug)
    {
        $data            = HeaderMenu::where('slug', $slug)->get();
        $header          = HeaderMenu::where('navbar', 'Laptop')->get();
        $printerHeader   = HeaderMenu::where('navbar', 'Printer')->get();
        $emailHeader     = HeaderMenu::where('navbar', 'Email Services')->get();
        $visibleDropdown = 'it';
        return view('frontend.allDynamicPages', compact('data', 'header', 'printerHeader', 'emailHeader', 'visibleDropdown'));
    }
    public function frontindex()
    {
        $category        = Category::all();
        $allbrands       = Brand::all();
        $allissues       = Issue::all();
        $laptopServices          = HeaderMenu::where('navbar', 'Laptop')->get();
        $scannerServices   = HeaderMenu::where('navbar', 'Scanner')->get();
        $routerServices     = HeaderMenu::where('navbar', 'Router')->get();
        $tabletServices     = HeaderMenu::where('navbar', 'Tablet')->get();
        $printerServices     = HeaderMenu::where('navbar', 'Printer')->get();
        $appleServices     = HeaderMenu::where('navbar', 'Apple Devices')->get();
        $visibleDropdown = 'both';
        return view('frontend.index', compact('category', 'allbrands', 'allissues', 'laptopServices', 'scannerServices','routerServices','tabletServices','printerServices','appleServices'));
    }

    public function frontabout()
    {
        return view('frontend.about');
    }
    public function frontcontact()
    {
        return view('frontend.contact');
    }
    public function frontantivirus()
    {
        return view('frontend.antivirusandsecurity');
    }
    public function frontappdevelopment()
    {
        return view('frontend.appdevelopment');
    }
    public function frontapplemacos()
    {
        return view('frontend.applemacos');
    }
    public function frontcomputertunes()
    {

        return view('frontend.computertunesup');
    }
    public function frontdatabackup()
    {
        return view('frontend.databackupservice');
    }
    public function frontdigitalmarketing()
    {
        return view('frontend.digitalmarketing');
    }
    public function frontemailhostinger()
    {
        return view('frontend.emailhostingservice');
    }
    public function frontemailmarketing()
    {
        return view('frontend.emailmarketing');
    }
    public function frontinternetconectivity()
    {
        return view('frontend.internetconnectivity');
    }
    public function frontmicrosoftwindow()
    {
        return view('frontend.microsoftwindow');
    }
    public function frontprofessionalemail()
    {
        return view('frontend.professionalemailsetup');
    }
    public function frontprogramerror()
    {
        return view('frontend.programerror');
    }
    public function frontemailservice()
    {
        return view('frontend.emailservice');
    }
    public function fronttransactionalemail()
    {
        return view('frontend.transactionalemailservice');
    }
    public function frontuiuxdesign()
    {
        return view('frontend.uianduxdesign');
    }
    public function frontvirusandmalware()
    {
        $header = HeaderMenu::all();
        return view('frontend.virusandmalware', compact('page_detail'));
    }
    public function frontwebagency()
    {
        return view('frontend.webagency');
    }
    public function frontwebdevelopment()
    {
        return view('frontend.webdevelopment');
    }
    public function frontwificonectivity()
    {
        return view('frontend.wificonectivity');
    }
    public function frontsoftwareapplication()
    {
        return view('frontend.softwareapplicationservice');
    }
    public function fronthomenetworking()
    {
        return view('frontend.homenetworking');
    }
    public function frontsmartphone()
    {
        return view('frontend.smartphoneandtablet');
    }
    public function frontprinterandmultifunction()
    {
        return view('frontend.printerandmultifunction');
    }
    public function fronttrainingandguidence()
    {
        return view('frontend.trainingandguidence');
    }
    public function frontprivacypolicy()
    {
        $header        = HeaderMenu::where('navbar', 'Laptop')->get();
        $printerHeader = HeaderMenu::where('navbar', 'Printer')->get();
        $emailHeader   = HeaderMenu::where('navbar', 'Email Services')->get();
        return view('frontend.privacypolicy', compact('header', 'printerHeader', 'emailHeader'));
    }
    public function fronttermandcondition()
    {
        $header        = HeaderMenu::where('navbar', 'Laptop')->get();
        $printerHeader = HeaderMenu::where('navbar', 'Printer')->get();
        $emailHeader   = HeaderMenu::where('navbar', 'Email Services')->get();
        return view('frontend.termandcondition', compact('header', 'printerHeader', 'emailHeader'));
    }
    public function frontrefundpolicy()
    {
        $header        = HeaderMenu::where('navbar', 'Laptop')->get();
        $printerHeader = HeaderMenu::where('navbar', 'Printer')->get();
        $emailHeader   = HeaderMenu::where('navbar', 'Email Services')->get();
        return view('frontend.refundpolicy', compact('header', 'printerHeader', 'emailHeader'));
    }

    public function user_login()
    {
        return view('frontend.auth.login');
    }
    public function user_register()
    {
        return view('frontend.auth.register');
    }
    public function account()
    {
        return view('frontend.auth.account');
    }
    public function blog()
    {
        return view('frontend.blog');
    }
    public function blog_details()
    {
        return view('frontend.blog-details');
    }
    public function cart()
    {
        return view('frontend.cart');
    }
    public function checkout()
    {
        return view('frontend.checkout');
    }
    public function package_details()
    {
        return view('frontend.package-details');
    }
}
