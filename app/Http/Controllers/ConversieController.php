<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\SendMail;
use App\Rules\Domain;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use function Symfony\Component\String\s;

class ConversieController extends Controller
{
    private function sendData($data)
    {
        $request = \request();
        $report = [];


        foreach ($data as $key => $stepData) {
            foreach ($stepData as $datum) {
                $report[$key][1] = $datum;
            }
        }

        Mail::to(env("EMAIL_ADDRESS_TO_SEND_MAILS"))->send(new SendMail($data));

        $postData = [
            'token' => env('API_TOKEN'),
            'report' => $report
        ];

        if (Session::has('id')) {
            $postData['id'] = Session::get('id');
        }

        if ($request->has('name') && $request->has('email')) {
            $postData['name'] = $request->name;
            $postData['email'] = $request->email;
            $postData['code'] = $request->code;
        }

        return Http::withHeaders([
            'accept' => 'application/json',
            'Content-Type' => 'application/json'
        ])->post(env('API_URL'), $postData);

    }
    public function next(Request $request)
    {
        $request->validate([
            "step" => "required|integer",
        ]);
        if ($request->step >8){
            return redirect()->route("home");
        }
        $step = $request->step;

        // save data in session as array
        $data = Session::get('data');
        if (!$data) {
            $data = [];
        }
        $data[$step] = $request->all();
        Session::put('data', $data);

        // if step 8, send data to API
        if ($step == 8) {
            $response = $this->sendData($data);
            if ($response->successful()) {
                Session::put('id', $response->json()['id']);
            }
        }

        // redirect to next step
        $step++;
        return redirect()->route('conbot.step', ['step' => $step]);
    }

    public function step($step)
    {
        $stepData = [];
        $data = Session::get('data');

        if ($data) {
            $stepData = $data[$step] ?? [];
        }

        $view = "step" . $step;

        if ($step == 8) {
            $this->sendData($data);
        }

        return view($view, [
            "stepData" => $stepData,
            "data" => $data,
            "step" => $step
        ]);
    }

}
