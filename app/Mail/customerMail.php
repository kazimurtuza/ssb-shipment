<?php

namespace App\Mail;

use App\Models\shipment;
use App\Models\shipment_detail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class customerMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public  $shipment_details;
    public  $shipment_info;
    public function __construct($shipment_id)
    {
        $this->shipment_details=shipment_detail::where('shipment_id',$shipment_id)->get();

        $this->shipment_info=shipment::find($shipment_id);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Seattle sea bridge invoice")->view('invoice_mail');
    }
}
