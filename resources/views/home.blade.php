@extends('layouts.app')

@section('content')
    <div class="row">      
        <div class="col-md-12">                       
            <div class="box box-danger" >
                <div class="box-header with-border">
                    <h3 class="box-title">Cheque Payment</h3>
                </div>
                <div class="box-body">
                    <form id="example-form" action="#">
                        <div>
                            <h3>Upload File</h3>
                            <section>
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <input type="file" id="exampleInputFile" name="file">
                
                                    <p class="help-block">Example block-level help text here.</p>
                                </div>
                                <p>(*) Mandatory</p>
                            </section>
                            <h3>Datails</h3>
                            <section>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <label for="name">Bank *</label>
                                            <select class="form-control" name="bank" id="bank" style="width: 100%;">
                                                <option selected="selected" value="Bangkok">Bangkok Bank</option>
                                                <option value="Krungthai">Krungthai Bank</option>
                                                <option value="Siam Commercial">Siam Commercial Bank</option>
                                                <option value="Kasikorn">Kasikorn Bank</option>
                                                <option value="Bank of Ayudhya">Bank of Ayudhya (Krungsri)</option>
                                                <option value="Thanachart">Thanachart Bank</option>
                                                <option value="TMB">TMB Bank</option>
                                                <option value="Kiatnakin">Kiatnakin Bank</option>
                                                <option value="CIMB">CIMB Thai </option>
                                                <option value="Standard Chartered">Standard Chartered Bank</option>
                                                <option value="United Overseas">United Overseas Bank</option>
                                                <option value="Tisco">Tisco Bank</option>
                                                <option value="ICBC">ICBC Bank</option>
                                                <option value="Mega ICB">Mega ICB Bank</option>
                                            </select>
                                        </div>
                                        <p>(*) Mandatory</p>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')   
<link rel="stylesheet" href="{{ URL::asset('adminlte/css/select2.min.css') }}"/>
<link href="{{ URL::asset('adminlte/plugins/jquery-steps/jquery.steps.css') }}" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="{{ URL::asset('adminlte/plugins/jquery-steps/jquery.steps.js') }}"></script>
<script src="{{ URL::asset('adminlte/js/app.min.js') }}"></script> 
<script src="{{ URL::asset('adminlte/js/main.js') }}"></script>
<script src="{{ URL::asset('adminlte/js/select2.full.min.js') }}"></script>
<script src="{{ URL::asset('adminlte/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ URL::asset('adminlte/plugins/fastclick/fastclick.js') }}"></script>

<script>
    $(function() {

        var form = $("#example-form");
        form.validate({
            errorPlacement: function errorPlacement(error, element) { element.before(error); },
            rules: {
                confirm: {
                    equalTo: "#password"
                }
            }
        });
        form.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function (event, currentIndex, newIndex)
            {
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid();
            },
            onFinishing: function (event, currentIndex)
            {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished: function (event, currentIndex)
            {
                alert("Submitted!");
            }
        });
    });

</script>
@endsection

