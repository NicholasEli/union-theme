//tabbed filter
const filterJS = () => {
    const filterTab = document.querySelectorAll('.filter-tab');

    //hide fitler groups
    const hideFilterGroups = () => {
        let filterGroup = document.querySelectorAll('.filter-group');
        for (let i = 0; i < filterGroup.length; i++) {
            filterGroup[i].style.opacity = "0";
            setTimeout(() => {
                filterGroup[i].classList.add('noBorder');
                filterGroup[i].style.display = "none";
            }, 400);
        }
    }

    const removeActiveFilter = () => {
        for (let i = 0; i < filterTab.length; i++) {
            filterTab[i].classList.remove('filter-tab-active');
        }
    }

    const showNewFilterGroup = () => {
        for (let i = 0; i < filterTab.length; i++) {
            filterTab[i].addEventListener('click', (event) => {
                hideFilterGroups();
                removeActiveFilter();

                event.target.classList.add('filter-tab-active');

                let filterGroup = filterTab[i].getAttribute('data-filterlabel'),
                    displayGroup = document.getElementById('filter-group-' + filterGroup);

                setTimeout(() => {
                    displayGroup.style.display = 'flex';
                    displayGroup.style.opacity = '1';
                }, 400);
            });
        }
    }

    showNewFilterGroup();
}
