<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Password Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-top: 10px;
            text-align: left;
        }
        input[type="number"], input[type="checkbox"], button {
            margin-top: 5px;
        }
        #result {
            margin-top: 20px;
        }
        #password-output {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            text-align: center;
            font-size: 16px;
        }
        button {
            margin-top: 10px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
        #copy-btn {
            display: block;
            margin: 10px auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Secure Password Generator</h1>
        <form method="post" action="">
            <label for="length">Password Length:</label>
            <input type="number" id="length" name="length" min="8" max="128" value="12">

            <label for="uppercase">Include Uppercase Letters</label>
            <input type="checkbox" id="uppercase" name="uppercase" checked>

            <label for="lowercase">Include Lowercase Letters</label>
            <input type="checkbox" id="lowercase" name="lowercase" checked>

            <label for="numbers">Include Numbers</label>
            <input type="checkbox" id="numbers" name="numbers" checked>

            <label for="symbols">Include Symbols</label>
            <input type="checkbox" id="symbols" name="symbols" checked>

            <button type="submit" name="generate">Generate Password</button>
        </form>
        <div id="result">
            <p>Your Generated Password:</p>
            <input type="text" id="password-output" value="<?php echo isset($password) ? htmlspecialchars($password) : ''; ?>" readonly>
            <button id="copy-btn" onclick="copyToClipboard()">Copy to Clipboard</button>
        </div>
    </div>

    <script>
        function copyToClipboard() {
            const passwordOutput = document.getElementById('password-output');
            passwordOutput.select();
            passwordOutput.setSelectionRange(0, 99999);
            document.execCommand('copy');
            alert('Password copied to clipboard!');
        }
    </script>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['generate'])) {
    $length = isset($_POST['length']) ? (int)$_POST['length'] : 12;
    $includeUppercase = isset($_POST['uppercase']);
    $includeLowercase = isset($_POST['lowercase']);
    $includeNumbers = isset($_POST['numbers']);
    $includeSymbols = isset($_POST['symbols']);

    $uppercaseLetters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowercaseLetters = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $symbols = '!@#$%^&*()_+[]{}|;:,.<>?';

    $characters = '';
    if ($includeUppercase) $characters .= $uppercaseLetters;
    if ($includeLowercase) $characters .= $lowercaseLetters;
    if ($includeNumbers) $characters .= $numbers;
    if ($includeSymbols) $characters .= $symbols;

    if ($characters === '') {
        echo "<script>alert('Please select at least one character type!');</script>";
    } else {
        $password = '';
        for ($i = 0; $i < $length; $i++) {
            $randomIndex = rand(0, strlen($characters) - 1);
            $password .= $characters[$randomIndex];
        }
    }
}
?>
