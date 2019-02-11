<?php
function sendEmail($emailAddress, $message) {
    $this->email->from('mayhemg@yahoo.com', 'Test Name');
    $this->email->to('gainesagregory@gmail.com');

    $this->email->subject('Email Test Codeigniter');
    $this->email->message('Testing the email class. lol');

    $this->email->send();
}
?>