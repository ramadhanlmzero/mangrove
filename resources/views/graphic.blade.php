@extends('layouts.master')

@section('content')
<section>
    <div class="container">
        <div class="container-fluid">
            <h3 class="mt-4 text-center font-weight-bold">Grafik Korelasi NDVI dan Sampel Parameter</h3>
            <div class="mt-4">
                <h5 class="font-weight-bold">Tabel Nilai NDVI Citra Satelit Sentinel 2A Level 1C Tahun 2019 & Sampel Parameter Air dan Tanah</h5>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Titik Sampel</th>
                                <th>NDVI</th>
                                <th>pH Air</th>
                                <th>Salinitas Air<br>(%)</th>
                                <th>Kadar Air Tanah<br>(%)</th>
                                <th>Nitrogen Tanah<br>(%NH3-N)</th>
                                <th>Jenis Tanah<br>Pasir (%)</th>
                                <th>Jenis Tanah<br>Lanau (%)</th>
                                <th>Jenis Tanah<br>Lempung (%)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>0,503741</td>
                                <td>8,80</td>
                                <td>2,08</td>
                                <td>80,53</td>
                                <td>1,775</td>
                                <td>40,66</td>
                                <td>53,34</td>
                                <td>6,00</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>0,323818</td>
                                <td>7,70</td>
                                <td>27,60</td>
                                <td>31,59</td>
                                <td>0,356</td>
                                <td>77,00</td>
                                <td>20,93</td>
                                <td>2,07</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>0,332083</td>
                                <td>8,80</td>
                                <td>47,50</td>
                                <td>17,42</td>
                                <td>0,997</td>
                                <td>34,85</td>
                                <td>36,11</td>
                                <td>29,04</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>0,577560</td>
                                <td>8,40</td>
                                <td>4,63</td>
                                <td>46,27</td>
                                <td>0,917</td>
                                <td>1,62</td>
                                <td>45,95</td>
                                <td>52,42</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>0,204901</td>
                                <td>8,50</td>
                                <td>29,50</td>
                                <td>47,27</td>
                                <td>0,803</td>
                                <td>22,03</td>
                                <td>58,14</td>
                                <td>19,83</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>0,771685</td>
                                <td>7,10</td>
                                <td>18,60</td>
                                <td>44,27</td>
                                <td>0,698</td>
                                <td>29,29</td>
                                <td>32,89</td>
                                <td>37,82</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>0,817753</td>
                                <td>6,20</td>
                                <td>8,51</td>
                                <td>59,13</td>
                                <td>0,699</td>
                                <td>38,88</td>
                                <td>26,96</td>
                                <td>34,15</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mt-4">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{ asset('assets/image/ph_air.jpg') }}" alt="Korelasi Nilai NDVI Citra dan pH Air">
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{ asset('assets/image/kadar_air_tanah.jpg') }}" alt="Korelasi Nilai NDVI Citra dan Kadar Air Tanah">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{ asset('assets/image/salinitas_air.jpg') }}" alt="Korelasi Nilai NDVI Citra dan Salinitas Air">
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{ asset('assets/image/nitrogen_tanah.jpg') }}" alt="Korelasi Nilai NDVI Citra dan Nitrogen Tanah">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{ asset('assets/image/pasir.jpg') }}" alt="Korelasi Nilai NDVI Citra dan Jenis Tanah Pasir">
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{ asset('assets/image/lanau.jpg') }}" alt="Korelasi Nilai NDVI Citra dan Jenis Tanah Lanau">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{ asset('assets/image/lempung.jpg') }}" alt="Korelasi Nilai NDVI Citra dan Jenis Tanah Lempung">
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <h5 class="font-weight-bold">Tabel Korelasi NDVI Citra Satelit Sentinel 2A Level 1C Tahun 2019 & Sampel Parameter Air dan Tanah</h5>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Kolerasi (r)</th>
                                <th>pH Air</th>
                                <th>Salinitas Air</th>
                                <th>Kadar Air Tanah</th>
                                <th>Nitrogen Tanah</th>
                                <th>Jenis Tanah<br>Pasir</th>
                                <th>Jenis Tanah<br>Lanau</th>
                                <th>Jenis Tanah<br>Lempung</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>NDVI Citra Satelit Sentinel 2A<br>Level 1C Tahun 2019</th>
                                <td>-0.733</td>
                                <td>-0.615</td>
                                <td>0.386</td>
                                <td>-0.009</td>
                                <td>-0.201</td>
                                <td>-0.357</td>
                                <td>0.530</td>
                            </tr>
                            <tr>
                                <th>Tingkat Hubungan</th>
                                <td style="background-color:#25e82f;" class="white-text font-weight-bold">Kuat</td>
                                <td style="background-color:#25e82f;" class="white-text font-weight-bold">Kuat</td>
                                <td style="background-color:#ffa500;" class="white-text font-weight-bold">Rendah</td>
                                <td style="background-color:#ff0000;" class="white-text font-weight-bold">Sangat Rendah</td>
                                <td style="background-color:#ffa500;" class="white-text font-weight-bold">Rendah</td>
                                <td style="background-color:#ffa500;" class="white-text font-weight-bold">Rendah</td>
                                <td style="background-color:#ffff00;" class="text-dark font-weight-bold">Sedang</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mt-4">
                <h5 class="font-weight-bold">Grafik Kolerasi NDVI Citra dan Sampel Paramater Air dan Tanah Tahun 2019</h5>
                <div>
                    <canvas id="firstChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
    <script src="{{ asset('assets/js/chart.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/utils.js') }}"></script>
    <script>
		var ctx = document.getElementById("firstChart");
        ctx.height = 300;
		var firstChart = new Chart (ctx, {
			type: 'bar',
			data: {
				labels: ["pH Air", "Salinitas Air", "Kadar Air Tanah", "Nitrogen Tanah", "Pasir", "Lanau", "Lempung"],
				datasets: [{
					label: '2019',
					backgroundColor: window.chartColors.blue,
					borderColor: window.chartColors.blue,
					borderWidth: 1,
					data: [0.733, 0.615, 0.386, 0.009, 0.201, 0.357, 0.530]
				}]
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					position: 'top',
                },
                scales: {
                    yAxes: [{
                            display: true,
                            ticks: {
                                beginAtZero: true,
                                max: 1
                            }
                        }]
                },
				title: {
					display: true,
					text: 'Grafik Korelasi NDVI Citra dan Sampel Paramater Air dan Tanah Tahun 2019'
				}
			}
		} );
	</script>
@endsection