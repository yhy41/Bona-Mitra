$(document).ready(function(){
    // CODE HERE (USE getJSON() for retrieve data.json)
   $getJSON('data.json',function(isi){
   	$('h5').html('isi.nama');
   	$('p').html('isi.hobi' 'isi.dream');
   	$('img').css('src', 'gambar.jpg')
   })
});
