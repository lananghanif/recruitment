<form method="post" action="aksi.php" onsubmit="return validasi_input(this)">
<p>Username: <input name="username" type="text"></p>
<p>Password: <input name="password" type="text"></p>
<p><input name="" type="submit" value="Submit"></p>
</form>
<script type="text/javascript">
function validasi_input(form){
   pola_username=/^[a-z\_\-]{8,100}$/;
   if (!pola_username.test(form.username.value)){
      alert ('Username minimal 8 karakter, hanya boleh Huruf kecil dan menggunakaan underscore!');
      form.username.focus();
      return false;
   }
return (true);
}

function validasi_input(form){
   pola_username=/^[a-zA-Z0-9\_\-\!\`\~\@\#\$\%\^\&\*\(\)\=\+\<\>\?\:\"\[\]\{\}\;\'\,\.\/"]{8,100}$/;
   if (!pola_username.test(form.password.value)){
      alert ('Password minimal 8 karakter, harus terdiri dari huruf kecil, huruf besar, angka, dan karakter spesial. Dengan pangjang 8 karakter.!');
      form.password.focus();
      return false;
   }
return (true);
}
</script>
