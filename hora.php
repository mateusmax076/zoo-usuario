<?php require_once('db-connect.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href='css/core/main.min.css' rel='stylesheet' />
    <link href='css/daygrid/main.min.css' rel='stylesheet' />
    <link rel="stylesheet" href="css/personalizado.css">
    <link rel="shortcut icon" href="./img/favicon.svg" type="image/x-icon">
    <script crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./styles/css/global.css" />
    <link rel="stylesheet" href="./styles/css/reset.css" />
    <link rel="stylesheet" href="./styles/css/global.css" />
    <link rel="stylesheet" href="./styles/css/bootstrap.min.css" />
    <script src='js/core/main.min.js'></script>
    <script src='js/interaction/main.min.js'></script>
    <script src='js/daygrid/main.min.js'></script>
    <script src="js/personalizado.js"></script>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./fullcalendar/lib/main.min.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/all.css"></script>
    <script src="./js/api/bootstrap.min.js"></script>
    <script src="./fullcalendar/lib/main.min.js"></script>
    <style>
        :root {
            --bs-success-rgb: 71, 222, 152 !important;
        }

        html,
        body {
            height: 100%;
            width: 100%;
            font-family: Apple Chancery, cursive;
        }

        .btn-info.text-light:hover,
        .btn-info.text-light:focus {
            background: #000;
        }
        table, tbody, td, tfoot, th, thead, tr {
            border-color: #ededed !important;
            border-style: solid;
            border-width: 1px !important;
        }
    </style>
</head>

<body class="bg-light">
   <nav
      class="navbar navbar-expand-lg navbar-dark bg-dark static-top position-fixed top-0 start-0 w-100"
    >
      <div class="container">
        <a class="navbar-brand" href="index.html" title="Home">
          <img src="./img/logoBranca.svg" alt="Logo" height="60" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >

          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<br></br>
    <div class="container py-5" id="page-container">
        <div class="row">
            <div class="col-md-9">
                <div id="calendar"></div>
            </div>
            <div class="col-md-3">
                <div class="cardt rounded-0 shadow">
                    <div class="card-header bg-gradient bg-primary text-light">
                        <h5 class="card-title">Agendar um horário</h5>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <form action="save_schedule.php" method="post" id="schedule-form">
                                <input type="hidden" name="id" value="">
                                <div class="form-group mb-2">
                                    <label for="title" class="control-label">Titulo</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="titulo" id="titulo" required>
                                </div>
                                      <div class="form-group mb-2">
                                    <label for="title" class="control-label">E-mail</label>
                                    <input type="email" class="form-control form-control-sm rounded-0" name="email" id="email" required>
                                </div>
                                      <div class="form-group mb-2">
                                    <label for="title" class="control-label">Telefone</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="telefone" id="telefone" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="start_datetime" class="control-label">início do evento</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start" id="start" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="end_datetime" class="control-label">fim do evento</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="end" id="end" required>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> Salvar</button>
                            <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->

    <!-- Event Details Modal -->

<?php 
$schedules = $conn->query("SELECT * FROM `evento`");
$sched_res = [];
foreach($schedules->fetch_all(MYSQLI_ASSOC) as $row){
    $row['sdate'] = date("F d, Y h:i A",strtotime($row['start_datetime']));
    $row['edate'] = date("F d, Y h:i A",strtotime($row['end_datetime']));
    $sched_res[$row['id']] = $row;
}
?>
<?php 
if(isset($conn)) $conn->close();
?>
</body>
<script>
    var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
</script>
<script src="./js/script.js"></script>

</html>