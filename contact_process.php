<?php

	ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );

	$admin = 'ismail15000000@gmail.com';
	
	$nama	= 'coba';
	$email	= 'tes@tes.com';
	$judul	= 'apakabar';
	$pesan	= 'ini nyoba dulu si';
	$pengirim	= 'Dari: '.$nama.' <'.$email.'>';
    $headers = array(
        'From' => $email,
        'Reply-To' => $email,
        'Nama' => $nama,
        'X-Mailer' => 'PHP/' . phpversion()
    );
	$our_server = 'ssl://smtp.gmail.com';
	$port = 465;
	ini_set('SMTP', $our_server );
	ini_set('smtp_port', $port );
	ini_set('smtp_user', $admin );
	
	if(mail($admin, $judul, $pesan, $headers)){
		echo "sukses";
	}

    // $to = "rockybd1995@gmail.com";
    // $from = $_REQUEST['email'];
    // $name = $_REQUEST['name'];
    // $subject = $_REQUEST['subject'];
    // $number = $_REQUEST['number'];
    // $cmessage = $_REQUEST['message'];

	// $headers = "From: " . $from . "\r\n";
	// $headers .= "Reply-To: ". $from . "\r\n";
	// $headers .= "MIME-Version: 1.0\r\n";
	// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    // $subject = "You have a message from your Bitmap Photography.";

    // $logo = 'img/logo.png';
    // $link = '#';

	// $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	// $body .= "<table style='width: 100%;'>";
	// $body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	// $body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	// $body .= "</td></tr></thead><tbody><tr>";
	// $body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	// $body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	// $body .= "</tr>";
	// $body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
	// $body .= "<tr><td></td></tr>";
	// $body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	// $body .= "</tbody></table>";
	// $body .= "</body></html>";

    // $send = mail($to, $subject, $body, $headers);

?>