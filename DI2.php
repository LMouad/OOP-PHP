<?php
interface Sender{
    public function send($message);
}

class EmailSender implements Sender{
    public function send($message){
        echo "Sending Email: $message";
    }
}

class SmsSender implements Sender{
    public function send($message){
        echo "Sending SMS: $message";
    }
}

class Notification{
    private $sender;
    public function __construct(Sender $sender)
    {
        $this->sender=$sender;
    }
    public function notify($message){
        $this->sender->send($message);
    }
}

$EmailS = new EmailSender();
$not = new Notification($EmailS);
$not->notify("Hello By EMAIL <br>");
$SmsS= new SmsSender();
$not1 = new Notification($SmsS);
$not1->notify("Hello By SMS <br>");