<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'From: Nordre-Osen.no Kontakt Form <noreply@nordre-osen.no>';
		$to = 'nordre-osen@martinfloden.no'; 
		$subject = 'Melding fra kontakt form Nordre-Osen';
		
		$body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Vennligst fyll inn ditt navn.';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Vennligst oppgi din email addresse.';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Melding mangler, Hva lurer du på?';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Du klarte ikke regnestykket, Vennligst spør sønnen eller dattera på "5" om hjelp.';
		}
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Takk! Din henvendelse vil bli besvart snarest mulig.</div>';
	} else {
		$result='<div class="alert alert-danger">Oops, Det skjedde en feil ved sending. Vennligst prøv igjen senere.</div>';
	}
}
	}
?>