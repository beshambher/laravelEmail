<?php
/**
 * Created by PhpStorm.
 * User: Bishu
 * Date: 09-Oct-16
 * Time: 9:44 PM
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function contactAction(Request $request)
    {
        $data = $request->all();

        Mail::send('emails.contact', ['user' => $data], function ($m) use ($data) {
            $m->from('support@beshambher.com', 'Bishu');
            $m->to($data['email'], $data['first_name'].' '.$data['last_name'])->subject('Contact Us');
        });

        return redirect()->back();
    }

}