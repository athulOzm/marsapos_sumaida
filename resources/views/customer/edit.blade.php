@extends('layout.main') @section('content')
@if(session()->has('not_permitted'))
  <div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('not_permitted') }}</div> 
@endif
<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>{{trans('file.Update Customer')}}</h4>
                    </div>
                    <div class="card-body">
                        <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                        {!! Form::open(['route' => ['customer.update',$lims_customer_data->id], 'method' => 'put', 'files' => true]) !!}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="hidden" name="customer_group" value="{{$lims_customer_data->customer_group_id}}">
                                    <label>{{trans('file.Customer Group')}} *</strong> </label>
                                    <select required class="form-control selectpicker" name="customer_group_id">
                                        @foreach($lims_customer_group_all as $customer_group)
                                            <option value="{{$customer_group->id}}">{{$customer_group->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('file.name')}} *</strong> </label>
                                    <input type="text" name="customer_name" value="{{$lims_customer_data->name}}" required class="form-control">
                                </div>
                            </div>
					 		<div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('file.Phone Number')}} *</label>
                                    <input type="text" name="phone_number" required value="{{$lims_customer_data->phone_number}}" class="form-control">
                                    @if($errors->has('phone_number'))
                                    <span>
                                       <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('file.Email')}}</label>
                                    <input type="email" name="email" value="{{$lims_customer_data->email}}" class="form-control">
                                </div>
                            </div>
						<div class="col-md-12"><h4>Customer Measurements</h4></div>
							 <div class="col-md-3">
                                <div class="form-group">
                                    <label>Shoulder</label>
                                    <input type="text" name="measure_1" value="{{$lims_customer_measurements_all->measure_1}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Bass</label>
                                    <input type="text" name="measure_2" value="{{$lims_customer_measurements_all->measure_2}}" class="form-control">
                                </div>
                            </div>
					 		<div class="col-md-3">
                                <div class="form-group">
                                    <label>West</label>
                                    <input type="text" name="measure_3" value="{{$lims_customer_measurements_all->measure_3}}" class="form-control">
                                </div>
                            </div>
							<div class="col-md-3">
                                <div class="form-group">
                                    <label>Hips</label>
                                    <input type="text" name="measure_4" value="{{$lims_customer_measurements_all->measure_4}}" class="form-control">
                                </div>
                            </div>
							<div class="col-md-3">
                                <div class="form-group">
                                    <label>AI</label>
                                    <input type="text" name="measure_5" value="{{$lims_customer_measurements_all->measure_5}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>SI</label>
                                    <input type="text" name="measure_6" value="{{$lims_customer_measurements_all->measure_6}}" class="form-control">
                                </div>
                            </div>
					 		<div class="col-md-3">
                                <div class="form-group">
                                    <label>Nick</label>
                                    <input type="text" name="measure_7" value="{{$lims_customer_measurements_all->measure_7}}" class="form-control">
                                </div>
                            </div>
							<div class="col-md-3">
                                <div class="form-group">
                                    <label>F</label>
                                    <input type="text" name="measure_8" value="{{$lims_customer_measurements_all->measure_8}}" class="form-control">
                                </div>
                            </div>
							<div class="col-md-3">
                                <div class="form-group">
                                    <label>FI</label>
                                    <input type="text" name="measure_9" value="{{$lims_customer_measurements_all->measure_9}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Flo</label>
                                    <input type="text" name="measure_10" value="{{$lims_customer_measurements_all->measure_10}}" class="form-control">
                                </div>
                            </div>
					 		<div class="col-md-3">
                                <div class="form-group">
                                    <label>Trousers</label>
                                    <input type="text" name="measure_11" value="{{$lims_customer_measurements_all->measure_11}}" class="form-control">
                                </div>
                            </div>
							<div class="col-md-3">
                                <div class="form-group">
                                    <label>Hips</label>
                                    <input type="text" name="measure_12" value="{{$lims_customer_measurements_all->measure_12}}" class="form-control">
                                </div>
                            </div>
					 		<div class="col-md-3">
                                <div class="form-group">
                                    <label>Round Half</label>
                                    <input type="text" name="measure_13" value="{{$lims_customer_measurements_all->measure_13}}" class="form-control">
                                </div>
                            </div>
					 		<div class="col-md-3">
                                <div class="form-group">
                                    <label>Round Mid</label>
                                    <input type="text" name="measure_14" value="{{$lims_customer_measurements_all->measure_14}}" class="form-control">
                                </div>
                            </div>
							<div class="col-md-3">
                                <div class="form-group">
                                    <label>Round Foot</label>
                                    <input type="text" name="measure_15" value="{{$lims_customer_measurements_all->measure_15}}" class="form-control">
                                </div>
                            </div>
							<div class="col-md-12">
                                <div class="form-group mt-3">
									<label>Notes</label>
                                    <textarea class="form-control" name="measure_notes">{{$lims_customer_measurements_all->measure_notes}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mt-3">
                                    <input type="submit" value="{{trans('file.submit')}}" class="btn btn-primary">
                                </div>
                            </div>
					    
                        </div>
                        {!! Form::close() !!}
				 				<div>
                                  <td><button class="btn btn-primary" data-id="{{$lims_customer_measurements_all->customer_id}}" id="submit-button"><i class="dripicons-print"></i> {{trans('file.Print')}}</button></td>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <div id="print-barcode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
	    <div role="document" class="modal-dialog">
	        <div class="modal-content">
		        <div class="modal-header">
		          <h5 id="modal_header" class="modal-title">Customer Measurements</h5>&nbsp;&nbsp;
		          <button id="print-btn" type="button" class="btn btn-default btn-sm"><i class="fa fa-print"></i> {{trans('file.Print')}}</button>
		          <button type="button" id="close-btn" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">??</span></button>
		        </div>
		        <div class="modal-body">
	        		<div id="label-content">
	        		</div>
		        </div>
	        </div>
	    </div>
    </div>
</section>

<script type="text/javascript">

    $("ul#people").siblings('a').attr('aria-expanded','true');
    $("ul#people").addClass("show");

    $(".user-input").hide();

    $('input[name="user"]').on('change', function() {
        if ($(this).is(':checked')) {
            $('.user-input').show(300);
            $('input[name="name"]').prop('required',true);
            $('input[name="password"]').prop('required',true);
        }
        else{
            $('.user-input').hide(300);
            $('input[name="name"]').prop('required',false);
            $('input[name="password"]').prop('required',false);
        }
    });
        
    var customer_group = $("input[name='customer_group']").val();
    $('select[name=customer_group_id]').val(customer_group);
	

$("#submit-button").on("click", function(event){
		var customer_name = [];
		var phone_number = [];
		var measure_1 = [];var measure_2 = [];var measure_3 = [];var measure_4 = [];var measure_5 = [];
		var measure_6 = [];var measure_7 = [];var measure_8 = [];var measure_9 = [];var measure_10 = [];
		var measure_11 = [];var measure_12 = [];var measure_13 = [];var measure_14 = [];var measure_15 = [];
		var measure_notes = [];
		customer_name.push(<?php echo json_encode($lims_customer_data->name) ?>);
		phone_number.push(<?php echo json_encode($lims_customer_data->phone_number) ?>);
		measure_1.push(<?php echo json_encode($lims_customer_measurements_all->measure_1) ?>);
		measure_2.push(<?php echo json_encode($lims_customer_measurements_all->measure_2) ?>);
		measure_3.push(<?php echo json_encode($lims_customer_measurements_all->measure_3) ?>);
		measure_4.push(<?php echo json_encode($lims_customer_measurements_all->measure_4) ?>);
		measure_5.push(<?php echo json_encode($lims_customer_measurements_all->measure_5) ?>);
		measure_6.push(<?php echo json_encode($lims_customer_measurements_all->measure_6) ?>);
		measure_7.push(<?php echo json_encode($lims_customer_measurements_all->measure_7) ?>);
		measure_8.push(<?php echo json_encode($lims_customer_measurements_all->measure_8) ?>);
		measure_9.push(<?php echo json_encode($lims_customer_measurements_all->measure_9) ?>);
		measure_10.push(<?php echo json_encode($lims_customer_measurements_all->measure_10) ?>);
		measure_11.push(<?php echo json_encode($lims_customer_measurements_all->measure_11) ?>);
		measure_12.push(<?php echo json_encode($lims_customer_measurements_all->measure_12) ?>);
		measure_13.push(<?php echo json_encode($lims_customer_measurements_all->measure_13) ?>);
		measure_14.push(<?php echo json_encode($lims_customer_measurements_all->measure_14) ?>);
		measure_15.push(<?php echo json_encode($lims_customer_measurements_all->measure_15) ?>);
		measure_notes.push(<?php echo json_encode($lims_customer_measurements_all->measure_notes) ?>);
		
    
			
	var htmltext = '<table class="barcodelist" style="width: 100%" cellpadding="5px" cellspacing="10px" >';
		htmltext +='<tr style="width:100%;"><td>';
		htmltext += '<strong>Customer Name: </strong>'+customer_name +'</td><td><strong>Phone Number: </strong>'+phone_number+'</td></tr>';
		htmltext += '<tr><td><strong>Shoulder: </strong>'+measure_1+ '</td><td><strong>Bass: </strong>'+measure_2+'</td><td><strong>West: 	 </strong>'+measure_3+'</td><td><strong>Hips: </strong>'+measure_4+'</td></tr>';
		htmltext += '<tr><td><strong>AI: </strong>'+measure_5+ '</td><td><strong>SI: </strong>'+measure_6+'</td><td><strong>Nick: 	 </strong>'+measure_7+'</td><td><strong>F: </strong>'+measure_8+'</td></tr>';
		htmltext += '<tr><td><strong>FI: </strong>'+measure_9+ '</td><td><strong>FIo: </strong>'+measure_10+'</td><td><strong>Trousers: 	 </strong>'+measure_11+'</td><td><strong>Hips: 	 </strong>'+measure_12+'</td></tr>';
		htmltext += '<tr><td><strong>Round Half: </strong>'+measure_13+ '</td><td><strong>Round Mid: </strong>'+measure_14+'</td><td><strong>Round Foot: </strong>'+measure_15+'</td><td></td></tr>';
		htmltext += '<tr><td><strong>Notes: </strong>'+measure_notes+'</td></tr>';
        htmltext += '</table">';
		$('#label-content').html(htmltext);
		$('#print-barcode').modal('show');
	});

	$("#print-btn").on("click", function(){
          var divToPrint=document.getElementById('print-barcode');
          var newWin=window.open('','Print-Window');
          newWin.document.open();
          newWin.document.write('<style type="text/css">@media print { #modal_header { display: none } #print-btn { display: none } #close-btn { display: none } } table.barcodelist { page-break-inside:auto } table.barcodelist tr { height:25px; width: 38px; page-break-inside:avoid; page-break-after:auto }</style><body onload="window.print()">'+divToPrint.innerHTML+'</body>');
          newWin.document.close();
          setTimeout(function(){newWin.close();},10);
    });
</script>
@endsection