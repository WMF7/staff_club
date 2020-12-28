@extends("admin/layout")


@section("title")
    <title>{{ $mod->fullname }} -  {{ config("app.name") }} </title>
@endsection



@section("content")

    <div class="card">

	
	<div class="card-header bg-primary text-center">
	    <p class="h3">
		عرض مشرف
	    </p>
	</div>
	
	<div class="card-body clearfix">
	    
	    <a class="btn btn-warning float-left" href="/admin/mods/edit/{{$mod->id }}">
		تعديل
		<i class="fa fa-edit"></i>
	    </a>
	    
	    <table class="table table-borderless">
		<tr>
		    <td>الاسم الكامل</td>
		    <td> {{ $mod->fullname }}</td>
		</tr>

		<tr>
		    <td>الرقم القومي</td>
		    <td>{{ $mod->nat_id }}</td>
		</tr>

		<tr>
		    <td>الصورة الشخصية</td>
		    <td><img alt="" src="/uploads/{{ $mod->pic }}"/></td>
		</tr>

		
	    </table>
	</div>
	
	
    </div>
    
@endsection
