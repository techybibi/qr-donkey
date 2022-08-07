<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use JeroenDesloovere\VCard\VCard;

class QrController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        return view('qr.index',compact('contacts'));
    }

    public function show($unique_id)
    {
        $data = Contact::where('unique_id', $unique_id)->first();
        if($data->is_redirect == 1){
            header('Location: '.$data->website_link);
            exit;
        }else{
            return view('contact.index', compact('data'));
        }
    }

    public function create()
    {

        return view('qr.create');
    }

    public function store(Request $request)
    {
        if(!empty($request->all())){

            $url = uniqid();
            $filename = "/storage/images/qr/".$url.round(microtime(true)).".png";
            \QrCode::size(500)
                ->format('png')
                ->generate(route('qr.show',$url), public_path($filename));

            $contact = new Contact();
            $contact->unique_id = $url;
            $contact->name = $request->name;
            $contact->designation = $request->designation;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(Storage::disk('public')->path('contact-images'),$imageName);
                $contact->image = $imageName;
            }
            $contact->company = $request->company;
            $contact->email = $request->email;
            $contact->phone_1 = $request->phone1;
            $contact->phone_2 = $request->phone2;
            $contact->website_link = $request->website_link;
            $contact->google_map_link = $request->google_map_link;
            $contact->address = $request->address;
            $contact->qr = $filename;
            $contact->is_redirect = $request->is_redirect;
            $contact->save();
            return redirect()->route('qr')->with('message','Contact added Successfully');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }

    public function edit($id)
    {
        $contact = Contact::where('unique_id',$id)->first();
        return view('qr.edit',compact('contact'));
    }

    public function update(Request $request,$id)
    {
        if(!empty($request->all())){
            $contact = Contact::where('unique_id',$id)->first();
            $contact->name = $request->name;
            $contact->designation = $request->designation;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(Storage::disk('public')->path('contact-images'),$imageName);
                $contact->image = $imageName;
            }
            $contact->company = $request->company;
            $contact->email = $request->email;
            $contact->phone_1 = $request->phone1;
            $contact->phone_2 = $request->phone2;
            $contact->website_link = $request->website_link;
            $contact->google_map_link = $request->google_map_link;
            $contact->address = $request->address;
            $contact->is_redirect = $request->is_redirect;
            $contact->update();
            return redirect()->route('qr')->with('message','Contact updated Successfully');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }

    public function destroy($id)
    {
        $contact = Contact::where('unique_id',$id)->first();
        $contact->delete();
        return redirect()->route('qr')->with('message','Contact deleted Successfully');
    }
}
