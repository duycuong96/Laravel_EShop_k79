<?php function showError($errors, $nameInput) {
    if ($errors->has($nameInput)) {
        echo '<div class="alert alert-danger" role="alert"><strong>';
        echo $errors->first($nameInput);
        echo '</strong></div>';
    }


}

function getCategory($danhMuc, $idCha, $chuoiTab) {
    foreach($danhMuc as $banGhi) {
        if($banGhi['parent']==$idCha) {
            echo   '<option value="'.$banGhi['id'].'">'.$chuoiTab.$banGhi['name'].'</option>';
            getCategory($danhMuc, $banGhi['id'], $chuoiTab.'---|');
        }

    }

}
