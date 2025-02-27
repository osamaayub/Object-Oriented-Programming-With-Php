<?php

//Library Management System
//inheritence and polymorphism
abstract class LibraryMaterial{
    protected string $title;
    protected string $author;
    protected string $ISBN;
    protected string $publicationYear;

    public function __construct(string $title, string $author, string $ISBN, string $publicationYear)
    {
     $this->title=$title;
     $this->author=$author;
     $this->ISBN=$ISBN;
     $this->publicationYear=$publicationYear;   
    }
    abstract public function displayMaterialDetails():string;
}
class Books extends LibraryMaterial{
  private int $pageCount;
  public function __construct(string $title,string $author,string $ISBN,string $publicationYear,int $pageCount)
  {
  parent::__construct($title,$author,$ISBN,$publicationYear);
  $this->pageCount=$pageCount;
  }
  public function displayMaterialDetails():string{
    return $this->title." ".$this->author." ".$this->ISBN." ".$this->publicationYear." ".$this->pageCount;
  }
}
class DVD extends LibraryMaterial{
  private string $duration;
  public function __construct(string $title,string $author,string $ISBN,string $publicationYear,$duration){
    parent::__construct($title,$author,$ISBN,$publicationYear);
    $this->duration=$duration;
  }
  public function displayMaterialDetails(): string
  {
    return $this->title." ".$this->author." ".$this->ISBN." ".$this->publicationYear." ".$this->duration;
  }
}
class Magazine extends LibraryMaterial{
 private string $issueNumber;
 public function __construct(string $title,string $author,string $ISBN,string $publicationYear,$issueNumber){
    parent::__construct($title,$author,$ISBN,$publicationYear);
    $this->issueNumber=$issueNumber;
  }
 public function displayMaterialDetails(): string
 {
    return $this->title." ".$this->author." ".$this->ISBN." ".$this->publicationYear." ".$this->issueNumber;
 }
}

//books class
$books=new Books("Deep Blue sea","John wickins","12CDB2","1999",10);
echo $books->displayMaterialDetails();
//DVD class
echo "\n";
$dvd=new DVD("Conjuring 2","James Wan","12BDEX","2020","2hr:30minutes");
echo $dvd->displayMaterialDetails();

echo "\n";

//magazine class
$magazine=new Magazine("Taleem o Tarbiyat","Zaheer Salam","1941","969352134","Ferozesons");
echo $magazine->displayMaterialDetails();

?>