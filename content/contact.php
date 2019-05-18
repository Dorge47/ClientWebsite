<?php
$error ='';
$firstName ='';
$lastName ='';
$phoneNumber ='';
$email ='';
$list ='';
function clean_text($string){
$string = trim($string);
$string = stripslashes($string);
$string = htmlspecialchars($string);
return $string;
}
if(isset($_POST["submit"])){
if(empty($_POST["firstName"])){
    $error .= '<p><label class="text-danger">First Name Error: Please enter your name</label></p>';
}
else{

    $name = clean_text($_POST["firstName"]);
    if(!preg_match("/^[a-zA-Z\-\s]*$/",$name)){
        $error = '<p><label class="text-danger">First Name Error: Only letters and white space allowed</label></p>';
    }
}
if(empty($_POST["lastName"])){
    $error .= '<p><label class="text-danger">Last Name Error: Please enter your last name</label></p>';
}
else{

    $lastName = clean_text($_POST["lastName"]);
    if(!preg_match("/^[a-zA-Z\-\s]*$/",$lastName)){
        $error = '<p><label class="text-danger">Last Name Error: Only letters and white space allowed</label></p>';
    }
}
if(empty($_POST["message"])){
    $error .= '<p><label class="text-danger">Please enter a Question or concern in the text box.</label></p>';
}
else{
    $message = clean_text($_POST["message"]);
}
if(empty($_POST["phoneNumber"])){
    $error .= '<p><label class="text-danger">Please enter your phone number</label></p>';
}
else {
    $phoneNumber = clean_text($_POST["phoneNumber"]);
}
if(empty($_POST["email"])){
    $error .= '<p><label class="text-danger">Please enter your e-mail address</label></p>';
}
else {
    $email = clean_text($_POST["email"]);
}
if(empty($_POST["reasonSelect"])){
    $error .= '<p><label class="text-danger">Please choose a reason</label></p>';

}else{

    $list = clean_text($_POST["reasonSelect"]);
}
if($error == ''){
    $file_open = fopen("contact_data.csv", "a");
    $no_rows = count(file("contact_data.csv"));
    if($no_rows > 1){
        $no_rows = ($no_rows - 1) + 1;
    }
    $form_data = array(
        'sr_no' => $no_rows,
        'name' => $name,
        'lastName' => $lastName,
        'phoneNumber' => $phoneNumber,
        'email' => $email,
        'list' => $list,
        'message' => $message
    );
    fputcsv($file_open, $form_data);
    $error = '<label class="text-success">Thanks for contacting me! I will get back to you ASAP!';
function toReset(){
    unset($_POST["submit"]);
    unset($_POST["firstName"]);
    unset($_POST["lastName"]);
    unset($_POST["phoneNumber"]);
    unset($_POST["reasonSelect"]);
    }
    toReset();
}
//header("Location: index.php?page=contact");
}

?>
<?php echo $error; ?>
<div class="mainCont">
    <img src="img/mainpage.jpg" alt="Background image" id="bgImg">
    <div class="rowContainer oneRow">
            <form class="contact" action="index.php?page=contact" method="post">
                <label for="firstName">First Name</label>
                <input type="text" name="firstName" placeholder="Talib"><br>
                <label for="lastName">Last Name</label>
                <input type="text" name="lastName" placeholder="Abdul-Maalik"><br>
                <br><br>
                <label for="lastName">Phone Number</label>
                <input type="text" name="phoneNumber" placeholder="(559)-575-9163"><br>
                <label for="lastName">Email</label>
                <input type="text" name="email" placeholder="talibabdulmaalik@gmail.com"><br>
                <br><br>
                <label for="reasonSelect">Reason for Contacting</label>
                <select name="reasonSelect">
                    <option value="none">Select a Reason...</option>
                    <option value="Quote">Quote for Service</option>
                    <option value="Question">Question about Service</option>
                    <option value="Appointment">Set up an Appointment</option>
                    <option value="Other">Other...</option>
                </select>
                <br><br>
                <label for="message">Please type your Message here.</label><br>
                <textarea name="message" rows="8" cols="80"></textarea>
                <br><br>
                <input type="submit" value="submit" name="submit">
            </form>
    </div>
</div>
