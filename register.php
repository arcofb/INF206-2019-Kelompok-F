<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body>

    <script type="text/javascript">
      function valid(form){
        if (form.nama.value == ""){
          alert("Nama Anda masih kosong!");
        form.nama.focus();
          return (false);
        }

        if (form.nope.value == ""){
          alert("Nomor Handphone Anda masih kosong!");
        form.nope.focus();
          return (false);
        }

        if (form.alamat.value == ""){
          alert("Alamat Anda masih kosong!");
        form.alamat.focus();
          return (false);
        }

        if (form.password.value == ""){
          alert("Password Anda masih kosong!");
        form.password.focus();
          return (false);
        }
        if(form.password.value != form.password1.value){
			    alert("Password konfirmasi tidak sama!");
        form.password.focus();
          return (false);
		    }
      return (true);
    }
</script>
        <div class="login-page">
            <div class="form">
              <form class="register" method="post" action="" onsubmit="return valid(this)">
                <h2>Pendaftaran</h2>
                <input type="text" id="nama" name="nama" placeholder="Nama"/>
                <input type="nope" id="nope" name="nope" placeholder="No telepone"/>
                <input type="alamat" id="alamat" name="alamat" placeholder="Alamat"/>
                <input type="password" id="password" name="password" placeholder="Password"/>
                <input type="password1" id="password1" name="password1" placeholder="Konfirmasi Password"/>
                <button type="submit" >Daftar</button>
                <p class="message">Sudah punya akun? <a href="">Masuk</a> atau <a href="">Beranda</a></p>
              </form>
            </div>
          </div>
    
   
    <style>@import url(https://fonts.googleapis.com/css?family=Roboto:300);


.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
/* .login-page{
  max-width	: 1080px;
	margin		: 20px auto;
	background:	
	rgba(0,0,0, 0.4);
	overflow	: hidden;
	padding		: 10px;
} */
.form {
  position: relative;
  z-index: 1;
  background: orange;
  max-width: 360px;
  margin: 0 auto 100px;
  margin-top: 10px;
  padding: 40px;
  padding-top: 10px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: aqua;
}
.form .message {
  margin: 15px 0 0;
  color: black;
  font-size: 12px;
}
.form .message a {
  color: aqua;
  text-decoration: none;
}
.register-form {
  position: relative;
  z-index: 1;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 40px;
  padding-top: 10px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}</style>
    
        </body>
</html>
