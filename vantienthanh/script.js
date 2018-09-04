function delete_question(id) {
    var check = confirm("Delete question ?");
    if(check){
        window.location.href = 'index.php?modul=delete&id='+id;
    }
}
