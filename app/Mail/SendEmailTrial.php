<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmailTrial extends Mailable
{
    use Queueable, SerializesModels;
    //public $id;
    public $info;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->info = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd($this->info);
        // return $this->from('sender@gmail.com')
        //            ->view('mailTemplate') // view dikirim ke email
        //            ->with(
        //             [
        //                 'nama' => 'Amel', // pass hasil request disini isi ke view
        //                 'website' => 'www.telkMalang.com',
        //             ]);

        return $this->from('sender@gmail.com')
                   ->view('mailTemplate') // view dikirim ke email
                   ->with(['data' => $this->info]);
                   //->with(['nama' => 'Amel']);
    }
}
