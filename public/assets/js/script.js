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
function setHeightItem(){
    document.querySelectorAll('.content__accordion__item').forEach((item) => {
        const itemInfo = item.querySelector('.content__accordion__item__desc');
        itemInfo.style.height = 'auto';

        let paddingTop = 24/14.4;
        if(window.innerWidth <1025){
            paddingTop = 24/3.75;
        }else if(window.innerWidth> 1441){
            paddingTop = 24;
        }

        itemInfo.style.setProperty('--infoHeight', itemInfo.offsetHeight + paddingTop + "px");
        itemInfo.style.height = '';
    })
}
try {
    window.onload = function() {
        document.querySelectorAll('.content__accordion__item').forEach((el) => {
          el.addEventListener('click',()=>{
            if(el.classList.contains('content__accordion__item_open')){
                el.closest('.content__accordion__item').classList.remove('content__accordion__item_open');
            }else{
                el.closest('.content__accordion__item').classList.add('content__accordion__item_open');
            }

          })
        })
        setHeightItem();
    };
    window.onresize = setHeightItem;
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
