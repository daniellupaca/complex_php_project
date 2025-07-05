<?php
namespace Services;

class EmailService {
    public static function send($to, $message) {
        echo "Email sent to $to: $message";
    }
}
