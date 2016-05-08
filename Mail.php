<?php 
$b = 0; 
$mail_attached = ""; 
$boundary = md5(time()); 
$fp = fopen($file_name,"rb"); 
$content[$b] = fread($fp,filesize($file_name)); 
$mail_attached .= "--" . $boundary . "\n"
. "Content-Type: binary/octet-stream name="basename($file_name)" \n"
. "Content-Transfer-Encoding: base64 \n"
. "Content-Disposition: inline; filename="basename($file_name)" \n"
. chunk_split(base64_encode($content[$b]))."\n"; 
$b++; 
fclose($fp); 
$mail_attached .= "--".$boundary."\n"; 
  
$add_header = "MIME-Version: 1.0\n". 
"Content-Type: multipart/mixed; boundary="$boundary"; Message-ID: <".md5($email_from).">"; 
$mail_content = "--".$boundary."\n". 
"Content-Type: text/plain; charset="UTF-8"\n". 
"Content-Transfer-Encoding: 8bit \n\n". 
$msg." nn". 
$mail_attached; 
mail($email_address, $subject, $mail_content, "From: ".$email_from."\nCC: ".$email_cc."\n
BCC: ".$email_bcc ."\n Errors-To: ".$email_from."\n".$add_header); 
?>