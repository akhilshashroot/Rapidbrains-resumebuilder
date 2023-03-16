<style>


html,body { padding: 0; margin:0; }


@media only screen and (min-width: 700px) {
.ss{
 width: 25%;
}
  

}

@media only screen and (max-width: 700px) {
.ss{
 width: 40%;
}
  

}



</style>
<div style="font-family:Arial,Helvetica,sans-serif; line-height: 1.5; font-weight: normal; font-size: 15px; color: #2F3044; min-height: 100%; margin:0; padding:0; width:100%; background-color:#edf2f7">
	<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;margin:0 auto; padding:0; max-width:600px">
		<tbody>
			<tr>
				<td align="center" valign="center" style="text-align:center; padding: 40px">
					
						<img alt="Logo"  class="ss" src="https://www.rapidbrains.com/assets/img/svg/rblogo-mail.png" style="width:30%;" />
				
				</td>
			</tr>
			<tr>
				<td align="left" valign="center">
					<div style="text-align:left; margin: 0 20px; padding: 40px; background-color:#ffffff; border-radius: 6px">
						<!--begin:Email content-->
						<div style="padding-bottom: 30px; font-size: 17px;">
							<strong>   Hello {{ $user ? $user['name'] : '' }},</strong>
						</div>
						<div style="padding-bottom: 30px"> We've received a request to reset your password. If you made this request, please reset it by clicking the button below.
</div>
						<div style="padding-bottom: 40px; text-align:center;">
						<a href="{{route('reset-password',$user['token'])}}" rel="noopener" style="text-decoration:none;display:inline-block;text-align:center;padding:0.75575rem 1.3rem;font-size:0.925rem;line-height:1.5;border-radius:0.35rem;color:#ffffff;background-color:#343f52;border:0px;margin-right:0.75rem!important;font-weight:600!important;outline:none!important;vertical-align:middle" target="_blank">Reset your password</a>
						</div>
						<div style="padding-bottom: 30px"> If you didn't request to change your password, you can safely ignore this email. Your password won't change until you click the button and create a new one.
</div>

						<div style="border-bottom: 1px solid #eeeeee; margin: 15px 0"></div>
						
						<!--end:Email content-->
						<div style="padding-bottom: 10px">  Thank you!
						<br>RapidBrains Team<br>
						<a href="https://www.rapidbrains.com/" rel="noopener" target="_blank">www.rapidbrains.com</a> | <a href = "mailto:contact@rapidbrains.com">contact@rapidbrains.com</a>
						<tr>
							<td align="center" valign="center" style="font-size: 13px; text-align:center;padding: 20px; color: #6d6e7c;">
								
								<p>Copyright © <a href="https://www.rapidbrains.com/" rel="noopener" target="_blank">RapidBrains</a>. All rights reserved.
								</p>
							</td>
						</tr></br></div>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</div>