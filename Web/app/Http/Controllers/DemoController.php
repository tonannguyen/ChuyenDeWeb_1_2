<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use HTMLDomParser;

class DemoController extends Controller
{
    public function index()
    {
        $html = HTMLDomParser::file_get_html("http://phpcoban.com/");
        foreach($html->find('ul') as $value) 
        {
            foreach($value->find('a ') as $element)
            {
                if($element->title != null)
                    echo'Title: '.$element->title .'<br>';
                else
                echo 'URL: '. $element->href .'<br>';
            }
        }
        
        
    
        
        //return view('demo');
    }
    
}