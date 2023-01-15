const button = document.querySelector("#hamburger");


function init() {
        if(button.classList.contains('closed')) {
            button.classList.remove('closed');
            button.classList.add('open');  
        } else {
            button.classList.remove('open');
            button.classList.add('closed'); 
        }
}
button.addEventListener("click",init);

const workshop = document.querySelector("#workshopnav");
const about = document.querySelector("#aboutnav");
const team = document.querySelector("#teamnav");
const home = document.querySelector("#homenav");

function initt(){
    button.classList.remove('open');
    button.classList.add('closed');
}
workshop.addEventListener("click",initt);
about.addEventListener("click",initt);
team.addEventListener("click",initt);
home.addEventListener("click",initt);