
window.onscroll = function() {
    if(parseInt(window.scrollY) >= 290){
        bannerName.style.transform = 'translate(0px, 0px)';
        console.log('uwu')
    }else if(parseInt(window.scrollY) < 290){
        bannerName.style.transform = 'translate(0px, -70vh)';
    }
}