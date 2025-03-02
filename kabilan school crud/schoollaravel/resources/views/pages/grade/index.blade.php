<x-layout>
    @if (session('success'))
        <div class="alert alert-success" role="alert" style="margin: 20px;background-color: rgba(0, 255, 0, 0.1);border-color: rgba(0, 255, 0, 0.755) ;color: rgba(0, 255, 0, 0.755);height:60px">
            <p>{{ session('success')}}</p>
        </div>              
    @endif
    <div style="display: flex">
        <div class="col-6 text-start"><h1 class="mt-4" style="margin-left: 20px;color: #f7ba2b">Grades</h1></div>      
        <div  class="col-6 text-end" style="padding: 20px"><a href="{{url("/grades/create")}}" type="button" class="btn btn-primary" style="background-color:#1bb350; border:#1bb350"><i class="bi bi-plus-circle" style="width: 12px;color:black">&nbsp;ADD</i></a></div>
    </div>    
    <div class="card mb-4" style="margin: 20px;box-shadow: 1px 1px 20px #111111 ;border-radius: 20px">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>&nbsp;
            Grade List
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table table-striped table-hover table-dark" border="3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>GRADE</th>
                        <th>GROUP</th>
                        <th>ORDER</th>                       
                        <th>COLOR</th>       
                        <th>SHOW</th>
                        <th>EDIT</th>                   
                        <th>DELETE</th>      
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>GRADE</th>
                        <th>GROUP</th>
                        <th>ORDER</th>                       
                        <th>COLOR</th>   
                        <th>SHOW</th>
                        <th>EDIT</th>                   
                        <th>DELETE</th>      
                    </tr>
                </tfoot>
                <tbody>                  
                    @foreach ($grades as $grade)
                    <tr>
                        <td>{{$grade->id}}</td>
                        <td>{{$grade->grade_name}}</td>
                        <td>{{$grade->grade_group}}</td>
                        <td>{{$grade->grade_order}}</td>
                        <td>{{$grade->grade_color}}</td>  
                        <td><div  style="display: flex;align-items: center;justify-content: center"><a href="{{url("/grades/$grade->id")}}" class="btn btn-primary" style="background-color:#15A0A8; border:#15A0A8"  ><i class="bi bi-eye" style="width: 12px;color:black;">&ensp;View</i></a></div></td>                                       
                        <td><div  style="display: flex;align-items: center;justify-content: center"><a href="{{url("/grades/$grade->id/edit")}}" type="button" class="btn btn-primary" style="background-color:#15A0A8; border:#15A0A8"><i class="bi bi-pencil-square" style="width: 12px;color:black"> &nbsp;Edit</i></a></div></td>                                       
                        <td>
                            <form action="/grades/{{$grade->id}}" method="post">
                                @method('delete')
                                @csrf
                                    <button type="submit"  class="btn btn-primary" style="background-color:#15A0A8;border-color:#15A0A8;color:black" onclick="return confirm('Are you sure you want to delete?')"><i class="bi bi-trash"></i>&nbsp; Delete</i></button>
                            </form>
                        </td>                                
                    </tr>  
                    @endforeach                     
                </tbody>
            </table>
            <br>
            {{$grades->links()}}
        </div>
    </div>
</x-layout>