@include('site.header')

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h2> Nous joindre </h2>
			<p>
				Si vous avez des questions, utilisez simplement les coordonnées suivantes.
			</p>

			<div class="row pt-4">
				<div class="col-md-4 text-center">
					<i class="fa fa-location-arrow" style="font-size: 25px;"></i>
					
				</div>
				<div class="col-md-8">
					<h5>Addresse</h5>
					<b>Rohero I, BOULEVARD DE L'UPRONA N°91</b> <br>
					<b>Bujumbura - Burundi</b> <br>
					<b>Code Postal :  6905 </b>
					
				</div>


				<div class="col-md-4 text-center pt-3">
					<i class="fa fa-phone"  style="font-size: 25px;"></i>
					
				</div>

				<div class="col-md-8 pt-3">

					<h4>+257 222 54 283</h4>
					
				</div>


			</div>



			
		</div>
		<div class="col-md-6">
			<h4>Formulaire de contact</h4>
			<div class="contact-form">
				<div class="form-group">
					<label class="control-label" for="fname">Nom:</label>
					<div class="col-sm-10">          
						<input type="text" class="form-control" id="fname" placeholder="" name="fname">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label" for="lname">Sujet:</label>
					<div class="col-sm-10">          
						<input type="text" class="form-control" id="lname" placeholder="" name="lname">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label" for="email">Email:</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" placeholder="" name="email">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label" for="comment">Message:</label>
					<div class="col-sm-10">
						<textarea class="form-control" rows="5" id="comment"></textarea>
					</div>
				</div>
				<div class="form-group">        
					<div class="col-sm-offset-2 col-sm-10 mt-3">
						<button type="submit" class="btn btn-primary">Envoyer</button>
					</div>
				</div>
			</div>
			


			
		</div>


		<div class="col-md-12">

			<style>
				

				.map-responsive{

					overflow:hidden;

					padding-bottom:56.25%;

					position:relative;

					height:0;

				}

				.map-responsive iframe{

					left:0;

					top:0;

					height:100%;

					width:100%;

					position:absolute;

				}



			</style>

			<div class="map-responsive">

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6724.224460102176!2d29.352853592720674!3d-3.3789476516640677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19c182e1c92486e3%3A0x62f8657f5c86fda2!2sRohero!5e0!3m2!1sfr!2sbi!4v1615256860227!5m2!1sfr!2sbi" width="1300" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

			</div>
			


		</div>

	</div>



</div>



@include('site.footer')