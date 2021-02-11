<?php

function deleteapprenant($NOM, $PRENOM){
    $sql = "DELETE FROM liste WHERE NOM = $NOM AND PRENOM = $PRENOM";
    return executeSQL($sql);

}

?>
