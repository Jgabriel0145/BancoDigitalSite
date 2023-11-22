<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Correntista</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>

    <?php include VIEWS . 'Assets/css/Inicio/inicio.php'; ?>
</head>
<body>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> &nbsp Área do correntista</div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> 
                <a href="#" class="nav_logo"> 
                    <img src="/View/Assets/Img/Geral/logo_icone_branca.png" class="img-sidebar"
                        id="logo_sidebar">
                </a>

                <div class="nav_list"> 
                    <a href="#" class="nav_link active"> 
                        <i class='bx bx-grid-alt nav_icon'></i> 
                        <span class="nav_name">Área do correntista</span> 
                    </a> 
                    <!--
                    <a href="#" class="nav_link"> 
                        <i class='bx bx-user nav_icon'></i> 
                        <span class="nav_name">Users</span> 
                    </a> 

                    <a href="#" class="nav_link">     
                        <i class='bx bx-message-square-detail nav_icon'></i> 
                        <span class="nav_name">Messages</span> 
                    </a> 
                    
                    <a href="#" class="nav_link"> 
                        <i class='bx bx-bookmark nav_icon'></i> 
                        <span class="nav_name">Bookmark</span> 
                    </a> 
                    
                    <a href="#" class="nav_link">
                         <i class='bx bx-folder nav_icon'></i> 
                         <span class="nav_name">Files</span> 
                    </a> 
                    
                    <a href="#" class="nav_link">
                         <i class='bx bx-bar-chart-alt-2 nav_icon'></i> 
                         <span class="nav_name">Stats</span> 
                    </a> -->
                </div>
            </div> 
            
            <a href="/login/logout" class="nav_link">
                 <i class='bx bx-log-out nav_icon'></i> 
                 <span class="nav_name">Logout</span> 
            </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 container-main">
        <h1>Bem-vindo <?= $_SESSION['dados_usuario']['nome'] ?></h1>

        <div class="table-responsive">
            <table class="table table-fixed">
                <thead>
                    <tr>
                        <th scope="col" class="col-3">Número da Conta</th>
                        <th scope="col" class="col-3">Tipo</th>
                        <th scope="col" class="col-3">Saldo</th>
                        <th scope="col" class="col-3">Limite</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php foreach($model->rows_contas as $conta): ?>
                        <tr>
                            <th scope="row" class="col-3"><?= $conta->id ?></th>
                            <?php if ($conta->tipo == 'C'): ?>
                                <td class="col-3">Corrente</td>
                            <?php else: ?>
                                <td class="col-3">Poupança</td>
                            <?php endif; ?>
                            <td class="col-3"><?= $conta->saldo ?></td>
                            <td class="col-3"><?= $conta->limite ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <!--Container Main end-->

    <script>
        document.addEventListener("DOMContentLoaded", function(event) 
        {
            const showNavbar = (toggleId, navId, bodyId, headerId, logosidebarId) =>{
            const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId),
            logosidebar = document.getElementById(logosidebarId)
        
            // Validate that all variables exist
            if(toggle && nav && bodypd && headerpd)
            {
                toggle.addEventListener('click', ()=>{
                // show navbar
                    nav.classList.toggle('show')
                    // change icon
                    toggle.classList.toggle('bx-x')
                    // add padding to body
                    bodypd.classList.toggle('body-pd')
                    // add padding to header
                    headerpd.classList.toggle('body-pd')

                    if (logosidebar.getAttribute('src') == '/View/Assets/Img/Geral/logo.png')
                    {
                        logosidebar.setAttribute('src', '/View/Assets/Img/Geral/logo_icone_branca.png');
                    } 
                    else if (logosidebar.getAttribute('src') == '/View/Assets/Img/Geral/logo_icone_branca.png')
                    {
                        logosidebar.setAttribute('src', '/View/Assets/Img/Geral/logo.png');
                    }
                    
                })
            }
        }
        
        showNavbar('header-toggle','nav-bar','body-pd','header','logo_sidebar')
        
        /*===== LINK ACTIVE =====*/
        const linkColor = document.querySelectorAll('.nav_link')
        
        function colorLink()
        {
            if(linkColor)
            {
                linkColor.forEach(l=> l.classList.remove('active'))
                this.classList.add('active')
            }
        }

        linkColor.forEach(l=> l.addEventListener('click', colorLink))
            // Your code to run since DOM is loaded and ready
        });
    </script>
    
</body>
</html>