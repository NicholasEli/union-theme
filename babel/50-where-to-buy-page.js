/**
** where to buy
**/
const filterPartners = (location) => {
    let partner  = document.querySelectorAll('#online-partners a');

    let locationLoop = () => {
        let partner = document.querySelectorAll('.'+location);
        for(let i = 0; i < partner.length; i++){
            partner[i].style.display = 'block';
            partner[i].style.opacity = '1';
        }
    }

    if(location === 'US'){
        locationLoop();
    }else if(location === 'CA'){
        locationLoop();
    }else if(location != 'US' || location != 'CA'){
        for(let i = 0; i < partner.length; i++){
            if(partner[i].classList.value != 'US' && partner[i].classList.value != 'CA'){
                partner[i].style.display = 'block';
                partner[i].style.opacity = '1';
            }
        }
    }
}