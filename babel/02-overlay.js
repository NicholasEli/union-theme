//overlay state
const OverlayState = () => {
    const overlayBtn = document.querySelectorAll('.overlay-btn'),
          closeOverlayBtn = document.querySelectorAll('.close-overlay');
    let obj = {};

    obj.open = () => {
        for(let i = 0; i < overlayBtn.length; i++){
            let o = overlayBtn[i];
            o.addEventListener('click', (event) => {
                event.preventDefault();
                let overlayTarget = event.currentTarget.getAttribute('data-overlay-target');
                
                document.getElementById(overlayTarget).style.zIndex = '9999';
                document.getElementById(overlayTarget).style.opacity = '1';
            });
        }
    },
    obj.close = () => {
        for(let i = 0; i < closeOverlayBtn.length; i++){
            let c = closeOverlayBtn[i];
            c.addEventListener('click', (event) => {
                event.preventDefault();
                let overlayTarget = event.currentTarget.getAttribute('data-overlay-target');
                
                document.getElementById(overlayTarget).style.opacity = '0';
                document.getElementById(overlayTarget).style.zIndex = '-1';
            });
        }
    }

    return obj;
} 

const signupConfirmation = () =>{
    const emailSubmit = document.getElementById('email-submit-btn');
    
    emailSubmit.addEventListener('click' , () => {
        let submitValue = document.getElementById('submit-email').value,
            title       = "Union Binding Co.",
            bodyText    = submitValue+" was added to our email list. Thanks for signing up!",
            iconImage   = Drupal.settings.basePath + "sites/all/themes/union1617/images/union-icon.png";

        submitValue = "";

        notify(title, bodyText, iconImage);
    });
    
}