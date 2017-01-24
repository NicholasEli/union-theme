/** 
** profile
**/
const getAllIgPhotos = (index) => {
    let igSwiper = document.getElementById("ig-swiper"),
        igImages = document.querySelectorAll('#ig-images img');

    for(let i = 0; i < igImages.length; i++){
        if(i != index){
            let img     = igImages[i].getAttribute('data-src');
                igSwiper.innerHTML += '<div class="swiper-slide"><img src='+img+'/></div>';
        }
    }
}

const getIgPhotoIndex = () => {
    let igSwiper = document.getElementById("ig-swiper"),
        igImages = document.querySelectorAll('#ig-images img');

    for(let i = 0; i < igImages.length; i++){
        igImages[i].addEventListener('click', () => {
            let img     = igImages[i].getAttribute('data-src');
            igSwiper.innerHTML = '<div class="swiper-slide"><img src='+img+'/></div>';
            getAllIgPhotos(i);
            globalSwiper('.instagram-swiper-container', 'horizontal', false, false, false);
        });
    }
}

const resetSlides = () => {
    let closeBtn = document.querySelectorAll('.close-overlay'),
        igSwiper = document.getElementById("ig-swiper");

    for(let i = 0; i < closeBtn.length; i++){
        closeBtn[i].addEventListener('click', () => {
            swiper.slideTo(0, 200, false);
        });
    }
}