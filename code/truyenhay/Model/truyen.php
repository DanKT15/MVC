<?php

include_once("Model/model.php");

class truyen extends model {   

    public function show() 
    {  
        $sql = "SELECT * FROM truyen";
        $result = $this->get($sql);
        return $result;
    }  

    public function exshow($id) 
    {  
        $sql = "SELECT * FROM truyen WHERE TenTruyen LIKE '%".$id."%' ";
        $result = $this->get($sql);
        return $result;
    }  

    public function chapter($id) 
    {  
        $sql = "SELECT * FROM chapter WHERE TenTruyen LIKE '%".$id."%';";
        $result = $this->get($sql);
        return $result;
    }

    public function exchapter($id) 
    {  
        $sql = "SELECT * FROM chapter WHERE MaChapter = ".$id.";";
        $result = $this->get($sql);
        return $result;
    }

    public function binhluan($User, $Truyen, $noidung) 
    {  
        $sql = "INSERT INTO binhluan (TenUser, TenTruyen, NoiDungBL) VALUES ('".$User."', '".$Truyen."', '".$noidung."')";
        $result = $this->set($sql);
    }

    public function showbinhluan($id) 
    {  
        $sql = "SELECT b.TenUser, b.NoiDungBL
                FROM truyen t, binhluan b
                WHERE t.TenTruyen LIKE '%".$id."%' 
                AND t.TenTruyen = b.TenTruyen";
        $result = $this->get($sql);
        return $result;
    }  

    public function theodoi($User, $Truyen) 
    {  
        $sql = "SELECT TenUser, TenTruyen 
                FROM theodoi 
                WHERE TenUser LIKE '".$User."%'
                AND TenTruyen LIKE '".$Truyen."%';";
        $result = $this->get($sql);

        if ($result == TRUE) {
            for ($i=0; $i < count($result); $i++) 
            { 
                $ktrauser = $result[$i]['TenUser'];
                $ktratruyen = $result[$i]['TenTruyen'];
            }

            if ($ktrauser == $User && $ktratruyen == $Truyen) {
                $message = "truyện đã được theo dõi từ người dùng!!!";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        }      
        else {
            $sql = "INSERT INTO theodoi (TenUser, TenTruyen) VALUES ('".$User."', '".$Truyen."')";
            $result = $this->set($sql);
            $message = "theo dõi thành công!!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    } 

    public function showtg() 
    {  
        $sql = "SELECT * FROM tacgia;";
        $result = $this->get($sql);
        return $result;
    } 

    public function showtl() 
    {  
        $sql = "SELECT * FROM theloai;";
        $result = $this->get($sql);
        return $result;
    } 

    public function shownhom() 
    {  
        $sql = "SELECT * FROM nhomdich;";
        $result = $this->get($sql);
        return $result;
    }




    public function edit($name, $content, $path, $TG, $Nhom, $TL)  
    {  
        $sql = "INSERT INTO truyen (TenTruyen, GTTruyen, ImgTruyen, TenTG, TenNhom, TenTL) 
                VALUES ('".$name."','".$content."','".$path."','".$TG."','".$Nhom."','".$TL."')";
        $result = $this->set($sql);
    }
    
    public function update($id, $name, $content, $path, $TG, $Nhom, $TL) 
    {  
        $sql = "UPDATE truyen t SET TenTruyen ='".$name."', GTTruyen ='".$content."', ImgTruyen ='".$path."',TenTG ='".$TG."', TenNhom ='".$Nhom."', TenTL ='".$TL."' 
                WHERE t.TenTruyen LIKE '%".$id."%' ";
        $result = $this->set($sql);
    }  
      
    public function destroy($id) 
    {  
        $sql = "DELETE FROM truyen WHERE truyen.TenTruyen LIKE '%".$id."%' ";
        $result = $this->set($sql);
    }  
      
}   


?>