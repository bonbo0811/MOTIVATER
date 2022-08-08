
const $none = document.getElementsByClassName('table-bordered')[0].getElementsByTagName('td')[5].getElementsByTagName('img')[0];

$none.classList.remove('bad');

console.log(document.getElementsByClassName('modal').style);

document.getElementById('switch').addEventListener('click',(e) => {

    e.preventDefault();

    $none.classList.remove('bad');
    $none.src = './images/GoodJob.png';

});