'use strict';

var basePath = Drupal.settings.basePath;
/**
*** Global functions
**/
//mobile device detection
var mobileDevice = function mobileDevice() {
    if (navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i)) {
        return true;
    } else {
        return false;
    }
};

//const page exists
var page = function page(id) {
    if (document.contains(document.getElementById(id))) {
        return true;
    }
};

var hasClass = function hasClass(element, className) {
    return (' ' + element.className + ' ').indexOf(' ' + className + ' ') > -1;
};

//browser notification
var notify = function notify(title, bodyText, iconImage) {
    var options = {
        body: bodyText,
        icon: iconImage
    };
    if (!mobileDevice()) {
        if (Notification.permission === "granted") {
            var notification = new Notification(title, options);
        }
    } else {
        alert(bodyText);
    }
};

//get user location
var checkLocation = function checkLocation() {
    var locationToken = localStorage.getItem('union-location');

    if (locationToken != null) {
        buyButtonDisplay(locationToken);
    } else {
        locateByLatLng(buyButtonDisplay);
    }
};

function locateByLatLng(callback) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == XMLHttpRequest.DONE) {
            if (xmlhttp.status == 200) {
                var result = JSON.parse(xmlhttp.responseText),
                    country = result.country_code;
                localStorage.setItem('union-location', country);

                if (callback) {
                    callback(country);
                }
            } else {
                var title = "Union Binding Co.",
                    bodyText = "Oops! Something went wrong. We could not locate you.",
                    iconImage = Drupal.settings.basePath + "sites/all/themes/union1617/images/union-icon.png";

                notify(title, bodyText, iconImage);
            }
        }
    };

    xmlhttp.open("GET", 'https://freegeoip.net/json/');
    xmlhttp.send();
}

var bodyOverflow = function bodyOverflow() {
    if (mobileMenuBtn.checked) {
        document.body.style.height = "calc(100vh - 50px)";
        document.body.style.overflowY = "hidden";
    } else {
        document.body.style.height = "100%";
        document.body.style.overflowY = "visible";
    }
};

//see if element is in view
var inView = function inView(el, index) {

    var elTop = document.querySelectorAll(el)[index].getBoundingClientRect().top,
        winHeight = window.innerHeight;

    if (elTop < winHeight - 50) {
        return true;
    } else {
        return false;
    }
};

//fade in elements
var fadeIn = function fadeIn() {
    var steps = document.querySelectorAll('.fadein');
    if (steps.length != 0) {
        for (var i = 0; i < steps.length; i++) {
            if (inView('.fadein', i)) {
                steps[i].style.opacity = '1';
            } else {
                steps[i].style.opacity = '0';
            }
        }
    }
};

//lazyload images
var lazyLoad = function lazyLoad() {
    var lazy = document.querySelectorAll(".lazy");
    if (lazy.length != 0) {
        for (var i = 0; i < lazy.length; i++) {
            if (inView('.lazy', i)) {
                var imgSrc = lazy[i].getAttribute('data-lazy');
                lazy[i].setAttribute('src', imgSrc);
            }
        }
    }
};

//parallax
var backgroundYPOS = function backgroundYPOS() {

    var obj = {};

    obj.bgUp = function (el, distance) {
        var bgParallaxY = document.querySelectorAll(el);
        for (var i = 0; i < bgParallaxY.length; i++) {
            bgParallaxY[i].style.backgroundPosition = 'center ' + distance + '%';
        }
    }, obj.scroll = function (start, stop, speed) {
        var scrollPos = window.scrollY;
        window.addEventListener('scroll', function () {
            var currentPos = window.scrollY,
                docHeight = document.querySelector('body').getBoundingClientRect().height;
            var s = start / 100 * docHeight,
                f = stop / 100 * docHeight;
            if (currentPos >= s && currentPos <= f) {
                obj.bgUp('.bg-parallaxY', currentPos / docHeight * speed);
            }

            if (currentPos > scrollPos) {
                //scroll down   
            } else {
                    //scroll up
                }

            scrollPos = currentPos;
        });
    };

    return obj;
};
'use strict';

