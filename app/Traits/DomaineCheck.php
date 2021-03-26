<?php


namespace App\Traits;


trait DomaineCheck {
   
    
    public function is_secure($url){
        $stream = @stream_context_create( array( 'ssl' => array( 'capture_peer_cert' => true ) ) );
        $socket = @stream_socket_client( 'ssl://' . $url . ':443', $errno, $errstr, 30, STREAM_CLIENT_CONNECT, $stream );
        return ($socket == false) ? 'off' : 'on';
    }
   

    public function is_online($url){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url);    
        $statusCode = $response->getStatusCode();
        return ($statusCode == 200) ? 'on' : 'off';
    }
}