<?php
session_start();

// LDAP-Konfiguration
/*//$ldapServer = "ldap://your-ldap-server";
$ldapBaseDN = "ou=Users,dc=example,dc=com";*///

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    //$ldapconn = ldap_connect($ldapServer);

    if ($username=="admin" & $password=="admin" ){
        $_SESSION["username"] = $username;
        header("Location: search.php");
        exit();
    }

   /* if ($ldapconn) {
        ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ldapconn, LDAP_OPT_REFERRALS, 0);

        $bind = @ldap_bind($ldapconn, "uid=$username,$ldapBaseDN", $password);

        if ($bind) {
            $_SESSION["username"] = $username;
            header("Location: search.php");
            exit();
        } else {
            echo "Ungültige Anmeldedaten. Bitte versuchen Sie es erneut.";
        }

        ldap_close($ldapconn);
    } else {
        echo "LDAP-Verbindung fehlgeschlagen.";
    }*/
}
?>