var mobileMenuBtn = document.getElementById("menu-btn");
var mobileMenuState = function mobileMenuState() {
    mobileMenuBtn.addEventListener('click', function () {
        bodyOverflow();
    });
};

var getLeafs = function getLeafs(index) {
    var leafs = document.querySelectorAll('.dropdown-branch input[type="checkbox"]');
    for (var i = 0; i < leafs.length; i++) {
        if (i != index) {
            leafs[i].checked = false;
        }
    }
};

var closeLeaf = function closeLeaf(event) {
    var leaf = document.querySelectorAll('.dropdown-branch input[type="checkbox"]');

    var _loop = function _loop(i) {
        leaf[i].addEventListener('click', function () {
            getLeafs(i);
        });
    };

    for (var i = 0; i < leaf.length; i++) {
        _loop(i);
    }
};

var MenuCollapse = function MenuCollapse() {
    var collapse = document.querySelectorAll('#mobile-nav .collapse'),
        collapseAria = document.querySelectorAll('#mobile-nav .collapse img'),
        mobileNav = document.getElementById('mobile-nav');

    var _loop2 = function _loop2(i) {
        collapse[i].addEventListener('click', function (event) {
            event.preventDefault();

            var collapseState = collapse[i].classList.contains('collapse-open');

            collapseState ? collapse[i].classList.remove('collapse-open') : collapse[i].classList.add('collapse-open');

            collapse[i].style.backgroundColor = collapseState ? 'transparent' : '#fff';
            collapse[i].style.backgroundColor = collapseState ? -90 : 0;
            collapse[i].style.backgroundColor = collapseState ? 'transparent' : '#fff';

            var collapseMenu = collapse[i].getAttribute('data-collapse');
            document.getElementById(collapseMenu + '-collapse').style.backgroundColor = collapseState ? 'transparent' : '#fff';
            document.getElementById(collapseMenu + '-collapse').style.top = collapseState ? 0 : -10;

            document.getElementById(collapseMenu + '-collapse').style.height = collapseState ? '0px' : '205px';
        });
    };

    for (var i = 0; i < collapse.length; i++) {
        _loop2(i);
    }
};
'use strict';

//overlay state
var OverlayState = function OverlayState() {
    var overlayBtn = document.querySelectorAll('.overlay-btn'),
        closeOverlayBtn = document.querySelectorAll('.close-overlay');
    var obj = {};

    obj.open = function () {
        for (var i = 0; i < overlayBtn.length; i++) {
            var o = overlayBtn[i];
            o.addEventListener('click', function (event) {
                event.preventDefault();
                var overlayTarget = event.currentTarget.getAttribute('data-overlay-target');

                document.getElementById(overlayTarget).style.zIndex = '9999';
                document.getElementById(overlayTarget).style.opacity = '1';
            });
        }
    }, obj.close = function () {
        for (var i = 0; i < closeOverlayBtn.length; i++) {
            var c = closeOverlayBtn[i];
            c.addEventListener('click', function (event) {
                event.preventDefault();
                var overlayTarget = event.currentTarget.getAttribute('data-overlay-target');

                document.getElementById(overlayTarget).style.opacity = '0';
                document.getElementById(overlayTarget).style.zIndex = '-1';
            });
        }
    };

    return obj;
};

var signupConfirmation = function signupConfirmation() {
    var emailSubmit = document.getElementById('email-submit-btn');

    emailSubmit.addEventListener('click', function () {
        var submitValue = document.getElementById('submit-email').value,
            title = "Union Binding Co.",
            bodyText = submitValue + " was added to our email list. Thanks for signing up!",
            iconImage = Drupal.settings.basePath + "sites/all/themes/union1617/images/union-icon.png";

        submitValue = "";

        notify(title, bodyText, iconImage);
    });
};
'use strict';

