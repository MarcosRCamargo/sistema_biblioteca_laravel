<?php
if(resolve('/admin')){
    render('admin/home', 'admin');
}elseif(resolve('/admin/pages')){
    render('admin/home', 'admin');
}else{
    echo 'Página não encontrada';
}
