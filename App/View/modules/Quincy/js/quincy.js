function getDataUrl(input) {
	return new Promise(function(resolve) {
		if (input.files && input.files[0]) {
			let reader = new FileReader();
	
			reader.addEventListener('load', function() {
				resolve(reader.result);
			});

			reader.readAsDataURL(input.files[0]);
		}
	});
}

const $ = {
	id: (data) => document.getElementById(data),
	class: (data) => document.getElementsByClassName(data)
}

let select_img = $.class('select_img')[0];

select_img.onchange = async () => {
	let input = document.createElement('input');
	input.setAttribute('type', 'hidden');
	input.setAttribute('name', 'avatar_quincy')
	input.setAttribute('value', await getDataUrl(select_img));

	$.id('frm1').appendChild(input);
}