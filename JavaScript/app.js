const $img = document.getElementsByClassName('mission')[0].querySelectorAll('[data-tab]')[0].getElementsByTagName('img')[0];

console.log($img);
console.log(document.getElementsByClassName('mission')[0].querySelectorAll('[data-tab]')[1]);

console.log(document.getElementById('switch'));

document.getElementById('switch').addEventListener('click',(e) => {

    e.preventDefault();

    const $this = e.target;
    const pic = $this.getElementsByTagName('img')[0];

    pic.classList.remove('imgnone');
    pic.src = './images/GoodJob.png';

});