//Swiper
var swiper = void 0;
var globalSwiper = function globalSwiper(container, direction, loop, overlay, callback) {
    var hasOverlay = overlay;

    swiper = new Swiper(container, {
        // Optional parameters
        direction: direction,
        loop: loop,
        //autoplay: 5000,
        paginationClickable: true,

        // If we need pagination
        pagination: '.swiper-pagination',

        // Navigation arrows
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev'

    });

    if (callback) {
        callback();
    }

    if (hasOverlay) {
        (function () {
            //make sure images always fit screen
            var swiperOverlay = document.querySelectorAll('.swiper-overlay'),
                scaleswiperOverlay = function scaleswiperOverlay() {
                var _loop = function _loop(i) {
                    var large = swiperOverlay[i].getAttribute('data-swiperLarge'),
                        small = swiperOverlay[i].getAttribute('data-swiperSmall');

                    if (window.innerWidth > 768) {
                        swiperOverlay[i].style.backgroundImage = 'url(' + large + ')';
                    } else {
                        swiperOverlay[i].style.backgroundImage = 'url(' + small + ')';
                    }
                    var swiperResize = void 0;
                    window.addEventListener('resize', function () {
                        clearTimeout(swiperResize);
                        var swiperResize = setTimeout(function () {
                            if (window.innerWidth > 768) {
                                swiperOverlay[i].style.backgroundImage = 'url(' + large + ')';
                            } else {
                                swiperOverlay[i].style.backgroundImage = 'url(' + small + ')';
                            }
                        }, 3000);
                    });
                };

                for (var i = 0; i < swiperOverlay.length; i++) {
                    _loop(i);
                }
            };

            scaleswiperOverlay();
        })();
    }
};
'use strict';

//tabbed filter
var filterJS = function filterJS() {
    var filterTab = document.querySelectorAll('.filter-tab');

    //hide fitler groups
    var hideFilterGroups = function hideFilterGroups() {
        var filterGroup = document.querySelectorAll('.filter-group');

        var _loop = function _loop(i) {
            filterGroup[i].style.opacity = "0";
            setTimeout(function () {
                filterGroup[i].classList.add('noBorder');
                filterGroup[i].style.display = "none";
            }, 400);
        };

        for (var i = 0; i < filterGroup.length; i++) {
            _loop(i);
        }
    };

    var removeActiveFilter = function removeActiveFilter() {
        for (var i = 0; i < filterTab.length; i++) {
            filterTab[i].classList.remove('filter-tab-active');
        }
    };

    var showNewFilterGroup = function showNewFilterGroup() {
        var _loop2 = function _loop2(i) {
            filterTab[i].addEventListener('click', function (event) {
                hideFilterGroups();
                removeActiveFilter();

                event.target.classList.add('filter-tab-active');

                var filterGroup = filterTab[i].getAttribute('data-filterlabel'),
                    displayGroup = document.getElementById('filter-group-' + filterGroup);

                setTimeout(function () {
                    displayGroup.style.display = 'flex';
                    displayGroup.style.opacity = '1';
                }, 400);
            });
        };

        for (var i = 0; i < filterTab.length; i++) {
            _loop2(i);
        }
    };

    showNewFilterGroup();
};
'use strict';

/**
*** binding page
**/
var buyButtonDisplay = function buyButtonDisplay(country) {
    var buyButton = document.querySelectorAll('.buy-btn'),
        butOverlay = document.getElementById('binding-buy-overlay');
    for (var i = 0; i < buyButton.length; i++) {
        var btn = buyButton[i];

        if (country === 'US') {
            btn.style.opacity = '1';
        } else {
            btn.remove();
            butOverlay.remove();
        }
    }
};

var bindingPageSwiper = function bindingPageSwiper(el) {

    var bindingSwiper = new Swiper('.binding-swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: false,
        hashnav: true,

        // Navigation arrows
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev'
    });

    var swatch = document.querySelectorAll(el);

    var _loop = function _loop(i) {
        swatch[i].addEventListener('click', function (event) {
            event.preventDefault();
            bindingSwiper.slideTo(i, 200, false);
        });
    };

    for (var i = 0; i < swatch.length; i++) {
        _loop(i);
    }
};

