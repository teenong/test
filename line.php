 <?php
  

function send_LINE($msg){
 $access_token = 'AuMYzoaH/aPF+pExCsxN2v0P8CxtDTOrjjCCJF61lUZZh6QSJVXivq2TyK/Eggfi8wmNj7CQV23Q5fMTOMxU/qAZk+nVLa3At2lTByuq3j8xLCAEU5y3Ri/kq+0S4LWCdsbn68kzamOsxNWFnmo2WQdB04t89/1O/w1cDnyilFU='; 

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
