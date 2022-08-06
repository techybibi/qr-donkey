<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        return view('contact.index',compact('contacts'));
    }

    public function create()
    {

       return view('contact.create');
    }

    public function store(Request $request)
    {
        if(!empty($request->all())){
            $contact = new Contact();
            $contact->unique_id = uniqid();
            $contact->name = $request->name;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(Storage::disk('public')->path('contact-images'),$imageName);
                $contact->image = $imageName;
            }
            $contact->company = $request->company;
            $contact->phone_1 = $request->phone1;
            $contact->phone_2 = $request->phone2;
            $contact->website_link = $request->website_link;
            $contact->google_map_link = $request->google_map_link;
            $contact->address = $request->address;
            $contact->is_redirect = $request->is_redirect;
            $contact->save();
            return redirect()->route('contacts')->with('message','Contact added Successfully');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }

    public function edit($id)
    {
        $contact = Contact::where('unique_id',$id)->first();
        return view('contact.edit',compact('contact'));
    }

    public function update(Request $request,$id)
    {
        if(!empty($request->all())){
            $contact = Contact::where('unique_id',$id)->first();
            $contact->name = $request->name;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(Storage::disk('public')->path('contact-images'),$imageName);
                $contact->image = $imageName;
            }
            $contact->company = $request->company;
            $contact->phone_1 = $request->phone1;
            $contact->phone_2 = $request->phone2;
            $contact->website_link = $request->website_link;
            $contact->google_map_link = $request->google_map_link;
            $contact->address = $request->address;
            $contact->is_redirect = $request->is_redirect;
            $contact->save();
            return redirect()->route('contacts')->with('message','Contact updated Successfully');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }

    public function destroy($id)
    {
        $contact = Contact::where('unique_id',$id)->first();
        $contact->delete();
        return redirect()->route('contacts')->with('message','Contact deleted Successfully');
    }
}
