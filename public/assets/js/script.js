try {
    document.querySelector('.nav__burger_link').addEventListener('click', () => {
        if(!document.querySelector('.nav').classList.contains('nav_opened')){
            document.querySelector('.nav').classList.add('nav_opened');
        }
    })
    document.querySelector('.nav__burger_close').addEventListener('click', () => {
        if(document.querySelector('.nav').classList.contains('nav_opened')){
            document.querySelector('.nav').classList.remove('nav_opened');
        }
    })
    if((document.querySelector('.main').offsetHeight + document.querySelector('.footer').offsetHeight) < window.innerHeight){
        document.querySelector('.main').style.minHeight = (window.innerHeight - document.querySelector('.footer').offsetHeight) + 'px';
    }
} catch (error) {
    console.log(error)
}
window.addEventListener('scroll', function(e) {
    if(window.scrollY > 50){
        document.querySelector('.nav').classList.add('navFixed');
    }else if(document.querySelector('.nav').classList.contains('navFixed')){
        document.querySelector('.nav').classList.remove('navFixed');
    }
});
window.addEventListener('resize', function(e) {
    document.querySelector('.main').style.minHeight = 0;
    if((document.querySelector('.main').offsetHeight + document.querySelector('.footer').offsetHeight) < window.innerHeight){
        document.querySelector('.main').style.minHeight = (window.innerHeight - document.querySelector('.footer').offsetHeight) + 'px';
    }
});