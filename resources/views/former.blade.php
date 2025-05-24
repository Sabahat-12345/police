@extends('layouts.app',['title' => 'Former IGPs of GB Police'])
@section('main')
     <style>
        .hero-section {
            background: linear-gradient(rgba(0, 58, 97, 0.8), rgba(0, 58, 97, 0.8)), url('{{asset('assets/training-bg.jpg')}}') no-repeat center center;
            background-attachment: fixed;
            background-size: cover;
            padding: 100px 0;
            color: white;
        }
        .timeline-node {
            border-left: 3px solid #0d6efd;
            padding-left: 25px;
            margin: 30px 0;
        }
    </style>
<section>
<div class="hero-section text-center">
    <div class="container">
        <h1 class="display-4 mb-4">Gilgit-Baltistan Police Leadership</h1>
        <div class="badge bg-warning text-dark">1947 - Present</div>
    </div>
</div>

<div class="container py-5">
    <div class="alert alert-warning">
        <strong>Disclaimer:</strong> This list contains simulated data for educational purposes only.
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Tenure</th>
                            <th>Key Initiatives</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Col. (Retd) Haider Khan</td>
                            <td>1947-1952</td>
                            <td>First post-independence police chief</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Brig. Sher Jang</td>
                            <td>1952-1958</td>
                            <td>Established modern policing structure</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>DSP Amanullah Khan</td>
                            <td>1958-1965</td>
                            <td>Border security reforms</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Col. Nadir Khan</td>
                            <td>1965-1971</td>
                            <td>Counter-insurgency operations</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Brig. (Retd) Tariq Mahmood</td>
                            <td>1971-1977</td>
                            <td>Infrastructure development</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>DIG Zafar Iqbal</td>
                            <td>1977-1982</td>
                            <td>Mountain Rescue Unit Formation</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Brig. Aslam Khan</td>
                            <td>1982-1986</td>
                            <td>Border Security Enhancement</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Col. (R) Tariq Jamil</td>
                            <td>1986-1990</td>
                            <td>Counter-Narcotics Operations</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>SSP Ghulam Mohiuddin</td>
                            <td>1990-1994</td>
                            <td>Community Policing Program</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>DIG Abdul Razzaq</td>
                            <td>1994-1998</td>
                            <td>Tourist Police Establishment</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Brig. (R) Naveed Khan</td>
                            <td>1998-2002</td>
                            <td>Anti-Terrorism Wing Creation</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>DIG Sardar Ali</td>
                            <td>2002-2006</td>
                            <td>Forensic Lab Setup</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>SSP Farooq Ahmed</td>
                            <td>2006-2010</td>
                            <td>Traffic Management System</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>DIG Zubair Ahmed</td>
                            <td>2010-2014</td>
                            <td>Cyber Crime Unit</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>Sanaullah Abbasi</td>
                            <td>2014-2018</td>
                            <td>Counter-Terrorism Modernization</td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>Muhammad Saeed</td>
                            <td>2018-2022</td>
                            <td>Smart Policing Initiative</td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>DIG Naveed Ahmed</td>
                            <td>2022-203</td>
                            <td>Climate Change Policing Strategy</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>DIGP Afzal Mehmood Butt</td>
                            <td>2023-present</td>
                            <td>Digital policing initiatives</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    Historical Timeline
                </div>
                <div class="card-body">
                    <div class="timeline-node">
                        <h5>2006</h5>
                        <p>First Female DSP Appointment</p>
                    </div>
                    <div class="timeline-node">
                        <h5>2012</h5>
                        <p>Digital FIR System Launch</p>
                    </div>
                    <div class="timeline-node">
                        <h5>2019</h5>
                        <p>Mountain Rescue Training Center</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
   
