<div class="box box-success box-solid">
    <div class="box-header with-border">
        <div class="row">
            <div class="col-md-12">
                <h3 class="box-title"><span class="glyphicon glyphicon-user"></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Ir al Afiliado"><a href="{{ url('affiliate', $affiliate->id) }}">{!! $affiliate->getTittleName() !!} </a>
                </span></h3>
            </div>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-responsive" style="width:100%;">

                    <tr>
                        <td style="border-top:0px;">
                            <div class="row">
                                <div class="col-md-6">
                                    <strong>Fecha de Ingreso</strong>
                                </div>
                                <div class="col-md-6">
                                    {!! $affiliate->getShortDateEntry() !!}
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table" style="width:100%;">
                    <tr>
                        <td style="border-top:0px;">
                            <div class="row">
                                <div class="col-md-6">
                                    <strong>Cédula de Identidad</strong>
                                </div>
                                <div class="col-md-6">
                                    {!! $affiliate->city_identity_card_id ? $affiliate->identity_card . ' ' . $affiliate->city_identity_card->shortened : $affiliate->identity_card !!}
                                </div>
                            </div>
                            
                        </td>
                    </tr>
                    <tr>
                        <td style="border-top:0px;">
                            <div class="row">
                                <div class="col-md-6">
                                    <strong>Fecha de Vencimiento CI</strong>
                                </div>
                                <div class="col-md-6">
                                    {!! $affiliate->getShortDueDate()!!}
                                </div>
                            </div>  
                            
                        </td>
                    </tr>
                    
                </table>
            </div>
        </div>
    </div>
</div>
