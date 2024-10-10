<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Dotenv\Parser\Lexer;
use Exception;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use nadar\quill\Lexer as QuillLexer;
use Symfony\Component\Finder\SplFileInfo;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    ################################################################
    ###########     Own Helper function ############################
    ################################################################

    //for dropzone file upload
    function storeTempFile(Request $request)
    {
        $path = storage_path('tmp/uploads');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('file');

        $name = uniqid() . '_' . trim($file->getClientOriginalName());

        $file->move($path, $name);

        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }

    //this function will convert SplFileInfo to UploadedFile as files bag
    function convertSplFileInfoToUploadedFile(SplFileInfo $file, string $originalName = null) {
        try
        {
             // Create a temporary file
            // $tempFile = tempnam('D:\xampp\tmp', 'uploaded_file');
            $tempFile = tempnam(sys_get_temp_dir(), 'uploaded_file');

            // Copy the SplFileInfo content to the temporary file
            copy($file->getPathname(), $tempFile);

            // Create an UploadedFile instance
            $uploadedFile = new UploadedFile(
                $tempFile,
                $originalName ?? $file->getFilename(),
                'image/png',
                UPLOAD_ERR_OK,
                true // Indicates that the file is a real file
            );

            // Clean up the temporary file when the uploaded file is destroyed
            register_shutdown_function(function () use ($tempFile) {
                unlink($tempFile);
            });

            return $uploadedFile;
        }
        catch(Exception $e)
        {
            return [];
        }

    }

    //Upload images
    function fileUpload($file, $model, $storageType='local',$image_index = 0): array
    {

        try {
            if($storageType == 'local'){
                $extension = $file->getClientOriginalExtension();
                $filename = $model->id.'_'.$image_index.'.'.$extension;
                // $filename = $model->id.'_'.time().'.'.$extension;


                $path = 'images'.'/'.$model->getTable().'/';

                $folder = public_path('/storage/'.$path);
                if (!File::exists($folder)) {
                File::makeDirectory($folder, 0775, true, true);
                }

                $file->move($folder, $filename);
                $image = url('/storage/' . $path . $filename);

                $datas = [
                'filename' => $filename,
                'filepath' =>'/storage/'.$path.$filename,
                'url'=> $image,
                'original_name'=> $file->getClientOriginalName(),
                'filetype' =>  $file->getClientMimeType(),
                'created_by' => auth()->user()->id,
                ];
                return $datas;
            }
            else{
                return [];
            }
        } catch (Exception $e) {
            return [];
        }
    }
}



////////////////////////////////////////////////////////////////
/////////////// MarketPlace Controller /////////////////////////
////////////////////////////////////////////////////////////////


