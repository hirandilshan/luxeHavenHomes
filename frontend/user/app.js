const searchicon1 =document.querySelector('#search-icon1');
const srchicon1 =document.querySelector('#srchicon1');
const search1 =document.querySelector('#searchinput1');

searchicon1.addEventListener('click',function(){
    search1.style.display ='flex';
    searchicon1.style.display='none';
})

const bar= document.querySelector('#navbar-icon');
const cross = document.querySelector('#cancel');
const headerbar = document.querySelector('.headerbar');

bar.addEventListener('click',function(){
    setTimeout(()=>{
        cross.style.display='block';
    },200);
    headerbar.style.right='0%';
})