<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Parsedown;

class ApiDocController extends Controller
{
    public function __construct(){
        $this->markdownParser = new Parsedown();
    }

    public function showDoc(Request $request){
        $fileContent = file_get_contents(storage_path('doc/admin_api.md'));
        $htmlContent = $this->convertMarkdownToHtml($fileContent);
        $content = $this->convertMarkdownToHtml($htmlContent);
        return view('apidoc_admin')->with('content',$content);
    }

    public function convertMarkdownToHtml($markdown)
    {
        $convertedHmtl = $this->markdownParser->setBreaksEnabled(true)->text($markdown);
        return $convertedHmtl;
    }
}
