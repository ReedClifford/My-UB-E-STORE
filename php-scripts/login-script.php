<?php

include '../include/connect.php';
session_start();


if (isset($_POST['uid']) && isset($_POST['pwd']) && isset($_POST['usertype'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uid = validate($_POST['uid']);
    $pwd = validate($_POST['pwd']);
    $usertype = validate($_POST['usertype']);
    if (empty($uid)) {
        header("location: ../login.php?error=User Id is Required");
        exit();
    } elseif (empty($pwd)) {
        header("location: ../login.php?error=Password  is Required");
        exit();
    } else {
        $sql = "SELECT * FROM user WHERE uid = '$uid' AND pwd = '$pwd'";
        $result = mysqli_query($connect, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['pwd'] === $pwd && $row['usertype'] === $usertype) {

                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['uid'] = $row['uid'];
                $_SESSION['usertype'] = $row['usertype'];
                if ($row['usertype'] == 'admin') {
                    header("location: ../admin-dashboard.php");
                    # code...
                } elseif ($row['usertype'] == 'student') {
                    header("location: ../landing-page.php");
                } else {
                    header("location: ../login.php?error=Incorrect User Id or Password");
                    exit();
                }
            } else {
                header("location: ../login.php?error=Incorrect User Id or Password");
                exit();
            }
        } else {
            header("location: ../login.php?error=Incorrect User Id or Password");
            exit();
        }
    }
} else {
    header("location: ../login.php");
    exit();
}

// if (isset($_POST['uid']) && isset($_POST['pwd'])) {
//     function validate($data)
//     {
//         $data = trim($data);
//         $data = stripslashes($data);
//         $data = htmlspecialchars($data);
//         return $data;
//     }
//     $uid = validate($_POST['uid']);
//     $pwd = validate($_POST['pwd']);
//     if (empty($uid)) {
//         header("location: ../login.php?error=User Id is Required");
//         exit();
//     } elseif (empty($pwd)) {
//         header("location: ../login.php?error=Password  is Required");
//         exit();
//     } else {

//         $sql = "SELECT * FROM users WHERE uid = '$uid' AND pwd = '$pwd'";
//         $result = mysqli_query($connect, $sql);
//         if (mysqli_num_rows($result) === 1) {
//             $row = mysqli_fetch_assoc($result);

//             if ($row['uid'] === $uid && $row['pwd'] === $pwd) {
//                 $_SESSION['uid'] = $row['uid'];
//                 $_SESSION['id'] = $row['id'];
//                 $_SESSION['name'] = $row['name'];
//                 header("location: ../landing-page.php");
//                 exit();
//             } else {
//                 header("location: ../login.php?error=Incorrect User Id or Password");
//                 exit();
//             }
//         } else {
//             header("location: ../login.php?error=Incorrect User Id or Password");
//             exit();
//         }
//     }
// } else {
//     header("location: ../login.php");
//     exit();
// }