//binding page large screen layout sorting
var moveElements = function moveElements() {
    var anchor = document.getElementById('binding-chart'),
        colorways = document.getElementById('colorways');

    if (window.innerWidth > 1219) {
        colorways.style.top = anchor.getBoundingClientRect().bottom + 'px';
    }
};

var getCharts = function getCharts() {
    if (document.contains(document.getElementById('binding-page'))) {
        var chartWrapper = document.querySelectorAll('.chart-wrapper');
        for (var i = 0; i < chartWrapper.length; i++) {
            var chartId = chartWrapper[i].getAttribute('id'),
                percent = parseInt(chartWrapper[i].getAttribute('data-percent'));
            if (inView('.chart-wrapper', i) && chartWrapper[i].getAttribute('animation') != 'true') {
                chartWrapper[i].setAttribute('animation', 'true');
                chartAnimation(chartId, percent);
            }
        }
    }
};

var chartAnimation = function chartAnimation(id, amount) {
    var graph = new ProgressBar.Circle('#' + id, {
        strokeWidth: 6,
        color: '#59595b',
        trailColor: '#C6C8CA',
        trailWidth: 6,
        easing: 'easeInOut',
        duration: 1400,
        svgStyle: null,
        text: {
            value: '',
            alignToBottom: false
        },
        from: {
            color: '#59595b'
        },
        to: {
            color: '#59595b'
        },
        // Set default step function for all animate calls
        step: function step(state, graph) {
            graph.path.setAttribute('stroke', state.color);

            var value = Math.round(graph.value() * 100);
            if (value === 0) {
                graph.setText('');
            } else {
                graph.setText(Math.floor(value / 10) + "/10");
            }
        }
    });
    graph.animate(amount / 10); // Number from 0.0 to 1.0        
};
'use strict';

var teamMovie = function teamMovie() {
  var watch = document.querySelectorAll('.watch'),
      movie = document.getElementById('movie');

  for (var i = 0; i < watch.length; i++) {
    watch[i].addEventListener('click', function () {
      movie.setAttribute('src', 'https://www.youtube.com/embed/CQtZRHnbPks?rel=&autoplay=1');
    });
  }
};

var tourSwiper = function tourSwiper() {
  var swiper = new Swiper('.swiper-container', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    pagination: '.swiper-pagination',
    paginationClickable: true,
    // Disable preloading of all images
    preloadImages: false,
    // Enable lazy loading
    lazyLoading: true
  });
};

var movieSwiper = function movieSwiper() {
  var galleryTop = new Swiper('.gallery-top', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 10
  });
  var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 10,
    centeredSlides: true,
    slidesPerView: 'auto',
    touchRatio: 0.2,
    slideToClickedSlide: true
  });
  galleryTop.params.control = galleryThumbs;
  galleryThumbs.params.control = galleryTop;
};

var youtubeSRCLoader = function youtubeSRCLoader() {
  var video = document.querySelectorAll('.youtube');

  for (var i = 0; i < video.length; i++) {
    if (!hasClass(video[i], 'src-loaded') && inView('.youtube', i)) {
      var source = video[i].getAttribute('data-src');
      video[i].src = source;
      video[i].classList.add('src-loaded');
      video[i].style.opacity = '1';
    }
  }
};
'use strict';

/** 
** profile
**/
var getAllIgPhotos = function getAllIgPhotos(index) {
    var igSwiper = document.getElementById("ig-swiper"),
        igImages = document.querySelectorAll('#ig-images img');

    for (var i = 0; i < igImages.length; i++) {
        if (i != index) {
            var img = igImages[i].getAttribute('data-src');
            igSwiper.innerHTML += '<div class="swiper-slide"><img src=' + img + '/></div>';
        }
    }
};

