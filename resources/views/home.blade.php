<html>
<body>
	@include('templates.default')
<div class="container">
<script languprice="javascript" type="text/javascript">
    <!--
    //Browser Support Code
            function ajaxFunction(){
                var ajaxRequest; // The variable that makes Ajax possible!
                try{
                    // Opera 8.0+, Firefox, Safari
                    ajaxRequest = new XMLHttpRequest();
                }catch (e){
                    // Internet Explorer Browsers
                    try{
                        ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                    }catch (e) {
                        try{
                            ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                        }catch (e){
                            // Something went wrong
                            alert("Your browser broke!");
                            return false;
                        }
                    }
                }
// Create a function that will receive data
// sent from the server and will update
// div section in the same pprice.
                ajaxRequest.onreadystatechange = function(){
                    if(ajaxRequest.readyState == 4){
                        var ajaxDisplay = document.getElementById('ajaxDiv');
                        ajaxDisplay.innerHTML = ajaxRequest.responseText;
                    }
                }
// Now get the value from user and pass it to
// server script.
				$('#loadimage').show();
                var name= document.getElementById('name').value;
                var price = document.getElementById('price').value;
                var minprice = document.getElementById('minprice').value;
                var bedroom = document.getElementById('bedroom').value;
                var bathroom = document.getElementById('bathroom').value;
                var garage = document.getElementById('garage').value;
                var storey = document.getElementById('storey').value;
                var queryString = "?price=" + price ;
                queryString += "&bathroom=" + bathroom + "&bedroom=" + bedroom + "&garage="+garage+ "&storey="+storey +"&name="+name+ "&minprice="+minprice;
                ajaxRequest.open("GET", "{{route('search')}}" + queryString, true);//routes to the search php
                ajaxRequest.send(null);
                $('#loadimage').hide();//image will disapper or not appear at all as there is not much search in the dB
            }
    //-->
</script>
<form name='myForm'>
    <div class="form-group">
    Suburb: <input type='text' class="form-control" id='name' /> <br />
    </div>
    <div class="form-group">
    Max price: <input type='text' class="form-control" id='price' /> <br />
    </div>
    <div class="form-group">
    Min price: <input type='text' class="form-control" id='minprice' value = 0> <br />
    </div>
    <div class="form-group">
    Bedroom: <select id='bedroom' class="form-control">
    <option value="any">Any</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
	<option value="6">6</option>
    </select>
    </div>
    <div class="form-group">
    Bathroom: <select id='bathroom' class="form-control">
    <option value="any">Any</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    </select>
    </div>
    <div class="form-group">
    Storey: <select id='storey' class="form-control">
    <option value="any">Any</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    </select>
    </div>
    <div class="form-group">
    Garage: <select id='garage' class="form-control">
    <option value="any">Any</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    </select>
    </div>
    <input type='button' onclick='ajaxFunction()' value='Search'class="btn btn-default"/>

</form>
<div id = 'loadimage' style= 'display:none;'><img src= 'ajax-loader.gif'/></div>
<div id='ajaxDiv'>Your result will display here</div>
</div>
</body>
</html>
