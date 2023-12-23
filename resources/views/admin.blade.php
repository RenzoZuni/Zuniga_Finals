<!DOCTYPE html>
<html lang="en">
<head>
    <style>
          body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	.table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px 0;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {        
		padding-bottom: 15px;
		background: #435d7d;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }    
	/* Custom checkbox */
	.custom-checkbox {
		position: relative;
	}
	.custom-checkbox input[type="checkbox"] {    
		opacity: 0;
		position: absolute;
		margin: 5px 0 0 3px;
		z-index: 9;
	}
	.custom-checkbox label:before{
		width: 18px;
		height: 18px;
	}
	.custom-checkbox label:before {
		content: '';
		margin-right: 10px;
		display: inline-block;
		vertical-align: text-top;
		background: white;
		border: 1px solid #bbb;
		border-radius: 2px;
		box-sizing: border-box;
		z-index: 2;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		content: '';
		position: absolute;
		left: 6px;
		top: 3px;
		width: 6px;
		height: 11px;
		border: solid #000;
		border-width: 0 3px 3px 0;
		transform: inherit;
		z-index: 3;
		transform: rotateZ(45deg);
	}
	.custom-checkbox input[type="checkbox"]:checked + label:before {
		border-color: #03A9F4;
		background: #03A9F4;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		border-color: #fff;
	}
	.custom-checkbox input[type="checkbox"]:disabled + label:before {
		color: #b8b8b8;
		cursor: auto;
		box-shadow: none;
		background: #ddd;
	}
	/* Modal styles */
	.modal .modal-dialog {
		max-width: 400px;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
	}
	.modal .modal-footer {
		background: #ecf0f1;
		border-radius: 0 0 3px 3px;
	}
    .modal .modal-title {
        display: inline-block;
    }
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}	
	.modal form label {
		font-weight: normal;
	}
    </style>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Animals | Admin</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <body>

