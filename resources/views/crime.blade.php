<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crime Statistics</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-light">

<div class="container my-4 text-center">
    <h2 class="fw-bold mb-4">Crime Statistics Graph (2019-2023)</h2>
    
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card p-3">
                <h5 class="fw-bold">Murder</h5>
                <canvas id="murderChart"></canvas>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <h5 class="fw-bold">Dacoity</h5>
                <canvas id="dacoityChart"></canvas>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <h5 class="fw-bold">Robbery</h5>
                <canvas id="robberyChart"></canvas>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <h5 class="fw-bold">Burglary</h5>
                <canvas id="burglaryChart"></canvas>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <h5 class="fw-bold">Theft</h5>
                <canvas id="theftChart"></canvas>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <h5 class="fw-bold">Trespass</h5>
                <canvas id="trespassChart"></canvas>
            </div>
        </div>
    </div>
</div>

<script>
    // Data for the charts
    const years = ["2019", "2020", "2021", "2022", "2023"];

    // Crime statistics data
    const crimeData = {
        "murderChart": { data: [70, 62, 75, 90, 80], color: "steelblue", label: "Murder" },
        "dacoityChart": { data: [4, 2, 3, 5, 2], color: "red", label: "Dacoity" },
        "robberyChart": { data: [40, 55, 60, 70, 110], color: "purple", label: "Robbery" },
        "burglaryChart": { data: [250, 230, 260, 290, 400], color: "mediumpurple", label: "Burglary" },
        "theftChart": { data: [300, 350, 500, 600, 650], color: "limegreen", label: "Theft" },
        "trespassChart": { data: [450, 480, 475, 490, 530], color: "hotpink", label: "Trespass" }
    };

    // Function to generate charts dynamically
    Object.keys(crimeData).forEach(id => {
        new Chart(document.getElementById(id), {
            type: "bar",
            data: {
                labels: years,
                datasets: [{
                    label: crimeData[id].label,
                    data: crimeData[id].data,
                    backgroundColor: crimeData[id].color
                }]
            },
            options: { responsive: true }
        });
    });
</script>

</body>
</html>
