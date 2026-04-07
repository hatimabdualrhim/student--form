<?php
if($_SERVER["REQUEST_METHOD"]=="post")
    {
        $name=htmlspecialchars($_POST['name']);
        $email=
        htmlspecialchars($_POST['email']);
        $id=htmlspecialchars($_POST['id']);
        $major= htmlspecialchars($_POST['major']);
    }
    else
        {
            echo"لا يمكن الوصول";
            exit();
        }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تم تسجميل   دحولك بنجاح</title>
</head>
<body style="font-family: Tahoma;
text-align: center; direction:rtl;">
    <h2>تم التسجيل بنجاح</h2>
<p>       الاسم:<?php echo $name; ?> </p>
<p>      البريد الالكتروني:<?php echo $name; ?> </p>
<p>  الرقم:<?php echo $name; ?> </p>
<p>       التخصص:<?php echo $name; ?> </p>

</body>
</html>