var getIgPhotoIndex = function getIgPhotoIndex() {
    var igSwiper = document.getElementById("ig-swiper"),
        igImages = document.querySelectorAll('#ig-images img');

    var _loop = function _loop(i) {
        igImages[i].addEventListener('click', function () {
            var img = igImages[i].getAttribute('data-src');
            igSwiper.innerHTML = '<div class="swiper-slide"><img src=' + img + '/></div>';
            getAllIgPhotos(i);
            globalSwiper('.instagram-swiper-container', 'horizontal', false, false, false);
        });
    };

    for (var i = 0; i < igImages.length; i++) {
        _loop(i);
    }
};

var resetSlides = function resetSlides() {
    var closeBtn = document.querySelectorAll('.close-overlay'),
        igSwiper = document.getElementById("ig-swiper");

    for (var i = 0; i < closeBtn.length; i++) {
        closeBtn[i].addEventListener('click', function () {
            swiper.slideTo(0, 200, false);
        });
    }
};
'use strict';

/**
** social
**/
var removePlaceHolders = function removePlaceHolders() {
    var iframe = document.querySelectorAll('main iframe'),
        placeholder = document.querySelectorAll('.vid-placeholder');

    if (iframe.length === 0) {
        for (var i = 0; i < placeholder.length; i++) {
            placeholder[i].remove();
        }
    }
};

var loading = function loading() {
    var flipper = document.getElementById('flipper'),
        loadMore = document.getElementById("load-more");

    loadMore.classList.add('animationActive');
    flipper.classList.add("flipper-animate");
    document.body.style.overflowY = "hidden";
    document.body.style.height = "100vh";
};

var stopLoading = function stopLoading() {
    var flipper = document.getElementById('flipper'),
        loadMore = document.getElementById("load-more");

    loadMore.classList.remove('animationActive');
    flipper.classList.remove("flipper-animate");
    document.body.style.overflowY = "visible";
    document.body.style.height = "100%";
};

//get current page
var currentPage = function currentPage() {
    //check if hash exists
    if (!location.hash) {
        var post = document.querySelectorAll('.post');
        return 0;
    } else if (location.hash && location.hash != "") {
        //check if page counter exists
        var hash = location.hash,
            query = hash.split('?page=');

        if (query.length > 1) {
            return parseInt(query[1]);
        } else {
            return 0;
        }
    }
};

//set url string in hash for catagories
var createUrl = function createUrl(string) {
    location.hash = string;
};

//blog filter
var filterArray = [],
    blogFilter = function blogFilter() {
    if (document.contains(document.getElementById('social'))) {
        (function () {
            var checkbox = document.querySelectorAll('#social form input[type="checkbox"]');

            var _loop = function _loop(i) {
                checkbox[i].addEventListener('click', function () {
                    localStorage.setItem('lastPost', 'false');
                    var filteredItem = checkbox[i].value;
                    if (checkbox[i].checked) {
                        filterArray.push(filteredItem);
                    } else {
                        var itemIndex = filterArray.indexOf(filteredItem);
                        if (itemIndex > -1) {
                            filterArray.splice(itemIndex, 1);
                        }
                    }

                    createUrl(createString(filterArray));
                    fetchPost();
                });
            };

            for (var i = 0; i < checkbox.length; i++) {
                _loop(i);
            }
        })();
    }
};

var createString = function createString(pathArray) {

    var pathString = "";
    for (var i = 0; i < pathArray.length; i++) {
        if (pathArray[i] != pathArray[pathArray.length - 1]) {
            pathString += pathArray[i] + "+";
        } else {
            pathString += pathArray[i];
        }
    }

    return pathString;
};

