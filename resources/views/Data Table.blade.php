@extends('templates.Data Table')
@section ('isi')
<div class="card-panel purple darken-3 white-text">
  <div class="panel panel-success">
  <div class="panel-heading"><center><h3><font color="green">Jadwal Dokter Spesialis </font></center></h3>
  	</div>
<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<th>
							no
						</th>
						<th>
							Nama_Dokter
						</th>
						<th>
							Jam_Praktek
						</th>
						<th>
							Hari_Praktek
						</th>
					</tr>
				</thead>
				<tbody>
					<tr class="active">
						<td>
							1
						</td>
						<td>
							Drs.Dina Sri Hartini
						</td>
						<td>
							12:00 WIB
						</td>
						<td>
							Selasa dan Rabu
						</td>
					</tr>
					<tr class="success">
						<td>
							2
						</td>
						<td>
							Drs.Tania Khoerunnisa
						</td>
						<td>
							15:00 WIB
						</td>
						<td>
							Kamis
						</td>
					</tr>
					<tr class="warning">
						<td>
							3
						</td>
						<td>
							Drs.Esti Wulandari
						</td>
						<td>
							09:00 WIB 
						</td>
						<td>
							Jumat dan Senin
						</td>
					</tr>
					<tr class="danger">
						<td>
							4
						</td>
						<td>
							Drs.zulfa 
						</td>
						<td>
							07:00 WIB 
						</td>
						<td>
							Minggu dan Sabtu
						</td>
					</tr>
					<tr class="active">
						<td>
							5
						</td>
						<td>
							Drs.Mariana
						</td>
						<td>
							11:00 WIB
						</td>
						<td>
							Selasa dan Rabu
						</td>
					</tr>
					<tr class="success">
						<td>
							6
						</td>
						<td>
							Drs.Halimah
						</td>
						<td>
							06:00 WIB
						</td>
						<td>
							Kamis
						</td>
					</tr>
					<tr class="warning">
						<td>
							7
						</td>
						<td>
							Drs.Ridwan
						</td>
						<td>
							07:30 WIB 
						</td>
						<td>
							Jumat dan Senin
						</td>
					</tr>
					<tr class="danger">
						<td>
							8
						</td>
						<td>
							Drs.Sandi
						</td>
						<td>
							07:45WIB 
						</td>
						<td>
							Minggu dan Sabtu
						</td>
					</tr>
					<tr class="warning">
						<td>
							9
						</td>
						<td>
							Drs.Annisa
						</td>
						<td>
							07:12 WIB 
						</td>
						<td>
							Jumat dan Senin
						</td>
					</tr>
					<tr class="danger">
						<td>
							10
						</td>
						<td>
							Drs.Penti
						</td>
						<td>
							07:45WIB 
						</td>
						<td>
							Minggu dan hari libur
						</td>
					</tr>
				</tbody>
			</table>
		</div>
@endsection