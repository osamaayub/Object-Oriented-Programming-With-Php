<?php
class User {
    private $pdo;

    public function __construct($host, $dbname, $username, $password) {
        try {
            $dsn = "pgsql:host=$host;dbname=$dbname";
            $this->pdo = new PDO($dsn, $username, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    // Check if a user already exists
    private function userExists($username, $email) {
        $sql = "SELECT * FROM users WHERE username = :username OR email = :email";
        $stmt = $this->pdo->prepare($sql);
        try {
            $stmt->execute([
                ":username" => $username,
                ":email" => $email
            ]);
        } catch (PDOException $e) {
            die("Query execution failed: " . $e->getMessage());
        }
        return $stmt->fetch() ? true : false;
    }

    // Register a new user
    public function register($username, $password, $email) {
        if ($this->userExists($username, $email)) {
            return "Username or email is already taken \n";
        }
        $sql = "INSERT INTO users (username, password, email) VALUES (:username, :password, :email)";
        $stmt = $this->pdo->prepare($sql);
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        try {
            $stmt->execute([
                ":username" => $username,
                ":password" => $hashedPassword,
                ":email" => $email
            ]);
        } catch (PDOException $e) {
            die("Query execution failed: " . $e->getMessage());
        }
        return 'User registered successfully'."\n";
    }

    // Login User
    public function login($username, $password) {
        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':username' => $username]);
        $user = $stmt->fetch();

        // Correct password verification
        if ($user && password_verify($password, $user['password'])) {
            return "Login Successful";
        }
        return "Invalid username or password \n";
    }
    public function updateUserDetails($id, $newData) {
        $fields = [];
        $values = [':id' => $id];

        foreach ($newData as $key => $value) {
            $fields[] = "$key = :$key";
            $values[":$key"] = $value;
        }

        $sql = "UPDATE users SET " . implode(', ', $fields) . " WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($values);
        
        return "User details updated successfully \n";
    }
}

$host = 'localhost';
$dbname = 'user_management';
$dbUser = 'postgres';
$dbpassword = 'Usama4385';

// Create a User Object 
$user = new User($host, $dbname, $dbUser, $dbpassword);

// Register a user
echo $user->register('osamayub', 'securepassword123', 'ayubosama416@gmail.com');

// Login User
echo "\n";
echo $user->login('osamayub', 'securepassword123')."\n";

// Update user details
// $updateData = ['email' => 'ayubosama3@gmail.com'];
// echo $user->updateUserDetails(1, $updateData);
?>