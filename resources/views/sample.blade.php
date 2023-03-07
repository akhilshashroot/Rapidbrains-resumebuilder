<!DOCTYPE html>
<html>
<body>
<div id="customers" style="back">

<div > <h2  style="color:#597abd;text-align:center;font-size:26px;font-weight:400;">INVOICE</h2></div>

<table border="0">

   <tbody><tr>

       <td style="text-align:left;">{!!$address!!}</td>

        

       <td style="text-align:right;">

<img width="60" src="{{asset('logo-pdf.png')}}"/>

       </td>			

   </tr>

   <br /> <br /> 

   <tr>

       <td colspan="2">							

            <h6 style="color:#597abd;font-size:14px;font-weight:400;">INVOICE TO </h6>

       </td>

   </tr>

   <tr>

        <td style="text-align:left;"><p> <br>{!!$addressTo!!}
           </p>

        </td>

        <td style="text-align:right;" > <br /> <br />

           <table border="0" style="width:100%;border-collapse:collapse;">

               <tr>

               <td style="text-align:left">  </td>

               <td style="text-align:left;color:#597abd;">Invoice No </td>

               <td style="text-align:right">{!!$invo_details->invo_number!!}</td>

               </tr>

               <tr>

               <td style="text-align:left">  </td>

               <td style="text-align:left;color:#597abd;">Invoice Date </td>

               <td style="text-align:right">{!!$invo_details->invo_date!!}</td>

               </tr>

               <tr>

               <td style="text-align:left">  </td>

               <td style="text-align:left;color:#597abd;">Due Date </td>

               <td style="text-align:right">{!!$invo_details->due_date!!}</td>

               </tr>

           </table>

       </td>

   </tr>


   
    <br />  <br />  <br />

<tr style="text-align: center;">

    <td colspan="2">

     <br />  <br />  

        <table cellpadding="3" border="0" style="width:100%;border-collapse:collapse;">



     <tr style="background-color:#597abd; color:#fff;">

        <th style="text-align: center;width:35px;">

            No.

        </th>

        <th style="text-align: center;width:80px;">

            HSN/SAC  

        </th>

        <th style="text-align: center;width:250px;">

            Description

        </th>

        <th style="text-align: center;width:50px;">

            Qty

        </th>

        <th style="text-align: center;;width:100px;">

            Rate

        </th>

        <th style="text-align: center;;width:60px;">

            Tax

</th>

        <th style="text-align: center;;width:100px;">

            Amount

        </th>
    </tr>

    <tr style="font-size:12px;">							

        <td>1</td>
        <td>{{$invo_details_hsn}}</td>
        @if($invo_details->description == NULL)
        <td>Server Management</td>
        @else
        <td>{{$invo_details->description}}</td>
        @endif
        <td>{{$quantity}}</td>
        <td>{{$rate}}</td>
       
        @if($gst)
            <td>{{$gst}}</td>
        @else
        <td>-</td>
        @endif				
        
        <td>{!!$invo_details->currency!!}&nbsp;{{$invo_details->amount}}</td>
    </tr> 

</tbody>
</table>  
    </td>

</tr>

<tr>

    <td colspan="2" style="text-align:right;">

    <br /> <br />  <br /> 

    <table border="0" style="float:right;width:50%;border-collapse:collapse;text-align:right;float:right;">

            <tr>

            <td style="text-align:right;width:560px;">SUBTOTAL </td>

            <td style="text-align:center;width:20px;">:</td>

            <td style="text-align:left;width:100px;">{!!$invo_details->currency!!}&nbsp;{!!$amount!!}</td>

            </tr>{!!$tax!!}

            <tr>

            <td style="text-align:right;">TOTAL </td>

            <td style="text-align:center;">:</td>

            <td style="text-align:left">{!!$invo_details->currency!!}&nbsp;{!!$amount!!}</td>

            </tr>

            <tr>

            <td style="text-align:right;">PAYMENT </td>

            <td style="text-align:center;">:</td>

            <td style="text-align:left">{!!$invo_details->currency!!}&nbsp;{!!$amount!!}</td>

            </tr>

        </table>

    </td>

</tr>


<!-- <tr>

<td  colspan="2"  style="white-space:nowrap;">
 <p> <span style="color:#597abd;font-size:14px;font-weight:400;">DECLARATION:</span>



 <span>SUPPLY TO SEZ UNIT OR SEZ DEVELOPER FOR AUTHORISED OPERATIONS UNDER BOND OR LETTER OF UNDERTAKING WITHOUT PAYMENT OF INTEGRATED TAX.</span></p>
</td>
</tr>
 -->

<br /> 
@if($invo_details->bank_details)
   <tr>

   <td  >							

Bank Account Details

</td>

</tr><br>
   <tr>

        <td style="text-align:left;">{!!$bank_details!!}

           

        </td>
    </tr>
@endif
<h2 style="color:#597abd;text-align:center;font-size:26px;font-weight:400;">{!!$paid_status!!}</h2>


</table>



<!-- 

<div style="text-align:left;padding-left:100px;margin-top:100px;" >

<h2 style="color:#597abd;text-align:center;font-size:26px;font-weight:400;"></h2>

</div> -->


   
</div>
</body>
</html>