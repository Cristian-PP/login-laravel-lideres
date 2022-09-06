<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Imports\UsersImport;
use App\Imports\Users2Import;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Suppor\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\File;


class AffiliatesController extends Controller
{


    public function __construct()
    {
        $this->middleware('can:affiliates');
        $this->middleware('auth');
    }

    //AFFILIADOS
    public function members()
    {
        $user = User::all();
        
        return view('affiliates', compact('user'));
    }

    //EDITAR AFFILIADOS
    public function edit($id)
    {
        $user = User::find($id);

        return view('edit', compact('user'));
    }

    //ACTUALIZAR AFILIADOS
    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->clave = $request->clave;
        $user->save();

        return redirect()->route('affiliates.members', $user);
        

    }


     //UPLOAD
    // public function upload(Request $request)
    // {
    //             // $request->validate([
    //             //     'fileCsv'    => 'required'
    //             // ]);
    
    
    //             // $file = $request->file('fileCsv')->store('public');
    //             // $url    = Storage::url($file);
    //             // $file      = fopen(public_path($url), 'r');
    
    
    //             // return redirect()->route('upload')->with('alert', 'Se han subido correctamente');
    //     return view('upload');

   
    // }


    //IMPORT-EXPORT FILE
    public function fileImportExport()
    {
       return view('affiliates-import');
    }

   

    //IMPORT FILE
    public function fileImport(Request $request) 
    {

        return view('affiliates-import');


        if ($request->file('file') == null) {
            $file = "";
        }else {
        Excel::import(new UsersImport, $request->file('file')->store('temp'));

        return back()->with('success', 'Importación completada!');

        }
    }



    // VALIDATE AND IMPORT DATA 
   public function validateAndImportdata(Request $request){

      Excel::import(new Users2Import, "user.xlsx");
      return back()->with('success', 'Import successfully!');
   }
    
        
      

   //IMPORT OTHER METHOD
    public function uploadContent(Request $request)
    {
        $file = $request->file('uploaded_file');
        if ($file) 
        {
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension(); //Get extension of uploaded file
            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize(); //Get size of uploaded file in bytes
            //Check for file extension and size
            $this->checkUploadedFileProperties($extension, $fileSize);
            //Where uploaded file will be stored on the server 
            $location = 'uploads'; //Created an "uploads" folder for that
            // Upload file
            $file->move($location, $filename);
            // In case the uploaded file path is to be stored in the database 
            $filepath = public_path($location . "/" . $filename);
            // Reading file
            $file = fopen($filepath, "r");
            $importData_arr = array(); // Read through the file and store the contents as an array
            $i = 0;
            //Read the contents of the uploaded file 
            while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) 
            {
                $num = count($filedata);
                // Skip first row (Remove below comment if you want to skip the first row)
                if ($i == 0) 
                {
                    $i++;
                    continue;
                }
                for ($c = 0; $c < $num; $c++) 
                {
                    $importData_arr[$i][] = $filedata[$c];
                }
                $i++;
            }
            fclose($file); //Close after reading
            $j = 0;
            foreach ($importData_arr as $importData) 
            {
                $name = $importData[1]; //Get user names
                $email = $importData[2]; //Get the user emails
                $j++;
                try 
                {
                    DB::beginTransaction();
                    User::create([
                        'name' => $importData[1],
                        'email' => $importData[2],
                        'clave' => $importData[3],
                        'password' => $importData[4]
                    ]);
                    //Send Email
                    $this->sendEmail($email, $name);
                    DB::commit();
                } 
                catch (\Exception $e) 
                {
                    //throw $th;
                    DB::rollBack();
                }
            }
            return response()->json([
                'message' => "$j Archivo subido correctamente"
            ]);

            
        } 
        // else 
        // {
        //     //no file was uploaded
        //     throw new \Exception('No file was uploaded', Response::HTTP_BAD_REQUEST);
        // }
    }



    //PROPIEDADES DE LA IMPORTACIÓN
    public function checkUploadedFileProperties($extension, $fileSize)
    {
        $valid_extension = array("csv", "xlsx"); //Only want csv and excel files
        $maxFileSize = 2097152; // Uploaded file size limit is 2mb
        if (in_array(strtolower($extension), $valid_extension))
        {
            if ($fileSize <= $maxFileSize) 
            {
            } 
            else 
            {
                throw new \Exception('No file was uploaded', Response::HTTP_REQUEST_ENTITY_TOO_LARGE); //413 error
            }
        } 
        else
        {
            throw new \Exception('Invalid file extension', Response::HTTP_UNSUPPORTED_MEDIA_TYPE); //415 error
        }
    }


    //SEND EMAIL TO USERS
    // public function sendEmail($email, $name)
            // {
            //     $data = array(
            //         'email' => $email,
            //         'name' => $name,
            //         'subject' => 'Welcome Message',
            //     );
            //     Mail::send('welcomeEmail', $data, function ($message) use ($data) {
            //         $message->from('welcome@myapp.com');
            //         $message->to($data['email']);
            //         $message->subject($data['subject']);
            //     });
            // }


}
