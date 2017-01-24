const basePath = Drupal.settings.basePath;
/**
*** Global functions
**/
//mobile device detection
const mobileDevice = () => {
    if (navigator.userAgent.match(/Android/i) || navigator.userAgent.match(
        /webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(
        /iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(
        /BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i)) {
        return true;
    }
    else {
        return false;
    }
}

//const page exists
const page = (id) => {
    if (document.contains(document.getElementById(id))) {
        return true;
    }
}

const hasClass = (element, className) => {
    return (' ' + element.className + ' ').indexOf(' ' + className + ' ') > -1;
}

//browser notification
const notify = (title, bodyText, iconImage) => {
    let options = {
        body: bodyText,
        icon: iconImage
    }
    if(!mobileDevice()){
        if (Notification.permission === "granted") {
            let notification = new Notification(title, options);
        }
    }else{
        alert(bodyText);
    }

}

//get user location
const checkLocation = () => {
    let locationToken = localStorage.getItem('union-location');

    if(locationToken != null){
        buyButtonDisplay(locationToken);
    }else{
        locateByLatLng(buyButtonDisplay);
    }
}

function locateByLatLng(callback) {
        let xmlhttp  = new XMLHttpRequest();
        xmlhttp.onreadystatechange = () => {
            if (xmlhttp.readyState == XMLHttpRequest.DONE ) {
               if (xmlhttp.status == 200) {
                    let result  = JSON.parse(xmlhttp.responseText),
                        country = result.country_code;
                        localStorage.setItem('union-location', country);

                    if(callback){
                        callback(country);
                    }
                    
               }
               else {
                    let title       = "Union Binding Co.",
                        bodyText    = "Oops! Something went wrong. We could not locate you.",
                        iconImage   = Drupal.settings.basePath + "sites/all/themes/union1617/images/union-icon.png";

                    notify(title, bodyText, iconImage);
               }
            }
        }

        xmlhttp.open("GET", 'https://freegeoip.net/json/');
        xmlhttp.send();
}



const bodyOverflow = () => {
    if(mobileMenuBtn.checked){
        document.body.style.height = "calc(100vh - 50px)";
        document.body.style.overflowY = "hidden"; 
    }else{
        document.body.style.height = "100%";
        document.body.style.overflowY = "visible"; 
    }
}

//see if element is in view
const inView = (el, index) => {

    let elTop = document.querySelectorAll(el)[index].getBoundingClientRect().top,
        winHeight = window.innerHeight;

    if (elTop < winHeight - 50) {
        return true;
    } else {
        return false;
    }

}

//fade in elements
const fadeIn = () => {
    const steps = document.querySelectorAll('.fadein');
    if (steps.length != 0) {
        for (let i = 0; i < steps.length; i++) {
            if (inView('.fadein', i)) {
                steps[i].style.opacity = '1';
            } else {
                steps[i].style.opacity = '0';
            }
        }
    }
}

//lazyload images
const lazyLoad = () =>{
    const lazy = document.querySelectorAll(".lazy");
    if(lazy.length != 0){
        for(let i = 0; i < lazy.length; i++){
            if(inView('.lazy', i)){
                let imgSrc = lazy[i].getAttribute('data-lazy');
                lazy[i].setAttribute('src', imgSrc);
            }
        }
    }
}

//parallax
const backgroundYPOS = () => {

    let obj = {};

    obj.bgUp = (el, distance) => {
        let bgParallaxY = document.querySelectorAll(el);
        for (let i = 0; i < bgParallaxY.length; i++) {
            bgParallaxY[i].style.backgroundPosition = 'center ' + distance + '%';
        }
    },
    obj.scroll = (start, stop, speed) => {
        let scrollPos = window.scrollY;
        window.addEventListener('scroll', () => {
            let currentPos = window.scrollY,
                docHeight = document.querySelector('body').getBoundingClientRect().height;
                let s = (start / 100) * docHeight,
                    f = (stop / 100) * docHeight;
            if (currentPos >= s && currentPos <= f) {
                obj.bgUp('.bg-parallaxY', (currentPos / docHeight) * speed);
            }

            if (currentPos > scrollPos) {
                //scroll down   
            } else {
                //scroll up
            }

            scrollPos = currentPos;

        });
    }

    return obj;
}

