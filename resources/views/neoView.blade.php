<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.js" integrity="sha512-Lii3WMtgA0C0qmmkdCpsG0Gjr6M0ajRyQRQSbTF6BsrVh/nhZdHpVZ76iMIPvQwz1eoXC3DmAg9K51qT5/dEVg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	
	<title>Neo</title>

</head>
<body>

<!-- start : date chooser section-->
	
	<div class = "container ">
	<div class = "d-flex align-items-center justify-content-center my-4" >
		<h4 >Near Earth Objects</h4> 
	</div>
	
	<form class="row row-cols-lg-auto g-3 align-items-center mx-4 border-bottom mb-2 pb-2" >
	  
	  <div class="col-12">
	    <label class="visually-hidden" for="start_date">Start Date : </label>
	    <div class="input-group">
	      <div class="input-group-text">Start Date :</div>
	      <input type="text" class="form-control" id="start_date" placeholder="start date" readonly />
	    </div>
	  </div>

	  <div class="col-12">
	    <label class="visually-hidden" for="end_date">End Date : </label>
	    <div class="input-group">
	      <div class="input-group-text">End Date :</div>
	      <input type="text" class="form-control" id="end_date" placeholder="end_date" readonly/>
	    </div>
	  </div>
	  
	</form> 
	</div>
<!-- end : date chooser section-->


<!-- Fastest Asteroid section -->
<div class = "container">
	<div class = "row">
		<div class = "col-md-6">		
			<form class = "border border-1">
			  <label >Fastest Asteroid (km/h) :</label>
			  <div class="form-outline mb-1">
			    <label class="form-label" for="ID">ID : </label>
			    <input type="text" id="ID" class="form-control" readonly />
			  </div>

			  <div class="form-outline mb-1">
			    <label class="form-label" for="ID">Speed :</label>
			    <input type="text" id="speed" class="form-control" readonly />
			  </div>
			</form>
	
		</div>	
	

 
	<!-- Closest Asteroid section  -->
	
		<div class = "col-md-6">
			<form class = "border border-1">
			  <label >Closest Asteroid :</label>
			  <div class="form-outline mb-1 "> 
			    <label class="form-label" for="ID">ID : </label>
			    <input type="text" id="ID" class="form-control" readonly />
			  </div>

			  <div class="form-outline mb-1">
			    <label class="form-label" for="distance">Distance(km) :</label>
			    <input type="text" id="distance" class="form-control" readonly />
			  </div>
			</form>
		</div>
	</div>
	<div>
	 	<!-- <form> -->
			  <div class="form-outline mb-1 col-md-6">
			    <label class="form-label" for="avg_size">Average Size of the Asteroids in kilometers : </label>
			    <input type="text" id="avg_size" class="form-control" readonly />
			  </div>
		 
		<!-- </form> -->
	</div>

 </div>
 


<canvas id="myChart" width="400" height="400"></canvas>
<script>
const start_date = '<?php echo $start_date ?>';	
const end_date = '<?php echo $end_date ?>';	

console.log(start_date);
document.getElementById("start_date").value = start_date;
document.getElementById("end_date").value = end_date;

const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
	
</body>
</html>


