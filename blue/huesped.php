<?php
function datoshuesped($max,$textos,$lang){
    include_once "textos.php";
    for($i=0;$i<$max;$i++){
        $huesped='<div class="row">
                <h4>Huesped '.($i+1).'</h4>
                </div>
                <div class="row">
            <div class="input-field col s12 m4">
                <input name="first_name'.$i.'" id="first_name" type="text" class="validate" required>
                <label for="first_name"> '.$textos["nombre"][$lang].'</label>
            </div>
            <div class="input-field col s12 m4">
                <input name="last_name'.$i.'" id="last_name" type="text" class="validate" required>
                <label for="last_name">'.$textos["apellido"][$lang].'</label>
            </div>
            <div class="input-field col s12 m4">
                <input name="idCard'.$i.'" id="idCard" type="text" class="validate" required>
                <label for="idCard">'.$textos["apellido"][$lang].'</label>
            </div>
        </div>';
        echo $huesped;
    }
}