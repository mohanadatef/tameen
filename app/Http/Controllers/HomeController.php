<?php

namespace App\Http\Controllers;

use App\Http\Requests\TameenCreateRequest;
use App\Test;

use Illuminate\Support\Facades\Cookie;
use Mail;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function index2()
    {
        return view('home2');
    }
    public function index3()
    {
        return view('home3');
    }
    public function store(TameenCreateRequest $request)
    {
        $test = new Test();
        $data=[];
        if($request->budget1 != null)
        {
            $data['budget']=$request->budget1;
        }
        if($request->question2 != null)
        {
            $data['question1']=$request->question2;
        }
        $test->create(array_merge($request->all(),$data));
        $all_emails=array('mostafa.eldeeb@fekretyonline.com','mohamed.assem@fekretyonline.com');
        $data = array(
            'email' => $request->email,
            'bodyMessage' =>
                "<h3>Name: </h3>" . $request->name . "<br>" .
                "<h3>Email: </h3>" . $request->email . "<br>" .
                "<h3>Mobile: </h3>" . $request->mobile . "<br>" .
                "<h3>في الوقت الحالي كيف تدير وثائق التأمين الخاصه بعملائك؟: </h3>" . $request->question1 . "<br>" .
                "<h3>هل تعتقد انه باستخدامك لنظام الكتروني لاداره الوثائق سيساعدك علي خدمه عملائك بشكل افضل ويخفض تكلفه الخدمه؟: </h3>" . $request->question3 . "<br>" .
                "<h3>ما هو الأشتراك الشهري (للمستخدم الواحد) المناسب من وجهه نظرك؟:  </h3>" . $request->budget . "<br>" .
                "<h3>ما هي أهم الخصائص التي يجب توافرها في البرنامج من وجهه نظرك؟: </h3>" . $request->service . "<br>",

            'to_emil'=>$all_emails
        );
        Mail::send('mail', $data, function ($message) use ($data) {
            if($data['email']==null)
            {
            $message->from('info@fekretyonline.com');
            }
            else
            {
                $message->from($data['email']);
            }
            $message->to($data['to_emil']);
            $message->subject('Tameen Request');
        });

        return redirect('thank')->withCookie('thank', 'Done', 10);
    }

    public function thank()
    {

        return view('thank');
    }
    public function thank1()
    {

        return view('thank1');
    }
    public function thank2()
    {

        return view('thank2');
    }
    public function download()
    {
        if (Cookie::get('thank') != null) {
            return response()->download('storage/app/public/insurance content creation.pdf');
        }
    }
}
