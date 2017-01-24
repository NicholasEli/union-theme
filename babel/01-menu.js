const mobileMenuBtn = document.getElementById("menu-btn");
const mobileMenuState = () => {
    mobileMenuBtn.addEventListener('click', () =>{
        bodyOverflow();
    });
}

const getLeafs = (index) => {
    let leafs = document.querySelectorAll('.dropdown-branch input[type="checkbox"]');
    for(let i = 0; i < leafs.length; i++){
        if(i != index){
            leafs[i].checked = false;
        }
    }
}

const closeLeaf = (event) =>{
    let leaf = document.querySelectorAll('.dropdown-branch input[type="checkbox"]');
    for(let i = 0; i < leaf.length; i++){
        leaf[i].addEventListener('click', () =>{
            getLeafs(i);
        });
    }
} 



const MenuCollapse = () => {
    const collapse      = document.querySelectorAll('#mobile-nav .collapse'),
          collapseAria  = document.querySelectorAll('#mobile-nav .collapse img'),
          mobileNav     = document.getElementById('mobile-nav');

    for (let i = 0; i < collapse.length; i++) {
        collapse[i].addEventListener('click', (event) => {
            event.preventDefault();

            const collapseState = collapse[i].classList.contains('collapse-open');

            collapseState ? collapse[i].classList.remove('collapse-open') : collapse[i].classList.add('collapse-open')

            collapse[i].style.backgroundColor = collapseState ? 'transparent' : '#fff';
            collapse[i].style.backgroundColor = collapseState ? -90 : 0;
            collapse[i].style.backgroundColor = collapseState ? 'transparent' : '#fff';

            const collapseMenu = collapse[i].getAttribute('data-collapse');
            document.getElementById(collapseMenu + '-collapse').style.backgroundColor = collapseState ? 'transparent' : '#fff';
            document.getElementById(collapseMenu + '-collapse').style.top = collapseState ? 0 : -10;

            document.getElementById(collapseMenu + '-collapse').style.height = collapseState ? '0px' : '205px';
        });
    }
}