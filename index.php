<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FR Chat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href='css/style.css'>
</head>
<body>
<div class="container">
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card chat-app">
            <!---LISTA DE CONVERSAS--->
            <div id="plist" class="people-list">
                <!--CONFIGURACOES-->
                <div class="col-sm-12 row d-flex justify-content-center">
                    <div class="col-sm-2">
                        <span class="btn"><i class="fa fa-power-off" style="font-size:1.5em;"></i></i></span>
                    </div>
                    <div class="col-sm-2">
                        <span class="btn"><i class="fa fa-gear" style="font-size:1.5em;"></i></span>
                    </div>
                    <div class="col-sm-2">
                        <span class="btn"><i class="fa fa-user-plus" style="font-size:1.5em;"></i></span>
                    </div>
                </div>
                <hr>
                <!--PESQUISAR CONVERSAS-->
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar conversas...">
                </div>
                <!--LISTA-->
                <ul class="list-unstyled chat-list mt-2 mb-0">
                    <li class="clearfix">
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                        <div class="about">
                            <div class="name">Vincent Porter</div>
                            <div class="status"> <i class="fa fa-circle offline"></i> left 7 mins ago </div>                                            
                        </div>
                    </li>
                    <li class="clearfix active">
                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                        <div class="about">
                            <div class="name">Aiden Chavez</div>
                            <div class="status"> <i class="fa fa-circle online"></i> online </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-------------------------------CABECALHO DO CHAT------------------>
            <div class="chat">
                <div class="chat-header clearfix">
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                            </a>
                            <div class="chat-about">
                                <h6 class="m-b-0">Aiden Chavez</h6>
                                <small>Last seen: 2 hours ago</small>
                            </div>
                        </div>
                        <!-- <div class="col-lg-6 hidden-sm text-right">
                            <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="fa fa-camera"></i></a>
                            <a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-image"></i></a>
                            <a href="javascript:void(0);" class="btn btn-outline-info"><i class="fa fa-cogs"></i></a>
                            <a href="javascript:void(0);" class="btn btn-outline-warning"><i class="fa fa-question"></i></a>
                        </div> -->
                    </div>
                </div>
                <!------------------------------MENSAGENS--------------------------->
                <div class="chat-history">
                    <ul class="m-b-0">
                        <!--MENSAGEM DELE-->
                        <li class="clearfix">
                            <div class="message other-message float-right">
                                <p>Hi Aiden, how are you? How is the project coming along?</p>
                                <hr>
                                <p>10:10 AM, Today</p>
                            </div>
                        </li>
                        <!--OUTRA MENSAGEM DELE-->
                        <li class="clearfix">
                            <div class="message other-message float-right">
                                <p>Hi Aiden, how are you? How is the project coming along?</p>
                                <hr>
                                <p>10:10 AM, Today</p>
                            </div>
                        </li>
                        <!--MENSAGEM MINHA-->
                        <li class="clearfix">
                            <div class="message my-message">
                                <p>Project has been already finished and I have results to show you.</p>
                                <hr>
                                <p>10:10 AM, Today</p>
                            </div>
                        </li>
                        <!--OUTRA MENSAGEM MINHA-->                               
                        <li class="clearfix">
                            <div class="message my-message">
                                <p>Project has been already finished and I have results to show you.</p>
                                <hr>
                                <p>10:10 AM, Today</p>
                            </div>
                        </li>
                        <!--FIM DA LISTA DE MENSAGENS-->
                    </ul>
                </div>
                <!------------------------------FIM DAS MENSAGENS--------------------------->
                <div class="chat-message clearfix d-flex">
                    <div class="input-group mb-0">
                        <div class="input-group-prepend">
                            <span class="btn btn-primary rounded-circle input-group-text"><i class="fa fa-image"></i></span>
                        </div>
                        &nbsp;
                        <div class="input-group-prepend">
                            <span class="btn btn-primary rounded-circle input-group-text"><i class="fa fa-send"></i></span>
                        </div>
                        &nbsp;
                        <input type="text" class="form-control rounded-right" placeholder="Mensagem...">                                    
                    </div>
                </div>
                <!--------------------FIM DO CAMPO DE ENVIAR MENSAGENS------------------------>
            </div>
        </div>
    </div>
</div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>