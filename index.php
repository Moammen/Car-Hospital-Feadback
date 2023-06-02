<!DOCTYPE html>
<?php

include("config.php");
session_start();
$rate_11 = 0;
$rate_22 = 0;
$rate_33 = 0;
$rate_44 = 0;
$email = "no";
$name = "no";
$msg = "no";
$READBACKERRE = "";


if (empty($_POST['rate_44'])) {
    $READBACKERRE = " Service rating is required";
} else {
    $READBACKERRE = '';
}


if (isset($_POST['submit']) && strlen($READBACKERRE) < 3) {
    if (strlen($_POST['email']) > 0) {
        $email = $_POST['email'];
    } else {
        $email = "NOT SEND";
    }
    if (strlen($_POST['name']) > 0) {
        $name = $_POST['name'];
    } else {
        $name = "NOT SEND";
    }
    if (strlen($_POST['msg']) > 0) {
        $msg = $_POST['msg'];
    } else {
        $msg = "NOT SEND";
    }
    if (empty($_POST['rate_11'])) {
        $rate_11 = 0;
    } else {
        $rate_11 = $_POST['rate_11'];
    }
    if (empty($_POST['rate_22'])) {
        $rate_22 = 0;
    } else {
        $rate_22 = $_POST['rate_22'];
    }
    if (empty($_POST['rate_33'])) {
        $rate_33 = 0;
    } else {
        $rate_33 = $_POST['rate_33'];
    }
    if (empty($_POST['rate_44'])) {
        $rate_44 = 0;
    } else {
        $rate_44 = $_POST['rate_44'];
    }
    #   $rate_11 = $_POST['rate_11'];
    # $rate_22 = $_POST['rate_22'];
    # $rate_33 = $_POST['rate_33'];
    # $rate_44 = $_POST['rate_44'];
    #  $email = $_POST['email'];
    # $name = $_POST['name'];
    # $msg = $_POST['msg'];
    $dob = date('Y-m-d');
    $sql = "INSERT
INTO 
feedback
(doctor_rate,pharmacy_rate,speed_rate,service_rate,email_rate,name_rate,msg_rate,date_rate)
VALUES
('$rate_11','$rate_22','$rate_33','$rate_44','$email','$name','$msg',CURDATE()); 
";
    //  $result_select = mysqli_query($db, $sql_select);

    $result = mysqli_query($db, $sql);
}
#else 
#  echo 'check internet connection......';
#

?>
<html class="syyling">

