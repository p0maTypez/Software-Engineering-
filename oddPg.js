const password_el = document.querySelector('#password');
const length_el = document.querySelector('#length');
const uppercase_el = document.querySelector('#Uppercase');
const lowercase_el = document.querySelector('#Lowercase');
const numbers_el = document.querySelector('#Numbers');
const sc_el = document.querySelector('#SC');

const generate_btn = document.querySelector("#Generate");
generate_btn.addEventListener('click', generatepass);
const copy_btn = document.querySelector("#copy");
copy_btn.addEventListener('click', copypass);

const uppercase_chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
const lowercase_chars = "abcdefghijklmnopqrstuvwxyz";
const numbers_chars = "1234567890";
const sc_chars = "!@#$%^&*()";

function generatepass() { 
    let password = "";
    let length = length_el.value;
    let chars = "";

    chars += uppercase_el.checked ? uppercase_chars : "";
    chars += lowercase_el.checked ? lowercase_chars : "";
    chars += numbers_el.checked ? numbers_chars : "";
    chars += sc_el.checked ? sc_chars : "";

    for (let i = 0; i < length; i++) {
        let result = Math.floor(Math.random() * chars.length); 
        password += chars.substring(result, result + 1);
    }
     
    password_el.value = password;

    // Send data to the server
    savePassword(length, uppercase_el.checked, lowercase_el.checked, numbers_el.checked, sc_el.checked, password);
}

async function copypass() {
    if (navigator.clipboard) { 
        await navigator.clipboard.writeText(password_el.value);
        alert("Password copied to clipboard");
    }
}

function savePassword(length, use_uppercase, use_lowercase, use_numbers, use_symbols, generated_password) {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "save_password.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    
    const data = `length=${length}&use_uppercase=${use_uppercase ? 1 : 0}&use_lowercase=${use_lowercase ? 1 : 0}&use_numbers=${use_numbers ? 1 : 0}&use_symbols=${use_symbols ? 1 : 0}&generated_password=${encodeURIComponent(generated_password)}`;
    
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };
    xhr.send(data);
}

