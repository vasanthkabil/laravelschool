<x-layout>
    @if (session('success'))
        <div class="alert alert-success" role="alert" style="margin: 20px;;background-color: rgba(0, 255, 0, 0.1);border-color: rgba(0, 255, 0, 0.755) ;color: rgba(0, 255, 0, 0.755);height:60px">
            <p>{{ session('success')}}</p>
        </div>              
    @endif
    <div style="display: flex">
        <div class="col-6 text-start">    <h1 class="mt-4" style="margin-left: 10px;color: #f7ba2b">Subjects</h1></div>      
        <div  class="col-6 text-end" style="padding: 20px"><a href="{{url("/subjects/create")}}" type="button" class="btn btn-primary" style="background-color:#1bb350; border:#1bb350"><i class="bi bi-plus-circle" style="width: 12px;color:black">&nbsp;ADD</i></a></div>
    </div>
    <div class="card mb-4" style="margin: 20px;box-shadow: 1px 1px 20px #111111 ;border-radius: 20px">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>&nbsp;
            Subject List
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table table-striped table-hover table-dark" border="2">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>SUBJECT</th>
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
                        <th>SUBJECT</th>
                        <th>ORDER</th>
                        <th>COLOR</th>   
                        <th>SHOW</th>
                        <th>EDIT</th>                   
                        <th>DELETE</th>      
                    </tr>
                </tfoot>
                <tbody>                  
                    @foreach ($subjects as $subject)
                    <tr>
                        <td>{{$subject->id}}</td>
                        <td>{{$subject->subject_name}}</td>
                        <td>{{$subject->subject_order}}</td>
                        <td>{{$subject->color}}</td>           
                        <td><div  style="display: flex;align-items: center;justify-content: center"><a href="{{url("/subjects/$subject->id")}}" type="button" class="btn btn-primary" style="background-color:#15A0A8; border:#15A0A8"><i class="bi bi-eye" style="width: 12px;color:black"> View</i></a></div></td>                                     
                        <td><div  style="display: flex;align-items: center;justify-content: center"><a href="{{url("/subjects/$subject->id/edit")}}" type="button" class="btn btn-primary" style="background-color:#15A0A8; border:#15A0A8"><i class="bi bi-pencil-square" style="width: 12px;color:black"> &nbsp;Edit</i></a></div></td>                                       
                        <td>
                            <form action="/subjects/{{$subject->id}}" method="post">
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
            {{$subjects->links()}}

        </div>
    </div>
</x-layout>