<head>
    <title>Customer Feedback Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet'
        type='text/css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="icon" href="img/favicon (4).ico">

    <style>
        /* Social Media Icons */
        .social-med {
            position: relative;
            font-size: 22px;
            text-align: center;
            width: 100%;
            margin: 0 auto;
            padding: 0;
        }

        .social-med li a {
            color: #000;
        }

        .social-med li {
            position: relative;
            display: inline-block;
            height: 60px;
            width: 60px;
            margin: 10px 3px;
            line-height: 60px;
            border-radius: 50%;
            color: #000;
            background-color: rgb(187, 185, 185);
            cursor: pointer;
            transition: all .2s ease-in-out;
        }

        .social-med li:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 60px;
            height: 60px;
            line-height: 60px;
            border-radius: 50%;
            opacity: 0;
            box-shadow: 0 0 0 1px #000;
            transition: all .2s ease-in-out;
        }

        .social-med li:hover {
            background-color: #000;
        }

        .social-med li:hover:after {
            opacity: 1;
            transform: scale(1.12);
            transition-timing-function: cubic-bezier(0.37, 0.74, 0.15, 1.65);
        }

        .social-med li:hover a {
            color: #fff;
        }

        .copyright {
            font: 200 14px 'Oswald', sans-serif;
            color: #fff;
            letter-spacing: 1px;
            text-align: center;
        }

        .fa {
            color: #0666a3;

        }

        html,
        body {
            min-height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            color: #f2f2f2;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
            padding: 0px;
            background: linear-gradient(to right, #126690, #67B26F);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            padding: 0;
            margin: 0;
        }

        .continer {


            background-color: #06283d96;
            width: 100%;
            padding: 20px;

            box-shadow: 0 2px 5px #ccc;
            color: #fff;



        }

        div,
        form,
        input,
        p {
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 14px;
            color: #fff;
            line-height: 22px;
        }

        h1 {
            font-weight: 400;
            color: #fff;
        }

        h4 {
            margin: 15px 0 4px;
            color: #fff;
        }

        .testbox {
            display: flex;
            justify-content: center;
            align-items: center;
            height: inherit;
            padding: 3px;
            color: #fff;

        }

        form {}

        input {
            width: calc(100% - 10px);
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            vertical-align: middle;
            color: #fff;
        }

        .email {
            display: block;
            width: 40%;

        }



        input:hover,
        textarea:hover {
            outline: none;
            border: 1px solid #095484;
        }

        th,
        td {
            width: 15%;
            padding: 5px 0;
            border-bottom: 1px solid #ccc;
            text-align: center;
            vertical-align: unset;
            line-height: 18px;
            font-weight: 400;
            word-break: break-all;
        }

        .first-col {
            width: 16%;
            text-align: left;
        }

        table {
            width: 100%;
        }

        textarea {
            width: calc(100% - 6px);
        }

        .btn-block {
            margin-top: 20px;
            text-align: center;
        }

        button {
            width: 150px;
            padding: 10px;
            border: none;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            background-color: #095484;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: #0666a3;
        }

        @media (min-width: 565px) {

            th,
            td {
                word-break: keep-all;
            }

        }

        th,
        td {
            word-break: keep-all;
        }






        /* Location, Phone, Email Section */
        .contact-list {
            list-style-type: none;
            margin-left: -30px;
            padding-right: 10px;
        }

        .list-item {
            line-height: 3;
            color: #fff;
        }

        .contact-text {
            font: 200 12px 'Lato', sans-serif;
            letter-spacing: 1.4px;
            color: #fff;
        }

        .place {
            margin-left: 5px;
        }

        .phone {
            margin-left: 5px;
        }

        .gmail {
            margin-left: 5px;
            width: 200px;

        }

        .contact-text a {
            color: #fff;
            text-decoration: none;
            transition-duration: 0.2s;
        }

        .contact-text a:hover {
            color: #fff;
            text-decoration: none;
        }


        @media only screen and (max-width: 7800px) {
            .continer {
                width: 40%;
                height: 100%;
                margin-top: 30px;
            }
        }

        @media only screen and (max-width: 750px) {
            .continer {
                width: 80%;
                height: 100%;
                margin-top: 30px;
            }
        }
    </style>
</head>

<body class="syyling">
    <center>
        <div class="continer">
            <div class="testbox">
                <form action="" method="post">
                    <img src="img/consultation.png" alt="Smiley face"
                        style="float:top ;width:80px;height:80px; border-radius:10px;">
                    <h1 style="color: #2192FF;">
                        Care-Hospital
                    </h1>
                    <h1>
                        Customer Feedback Form
                    </h1>
                    <p>Please take a few minutes to give us feedback about our service by filling in this short Customer
                        Feedback Form. We are conducting this research in order to measure your level of satisfaction
                        with the quality of our service. We thank you for your participation.</p>
                    <hr />
                    <h3>Overall experience with our service</h3>
                    <table>
                        <tr>
                            <td class="first-col">Rateing Topic</td>
                            <th>Very Good</th>
                            <th>Good</th>
                            <th>Poor</th>
                        </tr>

                        <tr>
                            <td class="first-col" style="min-width: 120px;">
                                <p>How do you rate the doctor?</p>
                            </td>
                            <td><input type="radio" value="1" name="rate_11" /></td>
                            <td><input type="radio" value="2" name="rate_11" /></td>
                            <td><input type="radio" value="3" name="rate_11" /></td>
                        </tr>
                        <tr>
                            <td class="first-col" style="min-width: 80px;">
                                <p>How do you rate our pharmacy service?</p>
                            </td>
                            <td><input type="radio" value="1" name="rate_22" /></td>
                            <td><input type="radio" value="2" name="rate_22" /></td>
                            <td><input type="radio" value="3" name="rate_22" /></td>
                        </tr>
                        <tr>
                            <td class="first-col" style="min-width: 80px;">
                                <p>How do you evaluate the speed of obtaining the service?</p>
                                <p>
                                    <?php echo $READBACKERRE ?>
                            </td>
                            <td><input type="radio" value="1" name="rate_33" /></td>
                            <td><input type="radio" value="2" name="rate_33" /></td>
                            <td><input type="radio" value="3" name="rate_33" /></td>
                        </tr>

                        <tr>
                            <td class="first-col" style="min-width: 120px;">
                                <p style="font-weight: bold; color: #ff0000;">How do you rate our entire service?</p>
                            </td>
                            <td><input type="radio" value="1" required="required" name="rate_44" required autofocus />
                            </td>
                            <td><input type="radio" value="2" name="rate_44" />
                            </td>
                            <td><input type="radio" value="3" name="rate_44" />
                            </td>
                        </tr>

                    </table>



                    <h4>If there is a problem, please write it here... </h4>
                    <h4>Or what we shoud change in order to live up to your
                        expectations?</h4>
                    <textarea placeholder="Write here..." style="background:#155984; border:none; border-radius:10px; resize: none; color: #fff;
" rows="5" name="msg"></textarea>
                    <h4>Optional!</h4>
                    <small>Only if you want to get response from us.</small>
                    <div>
                        <table>

                            <tr>
                                <td>
                                    <center> <input type="email"
                                            style="background:#155984; border:none;  border-radius:10px;"
                                            placeholder="Email..." name="email" /> </center>
                                </td>
                                <td>
                                    <center><input type="text"
                                            style="background:#155984; border:none;  border-radius:10px;"
                                            placeholder="Name..." name="name" /> </center>
                                </td>
                            </tr>

                        </table>
                    </div>
                    <div class="btn-block">
                        <button type="submit" name="submit">Send Feedback</button>
                    </div>
                </form>
            </div>
            <div class="direct-contact-container">
                <table>
                    <ul class="contact-list">
                        <th class="list-item"><i class="fa fa-map-marker fa-2x"><span
                                    class="contact-text place">Egypt,cairo</span></i></th>

                        <th class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a
                                        href="tel:1-212-555-5555" title="Give me a call">+201152248129</a></span></i>
                        </th>

                    </ul>
                </table>

                <ul class="social-med">
                    <li><a href="#" target="_blank" class="contact-icon">
                            <i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="#" target="_blank" class="contact-icon">
                            <i class='fa fa-linkedin'></i></a>
                    </li>
                    <li><a href="#" target="_blank" class="contact-icon">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                    </li>
                </ul>
                <hr>

                <div class="copyright">&copy; ALL OF THE RIGHTS RESERVED</div>

            </div>
        </div>
    </center>
</body>
<script>
    document.querySelector('#contact-form').addEventListener('submit', (e) => {
        e.preventDefault();
        e.target.elements.name.value = '';
        e.target.elements.email.value = '';
        e.target.elements.message.value = '';
    });
</script>

</html>