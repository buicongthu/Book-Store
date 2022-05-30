<?php
class comment
{
    private $error;

   
    function comment($id)
    {
        $data = array();
        $db = new Database();
        $data['user_cmt'] = $_POST['user_cmt'];
        $data['product_id'] = $id;
        $data['content'] = $_POST['content'];
        $data['star']=$_POST['star'];
        $data['time']= date("Y d m");
        print_r($data['time']);
        if(!isset($_SESSION['user'])){
            $this->error.="đăng nhập để bình luận";
        }
        if(empty($data['content'])){
            $this->error="nhập bình luận";
        }
        if($this->error==""){
            $conn = mysqli_connect('localhost', 'root', '', 'drugstore');  
            $sql="INSERT INTO `comment`( `product_id`, `user_cmt`, `content`,`star`,`time`) 
            VALUES ('" . $data['product_id'] . "','" . $data['user_cmt'] . "','" . $data['content'] . "','" . $data['star'] . "','" . $data['time'] . "')";
            
            mysqli_query($conn,$sql);
        }
        $_SESSION['error'] = $this->error;
   
        
        // $query = "INSERT INTO `comment`( `product_id`, `user_id`, `content`) 
        //     VALUES ('" . $data['product_id'] . "','" . $data['user_id'] . "','" . $data['content'] . "')";
        
    }
    function get_cmt_id_product($id)
    {
        $db = new Database();
        return $db->read("SELECT * FROM `comment`  WHERE comment.product_id=".$id."");
    }

}
