<?php
include "header.php";
?>


<div class="col-6 offset-3">
         <div id="formContent">
                            <div class="fadeIn first">
                            <h1> Cari Hesap Ekle</h1>
                            </div>
                    <form method="post">
                    <input type="text" name="isim" class="fadeIn second" placeholder="İsim Soyisim"><br><br>
                    <input type="text" name="mail" class="fadeIn third" placeholder="E-Mail"><br><br>
                    <input type="text" name="adres" class="fadeIn third" placeholder="Adres"><br>
                    <input type="submit" class="fadeIn fourth" value="EKLE">    
                    </form>
                            <div id="formFooter">
                            <a class="underlineHover" href="#"></a>
                            </div>

         </div>
    </div>


<?php
include "footer.php";
?>