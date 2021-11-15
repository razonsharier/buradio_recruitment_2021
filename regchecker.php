<?php
session_start();
?>

<?php
header('Cache-control: no-cache, must-revalidate, max-age=0');

$_SESSION["searchfield"] = "display: none";
$_SESSION["buffiderror"] = "display: none";

require('dbc/db.php');

if (isset($_POST['mobile'])) {
    $getid = mysqli_real_escape_string($conn, $_POST['mobile']);
    $_SESSION["getid"] = $getid;

    $sqlbuffid = "SELECT * FROM radioo_recruitment_2021 WHERE phone_number = '$getid' or pay_number = '$getid' or email = '$getid'";
    $resultbuffid = mysqli_query($conn, $sqlbuffid) or die(mysqli_error($conn));
    $countbuffid = mysqli_num_rows($resultbuffid);


    if ($countbuffid > 0) {

        $databuffid = mysqli_fetch_array($resultbuffid, MYSQLI_ASSOC);
        unset($_SESSION["searchfield"]);

        if ($databuffid['reg_status'] == "Successful") {
            $paydue = "display: none;";
        } else {
            $paydone = "display: none;";
        }
    } else {
        unset($_SESSION["buffiderror"]);
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Checker: BU RADiO - Recruitment, 2021</title>
    <link rel="shortcut icon" href="./img/logo/favicon.ico">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div id="header" class="header-background">
    <div class="header-container">
        <header>
            <a href="./"><img src="assets/images/logo.png" alt="site logo" height="45px"></a>
            <a href="./" class="home-btn"><img src="assets/images/home.png" alt="home image"></a>
        </header>
    </div>
</div>
<div class="body-container">
    <div style="margin-top: 10px;"></div>

    <div class="about-container">
        <div class="about-content">

            <div class="blog-content">
                <div style="margin: auto; max-width: 480px; text-align:center">
                    <h2><u>Check Your Registration Status</u></h2>
                    <div style="margin-top: 50px;">
                        <div class="buffid">
                            <form action="" method="post" enctype="form-data">
                                <label style="color: #666655; text-align: left; margin-left: 5px; font-size: 14px;">Mobile Number or Email</label>
                                <input class="search_icon" style="clear:both;" type="text" name="mobile" required />
                                <button style="min-width: 120px; border-radius: 5px; margin-top: 10px; margin-left: 5px;" type="submit" name="regcheck">Check Status</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div style="margin-top: 50px;<?php echo $_SESSION['searchfield']; ?>">
                <table>
                    <tbody>
                    <tr>
                        <td>
                            <div>
                                <p class="ttitle">Name:</p>
                                <p class="tvalue"><?php echo $databuffid['full_name'] ?></p>
                            </div>
                        </td>
                        <td style="width: 120px">
                            <div>
                                <p class="ttitle">Mobile:</p>
                                <p class="tvalue"><?php echo $databuffid['phone_number'] ?><br/><?php echo $databuffid['pay_number'] ?></p>
                            </div>
                        </td>
                        <td>
                            <div>
                                <p class="ttitle">Title:</p>
                                <p class="tvalue"><?php echo $databuffid['apply_for'] ?></p>
                            </div>
                        </td>
                        <td style="width: 155px;">
                            <div>
                                <p class="ttitle">Reg. Status:</p>
                                <p style="<?php echo $paydue ?>;" class="tvalue pay_due">Payment Due</p>
                                <p style="<?php echo $paydone ?>;" class="tvalue pay_done">Successful</p>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div style="<?php echo $_SESSION['buffiderror']; ?>" class="errormsg">
                <a>Not Found!</a>
            </div>


        </div>
    </div>
</div>


<?php
unset($_SESSION["getid"]);
?>


</body>
</html>