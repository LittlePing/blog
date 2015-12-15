<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
class MailController extends Controller
{
    public function send()
    {
    	$name = "wuxiaoping";
    	$flag = Mail::send('emails.test',['name'=>$name],function($message){
    		$to = '1164890446@qq.com';
    		$message ->to($to)->subject('test');
    	});
    	if($flag){
    		echo 'send success ,please receiving';
    	}
    	else{
    		echo 'send failed';
    	}
    }
}