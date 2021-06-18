<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        
    }

    //function to send email
    public function send_mail($to, $subject, $content, $from = 'wellbeing.therapy2021@gmail.com')
    {
        $emailContent = "<!DOCTYPE><html><head></head><body><div>".$content."</div></body></html>";
                    
        $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'ssl://smtp.gmail.com';
        $config['smtp_port']    = '465';
        $config['smtp_user']    = $from;
        $config['smtp_pass']    = 'wellbeing';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; // or html
        // $config['smtp_timeout'] = '7';
        // $config['crlf']    = "\r\n";
        // $config['smtp_crypto'] = 'tls';
        // $config['validation'] = TRUE; // bool whether to validate email or not


         

        $this->email->initialize($config);
        $this->email->from($from, 'Wellbeing - Teletherapy Website');
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($emailContent);
        if($this->email->send()){
            return true;
        }else{
            echo $this->email->print_debugger();
        }
    }

    //function to send approvel letter 
    public function approvalLetter()
    {   
        $to = $this->input->post('email');
        $letter = "This is to inform you that the application you sent has been examined and it is now approved! You will soon receive email where the username and password will be included! :)";

        $this->send_mail($to, 'Approval Letter To Join Wellbeing', $letter);
    }

    //function to send non-conditional letter 
    public function rejectionLetter()
    {   
        $to = $this->input->post('email');
        $letter = "We are very sorry to inform you that the applicaton/request you sent has been rejected! Please email us for futher information if necessary :(";

        $this->send_mail($to, 'Rejection Letter From Wellbeing', $letter);
    }

    //function to send non-conditional letter 
    public function sendDetail($username, $password)
    {   
        $to = $this->input->post('email');
        $letter = "We are very delighted to inform you that your applicaton has been succesfully approved :D Here's your username: " . $username . " and password: " . $password . ". Please email us if you face any problem!";

        $this->send_mail($to, "Letter With Details To Join Wellbeing", $letter);
    }



}

/* End of file Admission.php */


?>