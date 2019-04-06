 <?php
  

function send_LINE($msg){
 $access_token = 'IaJoXlsjjliFzp/gB8Ur3q5bGGcC3CDHIXpzf+Slu8vU9W1Rdwcpr3uT9SzIvOVGCzowuIy4PuM3gNc264SXPMzoprA1dKDcrczvWgU3YZ2hDj0Jiebwh6KwjNd1tL08YqpmUZg2p2BZZ8WAPi80egdB04t89/1O/w1cDnyilFU='; 
 $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [
        'to' => 'U7c7bade293cc8f63dc98c565c16b806a',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
