 <?php
  

function send_LINE($msg){
 $access_token = 'M1lhZfpKEf1drnO6YUqiBdjuXM0Kw36TkTY3H78o5E/Ee7SKD/0IvfaYjvpIiR788wmNj7CQV23Q5fMTOMxU/qAZk+nVLa3At2lTByuq3j8IjfvSvvGe7/coaIfM/SMhJZIvkeb4N5ToRSWd197X+gdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U2646b97e2bdcaf980baddeec87213385',
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
