<?php
try {
    $lien = new PDO('mysql:host=mysql-whyaticket.alwaysdata.net;dbname=whyaticket_bdd', '', '');
    $lien->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die("Une erreur a été trouvée : " . $e->getMessage());
}
?>
