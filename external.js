
function greetUser() {
    const username = document.getElementById('displayUser').innerText;
    const user_id = document.getElementById('displayID').innerText;
    const birthday = document.getElementById('displayBD').innerText;
    const sex = document.getElementById('displaySex').innerText;
    const age = document.getElementById('displayAge').innerText;

    alert(`Hello ${username}. Your User ID is ${user_id}, You're a ${sex} Your Age is ${age} and your birthday is ${birthday}`);
}
