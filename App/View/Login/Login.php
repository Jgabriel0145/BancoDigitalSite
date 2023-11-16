<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inter | Login</title>
    <link rel="icon" href="/View/Assets/Img/Geral/logo_icone.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/inputmask@5.0.3/dist/jquery.inputmask.min.js"></script>
</head>
<body>
    <section class="vh-100" style="background-color: #FC7C04;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                    <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="/View/Assets/Img/Login/celular.png" style="height: 90%;"
                        alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                    </div>
                    <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">

                        <form action="/login/auth" method="post">

                        <div class="d-flex align-items-center mb-3 pb-1">
                            <i class="fas fa-cubes fa-2x me-3" style="color: #FC7C04;"></i>
                            <span class="h1 fw-bold mb-0">Login</span>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="text" id="form2Example17" class="form-control form-control-lg" name="cpf" maxlength="14"/>
                            <label class="form-label" for="form2Example17">CPF</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="form2Example27" class="form-control form-control-lg" name="senha"/>
                            <label class="form-label" for="form2Example27">Senha</label>
                        </div>

                        <div class="pt-1 mb-4">
                            <button class="btn btn-lg btn-block" type="submit" style="background-color: #FC7C04; color: #FFFFFF;">Login</button>
                        </div>

                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Não possui conta? <a href="/correntista/cadastro"
                            style="color: #393f81;">Cadastre-se</a></p>
                        </form>

                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>