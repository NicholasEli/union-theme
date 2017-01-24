/**
** run function based on page state
**/
if ('addEventListener' in document) {
    document.addEventListener('DOMContentLoaded', function() {
        FastClick.attach(document.body);
    }, false);
}

window.onload = () => {
    checkLocation();
    
    if(page('home-page') || page('profile')){
        globalSwiper('.swiper-container','vertical', true, true);
    }
    if(page('binding-page')){
        bindingPageSwiper('#colorways-desktop .swatch img');
        bindingPageSwiper('#colorways-mobile .swatch img');
    }

    if(page('profile')){
        signupConfirmation();
        resetSlides();
    }

    if(page('team-movie')){
        //teamMovie();
        movieSwiper();
        tourSwiper();
        smoothScroll.init();
    }

    closeLeaf();
    let overlayState = OverlayState();
    overlayState.open();
    overlayState.close();
    mobileMenuState();
    MenuCollapse();

    getIgPhotoIndex();

    let teamBg = backgroundYPOS();

    if(page("social")){
        if(location.hash){
            fetchPost();
        }
        localStorage.setItem('scrollState', 'false');
        localStorage.setItem('lastPost', 'false');
        removePlaceHolders();
    }

    const documentState = setInterval(() => {
        switch (document.readyState) {
            case 'loading':
                console.log('document loading');
                break;
            case 'interactive':
                console.log('document ready, but media still loading');
                break;
            case 'complete':
                console.log('document loading complete');
                clearInterval(documentState);
                filterJS();
                teamBg.scroll(0, 25, 200);
                getCharts();
                blogFilter();
                fadeIn();
                lazyLoad();

                if(page('forged-carbon')){
                    animateBars();
                }
                

                if(page('webform-ajax-wrapper-641')){
                    locationFieldComplete();
                    shippingFieldComplete();
                    bindingFieldComplete();
                }

                if(page('dealer-locator')){
                    let checkingLocation = setInterval(() => {
                        let locationToken = localStorage.getItem('union-location');
                        if(locationToken){
                            clearInterval(checkingLocation);
                            filterPartners(locationToken);
                        }
                    }, 800);
                }
                
                if(page('warranty-intro')){
                    //const parts_overlay = new HotSpotOverlay(parts);
                    //parts_overlay.hotSpotState('partsGuideLink');
                }

        }
    }, 100);

    let loadMore = document.getElementById('load-more');
    window.addEventListener('scroll', () => {
        fadeIn();
        lazyLoad();
        getCharts();

        if(page('forged-carbon')){
            animateBars();
        }

        if(page('social') && loadMore.getBoundingClientRect().top < window.innerHeight && localStorage.getItem('scrollState') === 'false' && localStorage.getItem('lastPost') != 'true'){
                localStorage.setItem('scrollState', 'true');
                let hash        = location.hash,
                    directory   = hash.split('?');

                location.hash = directory[0]+'?page='+(currentPage() + 1);
                fetchPost('append');
        }

        const footer    = document.getElementById('footer'),
              olark     = document.getElementById('habla_window_div');

        if(page('habla_window_div') && !mobileDevice()){
            if(footer.getBoundingClientRect().top < window.innerHeight){
                olark.style.bottom = footer.getBoundingClientRect().height+'px';
            }else{
                olark.style.bottom = '0px';
            }
        }

        if(page('team-movie')){
            youtubeSRCLoader();
        }

    });

    window.addEventListener('resize', () => {

        if(window.innerWidth > 959){
            mobileMenuBtn.checked = false;
            bodyOverflow();
        }
    });

}