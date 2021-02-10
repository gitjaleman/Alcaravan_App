<br>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header ui-sortable-handle">
                        <h3 class="card-title"> <i class="nav-icon fa fa-calculator"></i> Gastos</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-default btn-sm" onclick="listar()" style="display: inline-block;">
                            <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                Nuevo
                            </button>

                            <button type="button" class="btn btn-default btn-sm" onclick="listar()" style="display: inline-block;">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>
                                Filtro
                            </button>
                        </div>
                    </div>
                    <div id="main_box" class="card-body" style="min-height: 350px;"></div>
                    <div id="loader_box" class="overlay "><i class="fa fa-3x fa-circle-o-notch fa-spin"></i></div>
                </div>
            </div>
        </div>
    </div>
</section>