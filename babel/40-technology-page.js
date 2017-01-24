/**
** technology
**/ 
const animateBars = () => {
    let bars = document.querySelectorAll('.bar');
    for(let i = 0; i < bars.length; i++){
        let bar = bars[i];
        if(inView('.bar', i)){
            bar.style.width = '100%';
        }else{
            bar.style.width = '0%';
        }
    }
}