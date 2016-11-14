<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Client;
use Image;

class ClientsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addClients(Request $request)
    {
        $client = new Client;

        $client->name = $request->name;

        $file = $request->file('logo');

        //set file name
        $filename = uniqid() . ' - ' . $file->getClientOriginalName();
        $client->logo = $filename;

        //move file to correct location

        if(!file_exists('picUploadTestDir/clientsLogo'))
        {
            mkdir('picUploadTestDir/clientsLogo', 0777, true);
        }
        $file->move('picUploadTestDir/clientsLogo', $filename);


        $file = Image::make('picUploadTestDir/clientsLogo/'. $filename)->resize(200, 200)->save('picUploadTestDir/clientsLogo/' . $filename, 80);

        $client->save();

        return back()->with('message', 'New client have been!');

    }

    public function deleteClient(Client $client)
    {
        $LogoToDelete = 'picUploadTestDir/clientsLogo/' . $client->logo;

        if(file_exists($LogoToDelete))
        {
            unlink($LogoToDelete);
        }

        $client->delete();

        return back()->with('message', 'Client was deleted successfully!');
    }
}