{{-- accepted  --}}
<div class="container">
	<div class="table-wrapper">
		<div class="table-title">
			<div class="row">
				<div class="col-sm-6">
					<h2>List of <b>Animals</b></h2>
				</div>
				<div class="col-sm-6">
					<form action="{{ route('logout') }}" method="POST">
						@csrf
						<button type="submit" class="btn btn-danger">
							<i class="material-icons">&#xe879;</i> <span>logout</span>
						</button>
					</form>
					<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Animals</span></a>						
				</div>
			</div>
		</div>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					
					<th>Species</th>
					<th>Age</th>
					<th>Color</th>
					<th>Description</th>
					<th>Actions</th>
				</tr>
				<tbody>
					@foreach ($animals as $animal)
    @if ($animal->status == 'accepted')
    <tr>
        <!-- Display the animal data -->
        <td>{{ $animal->species }}</td>
        <td>{{ $animal->age }}</td>
        <td>{{ $animal->color }}</td>
        <td>{{ $animal->description }}</td>
		<td>
			<a href="#editEmployeeModal" class="edit" data-toggle="modal" data-id="{{ $animal->id }}" data-species="{{ $animal->species }}" data-age="{{ $animal->age }}" data-color="{{ $animal->color }}" data-description="{{ $animal->description }}"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>				@method('DELETE')
			<a href="#deleteEmployeeModal" class="delete" data-toggle="modal" data-id="{{ $animal->id }}"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>		</td>
    </tr>
	@endif
	@endforeach
				</tbody>
		</table>
		<div class="clearfix">
			<div class="hint-text">Showing <b>1</b> out of <b>1</b> entries</div>
			<ul class="pagination">
				<li class="page-item disabled"><a href="#">Previous</a></li>
				<li class="page-item"><a href="#" class="page-link">1</a></li>
				
				<li class="page-item"><a href="#" class="page-link">Next</a></li>
			</ul>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="/animals" method="POST">
				@csrf
				<div class="modal-header">						
					<h4 class="modal-title">Add Animals</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Species</label>
						<input type="text" class="form-control" required name="species">
					</div>
					<div class="form-group">
						<label>Age</label>
						<input type="number" class="form-control" required name="age">
					</div>
					<div class="form-group">
						<label>Color</label>
						<textarea class="form-control" required name="color"></textarea>
					</div>
					<div class="form-group">
						<label>Description</label>
						<input type="text" class="form-control" required name="description">
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="editForm" method="POST">
				@csrf
				@method('PUT')
				<div class="modal-header">						
					<h4 class="modal-title">Edit Animals</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Species</label>
						<input type="text" class="form-control" required name="species">
					</div>
					<div class="form-group">
						<label>Age</label>
						<input type="number" class="form-control" required name="age">
					</div>
					<div class="form-group">
						<label>Color</label>
						<textarea class="form-control" required name="color"></textarea>
					</div>
					<div class="form-group">
						<label>Description</label>
						<input type="text" class="form-control" required name="description">
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="deleteForm" method="POST">
				@csrf
				@method('DELETE')
				<div class="modal-header">						
					<h4 class="modal-title">Delete Animal</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>
{{-- end of accepted --}}

    
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manage <b>Animals</b></h2>
					</div>
					
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						
                        <th>Species</th>
                        <th>Age</th>
						<th>Color</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
					@foreach ($animals as $animal)
    @if ($animal->status == 'pending')
					<tr>
						<!-- Display the animal data -->
						<td>{{ $animal->species }}</td>
						<td>{{ $animal->age }}</td>
						<td>{{ $animal->color }}</td>
						<td>{{ $animal->description }}</td>
						<td>
							<!-- Accept action -->
							<form action="/animals/{{ $animal->id }}/accept" method="POST" style="display: inline-block;">
								@csrf
								@method('PUT')
								<button type="submit" style="background-color: green; color: white;">Accept</button>
							</form>
							<!-- Reject action -->
							<form action="/animals/{{ $animal->id }}/reject" method="POST" style="display: inline-block;">
								@csrf
								@method('DELETE')
								<button type="submit" style="background-color: red; color: white;">Reject</button>
							</form>
						</td>
					</tr>
					@endif
					@endforeach
                </tbody>
            </table>
			<div class="clearfix">
                <div class="hint-text">Showing <b>1</b> out of <b>1</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
	<!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Add Animals</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Species</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Age</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Color</label>
							<textarea class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label>Description</label>
							<input type="text" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Edit Animals</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Species</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Age</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Color</label>
							<textarea class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label>Description</label>
							<input type="text" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Delete Animal</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>

<script>
	$(document).ready(function(){
		// Activate tooltip
		$('[data-toggle="tooltip"]').tooltip();
		
		// Select/Deselect checkboxes
		var checkbox = $('table tbody input[type="checkbox"]');
		$("#selectAll").click(function(){
			if(this.checked){
				checkbox.each(function(){
					this.checked = true;                        
				});
			} else{
				checkbox.each(function(){
					this.checked = false;                        
				});
			} 
		});
		checkbox.click(function(){
			if(!this.checked){
				$("#selectAll").prop("checked", false);
			}
		});
	
		// When the edit button is clicked...
		$('.edit').on('click', function(){
			// Get the animal data from the button's data attributes
			var id = $(this).data('id');
			var species = $(this).data('species');
			var age = $(this).data('age');
			var color = $(this).data('color');
			var description = $(this).data('description');
	
			// Update the form action
			var url = '/animals/' + id;
			$('#editForm').attr('action', url);
	
			// Update the input values
			$('#editForm input[name="species"]').val(species);
			$('#editForm input[name="age"]').val(age);
			$('#editForm textarea[name="color"]').val(color);
			$('#editForm input[name="description"]').val(description);
		});
	
		// When the delete button is clicked...
		$('.delete').on('click', function(){
			// Get the animal ID from the button's data attributes
			var id = $(this).data('id');
	
			// Update the form action
			var url = '/animals/' + id;
			$('#deleteForm').attr('action', url);
		});
	});
	</script>