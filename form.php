  
<?php
sınıf  Formu
{    
    var string $ eylem ;    //"var" anahtarlar, bir sınıflarını ya da gecerken kamusal iletilecek
    var string $ method ;
    var dizi $ alanları =[];
    
    özel  işlev  __construct ( $ eylem , $ yöntem )
    {
        $ bu -> işlem = $ işlem ; //burada const'ile nesnemizi ilk uygulama hazırlıyoruz
        $ bu -> yöntem = $ yöntem ; //ve burada da ..
    }


    genel  statik  işlev  createGetForm ( $ eylem ) 
    {
         kendi kendine dön :: createForm ( $ eylem , "GET" );    //const(sabit) ve staticlerde self:: kullanılır, uyarlamalarda this->
    }
    genel  statik  işlev  createForm ( $ eylem , $ yöntem )
    {
        return  yeni  Formu ( $ eylem , $ yöntemi );           //const(sabit) ve staticlerde self:: kullanılır, uyarlamalarda this->
    }
    genel  statik  işlev  createPostForm ( $ action )  
    {
         kendi kendine dön :: createForm ( $ eylem , "POST" );   //const(sabit) ve staticlerde self:: kullanılır, uyarlamalarda this->
    }



    public  function  addField ( string  $ title , string  $ value , ? string  $ defaultValue = null ) //addField için ileri (başlık,değer ve varsa default atanmış değer)->app.php 14.satır
    { 
        $ alanlar =[ $ başlık , $ değer , $ defaultValue ];   //fields[] 'bir değer ilavesi

        $ this -> alanlar []= $ alanlar ;
    }

    public  function  setMethod ( $ method )   //method set edildi
    {
        $ bu -> yöntem = $ yöntem ;  
    }

    public  function  render ()   //burada büyütülecek html ile ilgili gerekli işlemlerle birlikte
    { 

        foreach ( $ this -> $ değeri olarak alanlar  ) { 
            echo  "<form yöntemi='" . $ this -> yöntemi . "' eylem ='" . $ bu -> eylem . "'>\n" ;

           echo  " <label for='" . $ değeri [ 1 ] . "'>" . $ değeri [ 0 ] . "</label>\n" ;
            if ( isset ( $ değer [ 2 ])){    //bu 'if' age ve türevleri için
                echo  " <input type='text' name='" . $ değeri [ 1 ] . "' yer tutucu ='" . $ değeri [ 2 ]. "' />\n" ;
            }
            başka {
                echo  " <input type='text' name='" . $ değeri [ 1 ] . "' placeholder='Değeri girin' />\n" ;
            }
        }
        echo  " <button type='submit'>Gönder</button>\n</form>\n" ;
    }
}
