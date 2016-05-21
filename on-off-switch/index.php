
<head>
    <title>jQuery UI Switch Button Demo - Olivier Lance</title>

    <link rel="stylesheet" href="jquery.switchButton.css">
    <link rel="stylesheet" href="main.css">
  </head>

  <div class="demo" id="basic2">
        It is
        <div class="switch-wrapper">
          <input type="checkbox" value="1" checked>
        </div>
        !
      </div>




    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
<script src="jquery.switchButton.js"></script>
    <script>
      $(function() {
       

        $('#basic2.demo input').switchButton(
        	{
        		checked: false
        	});

        $("#labels.demo input").switchButton({
          on_label: 'YES',
          off_label: 'NO'
        });

        $("#default.demo input").switchButton({
          checked: false
        });

        $("#labels2-1.demo input").switchButton({
          show_labels: false
        });

        $("#labels2-2.demo input").switchButton({
          labels_placement: "right"
        });

        $("#labels2-3.demo input").switchButton({
          labels_placement: "left"
        });

        $("#slider-1.demo input").switchButton({
          width: 100,
          height: 40,
          button_width: 50
        });

        $("#slider-2.demo input").switchButton({
          width: 100,
          height: 40,
          button_width: 70
        });
      })
    </script>




