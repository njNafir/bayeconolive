<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\CreateContactRequest;
use App\Models\Contact;

use App\Http\Requests\CreateInvestorRequest;
use App\Models\Investor;
use App\Models\InvestorAdditionMachine;
use App\Models\InvestorAttachment;
use App\Models\InvestorManpower;
use App\Models\InvestorProduction;
use App\Models\InvestorProjection;
use App\Models\InvestorShareholderPaid;
use App\Models\InvestorShareholderSponsor;

use DB;
use Flash;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function page_show($id){
        $page = \App\Page::find($id);
        return view('front.pages.pages.show', compact('page'));
    }
    public function blogs(){
        $blogs = \App\Models\Blog::latest()->active()->paginate(10);
    	return view('front/pages/blogs/index')->with('blogs', $blogs);
    }

    public function blog_show($id){
        $blog = \App\Models\Blog::find($id);
    	return view('front/pages/blogs/show')->with('blog', $blog);
    }

    public function member_show($id){
        $member = \App\Models\Member::find($id);
        return view('front/pages/members/show')->with('member', $member);
    }

    public function investor_store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'address' => 'required',
            'address' => 'required',
            'message_type' => 'required',
            'message_details' => 'required',
            
        ]);;

        try {
            DB::beginTransaction();

            $input = $request->all();
            $investor = Investor::create($input);

            DB::commit();

            Flash::success('We have got your request successfully.');

        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['status' => 'error', 'message' => 'Something Went Wrong!']);
        }



        return back();
    }

    public function home(){
        return view('front/pages/home');
    }

    public function facilities(){
        return view('front/pages/static/facilities');
    }

    public function gallery(){
        return view('front/pages/static/gallery');
    }

    public function videos(){
        return view('front/pages/static/videos');
    }

     public function important_links(){
        return view('front/pages/static/important_links');
    }
    

    public function blog(){
        return view('front/pages/static/blog');
    }

    public function explore(){
        return view('front/pages/static/explore');
    }

    public function about_us(){
        return view('front/pages/static/about_us');
    }

    public function contact(){
        return view('front/pages/static/contact');
    }

    public function investor(){
        return view('front/pages/static/investor');
    }

    public function investor_vue(){
        return view('front/pages/static/investor_vue');
    }


    public function contact_store(CreateContactRequest $request)
    {
        $input = $request->all();
        $contact = Contact::create($input);
        Flash::success('Contact saved successfully.');
        return back();
    }

    


}
