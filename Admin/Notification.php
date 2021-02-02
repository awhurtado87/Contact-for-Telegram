<?php namespace ContactForTelegram;

class  Notification
{

    function __construct()
    {
    }
    

    public function CFTB_no_channel()
    {
        function sample_admin_notice_no_channel() {
            $class = 'notice notice-error';
            $message = 'Debes introducir tu usuario o canal de telegram para activar el boton.';
         
            printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) ); 
        }

        add_action( 'admin_notices', 'ContactForTelegram\sample_admin_notice_no_channel' );
    }
}
