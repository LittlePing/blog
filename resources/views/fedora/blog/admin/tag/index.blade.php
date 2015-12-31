@extends('fedora.blog.admin.layout')

@section('content')
	<div class="container-fluid">
		<div class="row page-title-row">
			<div class="col-md-7">
				<h3>Tags <small>>>List</small></h3>
			</div>
			<div class="col-md-5 text-right">
				<a href="/admin/tag/create" class="btn btn-success btn-md">
					<i class="fa fa-plus-circle">New Tag</i>
				</a>
			</div>
		</div>
		
		<div class="row">
			<div class="class-md-12">
				@include('fedora.blog.admin.partials.errors')
				@include('fedora.blog.admin.partials.success')
			</div>
			<table id="tags-table" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Tag</th>
						<th>Title</th>
						<th class="hidden-sm">Subtitle</th>
						<th class="hidden-md">Page Image</th>
						<th class="hidden-md">Meta Description</th>
						<th class="hidden-md">Layouot</th>
						<th class="hidden-sm">Direction</th>
						<th data-sortable="false">Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($tags as $tag)
						<tr>
							<td>{{$tag->tag}}</td>
							<td>{{$tag->title}}</td>
							<td class="hidden-sm">{{$tag->subtitle}}</td>
							<td class="hidden-md">{{$tag->page_image}}</td>
							<td class="hidden-md">{{$tag->meta_description}}</td>
							<td class="hidden-md">{{$tag->layout}}</td>
							<td class="hidden-sm">
								@if ($tag->reverse_direction)
									Reverse
								@else
									Normal
								@endif
							</td>
							<td>
								<a href="/admin/tag/{{$tag-id}}/edit" class="btn btn-xs btn-info">
									<i class="fa fa-edit"></i>Edit
								</a>
							</td>
						</tr>
						@endforeach
				</tbody>
			</table>
		</div>
	</div>
	@stop

	@section('scripts')
		<script>
			$(function(){
				$("#tags-table").DataTable({

				});
			});
		</script>
		@stop