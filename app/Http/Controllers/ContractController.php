<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Mail\SendEmailTrial;
use App\Models\AMModel;
use App\Models\ContractModel;
use Illuminate\Support\Facades\Mail;
// to send email manual
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContractController extends BaseController
{
    public function registeredCompany($id)
    {
        $product =  DB::table('produk')->get();

        $am = DB::table('account_manager')->get();

        $comp = DB::table('customer')
        ->where('id', '=', $id)
        ->first();

        return view('form_contract', ['company' =>$comp]) //id ini punya company
        ->with(['product' => $product])
        ->with(['am' => $am]);
    }

    public function editContract($idContr)
    {
        $product =  DB::table('produk')->get();

        $am = DB::table('account_manager')->get();

        $contr =  DB::table('contract')
        ->where('id', '=', $idContr)
        ->first();

        $idCust = $contr->Customer_id;

        $comp = DB::table('customer')
        ->where('id', '=', $idCust)
        ->first();

        return view('form_contract', ['company' =>$comp])
        ->with(['records' => $contr])
        ->with(['product' => $product])
        ->with(['am' => $am]);
    }


    public function allContract()
    {
        $contract = DB::table('contract AS c')
        ->join('produk AS p', 'c.produk_idProduk', '=', 'p.id')
        ->join('account_manager AS a', 'c.account_manager_id', '=', 'a.id')
        ->join('customer AS u', 'c.customer_id', '=', 'u.id')
        //->select('c.no_surat', 'c.start_date', 'c.end_date', 'c.payment_status' , 'p.name AS productname', 'u.company', 'a.first_name',' a.last_name')
        ->get();

        return view('index', ['contract' =>$contract]);
    }

    public function report()
    {
        $contract = DB::table('contract AS c')
        ->join('produk AS p', 'c.produk_idProduk', '=', 'p.id')
        ->join('account_manager AS a', 'c.account_manager_id', '=', 'a.id')
        ->join('customer AS u', 'c.customer_id', '=', 'u.id')
        //->select('c.no_surat', 'c.start_date', 'c.end_date', 'c.payment_status' , 'p.name AS productname', 'u.company', 'a.first_name',' a.last_name')
        ->get();

        return view('contract-report', ['contract' =>$contract]);
    }

    public function paymentInfo($id)
    {
        $contr =  DB::table('contract AS c')
        ->join('produk AS p', 'c.produk_idProduk','=','p.id')
        ->join('account_manager AS a', 'c.account_manager_id', '=', 'a.id')
        ->join('customer AS u', 'c.customer_id', '=', 'u.id')
        ->join('customer_contact_person AS cp', 'u.id', '=', 'cp.id')
        ->select('c.id','c.no_surat', 'c.start_date', 'c.end_date', 'c.payment_status', 'p.name AS product',  'p.price', 'u.company', DB::raw('concat( a.first_name," ",a.last_name) AS am'), DB::raw('concat( cp.first_name," ",cp.last_name) AS cp'))
        ->where('c.id','=',$id)
        ->first();

        return view('form_payment', ['records' => $contr]);
    }

    public function addPayment(Request $request,$id)
    {
        $contract = ContractModel::find($id);

        $contract->payment_status = '1';
        $contract->payment_bank = $request->input('bank_name');
        $contract->bank_account_id = $request->input('norek');
        $contract->bank_account_name = $request->input('bank_acc');
        $contract->save();

        return redirect('/contractctr')
        ->with('status', 'payment');
    }

    public function mailManual()
    {
        $contract = DB::table('contract AS c')
        ->join('produk AS p', 'c.produk_idProduk', '=', 'p.id')
        ->join('account_manager AS a', 'c.account_manager_id', '=', 'a.id')
        ->join('customer AS u', 'c.customer_id', '=', 'u.id')
        //->select('c.no_surat', 'c.start_date', 'c.end_date', 'c.payment_status' , 'p.name AS productname', 'u.company', 'a.first_name',' a.last_name')
        ->get();

        return view('emailmanual', ['contract' =>$contract]);
    }

    public function mailReady($id)
    {
        $id = 1;

        $contract = DB::table('contract AS c')
        ->join('produk AS p', "c.produk_idProduk", '=', 'p.id')
        ->join('account_manager AS a', 'c.account_manager_id', '=', 'a.id')
        ->join('customer AS u', 'c.customer_id', '=', 'u.id')
        ->join('customer_contact_person AS cp', 'cp.Customer_id', '=', 'u.id')
        ->select('c.no_surat', 'c.start_date', 'c.end_date', 'p.name AS productname', 'p.price', 
        'u.company', DB::raw('concat(u.city, " ", u.district) AS address'), 'u.email AS emailcomp',
        DB::raw('concat(cp.first_name, " ", cp.last_name) AS cpname'), 'cp.no_ktp', 'cp.no_telp AS cptelp', 'cp.email AS cpemail', 
        DB::raw('concat(a.first_name, " ", a.last_name) AS amname'), 'a.email AS amemail','a.phone_number AS amtelp')
        ->where('c.id', '=', $id)
        ->first();

        $compaddr = $contract->emailcomp;

        Mail::to($compaddr)->send(new SendEmailTrial($contract));
 
        return redirect('/mailmanual')
        ->with('status', 'send');
    }

    public function putData(Request $request, $id)
    {
        if ($id == null) {
            $contract = new ContractModel;
        }else {
            $contract = ContractModel::find($id);
        }

        $contract->no_surat = $request->input('no_surat');
        $contract->start_date = $request->input('start_date');
        $contract->end_date = $request->input('end_date');
        $contract->payment_status = $request->input('payment_status');
        $contract->payment_bank = $request->input('payment_bank');
        $contract->bank_account_id = $request->input('bank_account_id');
        $contract->bank_account_name = $request->input('bank_account_name');
        $contract->Account_Manager_id = $request->input('am_name');
        $contract->Produk_idProduk = $request->input("product_name");
        $contract->Customer_id = $request->input("company_id");
        $contract->save();

        if ($id === null) {
            $string = "input";
        }
        else{
            $string = "edit";
        }
        return redirect('/contractctr')
        ->with('status', $string);
    }

    public function postData(Request $request)
    {
        $contract = new ContractModel;
        
        $contract->no_surat = $request->input('no_surat');
        $contract->start_date = $request->input('start_date');
        $contract->end_date = $request->input('end_date');
        $contract->payment_status = $request->input('payment_status');
        $contract->payment_bank = $request->input('payment_bank');
        $contract->bank_account_id = $request->input('bank_account_id');
        $contract->bank_account_name = $request->input('bank_account_name');
        $contract->Account_Manager_id = $request->input('am_name');
        $contract->Produk_idProduk = $request->input("product_name");
        $contract->Customer_id = $request->input("company_id");
        $contract->save();

        return redirect('/contractctr')
        ->with('status', 'input');
    }

    public function teleReady()
    {
        # code...
        //https://api.telegram.org/bot1606888740:AAG_-owDu7HIJETtmQWoHZwekISlDrtNO-o/getupdates -> ambil room id dari sini
        //https://api.telegram.org/bot1606888740:AAG_-owDu7HIJETtmQWoHZwekISlDrtNO-o/sendMessage?chat_id=1532934926&text=testing -> send kesini
    }

    
    function sendMail(Request $request){
        
        $subject = "Contact dari " . $request->input('name');
        $name = $request->input('name');
        $emailAddress = $request->input('email');
        $message = $request->input('message');

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            // Pengaturan Server
           // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.mail.yahoo.com';                  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'alamatemailkamu@yahoo.com';                 // SMTP username
            $mail->Password = 'Passw0rdEmailKamu';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            // Siapa yang mengirim email
            $mail->setFrom("alamatemailkamu@yahoo.com", "Ardianta Pargo");

            // Siapa yang akan menerima email
            $mail->addAddress('info@petanikode.com', 'Petani Kode');     // Add a recipient
            // $mail->addAddress('ellen@example.com');               // Name is optional

            // ke siapa akan kita balas emailnya
            $mail->addReplyTo($emailAddress, $name);
            
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
            return view('contact-form');

        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }

    }

    

}