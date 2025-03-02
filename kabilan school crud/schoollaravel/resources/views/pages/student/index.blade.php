<x-layout>    
        @if (session('success'))
        <div class="alert alert-success" role="alert" style="margin: 20px;;background-color: rgba(0, 255, 0, 0.1);border-color: rgba(0, 255, 0, 0.755) ;color: rgba(0, 255, 0, 0.755);height:60px">
            <p>{{ session('success')}}</p>
        </div>              
        @endif
    <div style="display: flex">
        <div class="col-6 text-start"><h1 class="mt-4" style="margin-left: 20px;color: #f7ba2b;display:inline-block">Students</h1></div>      
        <div  class="col-6 text-end" style="padding: 20px"><a href="{{url("/students/create")}}" type="button" class="btn btn-primary" style="background-color:#1bb350; border:#1bb350"><i class="bi bi-person-add"style="width: 12px;color:black">&nbsp;ADD</i></a></div>
    </div>    
    <div class="card mb-4" style="margin: 20px;box-shadow: 1px 1px 20px #111111 ;border-radius: 20px">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>&nbsp;
            Student List
        </div>
        <div class="card-body" >
            <table id="datatablesSimple" class="table table-striped table-hover table-dark" border="2">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>FIRST NAME</th>
                        <th>LAST NAME</th>
                        <th>GRADE</th>   
                        <th>SHOW</th>                     
                        <th>EDIT</th>                     
                        <th>DELETE</th>                     
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>FIRST NAME</th>
                        <th>LAST NAME</th>
                        <th>GRADE</th>   
                        <th>SHOW</th>   
                        <th>EDIT</th>                   
                        <th>DELETE</th>                   
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->first_name}}</td>
                        <td>{{$student->last_name}}</td>
                        <td>{{$student->grade->grade_name}}</td>  
                        <td><div  style="display: flex;align-items: center;justify-content: center"><a href="{{url("/students/$student->id")}}" type="button" class="btn btn-primary" style="background-color:#15A0A8; border:#15A0A8"><i class="bi bi-eye" style="width: 12px;color:black"> &nbsp;View</i></a></div></td>                                       
                        <td><div  style="display: flex;align-items: center;justify-content: center"><a href="{{url("/students/$student->id/edit")}}" type="button" class="btn btn-primary" style="background-color:#15A0A8; border:#15A0A8"><i class="bi bi-pencil-square" style="width: 12px;color:black"> &nbsp;Edit</i></a></div></td>                                       
                        <td>
                            {{-- <div  style="display: flex;align-items: center;justify-content: center"> --}}
                                <form action="/students/{{$student->id}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit"  class="btn btn-primary" style="background-color:#15A0A8;border-color:#15A0A8;color:black" onclick="return confirm('Are you sure you want to delete?')"><i class="bi bi-trash"></i>&nbsp; Delete</i></button>
                                </form>
                            {{-- </div> --}}
                        </td>     

                    </tr>  
                    @endforeach                                                      
                </tbody>
            </table>
            <br>
            {{$students->links()}}
        </div>
    </div>
</x-layout>