//get post
var fetchPost = function fetchPost(action) {
    loading();
    var path = basePath + 'news/' + location.hash.replace('#', ''),
        xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == XMLHttpRequest.DONE) {
            if (xmlhttp.status == 200) {
                var feed = document.getElementById('feed'),
                    parser = new DOMParser(),
                    doc = parser.parseFromString(xmlhttp.responseText, "text/html"),
                    newPosts = doc.getElementById('feed').childNodes;

                if (newPosts.length > 1) {
                    if (action != 'append') {
                        feed.innerHTML = "";
                    }

                    for (var i = 0; i < newPosts.length; i++) {
                        if (newPosts[i].tagName === "DIV") {
                            feed.appendChild(newPosts[i]);
                        }
                    }
                    fadeIn();
                    removePlaceHolders();
                } else {
                    localStorage.setItem('lastPost', 'true');
                }

                stopLoading();
                localStorage.setItem('scrollState', 'false');
            } else {
                var title = "Union Binding Co.",
                    bodyText = "Oops! Something went wrong. Please refresh the page.",
                    iconImage = Drupal.settings.basePath + "sites/all/themes/union1617/images/union-icon.png";

                notify(title, bodyText, iconImage);
            }
        }
    };

    xmlhttp.open("GET", path, true);
    xmlhttp.send();
};
'use strict';

/**
** technology
**/
var animateBars = function animateBars() {
    var bars = document.querySelectorAll('.bar');
    for (var i = 0; i < bars.length; i++) {
        var bar = bars[i];
        if (inView('.bar', i)) {
            bar.style.width = '100%';
        } else {
            bar.style.width = '0%';
        }
    }
};
'use strict';

/**
** where to buy
**/
var filterPartners = function filterPartners(location) {
    var partner = document.querySelectorAll('#online-partners a');

    var locationLoop = function locationLoop() {
        var partner = document.querySelectorAll('.' + location);
        for (var i = 0; i < partner.length; i++) {
            partner[i].style.display = 'block';
            partner[i].style.opacity = '1';
        }
    };

    if (location === 'US') {
        locationLoop();
    } else if (location === 'CA') {
        locationLoop();
    } else if (location != 'US' || location != 'CA') {
        for (var i = 0; i < partner.length; i++) {
            if (partner[i].classList.value != 'US' && partner[i].classList.value != 'CA') {
                partner[i].style.display = 'block';
                partner[i].style.opacity = '1';
            }
        }
    }
};
'use strict';

var locationFieldComplete = function locationFieldComplete() {
	var IDs = ['edit-submitted-location-information-region', 'edit-submitted-location-information-nearest-south-american-rep', 'edit-submitted-location-information-nearest-north-american-rep', 'edit-submitted-location-information-nearest-australasia-rep', 'edit-submitted-location-information-nearest-europe-middle-eastern-rep'],
	    parent = document.querySelector('.webform-component--location-information');

	document.addEventListener('change', function (event) {
		for (var i = 0; i < IDs.length; i++) {
			var select = document.getElementById(IDs[i]);

			if (select.parentElement.style.display != 'none' && select.value != '') {
				select.classList.add('active-' + 'locationField');
			} else {
				select.classList.remove('active-' + 'locationField');
			}
		}
		var active = document.querySelectorAll('.active-' + 'locationField');
		if (active.length === 2) {
			parent.classList.add('field-complete');
		} else {
			parent.classList.remove('field-complete');
		}
	});
};

var shippingFieldComplete = function shippingFieldComplete() {
	var shippingFields = document.querySelectorAll('.webform-component--shipping-information--address input[type="text"]'),
	    parent = document.querySelector('.webform-component--shipping-information'),
	    countrySelect = document.getElementById('edit-submitted-shipping-information-address-country'),
	    //select
	address_1 = document.getElementById('edit-submitted-shipping-information-address-thoroughfare'),
	    address_2 = document.getElementById('edit-submitted-shipping-information-address-premise'),
	    city = document.getElementById('edit-submitted-shipping-information-address-locality'),
	    state = document.getElementById('edit-submitted-shipping-information-address-administrative-area'),
	    //select
	state_2 = document.getElementById('edit-submitted-shipping-information-address-administrative-area--2'),

	//edit-submitted-shipping-information-address-administrative-area--2
	zip = document.getElementById('edit-submitted-shipping-information-address-postal-code');

	var fieldsComplete = function fieldsComplete() {
		if (countrySelect.value != "" && address_1.value != "" && city.value != "" && zip.value != "") {
			if (state.length > 0 && state.value != "" || state_2.length > 0 && state_2.value != "") {
				parent.classList.add('field-complete');
			} else {
				parent.classList.add('field-complete');
			}
		} else {
			parent.classList.remove('field-complete');
		}
	};

	document.addEventListener('change', function (event) {
		fieldsComplete();
	});

	for (var i = 0; i < shippingFields.length; i++) {

		shippingFields[i].addEventListener('keyup', function () {
			fieldsComplete();
		});
	}
};

