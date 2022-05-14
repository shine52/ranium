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
	<h6 class = "mx-4 ">Choose date range : </h6>
	<form class="row row-cols-lg-auto g-3 align-items-center mx-4 border-bottom pb-2" action="/neoView" method="POST">
	  @csrf
	  <div class="col-12">
	    <label class="visually-hidden" for="start_date">Start Date : </label>
	    <div class="input-group">
	      <div class="input-group-text">Start Date :</div>
	      <input type="date" class="form-control" id="start_date" name = "start_date"  placeholder="start date" />

	    </div>
	  </div>

	  <div class="col-12">
	    <label class="visually-hidden" for="end_date">End Date : </label>
	    <div class="input-group">
	      <div class="input-group-text">End Date :</div>
	      <input type="date" class="form-control" id="end_date"  name = "end_date" placeholder="end_date" />
	    </div>
	  </div>
	  <div class="col-12">
    	<button type="submit" class="btn btn-primary">Submit</button>
  	  </div>
	</form> 
	</div>
<!-- end : date chooser section-->
</body>
</html>