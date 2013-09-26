<?php 
    include_once("../class/ct_Connexion.php");
?>
<div id="menu_gauche">
    <div id="login">
            <p><input type="button" name="connexion" value="Connexion" id="conn" class="button_1" onClick="location.href='../Traitements/t_execute_connexion.php';"/></p>
            <p><input type="text" name="conn" id="log" class="sch"/>
            <p><input type="password" name="mdp" id="mdp" class="sch"/>
    </div>

    <div id="search">
            <p><input type="button" name="recherche" value="Recherche" id="schearch" class="button_1" /></p>
            <p><input type="text" name="sch_txt" id="sch_txt" class="sch"/></p>
    </div>


        <p><input type="button" name="sch_prod" value="Vue détaillée"; id="sch_p" class="button_1"/></p>
    </div>
</div>