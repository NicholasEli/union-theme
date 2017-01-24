//https://res.cloudinary.com/nicholas-by-design/image/upload/v1484595335/UN-1617_Force_Explosion-1000-tny.jpg
const parts = [{
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
class Container{
    constructor(target){
        let date = new Date();
        this.target = document.querySelector(target);
        this.id = date.getTime();
        this.target.id = `target-${this.id}`;

        let container_element = document.createElement('div'),
            parent_element = document.getElementById(`target-${this.id}`).parentElement,
            container_id = `container-${this.id}`;

        container_element.id = container_id;
        container_element.classList.add('hot-spot-container');
        
        parent_element.insertBefore(container_element, this.target);
    }
}

//create swiper
class HotSpotSlider extends Container{
    constructor(target, slides){
        super(target);
        this.slides = slides;
        this.template = `<div class="swiper-container">
                            <div id="swiper-${this.id}" class="swiper-wrapper">

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>`;

        document.getElementById(`container-${this.id}`).innerHTML = this.template;
        globalSwiper('.swiper-container','horizontal', true, false);

        this.slides.forEach((key,value) =>{
            document.getElementById(`swiper-${this.id}`).innerHTML += `<div class="swiper-slide">
                                                                            <div class="slide-image">
                                                                                <img src="${key.image}">
                                                                            </div>
                                                                            <div class="slide-info">
                                                                                <h6>${key.title}</h6>
                                                                                <p>${key.description}</p>
                                                                                <a href="${key.link_url}">${key.link}</a>
                                                                            </div>
                                                                        </div>`
        });
    }
}

//create hotspot

const slider = new HotSpotSlider('.webform-component--warranty-information--warranty-issue', parts);






