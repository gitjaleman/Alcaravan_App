<br>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header ui-sortable-handle">
                        <h3 class="card-title"> <i class="nav-icon fa fa-money"></i> Pagos</h3>
                        <div class="card-tools" >
                            <form action="" style="max-width: 200px; display: inline-block;">
                                <div class="input-group mb-3 input-group-sm" >
                                    <input type="text" class="form-control form-sm">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            </form>

                            <button type="button" class="btn btn-default btn-sm" onclick="listar()" style="display: inline-block;">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>
                                Filtro
                            </button>
                        </div>
                    </div>
                    <div id="main_box" class="card-body" style="min-height: 350px;"></div>
                    <div id="loader_box" class="overlay " ><i class="fa fa-3x fa-circle-o-notch fa-spin"></i></div>
                </div>
            </div>
        </div>
    </div>
</section>