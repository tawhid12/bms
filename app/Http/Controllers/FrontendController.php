<?php

namespace App\Http\Controllers;


use App\Models\About;
use App\Models\Product;
use App\Models\Ebrochure;
use App\Models\Career;
use App\Models\Page;
use App\Models\year;
use App\Models\Frontend;
use App\Models\Notice;
use App\Models\scroll_notice;
use App\Models\photoGallaryCategory;
use App\Models\video_notice;
use App\Models\OurMember;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Partner;
use App\Models\OurBusiness;
use App\Models\Blog;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Traits\ImageHandleTraits;
use App\Models\Category;
use App\Models\Report;
use App\Models\SubCategory;
use Brian2694\Toastr\Facades\Toastr;
use Exception;
use DB;
class FrontendController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today=\Carbon\Carbon::today()->toDateString();
        $slider=Slider::get();
        /*$notice=Notice::where('published_date', '<=',$today)->where(function ($query) use ($today) {
                            $query->where('unpublished_date', '>',$today);
                            $query->orWhereNull('unpublished_date');
                        })->latest()->limit(12)->get();*/
        $scroll_notice=scroll_notice::get();/*where('published_date', '<=',$today)->where(function ($query) use ($today) {
                            $query->where('unpublished_date', '>',$today);
                            $query->orWhereNull('unpublished_date');
                        })->latest()->limit(12)->get();*/
        $rope_products = Product::where('category_id',1)->where('is_featured',1)->limit(2)->get();
        $twin_products = Product::where('category_id',2)->where('is_featured',1)->limit(2)->get();   
        $hessian_products = Product::where('category_id',3)->where('is_featured',1)->limit(2)->get();
        $all_categories = Category::all();                  
        return view('front.home',compact('slider','scroll_notice','rope_products','twin_products','hessian_products','all_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allNotice()
    {
        $today=\Carbon\Carbon::today()->toDateString();

        $notice=Notice::where('published_date', '<=',$today)->where(function ($query) use ($today) {
            $query->where('unpublished_date', '>',$today);
            $query->orWhereNull('unpublished_date');
        })->paginate(20);

        return view('frontend.notice.notice',compact('notice'));
    }



   
    public function aboutus(){
        return view('front.about');
    }
    public function companydes(){
        return view('front.company-des');
    }
    public function presidentsp(){
        return view('front.president-speech');
    }
    public function management(){
        return view('front.mission');
    }
    public function mision_vision(){
        return view('front.vission');
    }
    public function allproducts(){
        $categories = Category::with(['products' => function ($query) {
            $query->orderBy('serial', 'asc'); // Replace 'your_column_name' with the column you want to order by
        }])->get();
        return view('front.all-products',compact('categories'));
    }
    public function productbycat($id){
        $categories = Category::with(['products' => function ($query) {
            $query->orderBy('serial', 'asc'); // Replace 'your_column_name' with the column you want to order by
        }])->where('id',$id)->get();
        return view('front.productbycat',compact('categories'));
    }
    public function singleproduct($slug){
        $product = Product::where('slug',$slug)->first();
        $product_images = DB::table('product_images')->where('product_id', $product->id)->get();
        //print_r($subcategory);
        return view('front.single-product',compact('product','product_images'));
    }

    public function companyprofile(){
        return view('front.company-profile');
    }
    public function companyhistory(){
        return view('front.company-history');
    }
    public function allbrochure(){
        $ebrochures = Ebrochure::paginate(10);
        return view('front.all-ebrochure',compact('ebrochures'));
    }
    public function singlebrochure($slug){
        $ebrochure = Ebrochure::where('slug',$slug)->first();
        return view('front.single-ebrochure',compact('ebrochure'));
    }
    public function career(){
        $careers =  Career::paginate(10);
        return view('front.career',compact('careers'));
    }
    public function bmscompany(){
        return view('front.bms-company-contact');
    }
    public function bmsrope(){
        return view('front.bms-rope-contact');
    }
    public function bkyjute(){
        return view('front.bms-jute-contact');
    }
}
