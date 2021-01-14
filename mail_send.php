<?
function message ($message)
  echo "
        <script>
        window.alert ('$message');
        history.go(-1);
        </script>
        ";
  exit;
}
$formmail=$mailid."@".$mail;
$mh .="Return-Path: $frommailrn";
$mh .="From: $name <$frommail>rn";
$tomail="edik.choi@gmail.com";
if($subject and $memo and $mail and $mailid ==""){
 message('모두 빠짐없이 입력해주세요');
}else{
  mail($tomail,$subject,$memo,$mt);
  message('+
 '정상적으로 발송되었습니다.');
}
?>