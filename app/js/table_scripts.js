
var model = document.getElementById('model');
var close_reply = document.getElementById('close_reply');
var model_input_thread_id = document.getElementById('thread_id');
var model_input_table_from = document.getElementById('table_from');
var thread_id_indicator = document.getElementById('thread_id_indicator');


function reply_thread(event,thread_id, table_name) {

	console.log(event);
	event.preventDefault();

	model_input_table_from.setAttribute('value', table_name);
	model_input_thread_id.setAttribute('value', thread_id);
	thread_id_indicator.innerHTML = thread_id;

	model.classList.remove('hide');
	model.classList.add('model');

}

close_reply.addEventListener('click', (e) => {
	e.preventDefault();
	model.classList.add('hide');
	model.classList.remove('model');
});