<!DOCTYPE html>

<meta charset="utf-8">
<title>Login for Blinds</title>
<meta name="viewport" content="width=540">
<link rel="stylesheet" href="speech-input.css">
<link rel="stylesheet" href="demo.css">
<link rel="stylesheet" href="bootstrap.min.css">
<style type="text/css">
.btn-huge{
    padding-top:20px;
    padding-bottom:20px;
    margin-left: 13px;
}
</style>
<div class="container">
    <div class="row" style="margin-left: 250px; margin-top: 100px;">
    	<div class="col-lg-6 ">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Speak receiver's address</h3> <br/>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" action="ack.php" method="POST">
                    <fieldset>
			    	  	<div class="form-group">
			    		   <input type="text" class="speech-input"  placeholder="username"  name="name">
			    		</div> <br/>
			    		<div class="panel-heading">
			    	<h3 class="panel-title">Speak subject</h3> <br/>
			 	</div>
			    		<div class="form-group">
			    			<input type="text" class="speech-input" placeholder="subject" name="sub">
			    		</div>
			    		<br/>
				<div class="panel-heading">
			    	<h3 class="panel-title">Speak message</h3> <br/>
			 	</div>
			    		<div class="form-group">
			    		<textarea type="text" required="" rows="7" cols="30" class="speech-input" placeholder="subject" name="msg"> </textarea>
			    		</div>

			    		<input class="btn btn-primary btn-lg btn-block btn-huge" type="submit" value="send">
			    	</fieldset>
			      	</form>

			    </div>
			</div>
		</div>
	</div>
</div>
<!--
<h2>Multi-line text area</h2>
<textarea class="speech-input" placeholder="What's your story?" rows="10" cols="40" name="eng-textarea"></textarea> -->
<script src="speech-input.js"></script>
<script type="text/javascript">
    window.onload=function(){
        var auto = setTimeout(function(){ autoRefresh(); }, 100);

        function submitform(){
          alert('Form submitting automatic');
          document.forms["myForm"].submit();
        }

        function autoRefresh(){
           clearTimeout(auto);
           auto = setTimeout(function(){ submitform(); autoRefresh(); }, 100000);
        }
    }
</script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
