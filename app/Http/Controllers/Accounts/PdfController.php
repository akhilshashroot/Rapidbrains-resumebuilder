<?php

namespace App\Http\Controllers\Accounts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
use Response;
use Elibyy\TCPDF\Facades\TCPDF;
use App\Models\HashrootpInvoice;
use App\Models\HashrootsInvoice;
use App\Models\HashrootssInvoice;
use App\Models\HRTInvoice;
class PdfController extends Controller
{
    public function generateInvoice(Request $request,$inv_id,$table) {
        if($table =='hashrootp_invoice'){
            $address=nl2br("HashRoot Technologies").'<br>'.
            nl2br("23, Leisure Ville, Rajagiri Valley, Kakkanad")."<br>".
            nl2br("Kochi 682039, Kerala, India")."<br>".
            nl2br("GSTIN : 32AGMPT4852F1Z7")."<br>".
            nl2br("PAN : AGMPT4852F<br>LUT (ARN Number) : AD320322007059N");
            $invo_details = HashrootpInvoice::with('hsn')->where('invoice_id',$inv_id)->first();

            $invo_details->bank_details = '<p>'.
            nl2br('Account No : 001005010158').'<br>'.
            nl2br('IFSC Code : ICIC0000010').'<br>'.
            nl2br('SWIFT No : ICICINBB010').'<br>'.
            nl2br('Bank Name : ICICI Bank Ltd, INDIA').'<br>'.
            nl2br('Address : Emgee Square,MG Road,Kochi,Kerala,India').'</p>';
           
        }
        if($table =='hashroots_invoice' || $table =='hrt_invoice'){

			$address=nl2br("HashRoot Solutions Pvt Ltd")."<br>".

            nl2br("11th Floor, Heavenly Plaza,")."<br>".

            nl2br("Vazakkala, Kakkanad, Kerala - 682021, India")."<br>".

            nl2br("www.hashroot.in | info@hashroot.in")."<br>".

            nl2br("+91 484 404 1618")."<br>".

            nl2br("GSTIN : 32AADCH2247J1ZT");
                            if($table =='hashroots_invoice') {
                                $invo_details = HashrootsInvoice::with('hsn')->where('invoice_id',$inv_id)->first();
                            }
                            if($table == 'hrt_invoice' ) {
                                $invo_details = HRTInvoice::with('hsn')->where('invoice_id',$inv_id)->first();
                            }
                            $invo_details->bank_details = '<p>'.
                            nl2br('Account No : 001005011462').'<br>'.
                            nl2br('IFSC Code : ICIC0000010').'<br>'.
                            nl2br('SWIFT No : ICICINBB010').'<br>'.
                            nl2br('Bank Name : ICICI Bank Ltd, INDIA').'<br>'.
                            nl2br('Branch Address : Padma junction, MG Road, Kochi, Kerala, India').
                                       '</p>';

		}
        if($table =='hashrootss_invoice'){
			$address="HashRoot Software Services<br/>

            11th Floor, Heavenly Plaza<br/>

            Vazakkala, Kochi 682021, Kerala, India<br/>

              www.hashroot.com&nbsp;|&nbsp;info@hashroot.com <br/>";
                                $invo_details = HashrootssInvoice::with('hsn')->where('invoice_id',$inv_id)->first();

		}
        $quantity = $invo_details->quantity;

		$paid_status = $invo_details->paid_status;
        $addressTo='';
        $tax = '';
        $gst = '';
        $paid_status_text='';
        if($paid_status =='Paid')
		{

			$paid_status_text="PAID";

		}
        if($invo_details->origin=='International'){

			$addressTo =nl2br($invo_details->client_name).'<br>

								'.nl2br($invo_details->address).'<br>

								'.nl2br($invo_details->country);

			$rate	=	$invo_details->amount;

			$amount	=	$invo_details->amount;

			

		} else{

			$addressTo =nl2br($invo_details->client_name).'<br>

								'.nl2br($invo_details->address).'<br>

								'.nl2br($invo_details->state).',&nbsp;

								'.nl2br($invo_details->country).'<br>GSTIN 

								'.nl2br($invo_details->gstin).'<br>

								';

			$rate	=	$invo_details->gstvoid;



			if($invo_details->state=='Kerala'){

				$tax ='<tr>

								<td style="text-align:right;">CGST @ 9% on '.$rate.'</td>

								<td style="text-align:center;">:</td>

								<td style="text-align:left">'.$invo_details->currency.'&nbsp;'.$invo_details->CGST.'</td>

								</tr>

								<tr>

								<td style="text-align:right;">SGST @ 9% on '.$rate.'</td>

								<td style="text-align:center;">:</td>

								<td style="text-align:left">'.$invo_details->currency.'&nbsp;'.$invo_details->SGST.'</td>

								</tr>

								';

								$amount	=	$invo_details->amount;

				

				

				$gst ='9% CGST 9% SGST';

								

			}



			else{



				$tax ='<tr>

								<td style="text-align:right;">IGST @ 18% on '.$rate.'</td>

								<td style="text-align:center;">:</td>

								<td style="text-align:left">'.$invo_details->currency.'&nbsp;'.$invo_details->IGST.'</td>

								</tr>

								';

								$amount	=	$invo_details->amount;

				

				

				$gst ='18% IGST';

			}



		}
        $descrip_detailss = [];
        $descrip_details = [];
        $rate_subtotal_new=0;
        $hashrootIn=$hashrootCount=$gst_rate="";
        $sub_total=0;
        //dd($invo_details->description);
        /*if($invo_details->description) {
            $i=0;
            $description_data=unserialize($invo_details->description);
            $description_data=$invo_details->description;
            foreach($description_data as $det) {
                $i++;
                $descrip_details['sl_no'] = $i;
                $descrip_details['description'] = $det['description'];
                $rate_subtotal_new +=$det['total'];

              //  $descrip_details['qty']=($det['quantity'])?$det['quantity']:'';
                $descrip_details['rate']=$det['total'];
                $descrip_details['amount']=$det['total'];
                array_push($descrip_detailss,$descrip_details);
            }
        }*/
        if($invo_details->is_new) {

            $data_array1=array();
           
            $hashrootpIn['description']=unserialize($invo_details->description);
            $hashrootpIn['total']=unserialize($invo_details->total);
            $hashrootpIn['quantity']=unserialize($invo_details->quantity);
            $hashrootCount=count($hashrootpIn['description']);
            if(count($hashrootpIn['description'])>0){
             for($i=0;$i<count($hashrootpIn['description']);$i++){
              
                if(count($hashrootpIn['description'])>0){
                   $da['description']=$hashrootpIn['description'][$i];
                
                }
                if(count($hashrootpIn['total'])>0){
                    $da['total']=$hashrootpIn['total'][$i];
                    $sub_total+=$da['total'];
                    if($gst){
                        $da['gst_toal']=($hashrootpIn['total'][$i]*18)/100+$hashrootpIn['total'][$i];
                    }
                   
                }
                if(count($hashrootpIn['quantity'])>0){
                    $da['quantity']=$hashrootpIn['quantity'][$i];
                    $da['id']=$i+1;
                    array_push( $data_array1,$da);
                }
             }
            
         

        }
        $hashrootIn=$data_array1;

          }
      
        $bank_details=$invo_details->bank_details;
        $invo_details_hsn=isset($invo_details->hsn)?$invo_details->hsn->hsn_val:"";
    	$data = [
    		'title' => 'Hello world!',
            'address' => $address,
            'quantity' => $quantity,
            'paid_status' => $paid_status_text,
            'addressTo' => $addressTo,
            'tax' => $tax,
            'gst' => $gst,
            'rate' => $rate,
            'amount' => $amount,
            'rate_subtotal_new' =>$rate_subtotal_new,
            'descrip_details' => $descrip_details,
            'descrip_detailss' => $descrip_detailss,//now using
            'invo_details' =>$invo_details,
            'invo_details_hsn' => $invo_details_hsn,
            'bank_details'=> $bank_details,
            'hashrootIn'=> $hashrootIn,
            'hashrootCount' =>$hashrootCount,
            'sub_total'=>number_format((float)$sub_total, 2, '.', ''),
    	];
       // dd($data);
     // return View('sample', $data);
        if($invo_details->is_new) {
        $view = \View::make('sample_old', $data);///note::sample_old means pdf for new version ie;laravel
        } else {
           
        $view = \View::make('sample', $data);///note::sample_old means pdf for old version ie;codeigniter
        }
        $html = $view->render();

    	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        
        $pdf::SetAuthor('HashRoot');
        $pdf::SetTitle('HashRoot Invoice');
        $pdf::SetSubject('HashRoot Limited');
        $pdf::SetKeywords('HashRoot');
        $pdf::setPrintHeader(false);

		$pdf::setPrintFooter(false);
        $pdf::setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));

		$pdf::setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
        $pdf::SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);



		// set margins

		$pdf::SetMargins(PDF_MARGIN_LEFT, 1, PDF_MARGIN_RIGHT);

		$pdf::SetHeaderMargin(PDF_MARGIN_HEADER);

		$pdf::SetFooterMargin(PDF_MARGIN_FOOTER);



		// set auto page breaks

		$pdf::SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);



		// set image scale factor

		$pdf::setImageScale(PDF_IMAGE_SCALE_RATIO);



		// set some language-dependent strings (optional)



		// ---------------------------------------------------------



		// set font

		$pdf::SetFont('dejavusans', '', 10);

        $pdf::AddPage();
        $pdf::writeHTML($html, true, false, true, false, '');

        $filename = 'Invoice-'.$invo_details->invo_number.'.pdf';
        $pdf::Output($filename,'D');
  
    }

    public function generateInvoiceHrt(Request $request,$inv_id,$table) {
        
            $invo_details = HrtInvoice::with('hsn')->where('invoice_id',$inv_id)->first();

            $file_path_full =base_path()."/public/storage/hrt_invoice/".$invo_details->inv_uploaded;
            $file_path =pathinfo(base_path()."/public/storage/hrt_invoice/".$invo_details->inv_uploaded);
            $basename = $file_path['basename'];
            $path = $file_path['dirname'];
            return response()->download($file_path_full, $basename, ['Content-Type' => 'application/force-download']);
   
        
        }
}
