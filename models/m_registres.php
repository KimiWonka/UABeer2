<?php
function setRegistre($connexio){
    try{
        $sql = "INSERT INTO client (`nom`, correu, contrasenya, direccio, poblacio, CP, edat, DNI) values(:nom, :correu, :contrasenya, :direccio, :poblacio, :CP, :edat, :DNI)";

        $consulta=$connexio->prepare($sql);
        $consulta->bindParam(":nom",$_POST['nom']);
        $consulta->bindParam(":correu",$_POST['correu']);
        $consulta->bindParam(":direccio",$_POST['direccio']);
        $consulta->bindParam(":poblacio",$_POST['poblacio']);
        $consulta->bindParam(":CP",$_POST['CP']);
        $consulta->bindParam(":edat",$_POST['edat']);
        $consulta->bindParam(":DNI",$_POST['DNI']);

        $password=$_POST['contrasenya'];
        $pass_qo=password_hash($password, PASSWORD_DEFAULT);
        $consulta->bindParam(":contrasenya" , $pass_qo);

        $consulta->execute();
        /*$dades = $consulta-> fetch(PDO::FETCH_ASSOC);*/

    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}
?>
