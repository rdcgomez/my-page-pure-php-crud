function edt_id(id) {
 if(confirm('Sure to edit ?') ) {
  window.location.href='mypageupdate.php?edit_id='+id;
 }
}

function delete_id(id) {
 if(confirm('Sure to Delete ?') ) {
  window.location.href='mypagedatabase.php?delete_id='+id;
 }
}