<style>
    *
    {
        margin: 0;
        padding: 0;
        border: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    body
    {
        background-color: #FFFFFF;
        min-width: 500px;   
    }
    /*
    .navbar
    {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        width: 98%;
        padding: 1%;
        background-color: #FC7C04;
        min-width: 500px;
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
    }*/

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

</style>