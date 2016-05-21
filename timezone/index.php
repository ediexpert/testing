<?php
date_default_timezone_set('America/Chicago');

if (date_default_timezone_get()) {
    echo 'date_default_timezone_set: ' . date_default_timezone_get() . '<br />';
}

if (ini_get('date.timezone')) {
    echo 'date.timezone: ' . ini_get('date.timezone');
}

//echo date("h:i:sa");

?>


<script type="text/javascript">
var i=0;
function get_timeelapsed(){
	
document.getElementById("time").innerHTML = i;
i++;
}
setInterval(get_timeelapsed, 1000);
</script>

<label id="time">Hello</label>