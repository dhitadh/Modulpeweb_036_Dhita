<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php
    require "koneksi.php";
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        // Mencegah SQL Injection
        $email = $koneksi_user->real_escape_string($email);
        $password = $koneksi_user->real_escape_string($password);
    
        // Mengambil data dari database
        $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
        $result = $koneksi_user->query($sql);
    
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Login berhasil
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['name'];
            echo "<script>alert('Login berhasil!');</script>";
            header('location:dashboard.php');
        } else {
            // Login gagal
            echo "<script>alert('Email atau password salah!');</script>";
        }
    }
    ?>
    
    <div class="flex justify-center items-center h-screen bg-gray-100">
        <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
            <h2 class="text-3xl font-bold mb-6 text-center">Welcome Back!</h2>
            <form action="#" method="post" autocomplete="off">
                <div class="mb-6">
                    <label for="email" class="block font-medium mb-2 text-gray-700">Email Address</label>
                    <input type="email" name="email" id="email"
                        class="border border-gray-300 rounded-lg px-4 py-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="youremail@domain.com">
                </div>
                <div class="mb-6">
                    <label for="password" class="block font-medium mb-2 text-gray-700">Password</label>
                    <input type="password" name="password" id="password"
                        class="border border-gray-300 rounded-lg px-4 py-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="*******">
                </div>
                <div class="flex justify-between items-center mb-6">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember"
                            class="text-blue-500 focus:ring-0 rounded-sm cursor-pointer">
                        <label for="remember" class="text-gray-700 ml-3 cursor-pointer">Remember me</label>
                    </div>
                    <a href="#" class="text-blue-500 hover:text-blue-700">Forgot password</a>
                </div>
                <button type="submit"
                    class="bg-blue-500 text-white font-medium py-3 px-6 rounded-lg w-full hover:bg-blue-600 transition-colors">Login</button>
            </form>
        </div>
    </div>
            </form>
        </div>
    </div>
</body>

</html>