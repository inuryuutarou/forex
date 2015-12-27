<?php

class Holo_Form {

    public $config;
    public $submit_name;
    public $field_name;
    public $field_value = array();
    public $errors;
    public $alert_message;

    public function __construct($config) {

        $this->config = $config;
        $this->submit_name = $config['submit_name'];

        foreach ($this->config['fields'] as $field_name => $field) {
            $this->field_name[$field_name] = 'contact[' . $field_name . ']';
            $this->field_value[$field_name] = $field['value'];
        }

        if ( isset($_POST[$this->submit_name]) && isset($_POST['contact']) ) {

            foreach ($_POST['contact'] as $contact_field => $contact_value) {

                if ( $this->validate_field($contact_field, $contact_value) === false ) {

                    $this->field_value[$contact_field] = $contact_value;

                } else {

                    $this->errors[] = $this->validate_field($contact_field, $contact_value);

                }

            }

            if ( is_array($this->errors) ) {

                $errors_str = '';

                foreach ($this->errors as $error) {

                    $errors_str .= $error . '<br />';

                }

                $this->alert_message = '
                    <div class="alert alert-icon alert-danger">
                            <i class="fa fa-exclamation-circle pull-left"></i>
                            <div class="text">
                                ' . $errors_str . '
                        </div>
                    </div>';

            } else {

                if ( $this->send_email() ) {

                    foreach ( $this->field_value as $field_value ) {

                        $field_value = '';

                    }

                    $this->alert_message = '
                        <div class="alert alert-icon alert-success">
                            <i class="fa fa-info pull-left"></i>
                            <div class="text">
                                ' . $this->config['success_message'] . '
                            </div>
                        </div>';

                } else {

                    $this->alert_message = '
                        <div class="alert alert-icon alert-danger">
                            <i class="fa fa-exclamation-circle pull-left"></i>
                            <div class="text">
                                ' . $this->config['fail_message'] . '
                            </div>
                        </div>';
                }

            }

        }

    }

    private function send_email() {

        $tinfo = '';
        $uinfo = '';

        //If there is no error, send the email

        $tinfo .= '------------ Technical Info ------------' . "\r\n"; //Title
        $tinfo .= 'User IP: ' . $_SERVER["REMOTE_ADDR"] . "\r\n"; //Sender's IP
        $tinfo .= 'Browser Info: ' . $_SERVER["HTTP_USER_AGENT"] . "\r\n"; //User agent
        $tinfo .= 'User Come From: ' . $_SERVER["HTTP_REFERER"] . "\r\n"; //Referrer

        $uinfo .= "\r\n" . '------------ User Info ------------' . "\r\n"; //Title

        foreach ($this->config['fields'] as $name => $value) {
            if ( $name !== 'message' ) {
                $uinfo .= $this->field_name[$name] . ': ' . $this->field_value[$name] . "\r\n";
            }
        }

        $msg = "\r\n" . '------------- Message ------------' . "\r\n\r\n" . $this->field_value['message'];

        $subject = 'Contact Form Submission From ' . $this->field_value['name'];
        $body = $tinfo . $uinfo . $msg;

        $headers = "From: " . $this->config['admin_email'] .  "\r\n";
        $headers .= "Reply-To: " . $this->field_value['email'] . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";

        if( mail($this->config['admin_email'], $subject, $body, $headers) ) {
            return true;
        }
        else {
            return false;
        }

    }

    function validate_field($field, $value) {

        $value = trim($value);

        if ( isset($this->config['fields'][$field]['validation']) )
            $validations = $this->config['fields'][$field]['validation'];

        if ( is_array($validations) ) {
            foreach ($validations as $validation => $message) {

                switch ( $validation ) {

                    case 'not_empty' :

                        if ( empty($value) ) {
                            return $message;
                        }

                        break;
                    case 'is_email' :

                        if ( !preg_match("^[a-zA-Z0-9._%-]+@[a-zA-Z0-9._%-]+\.[a-zA-Z]{2,4}$^", $value) ) {
                            return $message;
                        }

                        break;
                    case 'no_special_chars' :

                        if ( preg_match('/[^a-zA-Z_ -]+/', $value) ) {
                            return $message;
                        }

                        break;

                }

            }
        }

        return false;

    }

}