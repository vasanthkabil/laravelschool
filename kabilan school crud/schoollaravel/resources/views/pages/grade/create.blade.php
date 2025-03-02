<x-layout>
    <div style="margin: 20px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/grades">Grades</a></li>
              <li class="breadcrumb-item active" aria-current="page">Create Grade</li>
            </ol>
          </nav>
    </div>
    <div style="display: flex;align-items: center;justify-content: center;width:100%;">
            <div class="card mb-4" style="margin-left: 10px;box-shadow: 1px 1px 20px #111111 ;border-radius: 20px;width:100%;margin: 20px">
                <div class="card-header" style="height: 100px;padding: 10px">                    
                    <h1 class="mt-4" style="margin-left: 10px;color: #f7ba2b; text-align: center;">Create Grade</h1>
                </div>
                <div class="card-body" style="margin: 20px;display: flex; align-items: center;justify-content: center">                                 
                    <form action="/grades" method="POST">
                        @csrf
                        <label for="grade_name"><b>Grade Name&emsp;&emsp;&emsp;</b></label>
                        <input  type="text" id="grade_name" name="grade_name" class="text-box">
                        <br><br>
                        <label for="grade_group"><b>Grade Group</b></label>
                        <input  type="text" id="grade_group" name="grade_group" class="text-box">
                        <br><br>
                        <label for="grade_order"><b>Grade Order</b></label>
                        <input  type="text" id="grade_order" name="grade_order" class="text-box">
                        <br><br>
                        <label for="grade_color"><b>Grade Color</b></label>
                        <input  type="text" id="grade_color" name="grade_color" class="text-box">
                        <br><br>
                        <input  type="submit" value="Save" class="btn-submit">
                    </form>                                             
                </div>
            </div>
        </div>    
</x-layout>