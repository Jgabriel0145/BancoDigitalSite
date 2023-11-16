<style>
    *
    {
        margin: 0;
        padding: 0;
        border: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    html
    {
        width: 100%;
        height: 100%;
        min-width: 800px;
    }

    body
    {
        background-color: #FFFFFF;
        width: 100%;
        height: 100%;
        min-width: 800px;
    }

    .navbar
    {
        display: grid;
        grid-template-columns: 1fr 1fr;
        background-color: #FC7C04;
        padding: 1%;
    }

    .navbar img
    {
        width: 8%;
        min-width: 100px;
    }

    .navbar-botoes
    {
        display: flex;
        flex-direction: row;
        justify-self: right;
    }

    .navbar-botoes button
    {
        width: 125px;
        padding: 1%;
        margin: 1%;
        font-size: 1.1em;
        border-radius: 5px;
        background-color: rgba(0, 0, 0, 0);
        font-weight: bold;
        color: #FFFFFF;
        text-decoration: underline;
    }

    .navbar-botoes button:hover
    {
        cursor: pointer;
    }
    
    .divisor
    {
        width: 100%;
        height: 1px;
        background-color: #FFFFFF;
    }

    .container
    {
        width: 100%;
        display: grid;
        grid-template-areas: 
        "esq1 centro1 dir1"
        "esq2 centro2 dir2"
        "esq3 centro3 dir3";
        grid-template-rows: 1fr 1fr 1fr;
        grid-template-columns: 1fr 1fr 1fr;
        height: 91.8%;
        min-width: 800px;
        background-image: url('/View/Assets/Img/PagInicialPropaganda/celular.png');
        background-size: cover;
    }

    .container .container-texto
    {
        width: 100%;
        grid-column: dir1;
        grid-row: dir1 / dir3;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgba(252, 124, 4, 1);
        height: 100%;
    }

    .container .container-texto #txt-principal
    {
        color: #FFFFFF;
        text-align: center;
        font-size: 2em;
    }

    .container .container-texto #txt-principal h2
    {
        text-decoration: underline;
    }

    .container2 {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 1fr 1fr 1fr;
        height: auto;
        background-color: #FC7C04;
        padding: 20px;
        min-width: 800px;
    }

    .container2 p {
        font-size: 1.5em;
        line-height: 1.6;
        margin-bottom: 20px;
        color: #000000;
        border: 1px solid #FFFFFF;
        padding: 10px;
        text-align: center;
        margin: 5px;
        border-radius: 10px;
        background-color: #FFFFFF;
    }

    footer 
    {
        background-color: #333333;
        color: #FFFFFF;
        padding: 10px;
        text-align: center;
    }
</style>