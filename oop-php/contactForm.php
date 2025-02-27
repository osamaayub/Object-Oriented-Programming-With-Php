<?php



class Contact
{
    private string $name;
    private string $email;
    private string $phoneNumber;

    public function __construct($name, $email, $phoneNumber)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
    }
    //setters
    public function setName(string $name): void
    {
        if (empty($name)) {
            echo "name cannot be empty";
        }
        $this->name = $name;
    }
    public function setEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email is missing @ sign";
        }
        $this->email = $email;
    }
    public function setPhoneNumber($phoneNumber): void
    {
        if (empty($phoneNumber) && strlen($phoneNumber) <= 8) {
            echo "phone Number cannot be empty and it contain 8 letters";
        }


        $this->phoneNumber = $phoneNumber;
    }
    //getters
    public function getName(): string
    {
        return "name:"." ".$this->name." ";
    }
    public function getPhoneNumber(): string
    {
        return "phoneNumber:"." ". $this->phoneNumber." ";
    }
    public function getEmail(): string
    {
        return "Email:"." ". $this->email." ";
    }
}
//create an instance of Contact Class
try{
$contact=new Contact("Osama Ayub","ayubosama416@gmail.com","+923314828005");
echo $contact->getName();
echo "\n";
echo $contact->getEmail();
echo "\n";
echo $contact->getPhoneNumber();
echo "\n";
}catch(InvalidArgumentException $e){
  echo "Error".$e->getMessage();
}
