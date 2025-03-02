<x-layout>
    <div style="margin: 20px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/subjects">Subjects</a></li>
              <li class="breadcrumb-item active" aria-current="page">Create Subject</li>
            </ol>
        </nav>
    </div>
    <div style="display: flex;align-items: center;justify-content: center;width:100%;">
        <div class="card mb-4" style="margin-left: 10px;box-shadow: 1px 1px 20px #111111 ;border-radius: 20px;width:100%;margin: 20px">
            <div class="card-header" style="height: 100px;padding: 10px">                    
                <h1 class="mt-4" style="margin-left: 10px;color: #f7ba2b; text-align: center;">Create Subject</h1>
            </div>
            <div class="card-body" style="margin: 20px;display: flex; align-items: center;justify-content: center">         
                <form action="/subjects" method="POST">
                    @csrf
                    <label for="subject_name"><b>Name&emsp;&emsp;&emsp;</b></label>
                    <input  type="text" id="subject_name" name="subject_name" class="text-box">
                    <br><br>
                    <label for="subject_order"><b>Order</b></label>
                    <input  type="text" id="subject_order" name="subject_order" class="text-box">
                    <br><br>
                    <label for="subject_color"><b>Color</b></label>
                    <input  type="text" id="subject_color" name="subject_color" class="text-box">
                    <br><br>
                    <input  type="submit" value="Save" class="btn-submit">
                </form>                                             
            </div>
        </div>
    </div>   
</x-layout>