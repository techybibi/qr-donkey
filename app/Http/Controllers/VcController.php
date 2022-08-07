<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use JeroenDesloovere\VCard\VCard;

class VcController extends Controller
{
    public function vcGenerate(Request $request){
        $data = Contact::where('unique_id', $request->uid)->first();

        $vcard = new VCard();

        // add personal data
        $vcard->addName($data->name);

        // add work data
        $vcard->addCompany($data->company);
        $vcard->addEmail($data->email);
        $vcard->addPhoneNumber($data->phone_1);
        $vcard->addPhoneNumber($data->phone_2);
        $vcard->addAddress($data->address);
        $vcard->addURL($data->website_link);
        $vcard->addURL($data->google_map_link);
        $vcard->addPhoto(asset('storage/contact-images/'.$data->image));

        // return vcard as a string
        //return $vcard->getOutput();

        // return vcard as a download
        return $vcard->download();

        // save vcard on disk
        //$vcard->setSavePath('/path/to/directory');
        //$vcard->save();
    }
}
