
const bar= document.querySelector('#navbar-icon');
const cross = document.querySelector('#cancel');
const headerbar = document.querySelector('.headerbar');

bar.addEventListener('click',function(){
    setTimeout(()=>{
        cross.style.display='block';
    },200);
    headerbar.style.right='0%';
})