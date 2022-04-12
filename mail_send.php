<?php
//ü fuck BOM
define ('C_MAIL_LINE_END',"\r\n");    
define ('C_MAIL_EMAIL_FROM',"noreply@renlms.com");// 
define ('C_MAIL_EMAIL_TO',"info@renlms.com");// 

//define ('C_MAIL_LIST_ADMINS',"info@sapurlus.com");//Yönetici EPOSTA HESAPLARI 
define ('C_MAIL_HEADER', 'MIME-Version: 1.0' . C_MAIL_LINE_END.'Content-type: text/html; charset=UTF-8' . C_MAIL_LINE_END.'From: '.C_MAIL_EMAIL_FROM . C_MAIL_LINE_END ); 
define ('C_MAIL_HEADER_PRIVAT', 'MIME-Version: 1.0' . C_MAIL_LINE_END.'Content-type: text/html; charset=UTF-8' . C_MAIL_LINE_END.'From: '); 
define ('C_MAIL_HEADER_ADDREPLY_1', 'MIME-Version: 1.0' . C_MAIL_LINE_END.'Content-type: text/html; charset=UTF-8' . C_MAIL_LINE_END.'From: '.C_MAIL_EMAIL_FROM . C_MAIL_LINE_END); 
//define ('C_MAIL_HEADER_ADDREPLY_2', 'BCC:'.C_MAIL_LIST_ADMINS . C_MAIL_LINE_END); 

define ('C_MAIL_HEADER_HTML', '<head>
								<meta http-equiv="content-type" content="text/html; charset=UTF-8">
								<meta http-equiv="X-UA-Compatible" content="IE=edge">
							    <meta name="viewport" content="width=device-width, initial-scale=1.0">
								'); 
define ('C_MAIL_HEADER_END',  '</head>'); 





define ('C_MAIL_LINE_NEW',"<BR>"); 
define ('C_MAIL_LINE_FINISH',C_MAIL_LINE_END.C_MAIL_LINE_NEW); 
define ('C_MAIL_REPLYTO', 'reply-to: '); 
define ('C_MAIL_FROM', 'reply-to: '.C_MAIL_LINE_END); 
 
 
define ('C_MAIL_STYLE' , '<style>
    .card-border {
    box-shadow: 0 0 0 transparent;
    border-width: 1px
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(26, 54, 126, 0.125);
    border-radius: 0.25rem
}
.card-header {
    padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    color: inherit;
    background-color: #fff;
    border-bottom: 1px solid rgba(26, 54, 126, 0.125)
}
.card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
    background: #eee;
}
.text-capitalize {
    text-transform: capitalize !important
}
.mb-3,
.my-3 {
    margin-bottom: 1rem !important
}
.mt-3,
.my-3 {
    margin-top: 1rem !important
}
.card-footer {
    padding: 0.75rem 1.25rem;
    background-color: #fff;
    border-top: 1px solid rgba(26, 54, 126, 0.125)
}
.text-center {
    text-align: center !important
}
.text-success {
    color: #3ac47d !important
}
.text-muted {
    color: #6c757d !important
}
.mb-0,
.my-0 {
    margin-bottom: 0 !important
}
.d-block {
    display: block !important
}

.title {
    padding-top: 0.6rem;
    padding-left: 1rem;
}

.d-inline-flex {
    display: inline-flex;
}

.d-flex {
    display: flex;
}

    
</style>');

define ('C_MAIL_HTML_ENTER', '<html>'.C_MAIL_LINE_END.C_MAIL_HEADER_HTML.C_MAIL_STYLE.C_MAIL_HEADER_END.'<body>'.C_MAIL_LINE_END); 
define ('C_MAIL_HTML_FINISH', '</body>'.C_MAIL_LINE_END.'</html>'.C_MAIL_LINE_END); 

 

 






	/* function Mail_Gonder_Contact($a_rumuz, $a_eposta, $a_msg){
		$html_content = C_MAIL_HTML_ENTER;	
		$html_content= '<p><strong> Yeni müşteri mesajı</strong></p> <br>
                             
		<p class="mb-0 text-capitalize">
			<strong>'.$a_rumuz.' : </strong> 
		</p>
		<p class="mb-0">
		<span class="text-capitalize"><strong>'.$a_eposta.'</strong></span> .
		</p> <br>
		<p class="mb-0">
		 <strong>'.$a_msg.'</strong>
		</p> <br> 
	  <strong>renlms.com</strong>'; 
		$html_content.= C_MAIL_HTML_FINISH;
		$Konu = $a_rumuz ;    
		 		
		return mail( C_MAIL_EMAIL_TO , $Konu, $html_content, C_MAIL_HEADER.C_MAIL_REPLYTO.$a_eposta.C_MAIL_LINE_END );//C_MAIL_LIST_FROM	 
	}//Mail_Gonder_Kurs_Bitirme  */


	function Mail_Gonder_Contact($a_eposta){
		$html_content = C_MAIL_HTML_ENTER;	
		$html_content= '<p><strong>Yeni müşteri mesajı</strong></p> <br>
                             
		<p class="mb-0 text-capitalize">
			<strong>'.$a_eposta.'</strong> 
		</p>

		<p class="mb-0">
		<span class="text-capitalize"><strong>'.$a_eposta.'</strong></span> .
		</p> <br>
		<p class="mb-0">
		 <strong>'.$a_eposta.'</strong>
		</p> <br> 
	  <strong>renlms.com</strong>'; 
		$html_content.= C_MAIL_HTML_FINISH;
		$Konu = 'Yeni müşteri mesajı' ;    
		 		
		return mail( C_MAIL_EMAIL_TO , $Konu, $html_content, C_MAIL_HEADER.C_MAIL_REPLYTO.$a_eposta.C_MAIL_LINE_END );//C_MAIL_LIST_FROM	 
	}//Mail_Gonder_Kurs_Bitirme 





?>