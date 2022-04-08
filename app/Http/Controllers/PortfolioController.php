<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;
use App\Models\skills;
use App\Models\education;
use App\Models\experience;
use App\Models\portfolio;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class PortfolioController extends Controller
{
    public function index()
    {
        $about = about::firstOrFail();
        $skills = skills::all();
        $education = education::latest()->get();
        $experience = experience::latest()->get();
        $portfolio = portfolio::all();
        $projects = portfolio::count();

        return view('Homepage.index', compact([
            'about', 'skills',
            'education', 'experience', 'portfolio', 'projects'
        ]));
    }

    public function index2()
    {
        $about = about::firstOrFail();
        $skills = skills::all();
        $education = education::all();
        $experience = experience::latest()->get();
        $portfolio = portfolio::all();
        $projects = portfolio::count();

        return view('Homepage2.index', compact([
            'about', 'skills',
            'education', 'experience', 'portfolio', 'projects'
        ]));
    }

    public function getPortfolio($id)
    {
        $getPortfolio = portfolio::find($id);
        foreach ($getPortfolio->images as $data) {
            $images[] = $data->filename;
        }
        foreach ($getPortfolio->tags as $data2) {
            $tags[] = $data2->tags_name;
        }
        return response()->json([
            'data' => $getPortfolio,
        ]);
    }

    public function sendMail(Request $request)
    {
        $subject = $request->input('subject') . $request->input('name');
        $name = $request->input('name');
        $emailAddress = $request->input('email');
        $message = $request->input('message');

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            // Pengaturan Server
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';                  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'business.taufikhdyt@gmail.com';                 // SMTP username
            $mail->Password = '#{BusinessTH060601}';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            // Siapa yang mengirim email
            $mail->setFrom($emailAddress, $name);

            // Siapa yang akan menerima email
            $mail->addAddress('business.taufikhdyt@gmail.com', 'Taufik Hidayat');     // Add a recipient
            // $mail->addAddress('ellen@example.com');               // Name is optional

            // ke siapa akan kita balas emailnya
            // $mail->addReplyTo($emailAddress, $name);

            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name


            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->AltBody = $message;

            $mail->send();

            $request->session()->flash('status', 'Terima kasih, kami sudah menerima email anda.');
            return redirect()->route('homepage.index');
        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }

    public function sendMail2(Request $request)
    {
        $subject = $request->input('subject') . $request->input('name');
        $name = $request->input('name');
        $emailAddress = $request->input('email');
        $message = $request->input('message');

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            // Pengaturan Server
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'mail.taufikhdyt.com';                  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'me@taufikhdyt.com';                 // SMTP username
            $mail->Password = '#{TaufikHdyt060601}';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to

            $mail->setFrom('me@taufikhdyt.com', 'Taufik Hidayat');
            $mail->addAddress('taufikhdyt2332@gmail.com', 'Taufik Hidayat');
            // Siapa yang mengirim email
            // $mail->setFrom($emailAddress, $name);
            
            // Siapa yang akan menerima email
            // $mail->addAddress('me@taufikhdyt.com', 'Taufik Hidayat');     // Add a recipient
            // $mail->addAddress('ellen@example.com');               // Name is optional

            // ke siapa akan kita balas emailnya
            // $mail->addReplyTo($emailAddress, $name);

            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name


            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->AltBody = $message;

            $mail->send();

            $request->session()->flash('status', 'Terima kasih, kami sudah menerima email anda.');
            return redirect()->route('homepage2.index2');
        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            return redirect()->route('homepage2.index2');
        }
    }
}
