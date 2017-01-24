const locationFieldComplete = () =>{
	let IDs = ['edit-submitted-location-information-region', 'edit-submitted-location-information-nearest-south-american-rep', 'edit-submitted-location-information-nearest-north-american-rep', 'edit-submitted-location-information-nearest-australasia-rep', 'edit-submitted-location-information-nearest-europe-middle-eastern-rep'],
		parent = document.querySelector('.webform-component--location-information');

	document.addEventListener('change', (event) => {
		for(let i = 0; i < IDs.length; i++){
			let select = document.getElementById(IDs[i]);
			
			if(select.parentElement.style.display != 'none' && select.value != ''){
				select.classList.add('active-'+'locationField');
			}else{
				select.classList.remove('active-'+'locationField');
			}
		}
		let active = document.querySelectorAll('.active-'+'locationField');
		if(active.length === 2){
			parent.classList.add('field-complete');
		}else{
			parent.classList.remove('field-complete');
		}
	});
}

const shippingFieldComplete = () =>{
	let shippingFields 		= document.querySelectorAll('.webform-component--shipping-information--address input[type="text"]'),
			parent 			= document.querySelector('.webform-component--shipping-information'),
			countrySelect 	= document.getElementById('edit-submitted-shipping-information-address-country'), //select
			address_1 		= document.getElementById('edit-submitted-shipping-information-address-thoroughfare'),
			address_2 		= document.getElementById('edit-submitted-shipping-information-address-premise'),
			city 			= document.getElementById('edit-submitted-shipping-information-address-locality'),
			state 			= document.getElementById('edit-submitted-shipping-information-address-administrative-area'), //select
			state_2 		= document.getElementById('edit-submitted-shipping-information-address-administrative-area--2'),
														//edit-submitted-shipping-information-address-administrative-area--2
			zip 			= document.getElementById('edit-submitted-shipping-information-address-postal-code');

	let fieldsComplete = () => {
		if(countrySelect.value != "" && address_1.value != "" && city.value != "" && zip.value != ""){
			if(state.length > 0 && state.value != "" || state_2.length > 0 && state_2.value != ""){
				parent.classList.add('field-complete');
			}else{
				parent.classList.add('field-complete');
			}
		}else{
			parent.classList.remove('field-complete');
		}
	}

	document.addEventListener('change', (event) => {
		fieldsComplete();
	});

	for(let i = 0; i < shippingFields.length; i++){

		shippingFields[i].addEventListener('keyup', ()=> {
			fieldsComplete();
		});
	}
}

const bindingFieldComplete = () =>{
	let 	parent 			= document.querySelector('.webform-component--binding-information'),
			select 			= document.querySelectorAll('.webform-component--binding-information  select'),
			year 			= document.getElementById('edit-submitted-binding-information-binding-year'),
			color 			= document.getElementById('edit-submitted-binding-information-binding-color'),
			leftOrRight 	= document.getElementById('edit-submitted-binding-information-right-or-left-binding');

	document.addEventListener('change', () => {
		for(let i = 1; i < select.length - 1; i++){
			if(select[i].parentElement.style.display != 'none' && select[i].value != ''){
				select[i].classList.add('active-bindingField');
			}else{
				select[i].classList.remove('active-bindingField');
			}
		}
		
		let active = document.querySelectorAll('.active-bindingField');
		if(year.value != '' && color.value != '' && leftOrRight.value != ''  && active.length > 0){
			parent.classList.add('field-complete');
		}else{
			parent.classList.remove('field-complete');
		}
	});

	let active = document.querySelectorAll('.active-bindingField');
	color.addEventListener('keyup', () => {
		if(year.value != '' && color.value != '' && leftOrRight.value != ''  && active.length > 0){
			parent.classList.add('field-complete');
		}else{
			parent.classList.remove('field-complete');
		}
	});
}	












