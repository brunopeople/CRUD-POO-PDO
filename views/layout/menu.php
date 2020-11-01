<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Navegação</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
                <i class="fa fa-dashboard fa-fw"></i> Dasboard
            </a>
        </div>]

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <?=$_SESSION['administrador']['nome'] ?>
                    <i class="fa fa-user fa-fw"></i><i class="fa fa-caret-down"></i>
                    <i class="divider"></li>
                    <li><a href="index.php?acao-logout"><i class="fa fa-sign-out fa-fw"></i>Deslogar</a>
            </li>
        </ul>
        <!-- /.dropdown-user--> 
    </nav>
</div>