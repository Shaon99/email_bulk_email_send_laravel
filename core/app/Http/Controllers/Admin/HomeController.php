<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GeneralSetting;

use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
  
    public function dashboard()
    {
       
        $data['pageTitle'] = 'Dashboard';
        $data['navDashboardActiveClass'] = "active";
        return view('backend.dashboard')->with($data);
    }

    /*Send-Email*/

    public function sendEmail()
    {
        $data['subscriberActiveClass'] = 'active';
        $data['pageTitle'] = "Email Send To A User";
        return view('backend.email.sendEmailToSubscriber')->with($data);
    }

    public function sendgroupEmail(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $general = GeneralSetting::select('site_email', 'sitename')->first();

        $file = $request->file('attachment');

        if ($file && $file->isValid()) {
            Mail::send([], [], function ($message) use ($request, $file, $general) {
                $message->from(@$general->site_email)
                    ->to($request->email)
                    ->subject($request->subject)
                    ->attach($file->getRealPath(), [
                        'as' => $file->getClientOriginalName(),
                        'mime' => $file->getClientMimeType(),
                    ])
                    ->setBody(view('dynamic_email_template', [
                        'message' => $request->message
                    ])->render(), 'text/html');
            });
        } else {
            Mail::send([], [], function ($message) use ($request, $general) {
                $message->from(@$general->site_email)
                    ->to($request->email)
                    ->subject($request->subject)
                    ->setBody(view('dynamic_email_template', [
                        'message' => $request->message
                    ])->render(), 'text/html');
            });
        }

        return redirect()->back()->with('success', 'E-Mail Successfully Send');
    }


    public function bulkEmail()
    {
        $data['bulkActiveClass'] = 'active';
        $data['pageTitle'] = "Email send to multiple user with Csv file";
        return view('backend.email.sendcsvemail')->with($data);
    }

    public function sendBulkEmail(Request $request)
    {

        $request->validate([
            'csv_file' => 'required|mimes:csv,txt',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $general = GeneralSetting::select('site_email', 'sitename')->first();


        $file = $request->file('csv_file');

        $csv = array_map('str_getcsv', file($file));

        foreach (array_slice($csv, 1) as $email) {
            $file = $request->file('attachment');

            if ($file && $file->isValid()) {
                Mail::send([], [], function ($message) use ($request, $file, $general, $email) {
                    $message->from(@$general->site_email)
                        ->to($email[0])
                        ->subject($request->subject)
                        ->attach($file->getRealPath(), [
                            'as' => $file->getClientOriginalName(),
                            'mime' => $file->getClientMimeType(),
                        ])
                        ->setBody(view('dynamic_email_template', [
                            'message' => $request->message
                        ])->render(), 'text/html');
                });
            } else {
                Mail::send([], [], function ($message) use ($request, $general, $email) {
                    $message->from(@$general->site_email)
                        ->to($email[0])
                        ->subject($request->subject)
                        ->setBody(view('dynamic_email_template', [
                            'message' => $request->message
                        ])->render(), 'text/html');
                });
            }
        }
        return redirect()->back()->with('success', 'E-Mail Successfully Send');
    }


    public function DownloadCSV()
    {
        $pathToFile = storage_path('app/public/emails.csv');
        $headers = [
            'Content-Type' => 'application/csv',
        ];
        $fileName = 'emails.csv';
    
        return response()->download($pathToFile, $fileName, $headers);
    }


    /*End-Send-Email*/
}
