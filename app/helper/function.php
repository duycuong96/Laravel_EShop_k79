<?php function showError($errors, $nameInput) {
    if ($errors->has($nameInput)) {
        echo '<div class="alert alert-danger" role="alert"><strong>';
        echo $errors->first($nameInput);
        echo '</strong></div>';
    }


}

function getCategory($danhMuc, $idCha, $chuoiTab,$idChon) {
    foreach($danhMuc as $banGhi) {
        if($banGhi['parent']==$idCha) {
           if($banGhi['id']==$idChon)
           {
            echo  '<option selected value="'.$banGhi['id'].'">'.$chuoiTab.$banGhi['name'].'</option>';
           }
           else {
            echo  '<option value="'.$banGhi['id'].'">'.$chuoiTab.$banGhi['name'].'</option>';
           }
            getCategory($danhMuc, $banGhi['id'], $chuoiTab.'---|',$idChon);
        }

    }

}

function showCategory($danhMuc, $idCha, $chuoiTab) {
    foreach($danhMuc as $banGhi) {
        if($banGhi['parent']==$idCha) {
            echo '
            <div class="item-menu"><span>'.$chuoiTab.$banGhi['name'].'</span>
            <div class="category-fix">
                <a class="btn-category btn-primary" href="/admin/category/edit/'.$banGhi['id'].'"><i class="fa fa-edit"></i></a>
                <a class="btn-category btn-danger" href="/admin/category/del/'.$banGhi['id'].'"><i class="fas fa-times"></i></i></a>
            </div>
            </div>
            ';
            showCategory($danhMuc, $banGhi['id'], $chuoiTab.'---|');
        }

    }

}


function getLevel($danhMuc,$idCha,$cap)
{
	foreach($danhMuc as $banGhi)
	{
		if($banGhi['id']==$idCha)
		{
			$cap++;
			if($banGhi['parent']==0)
			{
				return $cap;
			}
		    return getLevel($danhMuc,$banGhi['parent'],$cap);

		}
	}
}
