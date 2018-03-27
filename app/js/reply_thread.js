
var model = document.getElementById('model');
var btn = document.getElementById('reply_buttom');
var close_reply = document.getElementById('close_reply');

// Show the model
btn.addEventListener('click', (e) => {
	e.preventDefault();
	model.classList.add('model');
	model.classList.remove('hide');

});

// Hide the model
close_reply.addEventListener('click', (e) => {
	e.preventDefault();
	model.classList.add('hide');
	model.classList.remove('model');
});