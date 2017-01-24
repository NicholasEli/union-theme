const teamMovie = () =>{
	let watch 	= document.querySelectorAll('.watch'),
		movie 	= document.getElementById('movie');

		for(let i = 0; i < watch.length; i++){
			watch[i].addEventListener('click',() => {
				movie.setAttribute('src', 'https://www.youtube.com/embed/CQtZRHnbPks?rel=&autoplay=1');	
			});
		}
}

const tourSwiper = () =>{
	let swiper = new Swiper('.swiper-container', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        pagination: '.swiper-pagination',
        paginationClickable: true,
        // Disable preloading of all images
        preloadImages: false,
        // Enable lazy loading
        lazyLoading: true
    });
}

const movieSwiper = () => {
    const galleryTop = new Swiper('.gallery-top', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 10,
    });
    const galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        centeredSlides: true,
        slidesPerView: 'auto',
        touchRatio: 0.2,
        slideToClickedSlide: true
    });
    galleryTop.params.control = galleryThumbs;
    galleryThumbs.params.control = galleryTop;
}

const youtubeSRCLoader = () =>{
	let video = document.querySelectorAll('.youtube');

	for(let i = 0; i < video.length; i++){
		if(!hasClass(video[i], 'src-loaded') && inView('.youtube', i)){
			let source = video[i].getAttribute('data-src');
			video[i].src = source;
			video[i].classList.add('src-loaded');
			video[i].style.opacity = '1';
		}
	}
}

