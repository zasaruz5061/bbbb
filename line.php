 <?php
  

function send_LINE($msg){
 $access_token = 'hRQJFca6jicPXW8s9x0/vQ7eJSyQZZw0WL1kOdjgI4zxnYMYiQxkwqfcIbTYueWHmHfhzRpMcTbe6S/rDQWI93pytVoFNWhsOO6NoRMik1DXE0wFLgDzhNJST7bK9RGZnwCqugp4lTf4cn7RLkBaJAdB04t89/1O/w1cDnyilFU='; 
 $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [
        'to' => 'Ufbc178fddebad6d21b4f80a9ea8b6192',
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
