<?php
    setlocale(LC_TIME, 'ita');
    date_default_timezone_set('Europe/Rome');
	include("../utils/class.utils.php");
    include("../utils/class.seminar.php");
    $s = new seminar();
    $s->setSource("../json/seminari.json");
    $sems = $s->getSeminars(true);	
    $num = count($sems);
?>
<html>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>associazione renbukai</title>
    <link rel="apple-touch-icon-precomposed" href="assets/favicon_t.png" />
    <link rel="shortcut icon" href="assets/favicon.png">
    <!-- bootstrap -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="../css/bootstrap-image-gallery.min.css">

	<link rel="stylesheet" media="screen" href="../css/main.css" /> <!--Load CSS-->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/bootstrap.js"></script>    

<script type="text/javascript" >
  $(function() {
    $("#submit").click(function() {
      var passed = true;
      var startdate = $('#giornoinizio').val();
      var enddate = $('#giornofine').val();
      var title = $("#titolo").val();
      var city = $("#città").val();
      if(startdate === "" || enddate === "" || title === "" || city === "") passed = false;
      
      if(!passed){
        alert("campi obbligatori non completati ... impossibile proseguire!");
        return;
      }

      var form = $('form')[0]; 
      var formData = new FormData(form);


      $.ajax({
        type: 'post',
        url: 'seminars_dump.php',
        data: formData, 
        processData: false,
            contentType: false,
            beforeSend: function() {
            alert(formData);
        },
        success: function(response){
          var newID = response;
          alert(response);
          var dest = "update.php"
          if(newID != "")
            dest = dest + "#" + newID; 
          location.href = dest;
          $("#semform")[0].reset();
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) { 
          alert("Status: " + textStatus); alert("Error: " + errorThrown); 
        }
      });
      return false;
    });
    $("#reset").click(function() {
      $("#semform")[0].reset();

    });
  });
</script>
</head>
<body>
	<div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">seminari in elenco: <?php echo $num; ?></div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="tab_logic">
                        <thead>
                            <tr>
                                <th>data inizio</th>
                                <th>data fine</th>
                                <th>citt&agrave;</th>
                                <th>dojo ospitante</th>
                                <th>indirizzo</th>
                                <th>diretto da</th>
                                <th>titolo</th>
                                <th>immagine</th>
                                <th>locandina</th>
                                <th>elimina</th>
                                <th>aggiorna</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                for($i = 0; $i < $num; $i++)
                                {                                    
                            ?>                                    
                            <tr><a name='<?php echo str_replace("-","",$sems[$i]['giornoinizio']); ?>'></a>
                                <td><?php echo $sems[$i]['giornoinizio']; ?></td>
                                <td><?php echo $sems[$i]['giornofine']; ?></td>
                                <td><?php echo $sems[$i]['città']; ?></td>
                                <td><?php echo $sems[$i]['dojo']; ?></td>
                                <td><?php echo $sems[$i]['indirizzo']; ?></td>
                                <td><?php echo $sems[$i]['diretto']; ?></td>
                                <td><?php echo $sems[$i]['titolo']; ?></td>
                                <td><?php echo $sems[$i]['immagine']; ?><br/>
                                    <?php if($sems[$i]['immagine'] != '') { ?>
                                        <img width='100px' src='../stages/<?php echo $sems[$i]['immagine']; ?>' class='semdate thumbnail'></td>
                                    <?php } ?>
                                <td><?php echo $sems[$i]['locandina']; ?></td>
                                <td><i class="fa fa-trash"></i></td>
                                <td><i class="fa fa-pencil"></i></td>
                            </tr>
                            <?php
                                }                                
                            ?>
                             <form class="form form-vertical" enctype="multipart/form-data" method="post" name="semform" id="semform">
                            <tr id='addr0'>
                                <td><input type="text" name='giornoinizio' id='giornoinizio'  placeholder='YYYY-MM-DD' class="form-control"/></td>
                                <td><input type="text" name='giornofine' id='giornofine' placeholder='YYYY-MM-DD' class="form-control"/></td>
                                <td><input type="text" name='città' id='città' placeholder='città' class="form-control"/></td>
                                <td><input type="text" name='dojo' id='dojo' placeholder='dojo organizzatore' class="form-control"/></td>
                                <td><input type="text" name='indirizzo' id='indirizzo' placeholder='struttura, indirizzo completo' class="form-control"/></td>
                                <td><input type="text" name='diretto' id='diretto' placeholder='M&deg; Foglietta' class="form-control"/></td>
                                <td><input type="text" name='titolo' id='titolo' placeholder='Seminario di aikido' class="form-control"/></td>
                                <td><input type="text" name='immagine' id='immagine' placeholder='nome del file' class="form-control"/></td>
                                <td><input type="text" name='locandina' id='locandina' placeholder='nome del file' class="form-control"/></td>
                                <td colspan='2'><input type="text" name='action' id='action' value='add' class="form-control"/></td>
                            </tr>
                            <tr id='addr1'>
                                <td colspan='11'><input type="submit" value="inserisci" id="submit" name="inserisci" class="btn btn-primary">
                                                <input type="submit" value="cancella" id="reset" name="cancella" class="btn btn-primary"></td>
                            </tr>
                           </form>
                        </tbody>
                   </table>
                </div>
            </div>
        </div>
	</div>
</body>
</html>