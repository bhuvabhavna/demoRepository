<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style type="text/css">
		input[type="range"] {
		    -webkit-appearance: none;
		    height: 10px;
		    width: 80%;
		    border-radius: 50px;
		    outline: none;
		}
		/* CSS property for slider thumb */
		input[type="range"]::-webkit-slider-thumb {
		    -webkit-appearance: none;
		    height: 25px;
		    width: 25px;
		    background: #fff;
		    border-radius: 50%;
		    cursor: pointer;

		}
		  
		#red {
		    background: linear-gradient(90deg, #000, red);
		    padding: 7px;
		}
		  
		 #green {
		    background: linear-gradient(90deg, #000, green);
		    padding: 7px;
		}
		  
		
		 #blue {
		    background: linear-gradient(90deg, #000, blue);
		    padding: 7px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-12">
				<h3 class="text-danger">1. This is basic example in Javascript</h3>
			</div>
			<div class="col-md-6">
				<input type="text" class="form-control" id="txt_field">
				<span id="show_text"></span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 mt-5">
				<h3 class="text-danger">2. Show / Hide HTML tag on button click.</h3>
			</div>
			<div class="col-md-6 mt-2">
				<p class="text-danger" id="text_id">You can show and hide me this Button</p><br/>
			</div>
			<div class="col-md-12 mt-2">
				<button class="btn btn-primary show_hide_btn" id="hide_btn">Hide the text above</button>
				<button class="btn btn-primary show_hide_btn" id="show_btn">show the text above</button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 mt-5">
				<h3 class="text-danger">3. Show result of Price into Quantity.</h3>
			</div>
			<div class="col-md-3 mt-2">
				Price : <input type="number" class="form-control " id="txt_price" onKeyUp="getprice();" onChange="getprice();">
			</div>
			<div class="col-md-3 mt-2">
				Qty : <input type="number" class="form-control " id="txt_qty" onKeyUp="getprice();" onChange="getprice();">				
			</div>
			<div class="col-md-12 mt-3">
				<span id="ans_id" class="text-danger "></span>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12 mt-5">
				<h3 class="text-danger">4. Celsius to Fahrenheit converter.</h3>
			</div>
			<div class="col-md-3 mt-2">
				celsius : <input type="number" class="form-control" id="txt_cel">
			</div>
			<div class="col-md-3 mt-2">
				Fahrenheit : <input type="number" class="form-control" id="txt_fehr">				
			</div>			
		</div>

		<div class="row">
			<div class="col-md-12 mt-5">
				<h3 class="text-danger">5. Add Dropdown menu and make Time Converter.</h3>
			</div>
			<div class="col-offset-3 col-md-6 mt-2">
				<select class="form-control" id="drop_id">
					<option value="temp">Temprature</option>
					<option value="time">Time</option>
					<option value="vol">Volume</option>
				</select>
			</div>
		</div>
		<div class="row mt-3" id="temp_div">
			<div class="col-md-3">
				celsius : <input type="number" class="form-control" id="txt_cel1">
			</div>
			<div class="col-md-3">
				Fahrenheit : <input type="number" class="form-control" id="txt_fehr1">				
			</div>			
		</div>

		<div class="row mt-3" id="time_div" style="display: none;">
			<div class="col-md-3">
				Second : <input type="number" class="form-control" id="txt_sec">
			</div>
			<div class="col-md-3 ">
				Minutes : <input type="number" class="form-control" id="txt_min">				
			</div>			
		</div>

		<div class="row mt-3" id="vol_div" style="display:none;">
			<div class="col-md-3">
				Liter : <input type="number" class="form-control" id="txt_lit">
			</div>
			<div class="col-md-3">
				Milliliter : <input type="number" class="form-control" id="txt_mill">				
			</div>			
		</div>

		<div class="row mt-3">
			<div class="col-md-12 ">
				<h3 class="text-danger">6. RGB Color Chooser</h3>
			</div>
			<div class="col-md-2 mt-2">
				<input type="text" name="" class="form-control"
				id="red_val">
			</div>
			<div class="col-md-6">
				Red:<input type="range" id="red" 
	            value="255" min="0" max="255" onChange="myColour();" >
	        </div>
	    </div>
	    <div class="row mt-3">	    	
	    	<div class="col-md-2">
				<input type="text" name="" class="form-control"
				id="green_val" onChange="myColour();">
			</div>
	  		<div class="col-offset-3 col-md-6">
		        <!-- Range slider for green colour -->		       
		        Green:<input type="range" id="green" 
		            value="255" min="0" max="255" onChange="myColour();">
		    </div>
		</div>
		<div class="row mt-3">
			<div class="col-md-2">
				<input type="text" name="" class="form-control"
				id="blue_val" >
			</div>
	  		<div class="col-md-6 mb-5">
		        <!-- Range slider for blue colour -->		       
		        Blue:<input type="range" id="blue" 
		            value="255" min="0" max="255" onChange="myColour();">
		    </div>
	    </div>
	</div>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js" crossorigin="anonymous"></script>

<script type="text/javascript">
	$(document).ready(function(){
	  myColour();
	});

	$("#txt_field").on('keyup',function(){
		$("#show_text").html($(this).val());		
	});

	$('.show_hide_btn').on('click',function(){
		var btn_id = $(this).attr('id');
		if(btn_id == "hide_btn"){
			$('#text_id').hide();
		}

		if(btn_id == "show_btn"){
			$('#text_id').show();
		}

	});

	function getprice(){
		var price = parseFloat($('#txt_price').val());
		if(price =='' || isNaN(price)){
			price = 0;
		}
		var qty = parseFloat($('#txt_qty').val());		
		if(qty =='' || isNaN(qty)){
			qty = 0;
		}
		var mul = price * qty;
		$("#ans_id").html(mul);	
	}

$("#txt_cel").on('keyup change',function(){
		var c = parseFloat($(this).val());		
		var temp = (c*(9/5))+32;		
		$("#txt_fehr").val(temp);		
	});

	$("#txt_fehr").on('keyup change',function(){
		var fer = parseFloat($(this).val());		
		var temp = (fer-32)*(5/9);		
		$("#txt_cel").val(temp);		
	});
	

	$('#drop_id').on("change",function(){
		var val = $(this).val();
		if(val == "temp"){
			$('#temp_div').show();
			$('#time_div').hide();
			$('#vol_div').hide();
		}
		else if(val == "time"){
			$('#temp_div').hide();
			$('#time_div').show();
			$('#vol_div').hide();
		} 
		else if(val == "vol"){
			$('#temp_div').hide();
			$('#time_div').hide();
			$('#vol_div').show();
		}
	});
	
	$("#txt_cel1").on('keyup change',function(){
		var c = parseFloat($(this).val());		
		var temp = (c*(9/5))+32;		
		$("#txt_fehr1").val(temp);		
	});

	$("#txt_fehr1").on('keyup change',function(){
		var fer = parseFloat($(this).val());		
		var temp = (fer-32)*(5/9);	
		if(!Number.isInteger(temp))	{
			temp = temp.toFixed(7);
		}
		$("#txt_cel1").val(temp);		
	});
	

	$("#txt_sec").on('keyup change',function(){
		var sec = parseFloat($(this).val());		
		var time = sec/60;
		if(!Number.isInteger())	{
			time = time.toFixed(7);
		}		
		$("#txt_min").val(time);		
	});

	$("#txt_min").on('keyup change',function(){
		var min = parseFloat($(this).val());		
		var time = min*60;
		if(!Number.isInteger(time))	{
			time = time.toFixed(7);
		}		
		$("#txt_sec").val(time);		
	});

	$("#txt_lit").on('keyup change',function(){
		var lit = parseFloat($(this).val());		
		var vol = lit*1000;		
		$("#txt_mill").val(vol);		
	});

	$("#txt_mill").on('keyup change',function(){
		var mill = parseFloat($(this).val());		
		var vol = mill/1000;		
		$("#txt_lit").val(vol);		
	});	

	function myColour() {  
    // Get the value of red color
    var red = $('#red').val();
    var green = $('#green').val();
    var blue = $('#blue').val();

    $("#red_val").val(red);
    $("#green_val").val(green);
    $("#blue_val").val(blue);  
   
}

$('#red_val').on('keyup',function(){
	var red = $(this).val();
	$('#red').val(red);
});

$('#green_val').on('keyup',function(){
	var red = $(this).val();
	$('#green').val(red);
});

$('#blue_val').on('keyup',function(){
	var red = $(this).val();
	$('#blue').val(red);
});

</script>
</html>
