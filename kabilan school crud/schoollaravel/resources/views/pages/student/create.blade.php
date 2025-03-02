<x-layout>
    <div style="margin: 20px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/students">Students</a></li>
              <li class="breadcrumb-item active" aria-current="page">Create Student</li>
            </ol>
          </nav>
    </div>
    <div style="display: flex;align-items: center;justify-content: center;width:100%;">               
        <div class="card mb-4" style="margin-left: 10px;box-shadow: 1px 1px 20px #111111 ;border-radius: 20px;width:100%;margin: 20px">
            <div class="card-header" style="height: 100px;padding: 10px">                    
                <h1 class="mt-4" style="margin-left: 10px;color: #f7ba2b; text-align: center;">Create Student</h1>
            </div>
            <div class="card-body" style="margin: 20px;display: flex; align-items: center;justify-content: center"> 
                <form action="/students" method="POST">
                    @csrf
                    <label for="first_name"><b>First Name&emsp;&emsp;&emsp;</b></label>
                    <input  type="text" id="first_name" name="first_name" class="text-box">
                    <br><br>
                    <label for="last_name"><b>Last Name</b></label>
                    <input  type="text" id="last_name" name="last_name" class="text-box">
                    <br><br>
                    {{-- <label for="grade"><b>Grade</b></label> --}}
                    {{-- <input  type="text" id="grade" name="grade_id" class="text-box"> --}}
                    <label for="grade"><b>Grade</b></label>                  
                        <select name="grade_id" id="grade" class="text-box" style="width: 187PX;height:35px;">
                            @foreach ($grades as $k=>$v)
                                <option value="{{$k}}">{{$v}}</option>
                            @endforeach
                        </select>
                    <br><br>
                    <input  type="submit" value="Save" class="btn-submit">
                </form>                                             
            </div>
        </div>
    </div>   
</x-layout>