/**
** social
**/
const removePlaceHolders = () => {
    let iframe      = document.querySelectorAll('main iframe'),
        placeholder = document.querySelectorAll('.vid-placeholder');

    if(iframe.length === 0){
        for(let i = 0; i < placeholder.length; i++){
            placeholder[i].remove();
        }
    }
}

const loading = () => {
    let flipper     = document.getElementById('flipper'),
        loadMore    = document.getElementById("load-more");

    loadMore.classList.add('animationActive');
    flipper.classList.add("flipper-animate");
    document.body.style.overflowY = "hidden";
    document.body.style.height = "100vh";
}

const stopLoading = () => {
    let flipper     = document.getElementById('flipper'),
    loadMore    = document.getElementById("load-more");
    
    loadMore.classList.remove('animationActive');
    flipper.classList.remove("flipper-animate");
    document.body.style.overflowY = "visible";
    document.body.style.height = "100%";
}

//get current page
const currentPage = () => {
    //check if hash exists
    if (!location.hash) {
        let post = document.querySelectorAll('.post');
        return 0;
    }else if(location.hash && location.hash != ""){
        //check if page counter exists
        let hash    = location.hash,
            query   = hash.split('?page=');

        if(query.length > 1){
            return parseInt(query[1]);
        }else{
            return 0;
        }
    }
}

//set url string in hash for catagories
const createUrl = (string) => {
    location.hash = string;
}

//blog filter
const filterArray = [],
     blogFilter = () => {
        if (document.contains(document.getElementById('social'))) {
            const checkbox = document.querySelectorAll('#social form input[type="checkbox"]');
            for (let i = 0; i < checkbox.length; i++) {
                checkbox[i].addEventListener('click', () => {
                    localStorage.setItem('lastPost', 'false');
                    const filteredItem = checkbox[i].value;
                    if (checkbox[i].checked) {
                        filterArray.push(filteredItem);

                    } else {
                        let itemIndex = filterArray.indexOf(filteredItem);
                        if (itemIndex > -1) {
                            filterArray.splice(itemIndex, 1);
                        }
                    }

                    createUrl(createString(filterArray));
                    fetchPost();

                });
            }
        }
    }

const createString = (pathArray) => {

    let pathString = "";
    for (let i = 0; i < pathArray.length; i++) {
        if (pathArray[i] != pathArray[pathArray.length - 1]) {
            pathString += pathArray[i] + "+";
        } else {
            pathString += pathArray[i];
        }
    }

    return pathString;

}


//get post
const fetchPost = (action) => {
    loading();
    let path = basePath + 'news/' + location.hash.replace('#', ''),
        xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = () => {
        if (xmlhttp.readyState == XMLHttpRequest.DONE ) {
           if (xmlhttp.status == 200) {
                const feed = document.getElementById('feed'),
                    parser = new DOMParser(),
                    doc = parser.parseFromString(xmlhttp.responseText, "text/html"),
                    newPosts = doc.getElementById('feed').childNodes;

                if(newPosts.length > 1){
                    if (action != 'append') {
                        feed.innerHTML = "";
                    }

                    for (let i = 0; i < newPosts.length; i++) {
                        if (newPosts[i].tagName === "DIV") {
                            feed.appendChild(newPosts[i]);
                        }
                    }
                    fadeIn();
                    removePlaceHolders();
                }else{
                    localStorage.setItem('lastPost', 'true');
                }

                stopLoading();
                localStorage.setItem('scrollState', 'false');
           }
           else {
                let title   = "Union Binding Co.",
                bodyText    = "Oops! Something went wrong. Please refresh the page.",
                iconImage   = Drupal.settings.basePath + "sites/all/themes/union1617/images/union-icon.png";

                notify(title, bodyText, iconImage);
           }
        }
    }

    xmlhttp.open("GET", path, true);
    xmlhttp.send();
}