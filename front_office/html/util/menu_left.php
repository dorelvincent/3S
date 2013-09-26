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
            <p><input type="button" name="recherche" value="Recherche"; id="schearch" class="button_1" /></p>
            <p><input type="text" name="sch_txt" id="sch_txt" class="sch"/></p>
    </div>

    <div id="search_pro">
        <p>
                <form>
                        <select name="cat"  id="cat" class="liste" onChange="ax_react();">
                                <?php 

                                        $c = new Connexion();
                                        $c->setReq("SELECT * FROM categorie;");
                                        $cate = $c->Select();
                                        if(!(is_a($cate, "PDOStatement")))
                                        {


                                        echo "<option> Bah</option>";
                                        }
                                        else
                                        {
                                                while ($donnees = $cate->fetch())
                                                {
                                                ?>

                                                        <option value="<?php echo $donnees['CODECAT']; ?>"><?php echo $donnees['LIBCAT']; ?></option>

                                                <?php
                                                }
                                        }?>
                        </select>
                </form>
        </p>
                <p>
                <form>
                        <select name="souscat" id="souscat">

                        </select>
                </form>
        </p>
        <p>
                <form>
                        <select name="prix" size="1">
                                <option>prix</option>
                        </select>
                </form>
        </p>
        <p><input type="button" name="sch_prod" value="Vue d�taill�"; id="sch_p" class="button_1"/></p>
    </div>
    <div id="panier">
        <p>Panier</p>
    </div>
</div>