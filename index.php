<?>PHP

$access_token = 'IAF4RcKrv6IKRnYvXAyBR9XhXerm/rWSEtp90M7u2lriQ48H8ZEWfUcurIOeOoT6cUIMdjDEnG1yu5z8Oz652B9RBz+5AV/y1Si0hQWYh/JXAEq5HGSkqT9Q5WxAMGjPmIvSdRSRPcUlGnLUq0JsdwdB04t89/1O/w1cDnyilFU=';

$post_data['messages'][] = array(
  'type' => 'text',
  'text' => 'てすとめっせーじ'
);

$ch = curl_init('https://api.line.me/v2/bot/message/broadcast');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  'Content-Type: application/json; charser=UTF-8',
  'Authorization: Bearer ' . $access_token
));

$result = curl_exec($ch);
curl_close($ch);
