<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    session_start();
    error_reporting(0);
    require_once("../includes/dbconn.php");
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($conn->connect_error) {
        $error = "Connection failed: " . $conn->connect_error;
        echo $error;
    }
    $sql = "SELECT id, password FROM users WHERE (username = ? OR email = ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("ss", $username, $username);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $stored_password);
            $stmt->fetch();
            // Compare the hashed input password with the stored hashed password
            if (password_verify($password, $stored_password)) {
                // Encryption for cookies
                function encryptCookie($data) {
				$key = 'MIICXwIBAAKBgQDdp74ybdBBxJWRiRFjd2fNzk5FdWiw721Rk6U1W34DOLVi5rfN
				/CAOtb0GLN3ftNYZeiOH9g4kd72i68Gnmhj6PHFq6D7P9jGeOrYAuJgvmRRCopsZ
				AAQlXEXeb9s8BC4diGGrijzv36GXOSh3G2HLnYMgbJmydiK3NVcgJZJubQIDAQAB
				AoGBAM1mk1bx8inv/NY3mXh9/yB1TI0LJu/Hf5s34cGXPifIFjZHLQ7h0+ctvLOL
				QjP6xOgpCeIFPsfGemIObI9eukL25fhGyH4dxM64by6BlamCo4Ials6bOer7+Mm8
				MzkvOT4wEHcEyqZ86NHud8V8jG98qctGy11/e+os/KNjk6QVAkEA/p69uB522zS9
				SV8YpT+16W/EA/XTg8d1vUnkDbWuxexm2Hgu8+Tg6daP4XdZ2Cjvi528BGGAE4K1
				Q05O6yUHywJBAN7bRD6i7Rht73nh2P6CNN2dWcpGQNgXNgW+/xRMa2Nd0c+2vPqx
				7pAoDHEdmpuSNQvXeThGreyKMMpk+rBp66cCQQCW6QjzJoM1mwWRhh56Ws97wvV/
				j2TE1yROg4v6IDOtNVcjd+AESCSSE8yFSpLijiikLGHyisM5TSAX+0LFFdaPAkEA
				wIAiiQBvUSTVMTD3IZETXULoJqNcq8wQ7BG5gK0qLeECtSuiPeKosXkGlkb+H9fB
				XoM3wHa9EY+k6Y8kRHKaDQJBAJz2FHl42kAEXYkyi9qG189/LdN82Pl2L1o4CIA9
				UEy5Hmw+7W2f3CjtvzlKzkp95a8vmuHqX6FZZ0Aem1tAhqQ=';
                    $cipher = 'AES-256-CBC';
                    $options = 0;
                    $iv = openssl_random_pseudo_bytes(16);
                    $encrypted = openssl_encrypt($data, $cipher, $key, $options, $iv);
                    if ($encrypted === false) {
                        die('Encryption failed: ' . openssl_error_string());
                    }
                    return base64_encode($iv . $encrypted);
                }
                // Set encrypted cookie
                $cookieData = serialize(array('username' => $username, 'id' => $id, 'email' => $email,));
                // Encrypt the serialized data
                $encryptedCookie = encryptCookie($cookieData);
                setcookie('SUBAHANALLAH', $encryptedCookie, time() + (86400 * 30), "/"); // Example: 30 days
                // setcookie('SBBN', encryptCookie($id), time() + (86400 * 30), "/"); // Example: 30 days
                $_SESSION['id'] = $id;
                header("location: ../my-account.php");
            } else {
                $_SESSION['error_message'] = "উফফ! আপনার Password এ সমস্যা দেখা দিয়েছে। '$password' এটি সঠিক নয়।";
                header("location: ../login.php");
                exit();
            }
        } else {
            $_SESSION['error_message'] = "উফফ! আপনার Email or Username এ সমস্যা দেখা দিয়েছে। '$username' এটি সঠিক নয়।";
            header("location: ../login.php");
            exit();
        }
        $stmt->close();
    } else {
        // Error in prepared statement
        $_SESSION['error_message'] = "Error in login: " . $conn->error;
        header("location: ../login.php");
        exit(); //stops execution
    }
    $conn->close();    
}
?>
<?php
// if (isset($_POST['username']) && isset($_POST['password'])) {
//     session_start();
//     error_reporting(0);
//     require_once("../includes/dbconn.php");
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     if ($conn->connect_error) {
//         $error = "Connection failed: " . $conn->connect_error;
//         echo $error;
//     }
//     // Hash the input password using SHA-256
//     // $hashed_password = hash('sha256', $password);
//     $sql = "SELECT id, password FROM users WHERE (username = '$username' OR email = '$username')";
//     $result = $conn->query($sql);
//     if ($result->num_rows > 0) {
//         $row = $result->fetch_assoc();
//         $stored_password = $row['password'];
//         // Compare the hashed input password with the stored hashed password
//         if (password_verify($password, $stored_password)) {
//             $id = $row['id'];
//             $_SESSION['id'] = $id;
//             function encryptCookie($data) {
// 				$key = 'MIICXwIBAAKBgQDdp74ybdBBxJWRiRFjd2fNzk5FdWiw721Rk6U1W34DOLVi5rfN
// 				/CAOtb0GLN3ftNYZeiOH9g4kd72i68Gnmhj6PHFq6D7P9jGeOrYAuJgvmRRCopsZ
// 				AAQlXEXeb9s8BC4diGGrijzv36GXOSh3G2HLnYMgbJmydiK3NVcgJZJubQIDAQAB
// 				AoGBAM1mk1bx8inv/NY3mXh9/yB1TI0LJu/Hf5s34cGXPifIFjZHLQ7h0+ctvLOL
// 				QjP6xOgpCeIFPsfGemIObI9eukL25fhGyH4dxM64by6BlamCo4Ials6bOer7+Mm8
// 				MzkvOT4wEHcEyqZ86NHud8V8jG98qctGy11/e+os/KNjk6QVAkEA/p69uB522zS9
// 				SV8YpT+16W/EA/XTg8d1vUnkDbWuxexm2Hgu8+Tg6daP4XdZ2Cjvi528BGGAE4K1
// 				Q05O6yUHywJBAN7bRD6i7Rht73nh2P6CNN2dWcpGQNgXNgW+/xRMa2Nd0c+2vPqx
// 				7pAoDHEdmpuSNQvXeThGreyKMMpk+rBp66cCQQCW6QjzJoM1mwWRhh56Ws97wvV/
// 				j2TE1yROg4v6IDOtNVcjd+AESCSSE8yFSpLijiikLGHyisM5TSAX+0LFFdaPAkEA
// 				wIAiiQBvUSTVMTD3IZETXULoJqNcq8wQ7BG5gK0qLeECtSuiPeKosXkGlkb+H9fB
// 				XoM3wHa9EY+k6Y8kRHKaDQJBAJz2FHl42kAEXYkyi9qG189/LdN82Pl2L1o4CIA9
// 				UEy5Hmw+7W2f3CjtvzlKzkp95a8vmuHqX6FZZ0Aem1tAhqQ='; // Replace with a strong, unique key
//                 $cipher = 'AES-256-CBC';
//                 $options = 0;
//                 $iv = openssl_random_pseudo_bytes(16);
//                 $encrypted = openssl_encrypt($data, $cipher, $key, $options, $iv);
//                 if ($encrypted === false) {
//                     die('Encryption failed: ' . openssl_error_string());
//                 }
//                 return base64_encode($iv . $encrypted);
//             }
//             function decryptCookie($encrypted) {
//                 $key = 'MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDdp74ybdBBxJWRiRFjd2fNzk5F
// 				dWiw721Rk6U1W34DOLVi5rfN/CAOtb0GLN3ftNYZeiOH9g4kd72i68Gnmhj6PHFq
// 				6D7P9jGeOrYAuJgvmRRCopsZAAQlXEXeb9s8BC4diGGrijzv36GXOSh3G2HLnYMg
// 				bJmydiK3NVcgJZJubQIDAQAB'; // Replace with the same key used for encryption
//                 $cipher = 'AES-256-CBC';
//                 $options = 0;
//                 $data = base64_decode($encrypted);
//                 $iv = substr($data, 0, 16);
//                 $encrypted = substr($data, 16);
//                 $decrypted = openssl_decrypt($encrypted, $cipher, $key, $options, $iv);
//                 if ($decrypted === false) {
//                     die('Decryption failed: ' . openssl_error_string());
//                 }
//                 return $decrypted;
//             }
//             // // Encrypt and set user data in cookies
//             // $SBGBEN = [
//             //     'id' => $id,
//             //     'groom_bride_email' => $groom_bride_email,
// 			// 	'groom_bride_number' => $groom_bride_number,
// 			// 	'groom_bride_family_number' => $groom_bride_family_number,
//             //     // Add more user data as needed
//             // ];
// 			// $SBUAEN = [
//             //     'id' => $id,
//             //     'username' => $username,
// 			// 	'email' => $email,
// 			// 	'password' => $password,
// 			// 	'number' => $number,
//             //     // Add more user data as needed
//             // ];
// 			// $encrypted_biodata = encryptCookie(json_encode($SBGBEN));
//             // $encrypted_data = encryptCookie(json_encode($SBUAEN));

//             // setcookie('SBGBEN', $encrypted_biodata, time() + 3600, '/', '', false, true);
//             // setcookie('SBUAEN', $encrypted_data, time() + 3600, '/', '', false, true);
//             header("location:../my-account.php");
//         } else {
//             $_SESSION['error_message'] = "উফফ! আপনার Password এ সমস্যা দেখা দিয়েছে। আপনার Password টি সঠিক নয়।";
//                 // Redirect to login page with error message
//                 header("location: ../login.php");
//                 exit(); // Ensure script stops execution
//         }
//     } else {
//         $_SESSION['error_message'] = "উফফ! আপনার Email/Username এ সমস্যা দেখা দিয়েছে। আপনার Email/Username টি সঠিক নয়।";
//             // Redirect to login page with error message
//             header("location: ../login.php");
//             exit(); // Ensure script stops execution
//     }
//     $conn->close();
// }
?>