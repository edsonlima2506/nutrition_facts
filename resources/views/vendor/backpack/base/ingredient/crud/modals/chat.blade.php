@push('after_styles')
	@include(backpack_view('base.ingredient.crud.styles.chat_style'))
@endpush

<div id="chat-container">
	<div id="chat-header">
		{{ trans('crud.global.need_help') }}
	</div>
	<div id="chat-body">
		<div class="chat-message">
			<img src="{{ asset('img/robot_profile.webp') }}" alt="User" class="user-avatar">
			<div class="message-bubble">
			  Olá! Eu sou o IBot, como posso te ajudar hoje?
			</div>
		</div>
		<div class="chat-message">
			<img src="{{ asset('img/robot_profile.webp') }}" alt="User" class="user-avatar">
			<div class="message-bubble">
				🤔 Está com dúvida em algum processo?
				<hr>
				<a href="" class="chat-link"><i class="lab la-youtube"></i> Videos tutoriais</a>
			</div>
		</div>

		<div class="chat-message">
			<img src="{{ asset('img/robot_profile.webp') }}" alt="User" class="user-avatar">
			<div class="message-bubble">
				💡 Tem uma sugestão de melhoria?
				<hr>
				<a href="" class="chat-link"><i class="lab la-whatsapp"></i> Fale conosco</a>
			</div>
		</div>
	</div>
</div>

<script>
	const chatContainer = document.getElementById('chat-container');

	$('.open-chat').on('click', function() {
		if (chatContainer.classList.contains('show')) {
        chatContainer.classList.remove('show');

      } else {
        chatContainer.classList.add('show');
      }
	})
</script>
