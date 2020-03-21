<?php
include "header.php";
?>


<div class="col-6 offset-3">
         <div id="formContent">
                            <div class="fadeIn first">
                            <h1>Ürün Ekle</h1>
                            </div>
                    <form method="post">
                    <input type="text" name="urunisim" class="fadeIn second" placeholder="Ürün İsim"><br><br>
                    <input type="text" name="adet" class="fadeIn third" placeholder="Adet"><br><br>
                    <input type="text" name="fiyat" class="fadeIn third" placeholder="Fiyat"><br>
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