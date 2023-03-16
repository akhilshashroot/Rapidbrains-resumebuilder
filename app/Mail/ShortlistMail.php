<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Talent;

class ShortlistMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = $this->data ;
    
        $subject  = 'Interview Slot Confirmation';
       
        $talent=Talent::find( $data->talent_id);
        $to_address=$talent->email;
        $url=env('APP_URL').'/interview/confirm?interview_id='.$data->id.'&token='.$data->token;
        return $this->to($to_address)->from('site@stakefield.com', 'Stakefield Talent')
        ->subject($subject)
        ->view('Recruiter.mail.shortlist', ['url' => $url,'name'=> $talent->name]);
        }
}
