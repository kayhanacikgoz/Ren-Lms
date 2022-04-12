<?php

include 'mail_send.php';

if  ( !isset( $_POST["contact_email"] ) ){ $_POST["contact_email"] = '';  }	
	/*  if  ( !isset( $_POST["contact_name"] ) ){ $_POST["contact_name"] = '';  }	
	 if  ( !isset( $_POST["contact_msg"] ) ){ $_POST["contact_msg"] = '';  } */

	 $contact_email = $_POST["contact_email"];	
/* 	$contact_name  = $_POST["contact_name"];	
	$contact_msg   = $_POST["contact_msg"]; */

	unset($_POST["contact_email"]);	
	/* unset($_POST["contact_name"]);	
	unset($_POST["contact_msg"]);
 */
	if ($contact_email ==''){ die('E-Posta boş bırakılamaz'); }

/* 	if ($contact_name ==''){ die('Ad soyad boş bırakılamaz'); }
	if ($contact_msg ==''){ die('Mesaj boş bırakılamaz'); }
 */

	//$sonuc = Mail_Gonder_Contact($contact_name, $contact_email, $contact_msg);
	$sonuc = Mail_Gonder_Contact($contact_email);
	if($sonuc){ echo 'true';} else { echo 'Eposta gönderilemedi';}
	
?>