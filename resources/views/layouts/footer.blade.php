<footer class="banner-area relative">
				<div class="container">
					<div class="row">
					<div class="col-xl-6 text_footer_1">
					<h3>Хотите узнать подробнее о школе?</h3>
					<p>Напишите нам через форму обратной связи или позвоните по номеру<br>8 (499) 753-01-25<br> 8 (915) 310-34-47</p>
					</div>	
					<div class="col-xl-6 text_footer_2">
						<form action="/footer" method="POST" class="main_form">
						{{ csrf_field() }}
							<div class="form-group">
							<input type="text" class="form-control input_footer" name="phone" placeholder="Имя" required>
							</div>
							<div class="form-group">
							<input type="email" class="form-control input_footer" name="contact_email" placeholder="E-mail" required>
							</div>
							<div class="form-group">
							<textarea name="text_contact" placeholder="Сообщение" class="input_textarea_footer" required></textarea>
							</div>
							<div class="form-group">
							<button type="submit" class="btn  btn_footer">ОТПРАВИТЬ</button>
							</div>
						</form>
					</div>
						
				</div>
				</div>
			</footer>