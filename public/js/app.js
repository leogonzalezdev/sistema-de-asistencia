const birth = document.getElementById('birth');
const hoy = fecha.getDate();
let age = hoy - birth;
const ageInput = document.getElementById('age').innerHTML = age;
