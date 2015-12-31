@extends('fedora.blog.admin.layout')

@section('content')
<div class="container-fluid">
	{{--Top Tool Bar--}}
	<div class="row page-title-row">
		<div class="col-md-6">
			<h3 class="pull-left">Uploads</h3>
			<div class="pull-left">
				<ul class="breadcrumb">
					@foreach ($breadcrumbs as $path => $disp)
					<li><a href="/admin/upload?folder={{$path}}">{{$disp}}</a></li>
					@endforeach
					<li class="active">{{$folderName}}</li>
				</ul>
			</div>
		</div>
	
	<div class="col-md-6 text-right">
		<button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#modal-folder-create">
			<span class="glyphicon glyphicon-plus icon"></span>New Folder
		</button>
		<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#modal-file-upload">
			 <span class="glyphicon glyphicon-upload icon"></span>Upload
		</button>
	</div>	
</div>
	<div class="row">
		<div class="col-md-12">
			@include('fedora.blog.admin.partials.errors')
			@include('fedora.blog.admin.partials.success')

			<table id="upload-table" class="table table-striped table-bordered"> 
				<thead>
					<tr>
						<th>Name</th>
						<th>Type</th>
						<th>Data</th>
						<th>Size</th>
						<th data-sortable="false">Actions</th>
					</tr>
				</thead>
				<tbody>
				{{--sub folder--}}
				@foreach ($subfolders as $path => $name)
					<tr>
						<td>
							<a href="/admin/upload?folder={{$path}}">
								<span class="glyphicon glyphicon-film icon"></span>
								{{$name}}
							</a>
						</td>
						<td>Folder</td>
						<td>-</td>
						<td>-</td>
						<td>
							<button type="button" class="btn btn-xs btn-danger" onclick="delete_folder('{{$name}}')" >
								<span class="glyphicon glyphicon-remove icon"></span>
								Delete
							</button>
						</td>
					</tr>
				@endforeach

			{{--all the files--}}
			@foreach ($files as $file)
				<tr>
					<td>
						<a href="{{$file['webPath']}}">
							@if(is_image($file['mimeType']))
							<span class="glyphicon glyphicon-picture icon"></span>
							@else 
							<span class="glyphicon glyphicon-file icon"></span>
							@endif 
							{{$file['name']}}
						</a>
					</td>
					<td>{{$file['mimeType'] or 'Unknown'}}</td>
					<td>{{$file['modified']->format('j-M-y g:ia')}}</td>
					<td>{{human_filesize($file['size'])}}</td>
					<td>
						<button type="button" class="btn btn-xs btn-danger" onclick="delete_file('{{$file['name']}}')" data-toggle="modal" data-target="#modal-file-delete">
							<span class="glyphicon glyphicon-remove icon"></span>
							Delete
						</button>
						@if(is_image($file['mimeType']))
							<button type="button" class="btn btn-success" onclick="preview_image('{{$file['webPath']}}')" data-toggle="modal" data-target="#modal-image-view">
								<i class="fa fa-eye fa-lg"></i>
								Preview
							</button>
						@endif
					</td>
				</tr>
			@endforeach
				</tbody>
			</table>		
		</div>
	</div>
</div>

@include('fedora.blog.admin.upload._modal')


@stop

@section('scripts')
<script>
	//confirm to delete the file
	function delete_file(name){
		$("#delete-file-name1").html(name);
		$("#delete-file-name2").val(name);
		$("#modal-file-delete").modal("show");
	}

	//confirm to delete the folder
	function delete_folder(name){
		$("#delete-folder-name1").html(name);
		$("#delete-folder-name2").val(name);
		$("#modal-folder-delete").modal("show");
	}


	//preview the image
		function preview_image(path){
			$("$preview_image").attr("src",path);
			$("#modal-image-view").modal("show");
		}

	//initial the data
	
		$(function(){

			$("#uploads-table").DataTable();

		});

</script>


@stop