var bindingFieldComplete = function bindingFieldComplete() {
	var parent = document.querySelector('.webform-component--binding-information'),
	    select = document.querySelectorAll('.webform-component--binding-information  select'),
	    year = document.getElementById('edit-submitted-binding-information-binding-year'),
	    color = document.getElementById('edit-submitted-binding-information-binding-color'),
	    leftOrRight = document.getElementById('edit-submitted-binding-information-right-or-left-binding');

	document.addEventListener('change', function () {
		for (var i = 1; i < select.length - 1; i++) {
			if (select[i].parentElement.style.display != 'none' && select[i].value != '') {
				select[i].classList.add('active-bindingField');
			} else {
				select[i].classList.remove('active-bindingField');
			}
		}

		var active = document.querySelectorAll('.active-bindingField');
		if (year.value != '' && color.value != '' && leftOrRight.value != '' && active.length > 0) {
			parent.classList.add('field-complete');
		} else {
			parent.classList.remove('field-complete');
		}
	});

	var active = document.querySelectorAll('.active-bindingField');
	color.addEventListener('keyup', function () {
		if (year.value != '' && color.value != '' && leftOrRight.value != '' && active.length > 0) {
			parent.classList.add('field-complete');
		} else {
			parent.classList.remove('field-complete');
		}
	});
};
'use strict';

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

//https://res.cloudinary.com/nicholas-by-design/image/upload/v1484595335/UN-1617_Force_Explosion-1000-tny.jpg
var parts = [{
    title: 'My title',
    description: 'My Description',
    link: 'Link Name',
    link_url: 'Link Url',
    image: 'https://demo.yootheme.com/widgetkit/joomla/images/yootheme/widgetkit/map-02.jpg',
    top_percent: '23.31136032873898',
    'left_percent': '22.557028360049322'
}, {
    title: 'My title 2',
    description: 'My Description 2',
    link: 'Link Name 2',
    link_url: 'Link Url',
    image: 'https://demo.yootheme.com/widgetkit/joomla/images/yootheme/widgetkit/map-02.jpg',
    top_percent: '42.312731196054254',
    'left_percent': '58.31264446537112'
}];

//create container

var Container = function Container(target) {
    _classCallCheck(this, Container);

    var date = new Date();
    this.target = document.querySelector(target);
    this.id = date.getTime();
    this.target.id = 'target-' + this.id;

    var container_element = document.createElement('div'),
        parent_element = document.getElementById('target-' + this.id).parentElement,
        container_id = 'container-' + this.id;

    container_element.id = container_id;
    container_element.classList.add('hot-spot-container');

    parent_element.insertBefore(container_element, this.target);
};

//create swiper


var HotSpotSlider = function (_Container) {
    _inherits(HotSpotSlider, _Container);

    function HotSpotSlider(target, slides) {
        _classCallCheck(this, HotSpotSlider);

        var _this = _possibleConstructorReturn(this, (HotSpotSlider.__proto__ || Object.getPrototypeOf(HotSpotSlider)).call(this, target));

        _this.slides = slides;
        _this.template = '<div class="swiper-container">\n                            <div id="swiper-' + _this.id + '" class="swiper-wrapper">\n\n                            </div>\n                            <div class="swiper-pagination"></div>\n                        </div>';

        document.getElementById('container-' + _this.id).innerHTML = _this.template;
        globalSwiper('.swiper-container', 'horizontal', true, false);

        _this.slides.forEach(function (key, value) {
            document.getElementById('swiper-' + _this.id).innerHTML += '<div class="swiper-slide">\n                                                                            <div class="slide-image">\n                                                                                <img src="' + key.image + '">\n                                                                            </div>\n                                                                            <div class="slide-info">\n                                                                                <h6>' + key.title + '</h6>\n                                                                                <p>' + key.description + '</p>\n                                                                                <a href="' + key.link_url + '">' + key.link + '</a>\n                                                                            </div>\n                                                                        </div>';
        });
        return _this;
    }

    return HotSpotSlider;
}(Container);

