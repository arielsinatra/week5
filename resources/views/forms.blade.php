<!DOCTYPE html>
<html>
	<head>
		<title>Forms</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<form action="" method="POST" class="form-horizontal">
						{{ csrf_field() }}
							<div class="Form-group">
								<label for="nama">Nama</label>
								<input type="text" name="nama" class="form-control" @if(isset($nama)) value="{{ $nama }}" @endif>
							</div>

							<div class="Form-group">
								<label for="email">Email</label>
								<input type="email" name="email" class="form-control" @if(isset($email)) value="{{ $email }}" @endif>
							</div>
							<br>
							<div class="Form-group">
								<label for="gender">Jenis Kelamin</label>
									<div class="radio">
										<label>
											<input type="radio" name="gender" value="m" @if(isset($gender) && $gender == "m") checked @endif>
												Laki-Laki
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="gender" value="f" @if(isset($gender) && $gender == "f") checked @endif>
												Perempuan
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="gender" value="o" @if(isset($gender) && $gender == "o") checked @endif>
												Other
										</label>
									</div>
							</div>
							<br>
							<div class="Form-group">
								<label for="senjata">
									Senjata Pilihan
								</label>
								<br>
								Bisa pilih lebih dari satu
							</div>
							
							<div class="checkbox">
								<label>
									<input type="checkbox" name="senjata[]" value="Eul" @if(isset($senjata) && in_array('Eul', $senjata)) checked @endif>
										Eul
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="senjata[]" value="Midas" @if(isset($senjata) && in_array('Midas', $senjata)) checked @endif>
										Midas
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="senjata[]" value="Rapier" @if(isset($senjata) && in_array('Rapier', $senjata)) checked @endif>
										Rapier
								</label>
							</div>
							<br>
						<button type="submit" class="btn btn-warning">Submit</button>
					</form>
							<br>
							@if(isset($nama))
								Halo, {{ $nama }}
							@endif
							<br>
							@if(isset($email))
								Email kamu {{ $email }}
							@endif
							<br>
							@if(isset($gender))
								Kamu seorang 
									@if($gender == 'm') Laki-Laki
									@elseif($gender == 'f') Perempuan 
									@else Ga Jelas 
									@endif		
							@endif
							<br>
							@if(isset($senjata))
								Senjata Pilihan :
								<br>
								@foreach($senjata as $item)
								-> {{ $item }}
								<br>
								@endforeach
							@endif
							<br>

							<script type="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
				</div>
							
				</div>
			</div>
		</div>
	</body>
</html>