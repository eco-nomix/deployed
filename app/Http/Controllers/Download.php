<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as HttpRequest;
use Symfony\Component\HttpFoundation\File\File as FileInfo;

class Documents extends Controller
{
    public $request;

    public $authUser;


    /**
     * Download the specified resource.
     *
     * @param $requestId
     * @param $documentId
     *
     * @return \Illuminate\Http\Response
     * @internal param Document $model
     */
    public function download($file)
    {
        return Response::download($file);
    }

    public function downloadAll($requestId, Index $index)
    {
        $documents = $index->getData($requestId);
        return json_encode($documents->toArray());
    }



    /**
     * @param $document
     *
     * @return mixed
     */
    protected function downloadFile($document)
    {
        $documentInfo = new FileInfo($document->path);
        // $headers = ['Content-Type' => $documentInfo->getMimeType(),'Content-Disposition'=>'attachment; filename="'.$document->name.'"'];
        //  return response()->download($document->path), $document->name, $headers);
        return response()->make(
            \File::get($document->path),
            200,
            [
                'Content-Type' => $documentInfo->getMimeType(),
                'Content-Disposition' => 'attachment; filename="' . $document->name . '"'
            ]
        );
    }

    /**
     * @param $document
     *
     * @return mixed
     */
    protected function downloadUrl($document)
    {
        return redirect()->away($document->path);
    }
}
