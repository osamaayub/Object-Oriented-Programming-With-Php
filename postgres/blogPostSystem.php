<?php

class Post
{

    private $pdo;

    public function __construct($host, $dbname, $user, $password)
    {
        try {
            $dsb = "pgsql:host=$host,dbname=$dbname";
            $this->pdo = new PDO($dsb, $user, $password, [

                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch (PDOException $e) {
            die("database connnection failed".$e->getMessage());
        }
    }
    //create posts
    public function createPost($title,$content,$author){
        try{
            $sql="INSERT INTO POSTS(title,content,author,created_at,updated_at)VALUES(:title,:content,:author,NOW(),NOW())";
        
            $stmt=$this->pdo->prepare($sql);
            $stmt->execute([
            'title'=>$title,
            'content'=>$content,
            'author'=>$author
            ]);
            return "post created sucessfully";
        }
        catch(PDOException $e){
          return "Error:".$e->getMessage();
        }
    }
    //get posts by Id
    public function getPostById($id){
       try{
        $sql='SELECT * From posts WHERE Id=:id';
        $stmt=$this->pdo->prepare($sql);
        $stmt->execute([
            'id'=>$id
        ]);
       return  $stmt->fetch(PDO::FETCH_ASSOC);
       }
       catch(PDOException $e){
        return "Error".$e->getMessage();
       }
    }
    //update post
    public function updatePost($id, $newData) {
        try {
            $sql = "UPDATE posts SET title = :title, content = :content, author = :author, updated_at = NOW() WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([ 'title' => $newData['title'], 'content' => $newData['content'], 'author' => $newData['author'], 'id' => $id ]);
            return "Post updated successfully.";
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }
    //delete posts 
    public function deletePost($id){
        try{
         $sql="DELETE FROM posts WHERE id=:id";
         $stmt=$this->pdo->prepare($sql);
         $stmt->execute([
          "id"=>$id
         ]);
         return "post deleted sucessfully";
        }
        catch(PDOException $e){
          return "Error".$e->getMessage();
        }
    }
}
$host="localhost";
$dbname="blog";
$user="postgres";
$dbpassword="Usama4385";

//creating an Instance of a Post Class
$blogPost=new Post($host,$dbname,$user,$dbpassword);

//creating a new post
 echo $blogPost->createPost("A shark movie","Deep blue Sea 2 is a great movie","Shawn davies");

 //get Posts by Id

print_r( $blogPost->getPostById(1));

//update post

$newData=['title'=>"Shark Movie",'content'=>"Deep blue sea is fantastic movie",'author'=>'John Doe'];
print_r( $blogPost->updatePost(1, $newData));
 
?>