<?php
function showError($errors,$nameInput)
{
    if ($errors->has($nameInput))
    {
        echo '<div class="alert alert-danger" role="alert"><strong>';
        echo $errors->first($nameInput);
        echo '</strong></div>';
    }
    
 
}
