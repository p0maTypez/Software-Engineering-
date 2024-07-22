const password_el = document.querySelector('#password');  // Definies and links to password
const length_el = document.querySelector('#length'); // Definies and links to length
const uppercase_el = document.querySelector('#Uppercase'); // Definies and links to Uppercase
const lowercase_el = document.querySelector('#Lowercase'); // Definies and links to Lowercase
const numbers_el = document.querySelector('#Numbers'); // Definies and links to Numbers
const SC_el = document.querySelector('#SC'); // Definies and links to SC

const generate_btn = document.querySelector("#Generate"); // Definies and links to Generate
generate_btn.addEventListener('click', generatepass); // makes listener for when generate button is used
const copy_btn = document.querySelector("#copy"); // Definies and links to copy
copy_btn.addEventListener('click', copypass); // makes listener for when copy button is used

const uppercase_chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";  // Definies what isUppercase
const lowercase_chars = "abcdefghijklmnopqrstuvwxyz"; // Definies what is Lowercase
const numbers_chars = "1234567890"; // Definies what is Numbers
const SC_chars = "!@#$%^&*()"; // Definies what is SC

function generatepass() { 
    let password = ""; // initalize password
    let length = length_el.value; // initalize length
    let chars = ""; // initalize characters

    chars += uppercase_el.checked ? uppercase_chars : ""; // checks if checkbox is used and removes previous password
    chars += lowercase_el.checked ? lowercase_chars : ""; // checks if checkbox is used and removes previous password
    chars += numbers_el.checked ? numbers_chars : ""; // checks if checkbox is used and removes previous password
    chars += SC_el.checked ? SC_chars : ""; // checks if checkbox is used and removes previous password

    for (let i = 0; i <= length; i++) {
        let result = Math.floor(Math.random() * chars.length); 
        password += chars.substring(result, result + 1);
    }
     
    password_el.value = password; // set password value to password
}

async function copypass() {
    if (navigator.clipboard) { 
        await navigator.clipboard.writeText(password_el.value); // makes copy wait for a button press then copies
        
        alert("Password copied to clipboard"); // generates alert to allow user to know if copy was succesful
    }
}