//create hotspot

var slider = new HotSpotSlider('.webform-component--warranty-information--warranty-issue', parts);
'use strict';

/**
** run function based on page state
**/
if ('addEventListener' in document) {
    document.addEventListener('DOMContentLoaded', function () {
        FastClick.attach(document.body);
    }, false);
}

window.onload = function () {
    checkLocation();

    if (page('home-page') || page('profile')) {
        globalSwiper('.swiper-container', 'vertical', true, true);
    }
    if (page('binding-page')) {
        bindingPageSwiper('#colorways-desktop .swatch img');
        bindingPageSwiper('#colorways-mobile .swatch img');
    }

    if (page('profile')) {
        signupConfirmation();
        resetSlides();
    }

    if (page('team-movie')) {
        //teamMovie();
        movieSwiper();
        tourSwiper();
        smoothScroll.init();
    }

    closeLeaf();
    var overlayState = OverlayState();
    overlayState.open();
    overlayState.close();
    mobileMenuState();
    MenuCollapse();

    getIgPhotoIndex();

    var teamBg = backgroundYPOS();

    if (page("social")) {
        if (location.hash) {
            fetchPost();
        }
        localStorage.setItem('scrollState', 'false');
        localStorage.setItem('lastPost', 'false');
        removePlaceHolders();
    }

    var documentState = setInterval(function () {
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

                if (page('forged-carbon')) {
                    animateBars();
                }

                if (page('webform-ajax-wrapper-641')) {
                    locationFieldComplete();
                    shippingFieldComplete();
                    bindingFieldComplete();
                }

                if (page('dealer-locator')) {
                    (function () {
                        var checkingLocation = setInterval(function () {
                            var locationToken = localStorage.getItem('union-location');
                            if (locationToken) {
                                clearInterval(checkingLocation);
                                filterPartners(locationToken);
                            }
                        }, 800);
                    })();
                }

                if (page('warranty-intro')) {
                    //const parts_overlay = new HotSpotOverlay(parts);
                    //parts_overlay.hotSpotState('partsGuideLink');
                }

        }
    }, 100);

    var loadMore = document.getElementById('load-more');
    window.addEventListener('scroll', function () {
        fadeIn();
        lazyLoad();
        getCharts();

        if (page('forged-carbon')) {
            animateBars();
        }

        if (page('social') && loadMore.getBoundingClientRect().top < window.innerHeight && localStorage.getItem('scrollState') === 'false' && localStorage.getItem('lastPost') != 'true') {
            localStorage.setItem('scrollState', 'true');
            var hash = location.hash,
                directory = hash.split('?');

            location.hash = directory[0] + '?page=' + (currentPage() + 1);
            fetchPost('append');
        }

        var footer = document.getElementById('footer'),
            olark = document.getElementById('habla_window_div');

        if (page('habla_window_div') && !mobileDevice()) {
            if (footer.getBoundingClientRect().top < window.innerHeight) {
                olark.style.bottom = footer.getBoundingClientRect().height + 'px';
            } else {
                olark.style.bottom = '0px';
            }
        }

        if (page('team-movie')) {
            youtubeSRCLoader();
        }
    });

    window.addEventListener('resize', function () {

        if (window.innerWidth > 959) {
            mobileMenuBtn.checked = false;
            bodyOverflow();
        }
    });
};