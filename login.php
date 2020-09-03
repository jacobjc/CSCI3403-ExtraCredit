<?PHP

$username = $_POST["username"];
$password = $_POST["password"];

if($_POST["submit"]){

    if($username=="1234" and $password=="pass"){
        header('Location: logged_in.php');
    }
    else if($username=="testing" and $password=="thispassword"){
        header('Location: logged_in.php');
    }
    else if($username=="rawr" and $password=="dino987"){
        header('Location: logged_in.php');
    }
    else{
        header('Location: index.php');
    }

    // $recipient="jacob.christiansen@colorado.edu";
    // $subject="Form to email message";
    // $sender=$_POST["name"];
    // $senderNum=$_POST["phone"];
    // $senderEmail=$_POST["email"];
    // $message=$_POST["message"];

    // $mailBody="Name: $sender\nEmail: $email\n Phone: $phone\n\n$message";

    // mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
}

if($_POST["logout"]){
    header('Location: index.php');
}

if($_POST["newpost"]){
    header('Location: newpost.php');
}

?>
