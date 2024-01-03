<?php
session_start();
if ($_POST) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username =="admin" && $password=="admin"){
        $_SESSION['user']=$username;
        header("Location: test123_search.php");
        exit();
    } else {
        // Authentication failed
        echo "Invalid credentials. Please try again.";
    }}


// Replace these values with your LDAP server details
/*$ldapServer = "ldap://your-ldap-server";
$ldapBaseDN = "ou=Users,dc=example,dc=com";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $ldapconn = ldap_connect($ldapServer);

    if ($ldapconn) {
        ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ldapconn, LDAP_OPT_REFERRALS, 0);

        $bind = @ldap_bind($ldapconn, "uid=$username,$ldapBaseDN", $password);

        if ($bind) {
            // Authentication successful
            $_SESSION["username"] = $username;
            header("Location: search.php");
            exit();
        } else {
            // Authentication failed
            echo "Invalid credentials. Please try again.";
        }

        ldap_close($ldapconn);
    } else {
        echo "LDAP connection failed.";
    }
}*/
?>