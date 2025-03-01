<?php
namespace In3050Inm428WebDev\PhpMvc\Models;

class Email
{

    public function __construct()
    {

    }

    //create otp template email

    public function create_otp_email($otp, $email)
    {
        // Email headers and content
        $subject = "Your OTP Code";
        $from = "no-reply@lancaster.com";
        $to = $email;

        // Simple email HTML template
        $html_content = file_get_contents("public/otp_email/otp_email_template.html"); // Path to the template file
        $html_content = str_replace("{name}", $email, $html_content);
        $html_content = str_replace("{otp_code}", $otp, $html_content);

        // Create .eml content
        $eml_content = "Subject: $subject\r\n";
        $eml_content .= "From: $from\r\n";
        $eml_content .= "To: $to\r\n";
        $eml_content .= "Content-Type: text/html; charset=UTF-8\r\n";
        $eml_content .= "\r\n"; // Blank line before the body
        $eml_content .= $html_content;

        // Save the .eml file
        $file_name = "public/otp_email/otp_email_" . time() . ".eml";
        file_put_contents($file_name, $eml_content);

        return $file_name; // Return the file name for download
    }

    //create reservation template email
    public function create_reservation_email($name, $reservation_date, $service, $time_booked, $guests, $email)
    {
        // Email headers and content
        $subject = "Reservation Confirmation";
        $from = "reservations@lancaster.com";
        $to = $email;


        // Calculate combined_datetime and end_datetime for calendar links
        $combined_datetime = date('Y-m-d\TH:i:s\Z', strtotime($reservation_date . ' ' . $time_booked));
        $end_datetime = date('Y-m-d\TH:i:s\Z', strtotime($reservation_date . ' ' . $time_booked . ' +1 hour'));

        // Generate calendar links
        $google_calendar_link = "https://calendar.google.com/calendar/r/eventedit?text=Lancaster+Reservation&dates={$combined_datetime}/{$end_datetime}&details=Your+reservation+at+Lancaster&location=Lancaster+Restaurant";
        $outlook_calendar_link = "https://outlook.live.com/calendar/0/deeplink/compose?subject=Lancaster+Reservation&startdt={$combined_datetime}&enddt={$end_datetime}&body=Your+reservation+at+Lancaster&location=Lancaster+Restaurant";
        $yahoo_calendar_link = "https://calendar.yahoo.com/?v=60&view=d&type=20&title=Lancaster+Reservation&st={$combined_datetime}&et={$end_datetime}&desc=Your+reservation+at+Lancaster&in_loc=Lancaster+Restaurant";

        // Simple email HTML template
        $html_content = file_get_contents("public/reservation_email/email_template.html"); // Path to the template file
        $html_content = str_replace("{name}", $name, $html_content);
        $html_content = str_replace("{reservation_date}", $reservation_date, $html_content);
        $html_content = str_replace("{service}", $service, $html_content);
        $html_content = str_replace("{time_booked}", $time_booked, $html_content);
        $html_content = str_replace("{guests}", $guests, $html_content);

        // Add calendar links dynamically
        $html_content = str_replace("{google_calendar_link}", $google_calendar_link, $html_content);
        $html_content = str_replace("{outlook_calendar_link}", $outlook_calendar_link, $html_content);
        $html_content = str_replace("{yahoo_calendar_link}", $yahoo_calendar_link, $html_content);



        // Create .eml content
        $eml_content = "Subject: $subject\r\n";
        $eml_content .= "From: $from\r\n";
        $eml_content .= "To: $to\r\n";
        $eml_content .= "Content-Type: text/html; charset=UTF-8\r\n";
        $eml_content .= "\r\n"; // Blank line before the body
        $eml_content .= $html_content;

        // Save the .eml file
        $file_name = "public/reservation_email/reservation_confirmation_" . time() . ".eml";
        file_put_contents($file_name, $eml_content);

        return $file_name; // Return the file name for download
    }
    //create registration template email
    public function create_registration_email($name, $email)
    {
        // Email headers and content
        $subject = "Registration Confirmation";
        $from = "registration@lancaster.com";
        $to = $email;

        // Simple email HTML template
        $html_content = file_get_contents("public/registration_email/registration_template.html"); // Path to the template file
        $html_content = str_replace("{name}", $name, $html_content);
        $html_content = str_replace("{email}", $email, $html_content);

        // Create .eml content
        $eml_content = "Subject: $subject\r\n";
        $eml_content .= "From: $from\r\n";
        $eml_content .= "To: $to\r\n";
        $eml_content .= "Content-Type: text/html; charset=UTF-8\r\n";
        $eml_content .= "\r\n"; // Blank line before the body
        $eml_content .= $html_content;

        // Save the .eml file
        $file_name = "public/registration_email/registration_confirmation_" . time() . ".eml";
        file_put_contents($file_name, $eml_content);

        return $file_name; // Return the file name for download
    }


}